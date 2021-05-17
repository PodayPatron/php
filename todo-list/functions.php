<?php 
function update_data_task() {
	require 'configDB.php';

	if ( isset($_POST['send_update']) ) {
		$another = $pdo->prepare( ' UPDATE `tasks` SET task = :task WHERE id = :id ' );
		$another -> bindParam(':id' , $_POST['id']);
		$another -> bindParam(':task' , $_POST['update']);
		$another -> execute();

		echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
	}
}
?>

<?php
function nz_add_todo_data() {
	$task = $_POST['task'];
	if ( $task === '' ) {
		nz_err_symbols();
		return;
	}

	require 'configDB.php';

	$sql   = 'INSERT INTO `tasks` (task) VALUES (:task)';
	$query = $pdo->prepare( $sql );
	$query->execute( array( 'task' => $task ) );

}
?>

<?php
function nz_edit_btn() {
	require 'configDB.php';

	if ( isset( $_GET['edit'] ) ) {
		$id     = $_GET['edit'];
		$update = true;
		$res    = $pdo->prepare( 'SELECT * FROM `tasks` WHERE id=:id' );
		$res->bindParam( ':id', $id );
		$res->execute();
		$var = $res->fetchAll();
	}
}
?>

<?php
function nz_remove_todo() {
	require 'configDB.php';

	$id    = $_GET['id'];
	$sql   = 'DELETE FROM `tasks` WHERE `id` = ?';
	$query = $pdo->prepare( $sql );
	$query->execute( array( $id ) );
}
?>

<?php
	function nz_err_symbols() {
	?>
		<div class="alert alert-primary" role="alert">
			Введите само задание...
		</div>
	<?php
}
?>
