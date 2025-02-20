<?php
function handle_rmbt_call_to_action_form() {
	global $wpdb;

	if ( ! isset( $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message'], $_POST['rmbt_call_to_action_form_nonce'] ) ) {
		wp_send_json_error( [ 'message' => __( 'Error: Not all fields are filled.', RMBT_TEXT_DOMAIN_THEME ) ] );
		exit;
	}

	if ( ! wp_verify_nonce( $_POST['rmbt_call_to_action_form_nonce'], 'rmbt_call_to_action_form' ) ) {
		wp_send_json_error( [ 'message' => __( 'Error: Invalid nonce (possible CSRF attack).', RMBT_TEXT_DOMAIN_THEME ) ] );
		exit;
	}

	$name = sanitize_text_field( $_POST['name'] );
	$phone = sanitize_text_field( $_POST['phone'] );
	$email = sanitize_email( $_POST['email'] );
	$message = sanitize_textarea_field( $_POST['message'] );

	$to = get_option( 'admin_email' );

	if ( empty( $to ) || ! is_email( $to ) ) {
		wp_send_json_error( [ 'message' => __( 'Error: Invalid admin email.', RMBT_TEXT_DOMAIN_THEME ) ] );
		exit;
	}

	$subject = __( 'New inquiry from the contact form', RMBT_TEXT_DOMAIN_THEME );

	$body = __( 'Name:', RMBT_TEXT_DOMAIN_THEME ) . ' ' . esc_html( $name ) . "\r\n";
	$body .= __( 'Phone:', RMBT_TEXT_DOMAIN_THEME ) . ' ' . esc_html( $phone ) . "\r\n";
	$body .= __( 'Email:', RMBT_TEXT_DOMAIN_THEME ) . ' ' . esc_html( $email ) . "\r\n";
	$body .= __( 'Message:', RMBT_TEXT_DOMAIN_THEME ) . "\r\n" . esc_html( $message ) . "\r\n";

	$headers = [ 
		'Content-Type: text/plain; charset=UTF-8',
		'From: ' . esc_attr__( 'Your Company', RMBT_TEXT_DOMAIN_THEME ) . ' <' . esc_attr( $to ) . '>',
		'Reply-To: ' . esc_attr( $email ),
	];

	$mail_sent = wp_mail( $to, $subject, $body, $headers );

	if ( ! $mail_sent ) {
		error_log( 'Error sending email via wp_mail()' );
		wp_send_json_error( [ 'message' => __( 'Error: Failed to send email.', RMBT_TEXT_DOMAIN_THEME ) ] );
		exit;
	}

	$table_name = $wpdb->prefix . 'contact_form_submissions';
	$inserted = $wpdb->insert(
		$table_name,
		[ 
			'name' => $name,
			'phone' => $phone,
			'email' => $email,
			'message' => $message,
			'created_at' => current_time( 'mysql' ),
		],
		[ '%s', '%s', '%s', '%s', '%s' ]
	);

	if ( ! $inserted ) {
		wp_send_json_error( [ 'message' => __( 'Error: Failed to save data to database.', RMBT_TEXT_DOMAIN_THEME ) ] );
		exit;
	}

	wp_send_json_success( [ 'message' => __( 'Data successfully submitted.', RMBT_TEXT_DOMAIN_THEME ) ] );
	wp_die();
}

add_action( 'admin_post_nopriv_rmbt_call_to_action_form', 'handle_rmbt_call_to_action_form' );
add_action( 'admin_post_rmbt_call_to_action_form', 'handle_rmbt_call_to_action_form' );


function create_contact_form_table() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'contact_form_submissions';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(255) NOT NULL,
        phone varchar(50) NOT NULL,
        email varchar(255) NOT NULL,
        message text NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

	require_once ABSPATH . 'wp-admin/includes/upgrade.php';
	dbDelta( $sql );
}
register_activation_hook( __FILE__, 'create_contact_form_table' );

function add_contact_form_menu() {
	add_menu_page(
		'Contact Form Submissions',
		'Submissions',
		'manage_options',
		'contact_form_submissions',
		'render_contact_form_admin_page',
		'dashicons-email',
		'21'
	);
}
add_action( 'admin_menu', 'add_contact_form_menu' );

function render_contact_form_admin_page() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'contact_form_submissions';
	$search_query = isset( $_GET['s'] ) ? sanitize_text_field( $_GET['s'] ) : '';
	$valid_columns = [ 'id', 'name', 'phone', 'email', 'created_at' ];
	$orderby = isset( $_GET['orderby'] ) && in_array( $_GET['orderby'], $valid_columns, true ) ? $_GET['orderby'] : 'created_at';
	$order = isset( $_GET['order'] ) && $_GET['order'] === 'asc' ? 'ASC' : 'DESC';
	$toggle_order = $order === 'ASC' ? 'desc' : 'asc';

	echo '<div class="wrap"><h1>' . esc_html__( 'Contact Form Submissions', RMBT_TEXT_DOMAIN_THEME ) . '</h1>';
	echo '<a href="' . esc_url( admin_url( 'admin-post.php?action=export_contact_form_csv' ) ) . '" class="button button-primary" style="margin-bottom: 10px;">' . esc_html__( 'Export to CSV', RMBT_TEXT_DOMAIN_THEME ) . '</a>';
	echo '<form method="get" style="display: flex; gap: 10px; align-items: center;">
            <input type="hidden" name="page" value="contact_form_submissions">
            <input type="text" name="s" value="' . esc_attr( $search_query ) . '" placeholder="' . esc_attr__( 'Search by name, phone, or email', RMBT_TEXT_DOMAIN_THEME ) . '">
            <button type="submit" class="button">' . esc_html__( 'Search', RMBT_TEXT_DOMAIN_THEME ) . '</button>
            <a href="' . esc_url( admin_url( 'admin.php?page=contact_form_submissions' ) ) . '" class="button button-secondary">' . esc_html__( 'Reset Sorting', RMBT_TEXT_DOMAIN_THEME ) . '</a>
          </form>';

	$query = "SELECT * FROM $table_name";

	if ( ! empty( $search_query ) ) {
		$query .= $wpdb->prepare(
			" WHERE name LIKE %s OR phone LIKE %s OR email LIKE %s OR message LIKE %s",
			"%$search_query%",
			"%$search_query%",
			"%$search_query%",
			"%$search_query%"
		);
	}

	$query .= " ORDER BY $orderby $order";
	$results = $wpdb->get_results( $query, OBJECT );

	echo '<table class="widefat fixed rmbt-call-to-action-form-admin">
            <thead>
                <tr>';
	$columns = [ 
		'id' => __( 'ID', RMBT_TEXT_DOMAIN_THEME ),
		'name' => __( 'Name', RMBT_TEXT_DOMAIN_THEME ),
		'phone' => __( 'Phone', RMBT_TEXT_DOMAIN_THEME ),
		'email' => __( 'Email', RMBT_TEXT_DOMAIN_THEME ),
		'created_at' => __( 'Date', RMBT_TEXT_DOMAIN_THEME ),
	];

	foreach ( $columns as $column_key => $column_name ) {
		$arrow = $orderby === $column_key ? ( $order === 'ASC' ? ' ▼' : ' ▲' ) : '';
		echo '<th><a href="?page=contact_form_submissions&orderby=' . esc_attr( $column_key ) . '&order=' . esc_attr( $toggle_order ) . '">' . esc_html( $column_name . $arrow ) . '</a></th>';
	}

	echo '<th>' . esc_html__( 'Message', RMBT_TEXT_DOMAIN_THEME ) . '</th>';
	echo '<th>' . esc_html__( 'Action', RMBT_TEXT_DOMAIN_THEME ) . '</th>';
	echo '</tr></thead><tbody>';

	if ( ! empty( $results ) ) {
		foreach ( $results as $row ) {
			echo '<tr>
                    <td>' . esc_html( $row->id ) . '</td>
                    <td>' . esc_html( $row->name ) . '</td>
                    <td>' . esc_html( $row->phone ) . '</td>
                    <td>' . esc_html( $row->email ) . '</td>
                    <td>' . esc_html( $row->created_at ) . '</td>
                    <td>' . esc_html( $row->message ) . '</td>
                    <td><a href="?page=contact_form_submissions&delete_id=' . esc_attr( $row->id ) . '" onclick="return confirm(\'' . esc_attr__( 'Delete this submission?', RMBT_TEXT_DOMAIN_THEME ) . '\')">' . esc_html__( 'Delete', RMBT_TEXT_DOMAIN_THEME ) . '</a></td>
                </tr>';
		}
	} else {
		echo '<tr><td colspan="7">' . esc_html__( 'No submissions found', RMBT_TEXT_DOMAIN_THEME ) . '</td></tr>';
	}

	echo '</tbody></table></div>';

	if ( isset( $_GET['delete_id'] ) ) {
		$delete_id = intval( $_GET['delete_id'] );

		if ( $delete_id > 0 ) {
			$deleted = $wpdb->delete( $table_name, [ 'id' => $delete_id ], [ '%d' ] );

			if ( $deleted ) {
				echo '<script>window.location.href = "' . esc_url( admin_url( 'admin.php?page=contact_form_submissions' ) ) . '";</script>';
				exit;
			}
		}
	}
}

function export_contact_form_csv() {
	global $wpdb;

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( __( 'Error: You do not have permission to export data.', RMBT_TEXT_DOMAIN_THEME ) );
	}

	$table_name = $wpdb->prefix . 'contact_form_submissions';
	$results = $wpdb->get_results( "SELECT * FROM $table_name", ARRAY_A );

	if ( empty( $results ) ) {
		wp_die( __( 'No data available for export.', RMBT_TEXT_DOMAIN_THEME ) );
	}

	header( 'Content-Type: text/csv; charset=UTF-8' );
	header( 'Content-Disposition: attachment; filename="contact_form_submissions.csv"' );

	$output = fopen( 'php://output', 'w' );

	fwrite( $output, "\xEF\xBB\xBF" );

	fwrite( $output, implode( ';', [ 
		__( 'ID', RMBT_TEXT_DOMAIN_THEME ),
		__( 'Name', RMBT_TEXT_DOMAIN_THEME ),
		__( 'Phone', RMBT_TEXT_DOMAIN_THEME ),
		__( 'Email', RMBT_TEXT_DOMAIN_THEME ),
		__( 'Message', RMBT_TEXT_DOMAIN_THEME ),
		__( 'Date', RMBT_TEXT_DOMAIN_THEME ),
	] ) . "\n" );

	foreach ( $results as $row ) {
		fputcsv( $output, [ 
			$row['id'],
			$row['name'],
			$row['phone'],
			$row['email'],
			$row['message'],
			$row['created_at'],
		], ';' );
	}

	fclose( $output );
	exit;
}
add_action( 'admin_post_export_contact_form_csv', 'export_contact_form_csv' );