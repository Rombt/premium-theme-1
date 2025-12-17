<?php
/**
 * Handles processing of the application form submissions.
 *
 * Contains functions or logic for validating, sanitizing,
 * and saving submitted form data.
 *
 * @package premium-theme-1
 */

defined( 'ABSPATH' ) || exit;


/**
 * Handle the submission of the Call To Action form.
 *
 * Validates, sanitizes, and processes form data.
 *
 * @return void
 */
function handle_rmbt_call_to_action_form() {
	global $wpdb;

	if ( ! isset( $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message'], $_POST['rmbt_call_to_action_form_nonce'] ) ) {
		wp_send_json_error( array( 'message' => __( 'Error: Not all fields are filled.', 'premium-theme-1' ) ) );
		exit;
	}

	if ( ! isset( $_POST['rmbt_call_to_action_form_nonce'] )
		|| ! wp_verify_nonce(
			sanitize_text_field( wp_unslash( $_POST['rmbt_call_to_action_form_nonce'] ) ),
			'rmbt_call_to_action_form'
		)
		) {
		wp_send_json_error( array( 'message' => __( 'Error: Invalid nonce (possible CSRF attack).', 'premium-theme-1' ) ) );
		exit;
	}

	$name    = sanitize_text_field( wp_unslash( $_POST['name'] ) );
	$phone   = sanitize_text_field( wp_unslash( $_POST['phone'] ) );
	$email   = sanitize_email( wp_unslash( $_POST['email'] ) );
	$message = sanitize_textarea_field( wp_unslash( $_POST['message'] ) );

	$to = get_option( 'admin_email' );

	if ( empty( $to ) || ! is_email( $to ) ) {
		wp_send_json_error( array( 'message' => __( 'Error: Invalid admin email.', 'premium-theme-1' ) ) );
		exit;
	}

	$subject = __( 'New inquiry from the contact form', 'premium-theme-1' );
	$body    = __( 'Name:', 'premium-theme-1' ) . ' ' . esc_html( $name ) . "\r\n";
	$body   .= __( 'Phone:', 'premium-theme-1' ) . ' ' . esc_html( $phone ) . "\r\n";
	$body   .= __( 'Email:', 'premium-theme-1' ) . ' ' . esc_html( $email ) . "\r\n";
	$body   .= __( 'Message:', 'premium-theme-1' ) . "\r\n" . esc_html( $message ) . "\r\n";

	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'From: ' . esc_attr__( 'Your Company', 'premium-theme-1' ) . ' <' . esc_attr( $to ) . '>',
		'Reply-To: ' . esc_attr( $email ),
	);

	$mail_sent = wp_mail( $to, $subject, $body, $headers );

	if ( ! $mail_sent ) {
		wp_send_json_error( array( 'message' => __( 'Error: Failed to send email.', 'premium-theme-1' ) ) );
		exit;
	}

	$table_name = $wpdb->prefix . 'contact_form_submissions';

	// phpcs:ignore WordPress.DB.DirectDatabaseQuery
	$inserted = $wpdb->insert(
		$table_name,
		array(
			'name'       => sanitize_text_field( wp_unslash( $_POST['name'] ) ),
			'phone'      => sanitize_text_field( wp_unslash( $_POST['phone'] ) ),
			'email'      => sanitize_email( wp_unslash( $_POST['email'] ) ),
			'message'    => sanitize_textarea_field( wp_unslash( $_POST['message'] ) ),
			'created_at' => current_time( 'mysql' ),
		),
		array( '%s', '%s', '%s', '%s', '%s' )
	);

	if ( ! $inserted ) {
		wp_send_json_error( array( 'message' => __( 'Error: Failed to save data to database.', 'premium-theme-1' ) ) );
		exit;
	}

	wp_send_json_success( array( 'message' => __( 'Data successfully submitted.', 'premium-theme-1' ) ) );
	wp_die();
}
add_action( 'admin_post_nopriv_rmbt_call_to_action_form', 'handle_rmbt_call_to_action_form' );
add_action( 'admin_post_rmbt_call_to_action_form', 'handle_rmbt_call_to_action_form' );

/**
 * Create the contact form submissions table in the database.
 *
 * Uses dbDelta to create the table if it doesn't exist.
 *
 * @return void
 */
function create_contact_form_table() {
	global $wpdb;
	$table_name      = $wpdb->prefix . 'contact_form_submissions';
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

/**
 * Add a menu page in the WordPress admin for contact form submissions.
 *
 * @return void
 */
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

/**
 * Render the Contact Form Submissions admin page.
 *
 * Displays a searchable and sortable table of form submissions,
 * allows exporting to CSV and deleting individual entries.
 *
 * @return void
 */
function render_contact_form_admin_page() {
	global $wpdb;

	$search_query = '';

	if ( isset( $_GET['s'], $_GET['_wpnonce'] ) ) {
		$nonce = sanitize_text_field( wp_unslash( $_GET['_wpnonce'] ) );

		if ( wp_verify_nonce( $nonce, 'contact_form_search' ) ) {
			$search_query = sanitize_text_field( wp_unslash( $_GET['s'] ) );
		}
	}

	$table_name    = $wpdb->prefix . 'contact_form_submissions';
	$valid_columns = array( 'id', 'name', 'phone', 'email', 'created_at' );

	$orderby = 'created_at';
	if ( isset( $_GET['orderby'] ) ) {
		$orderby_input = sanitize_text_field( wp_unslash( $_GET['orderby'] ) );

		if ( in_array( $orderby_input, $valid_columns, true ) ) {
			$orderby = $orderby_input;
		}
	}
	$order = 'DESC';

	if ( isset( $_GET['order'] ) ) {
		$order_input = sanitize_text_field( wp_unslash( $_GET['order'] ) );
		if ( 'asc' === $order_input ) {
			$order = 'ASC';
		}
	}
	$toggle_order = 'ASC' === $order ? 'desc' : 'asc';

	echo '<div class="wrap"><h1>' . esc_html__( 'Contact Form Submissions', 'premium-theme-1' ) . '</h1>';
	echo '<a href="' . esc_url( admin_url( 'admin-post.php?action=export_contact_form_csv' ) ) . '" class="button button-primary" style="margin-bottom: 10px;">' . esc_html__( 'Export to CSV', 'premium-theme-1' ) . '</a>';
	echo '<form method="get" style="display: flex; gap: 10px; align-items: center;">
            <input type="hidden" name="page" value="contact_form_submissions">
            <input type="text" name="s" value="' . esc_attr( $search_query ) . '" placeholder="' . esc_attr__( 'Search by name, phone, or email', 'premium-theme-1' ) . '">
            <button type="submit" class="button">' . esc_html__( 'Search', 'premium-theme-1' ) . '</button>
            <a href="' . esc_url( admin_url( 'admin.php?page=contact_form_submissions' ) ) . '" class="button button-secondary">' . esc_html__( 'Reset Sorting', 'premium-theme-1' ) . '</a>
          </form>';

	$query = "SELECT * FROM $table_name";
	if ( ! empty( $search_query ) ) {
		$query .= $wpdb->prepare(
			' WHERE name LIKE %s OR phone LIKE %s OR email LIKE %s OR message LIKE %s',
			"%$search_query%",
			"%$search_query%",
			"%$search_query%",
			"%$search_query%"
		);
	}
	// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared
	$query .= " ORDER BY $orderby $order";
	// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.DB.DirectDatabaseQuery
	$results = $wpdb->get_results( $query, OBJECT );

	echo '<table class="widefat fixed rmbt-call-to-action-form-admin">
            <thead>
                <tr>';
	$columns = array(
		'id'         => __( 'ID', 'premium-theme-1' ),
		'name'       => __( 'Name', 'premium-theme-1' ),
		'phone'      => __( 'Phone', 'premium-theme-1' ),
		'email'      => __( 'Email', 'premium-theme-1' ),
		'created_at' => __( 'Date', 'premium-theme-1' ),
	);

	foreach ( $columns as $column_key => $column_name ) {
		$arrow = $orderby === $column_key ? ( 'ASC' === $order ? ' ▼' : ' ▲' ) : '';
		echo '<th><a href="?page=contact_form_submissions&orderby=' . esc_attr( $column_key ) . '&order=' . esc_attr( $toggle_order ) . '">' . esc_html( $column_name . $arrow ) . '</a></th>';
	}

	echo '<th>' . esc_html__( 'Message', 'premium-theme-1' ) . '</th>';
	echo '<th>' . esc_html__( 'Action', 'premium-theme-1' ) . '</th>';
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
                    <td><a href="?page=contact_form_submissions&delete_id=' . esc_attr( $row->id ) . '" onclick="return confirm(\'' . esc_attr__( 'Delete this submission?', 'premium-theme-1' ) . '\')">' . esc_html__( 'Delete', 'premium-theme-1' ) . '</a></td>
                </tr>';
		}
	} else {
		echo '<tr><td colspan="7">' . esc_html__( 'No submissions found', 'premium-theme-1' ) . '</td></tr>';
	}

	echo '</tbody></table></div>';

	if ( isset( $_GET['delete_id'] ) ) {
		$delete_id = intval( $_GET['delete_id'] );

		if ( $delete_id > 0 ) {
			// phpcs:ignore WordPress.DB.DirectDatabaseQuery
			$deleted = $wpdb->delete( $table_name, array( 'id' => $delete_id ), array( '%d' ) );

			if ( $deleted ) {
				echo '<script>window.location.href = "' . esc_url( admin_url( 'admin.php?page=contact_form_submissions' ) ) . '";</script>';
				exit;
			}
		}
	}
}

/**
 * Export contact form submissions as a CSV file.
 *
 * Checks user capabilities, retrieves all submissions,
 * and outputs them as a CSV download with proper headers.
 *
 * @return void Exits after sending CSV output.
 */
function export_contact_form_csv() {
	global $wpdb;

	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( esc_html__( 'Error: You do not have permission to export data.', 'premium-theme-1' ) );
	}

	$table_name = $wpdb->prefix . 'contact_form_submissions';
	// phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared, WordPress.DB.PreparedSQL.InterpolatedNotPrepared, WordPress.DB.DirectDatabaseQuery
	$results = $wpdb->get_results( "SELECT * FROM $table_name", ARRAY_A );

	if ( empty( $results ) ) {
		wp_die( esc_html__( 'No data available for export.', 'premium-theme-1' ) );
	}

	header( 'Content-Type: text/csv; charset=UTF-8' );
	header( 'Content-Disposition: attachment; filename="contact_form_submissions.csv"' );

	// BOM для Excel.
	echo "\xEF\xBB\xBF";

	echo implode(
		';',
		array(
			esc_html__( 'ID', 'premium-theme-1' ),
			esc_html__( 'Name', 'premium-theme-1' ),
			esc_html__( 'Phone', 'premium-theme-1' ),
			esc_html__( 'Email', 'premium-theme-1' ),
			esc_html__( 'Message', 'premium-theme-1' ),
			esc_html__( 'Date', 'premium-theme-1' ),
		)
	) . "\n";

	foreach ( $results as $row ) {
		echo implode(
			';',
			array(
				esc_html( $row['id'] ),
				esc_html( $row['name'] ),
				esc_html( $row['phone'] ),
				esc_html( $row['email'] ),
				esc_html( $row['message'] ),
				esc_html( $row['created_at'] ),
			)
		) . "\n";
	}

	exit;
}
add_action( 'admin_post_export_contact_form_csv', 'export_contact_form_csv' );
