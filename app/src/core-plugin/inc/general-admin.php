<?php

// function log_in_file( $data, $mod = 'a' ) {
// 	// Путь к файлу лога
// 	$path = plugin_dir_path( __FILE__ ) . 'log.txt';

// 	// Открываем файл для записи, 'a' означает, что будем добавлять данные в конец файла
// 	$file_handle = fopen( $path, $mod );

// 	if ( $file_handle ) {
// 		$timestamp = date( 'd-m-y H:i:s' );

// 		$log_entry = $timestamp . ': ' . json_encode( $data ) . PHP_EOL;

// 		fwrite( $file_handle, $log_entry );
// 		fclose( $file_handle );
// 	} else {
// 		// Если файл не удалось открыть для записи, вы можете обработать эту ситуацию соответственно
// 		echo 'Ошибка при открытии файла для записи';
// 	}
// }
