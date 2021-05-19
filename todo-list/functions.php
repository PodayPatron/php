<?php
	$dsn = 'mysql:host=192.168.1.132;dbname=todo';
	$pdo = new PDO( $dsn, 'nazar', 'nazar' );
	require 'helpers.php';

/**
 * Update data task.
 */
function update_data_task() {
	global $pdo;

	if ( isset( $_POST['send_update'] ) ) {
		$update_task = $pdo->prepare( ' UPDATE `tasks` SET task = :task WHERE id = :id ' );
		$update_task->bindParam( ':id', $_POST['id'] );
		$update_task->bindParam( ':task', $_POST['update'] );
		$update_task->execute();

		echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
	}
}

/**
 * Add todo data.
 */
function nz_add_todo_data() {
	$task = $_POST['task'];
	if ( $task === '' ) {
		nz_err_symbols();
		return;
	}

	global $pdo;

	$sql   = 'INSERT INTO `tasks` (task) VALUES (:task)';
	$query = $pdo->prepare( $sql );
	$query->execute( array( 'task' => $task ) );

	// header('Location: index.php');
}

/**
 * Edit btn.
 */
function nz_edit_btn() {
	global $pdo;

	if ( isset( $_GET['edit'] ) ) {
		$id  = esc_html( $_GET['edit'] );
		$res = $pdo->prepare( 'SELECT * FROM `tasks` WHERE id=:id' );
		$res->bindParam( ':id', $id );
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
		?>
		<?php
	}
}

/**
 * Remove todo item.
 */
function nz_remove_todo() {
	global $pdo;

	$id    = esc_html( $_GET['id'] );
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
	if ( isset( $_POST['id'] ) ) {
		global $pdo;
		$id = esc_html( $_POST['id'] );

		if ( empty( $id ) ) {
			echo 'error';

		} else {
			$row = $pdo->prepare( 'SELECT id, checked FROM `tasks` WHERE id=?' );
			$row->execute( array( $id ) );

			$todo    = $row->fetch();
			$user_id = $todo['id'];
			$checked = $todo['checked'];

			$user_checked = $checked ? 0 : 1;

			$res = $pdo->query( "UPDATE `tasks` SET checked=$user_checked WHERE id=$user_id" );

			if ( $res ) {
				echo $checked;
			} else {
				echo 'error';
			}

			return '';
		}
	}
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
?>
