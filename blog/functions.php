<?php
	session_start();

	require 'helpers.php';

	$dsn = 'mysql:host=192.168.1.132;dbname=blog';
	$pdo = new PDO( $dsn, 'nazar', 'nazar' );

/**
 * Redirect.
 *
 * @param  mixed $url for redirect
 */
function nz_redirect( $url ) {
	header( 'Location: ' . $url );
	die();
}

/**
 * Login form.
 */
function nz_login() {
	global $pdo;

	if ( ! isset( $_POST['submit-login'] ) ) {
		return;
	}

	if ( empty( $_POST['username'] ) ) {
		nz_add_errors( 'Input Your Username' );
	}

	if ( empty( $_POST['password'] ) ) {
		nz_add_errors( 'Input Your Password' );
	}

	if ( nz_get_check_error() ) {
		return;
	}

	$query = $pdo->prepare( 'SELECT * FROM `login` WHERE username = :username' );
	$query->execute(
		array(
			':username' => esc_html( $_POST['username'] ),
		)
	);

	$result = $query->fetchAll();

	foreach ( $result as $val ) {
		if ( $val['username'] === $_POST['username'] && password_verify( $_POST['password'], $val['password'] ) ) {
			$_SESSION['username'] = $val['username'];
		}
	}

	if ( ! $_SESSION['username'] ) {
		nz_add_errors( 'Password Wrong !' );
		return;
	}

	nz_redirect( 'index.php' );
}

/**
 * Exit from account.
 *
 * @return void
 */
function nz_exit() {
	if ( isset( $_POST['log-out'] ) ) {
		unset( $_SESSION['username'] );
		nz_redirect( 'login.php' );
	}
}

/**
 * User initialisation.
 *
 * @return void
 */
function nz_user_initialisation() {
	if ( ! $_SESSION['username'] ) {
		nz_redirect( 'login.php' );
	}
}


/**
 * Get blogs item.
 *
 * @param string $category Category.
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
 * Create Item Blog.
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
		nz_add_errors( 'Input author' );
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
		nz_add_errors( 'Post is Created!' );
		nz_redirect( 'index.php' );
	} else {
		nz_add_errors( 'File upload failed, please try again.' );
	}
}

/**
 * Get Comments.
 *
 * @param int $id Id coment.
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
 * Count Comments.
 *
 * @param int $id Id coment.
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
 * Create Comment.
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
 * Get Post.
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
 * Create Select Item.
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
		nz_add_errors( 'Category is Created!' );
		nz_redirect( 'categories.php' );
	} else {
		nz_add_errors( 'Error, try again.' );
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

/**
 * Remove item from Blog.
 */
function nz_remove_item() {
	global $pdo;

	if ( ! isset( $_GET['delete-btn'] ) ) {
		return;
	}

	$id    = esc_html( $_GET['delete-btn'] );
	$query = $pdo->prepare( 'DELETE FROM `blogs` WHERE `id` = ?' );
	$query->execute( array( $id ) );

	if ( $query ) {
		nz_redirect( 'posts.php' );
	}
}

/**
 * Remove category.
 */
function nz_remove_category() {
	global $pdo;

	if ( ! isset( $_GET['delete-categ'] ) ) {
		return;
	}

	$id    = esc_html( $_GET['delete-categ'] );
	$query = $pdo->prepare( 'DELETE FROM `categories` WHERE `id` = ?' );
	$query->execute( array( $id ) );

	if ( $query ) {
		nz_redirect( 'categories.php' );
	}
}

/**
 * Edit button.
 *
 * @param int $id Id items from blogs.
 * @return array
 */
function nz_edit_btn( $id ) {
	global $pdo;

	$res = $pdo->prepare( 'SELECT * FROM `blogs` WHERE id=:id' );
	$res->bindParam( ':id', esc_html( $id ) );
	$res->execute();

	return $res->fetchAll();
}

/**
 * Update Data Task.
 */
function update_item_blog() {
	global $pdo;

	if ( ! isset( $_POST['send_update'] ) ) {
		return;
	}

	$update_item = $pdo->prepare(
		'UPDATE `blogs` 
		SET title = :title, short_text = :short_text, text = :content, category = :category 
		WHERE id = :id'
	);
	$update_item->bindParam( ':id', esc_html( $_POST['id'] ) );
	$update_item->bindParam( ':title', esc_html( $_POST['update'] ) );
	$update_item->bindParam( ':short_text', esc_html( $_POST['update-short'] ) );
	$update_item->bindParam( ':content', esc_html( $_POST['content'] ) );
	$update_item->bindParam( ':category', esc_html( $_POST['category'] ) );
	$update_item->execute();

	nz_redirect( 'posts.php' );
}

/**
 * Edit Category Button.
 *
 * @return void
 */
function nz_edit_category_btn() {
	global $pdo;

	if ( ! isset( $_GET['edit-categ-btn'] ) ) {
		return;
	}

	$res = $pdo->prepare( 'SELECT * FROM `categories` WHERE id=:id' );
	$res->bindParam( ':id', esc_html( $_GET['edit-categ-btn'] ) );
	$res->execute();
	$result = $res->fetchAll();

	foreach ( $result as $row ) {
		?>
			<form class="todo-form form-style" method="POST">
				<input id="task" name="update" value="<?php echo $row['text']; ?>" type="text">
				<button type="submit" name="send-update" class="btn btn-outline-success btn-add">Update</button>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			</form>
		<?php
	}
}

/**
 * Update Category.
 *
 * @return void
 */
function nz_update_category() {
	global $pdo;

	if ( ! isset( $_POST['send-update'] ) ) {
		return;
	}

	$update_task = $pdo->prepare( 'UPDATE `categories` SET text = :text WHERE id = :id' );
	$update_task->bindParam( ':id', esc_html( $_POST['id'] ) );
	$update_task->bindParam( ':text', esc_html( $_POST['update'] ) );
	$result = $update_task->execute();

	if ( $result ) {
		nz_add_errors( 'Category is renamed!' );
		nz_redirect( 'categories.php' );
	}

}
