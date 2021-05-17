<?php

if ( isset( $_POST['id'] ) ) {
	require 'configDB.php';
	$id  = $_POST['id'];

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

		return '';
		
	}
} else {

	header( 'Location: index.php' );
}


