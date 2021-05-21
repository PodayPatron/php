<?php
	require 'helpers.php';

	$dsn = 'mysql:host=192.168.1.132;dbname=blog';
	$pdo = new PDO( $dsn, 'nazar', 'nazar' );

function nz_redirect( $data ) {
	header( 'Location: ' . $data );
}

function nz_get_blogs_item() {
	global $pdo;

	$query = $pdo->query( 'SELECT * FROM `blogs` ORDER BY id DESC' );
	$res   = $query->fetchAll();

	return $res;
}

function create_item_blog() {
	global $pdo;

	if ( $pdo->connect_error ) {
		die( 'Connection failed: ' . $pdo->connect_error );
	}

	if ( isset( $_FILES['uploaded_file'] ) && $_FILES['uploaded_file']['error'] === UPLOAD_ERR_OK ) {
		$file_tmp_path           = $_FILES['uploaded_file']['tmp_name'];
		$file_name               = $_FILES['uploaded_file']['name'];
		$array                   = explode( '.', $file_name );
		$file_extension          = strtolower( end( $array ) );
		$allowed_file_extensions = array( 'jpg', 'gif', 'png' );

		if ( in_array( $file_extension, $allowed_file_extensions ) ) {
			$dest_path = 'uploads/' . $file_name;
			move_uploaded_file( $file_tmp_path, $dest_path );

			$query = $pdo->prepare( "INSERT INTO `blogs` (title, author, short_text, text, img) VALUES (:title, :author, :short_text, :text, '$file_name')" );
			$query->execute(
				array(
					'title'      => $_POST['title'],
					'author'     => $_POST['author'],
					'short_text' => $_POST['short-text'],
					'text'       => $_POST['content'],
				)
			);

			if ( $query ) {
				nz_redirect( 'index.php' );
			} else {
				echo 'File upload failed, please try again.';
			}
		}
	} else {
		echo 'Please select an image file to upload.';
	}
}

function nz_get_post() {
	global $pdo;

	if ( ! isset( $_GET['id'] ) ) {
		return;
	}

	$res = $pdo->prepare( 'SELECT * FROM `blogs` WHERE id=:id' );
	$res->bindParam( ':id', esc_html( $_GET['id'] ) );
	$res->execute();

	return $res->fetchAll( PDO::FETCH_ASSOC );
}
