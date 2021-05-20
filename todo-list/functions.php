<?php
	$dsn = 'mysql:host=192.168.1.132;dbname=todo';
	$pdo = new PDO( $dsn, 'nazar', 'nazar' );
	require 'helpers.php';

/**
 * Update data task.
 */
function update_data_task() {
	global $pdo;

	if ( ! isset( $_POST['send_update'] ) ) {
		return;
	}

	$update_task = $pdo->prepare( 'UPDATE `tasks` SET task = :task WHERE id = :id' );
	$update_task->bindParam( ':id', esc_html( $_POST['id'] ) );
	$update_task->bindParam( ':task', esc_html( $_POST['update'] ) );
	$update_task->execute();

	nz_redirect( 'index.php' );
}

/**
 * Add todo data.
 */
function nz_add_todo_data() {
	global $pdo;

	$task = $_POST['task'];
	if ( '' === $task ) {
		nz_err_symbols();
		return;
	}

	$query = $pdo->prepare( 'INSERT INTO `tasks` (task) VALUES (:task)' );
	$query->execute( array( 'task' => $task ) );
}

/**
 * Edit btn.
 */
function nz_edit_btn() {
	global $pdo;

	if ( ! isset( $_GET['edit'] ) ) {
		return;
	}

	$res = $pdo->prepare( 'SELECT * FROM `tasks` WHERE id=:id' );
	$res->bindParam( ':id', esc_html( $_GET['edit'] ) );
	$res->execute();
	$result = $res->fetchAll();

	foreach ( $result as $row ) {
		?>
			<form action="" class="todo-form form-style" method="POST" autocomplete="off">
				<input id="task" name="update" value="<?php echo $row['task']; ?>" type="text">
				<button type="submit" name="send_update" class="btn btn-outline-success btn-add">Update</button>
				<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
			</form>
		<?php
	}
}

/**
 * Remove todo item.
 */
function nz_remove_todo() {
	global $pdo;

	if ( ! isset( $_GET['delete'] ) ) {
		return;
	}

	$id    = esc_html( $_GET['delete'] );
	$sql   = 'DELETE FROM `tasks` WHERE `id` = ?';
	$query = $pdo->prepare( $sql );
	$query->execute( array( $id ) );
}

/**
 * Error symbols.
 */
function nz_err_symbols() {
	?>
	<div class="alert alert-primary" role="alert">
		Введите само задание...
	</div>
	<?php
}

/**
 * Checked todo list.
 *
 * @return string
 */
function nz_checked_btn() {
	global $pdo;

	if ( empty( $_GET['id'] ) && $_GET['action'] !== 'checked' ) {
		return;
	}

	$id           = esc_html( $_GET['id'] );
	$user_checked = esc_html( $_GET['done'] );

	$res = $pdo->prepare( 'UPDATE `tasks` SET checked=? WHERE id=?' );
	$res->execute( array( $user_checked, $id ) );
}

/**
 * Order list.
 *
 * @return array
 */
function nz_order_list() {
	global $pdo;

	$query = $pdo->query( 'SELECT * FROM `tasks` ORDER BY `id` DESC' );
	$res   = $query->fetchAll();
	return $res;
}

function nz_redirect( $data ) {
	header( 'Location: ' . $data );
}
?>