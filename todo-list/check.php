<?php

if ( isset( $_POST['id'] ) ) {
	$dsn = 'mysql:host=192.168.1.132;dbname=todo';
	$pdo = new PDO( $dsn, 'nazar', 'nazar' );

	// try {
	// 	$pdo = new PDO( $dsn, 'nazar', 'nazar' );
	// 	$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	// } catch ( PDOException $e ) {
	// 	echo 'Connection failed : ' . $e->getMessage();
	// }

	$id = $_POST['id'];

	if ( empty( $id ) ) {
		echo 'error';

	} else {
		$row = $pdo->prepare( 'SELECT id, checked FROM `tasks` WHERE id=?' );
		$row->execute( array( $id ) );

		$todo    = $row->fetch();
		$u_Id    = $todo['id'];
		$checked = $todo['checked'];

		$u_Checked = $checked ? 0 : 1;

		$res = $pdo->query( "UPDATE `tasks` SET checked=$u_Checked WHERE id=$u_Id" );

		if ( $res ) {
			echo $checked;
		} else {
			echo 'error';
		}

		//$pdo = null;
		return '';
	}
} else {

	header( 'Location: /index.php' );
}

?>