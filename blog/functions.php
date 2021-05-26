<?php
	require 'helpers.php';

	$dsn = 'mysql:host=192.168.1.132;dbname=blog';
	$pdo = new PDO( $dsn, 'nazar', 'nazar' );

/**
 * Redirect.
 *
 * @param  mixed $data
 */
function nz_redirect( $data ) {
	header( 'Location: ' . $data );
}

/**
 * Get blogs item.
 *
 * @return array
 */
function nz_get_blogs_item( $category = '' ) {
	global $pdo;

	if ( $category && 'all' !== $category ) {
		$query = $pdo->prepare( 'SELECT * FROM `blogs` WHERE category = :category ORDER BY id DESC' );
		$query->bindParam( ':category', $category );
	} else {
		$query = $pdo->prepare( 'SELECT * FROM `blogs` ORDER BY id DESC' );
	}
	$query->execute();

	return $query->fetchAll();
}

/**
 * Create item blog.
 */
function create_item_blog() {
	global $pdo;

	if ( ! isset( $_POST['submit'] ) ) {
		return;
	}

	if ( empty( $_POST['title'] ) ) {
		nz_add_errors( 'Write Your Blog Title' );
	}

	if ( empty( $_POST['author'] ) ) {
		nz_add_errors( 'Who is the author of this blog ?' );
	}

	if ( empty( $_POST['short-text'] ) ) {
		nz_add_errors( 'Please, write short text!' );
	}

	if ( empty( $_POST['content'] ) ) {
		nz_add_errors( 'Write some content !' );
	}

	if ( empty( $_POST['category'] ) ) {
		nz_add_errors( 'Select some categhory !' );
	}

	if ( isset( $_FILES['uploaded_file'] ) && $_FILES['uploaded_file']['error'] === UPLOAD_ERR_OK ) {
		$file_tmp_path           = $_FILES['uploaded_file']['tmp_name'];
		$file_name               = $_FILES['uploaded_file']['name'];
		$array                   = explode( '.', $file_name );
		$file_extension          = strtolower( end( $array ) );
		$allowed_file_extensions = array( 'jpg', 'gif', 'png' );

		if ( in_array( $file_extension, $allowed_file_extensions, true ) ) {
			$dest_path = 'uploads/' . $file_name;
			move_uploaded_file( $file_tmp_path, $dest_path );
		}
	} else {
		nz_add_errors( 'Please select an image file to upload.' );
	}

	if ( nz_get_check_error() ) {
		return;
	}

	$query = $pdo->prepare( 'INSERT INTO `blogs` (title, author, short_text, text, img, category) VALUES (:title, :author, :short_text, :text, :img, :category)' );
	$query->execute(
		array(
			'title'      => esc_html( $_POST['title'] ),
			'author'     => esc_html( $_POST['author'] ),
			'short_text' => esc_html( $_POST['short-text'] ),
			'text'       => esc_html( $_POST['content'] ),
			'category'   => esc_html( $_POST['category'] ),
			'img'        => $file_name,
		)
	);

	if ( $query ) {
		nz_redirect( 'index.php' );
	} else {
		nz_add_errors( 'File upload failed, please try again.' );
	}
}

/**
 * Get Comments.
 *
 * @param mixed $id
 * @return array
 */
function nz_get_comments( $id ) {
	global $pdo;

	$query = $pdo->prepare( 'SELECT * FROM `reviews` WHERE post_id = :post_id ORDER BY id DESC' );
	$query->bindParam( ':post_id', $id );
	$query->execute();

	return $query->fetchAll();
}

/**
 * Count comments.
 *
 * @param  mixed $id
 * @return array
 */
function nz_count_comments( $id ) {
	global $pdo;

	$query = $pdo->prepare( 'SELECT COUNT(*) FROM `reviews` WHERE post_id = :post_id' );
	$query->bindParam( ':post_id', $id );
	$query->execute();

	return $query->fetchColumn();
}

/**
 * Create comment.
 */
function nz_create_comment() {
	global $pdo;

	if ( ! isset( $_POST['submit-rev'] ) ) {
		return;
	}

	if ( empty( $_POST['acc-name'] ) ) {
		nz_add_errors( 'Input Your Name' );
	}

	if ( empty( $_POST['acc-spec'] ) ) {
		nz_add_errors( 'Input Your Specialization' );
	}

	if ( empty( $_POST['acc-text'] ) ) {
		nz_add_errors( 'Input Your coment' );
	}

	if ( nz_get_check_error() ) {
		return;
	}

	$query = $pdo->prepare( 'INSERT INTO `reviews` (name, work, text, post_id) VALUES (:name, :work, :text, :post_id)' );
		$query->execute(
			array(
				'name'    => esc_html( $_POST['acc-name'] ),
				'work'    => esc_html( $_POST['acc-spec'] ),
				'text'    => esc_html( $_POST['acc-text'] ),
				'post_id' => esc_html( $_POST['id'] ),
			)
		);

	if ( $query ) {
		nz_redirect( 'blog-info.php?id=' . $_POST['id'] . '#1' );
	} else {
		nz_add_errors( 'Eror, try again.' );
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

/**
 * Create_select item.
 */
function nz_create_select() {
	global $pdo;

	if ( ! isset( $_POST['select-input'] ) ) {
		return;
	}

	if ( empty( $_POST['select-input'] ) ) {
		nz_add_errors( 'Create Your Category !!!' );
	}

	if ( nz_get_check_error() ) {
		return;
	}

	$query = $pdo->prepare( 'INSERT INTO `categories` (text) VALUES (:category)' );
	$query->execute(
		array(
			'category' => esc_html( $_POST['select-input'] ),
		)
	);

	if ( $query ) {
		nz_redirect( 'index.php' );
	} else {
		nz_add_errors( 'Eror, try again.' );
	}
}

/**
 * Get Select.
 *
 * @return array
 */
function nz_get_select() {
	global $pdo;

	$query = $pdo->query( 'SELECT * FROM `categories` ORDER BY id DESC' );

	return $query->fetchAll();
}
