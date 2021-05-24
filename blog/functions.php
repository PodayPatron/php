<?php
	require 'helpers.php';

	$dsn = 'mysql:host=192.168.1.132;dbname=blog';
	$pdo = new PDO( $dsn, 'nazar', 'nazar' );

/**
 * Redirect.
 */
function nz_redirect( $data ) {
	header( 'Location: ' . $data );
}

/**
 * Get blogs item.
 *
 * @return array
 */
function nz_get_blogs_item() {
	global $pdo;

	$query = $pdo->query( 'SELECT * FROM `blogs` ORDER BY id DESC' );
	$res   = $query->fetchAll();

	return $res;
}

/**
 * Get comments.
 *
 * @return array
 */
function nz_get_comments( $id ) {
	global $pdo;

	$query = $pdo->prepare( 'SELECT * FROM `reviews` WHERE post_id = :post_id ORDER BY id DESC' );
	$query->bindParam( ':post_id', $id );
	$query->execute();
	$res = $query->fetchAll();

	return $res;
}

/**
 * Count comments.
 *
 * @return array
 */
function nz_count_comments( $id ) {
	global $pdo;

	$query = $pdo->prepare( 'SELECT COUNT(*) FROM `reviews` WHERE post_id = :post_id' );
	$query->bindParam( ':post_id', $id );
	$query->execute();
	$res = $query->fetchColumn();

	return $res;
}

/**
 * Create item blog.
 */
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

			$query = $pdo->prepare( "INSERT INTO `blogs` (title, author, short_text, text, img, category) VALUES (:title, :author, :short_text, :text, '$file_name', :category)" );
			$query->execute(
				array(
					'title'      => $_POST['title'],
					'author'     => $_POST['author'],
					'short_text' => $_POST['short-text'],
					'text'       => $_POST['content'],
					'category'   => $_POST['category'],
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

/**
 * Create comment.
 */
function nz_create_comment() {
	global $pdo;

	if ( empty( $_POST['acc-name'] ) ) {
		echo 'Input Your Name';
		return;

	} elseif ( empty( $_POST['acc-spec'] ) ) {
		echo 'Input Your Specialisation';
		return;

	} elseif ( empty( $_POST['acc-text'] ) ) {
		echo 'Input Some Comment!';
		return;
	}

	if ( isset( $_POST['submit-rev'] ) ) {
		$query = $pdo->prepare( 'INSERT INTO `reviews` (name, work, text, post_id) VALUES (:name, :work, :text, :post_id)' );
		$query->execute(
			array(
				'name'    => $_POST['acc-name'],
				'work'    => $_POST['acc-spec'],
				'text'    => $_POST['acc-text'],
				'post_id' => $_POST['id'],
			)
		);

		if ( $query ) {
			nz_redirect( 'index.php' );
		} else {
			echo 'Eror, try again.';
		}
	}
}

/**
 * Get post.
 *
 * @return array
 */
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
