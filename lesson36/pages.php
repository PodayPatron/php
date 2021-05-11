<?php
function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}
?>



<!-- 8 -->
<h2>8. В таблице pages найти строки, в которых фамилия автора заканчивается на "ов". </h2>
<?php
$pdo = new PDO( 'mysql:host=192.168.1.132;dbname=courses', 'nazar', 'nazar' );

function nz_todo8() {
	global $pdo;
	$result = $pdo->query( 'SELECT * FROM `pages` WHERE name LIKE "%ов"'  );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo8();
?>

<!-- 9 -->
<h2>9. В таблице pages найти строки, в которых есть слово "элемент" (искать только по колонке article). </h2>
<?php

function nz_todo9() {
	global $pdo;
	$result = $pdo->query( 'SELECT * FROM `pages` WHERE article LIKE "%элемент%"'  );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo9();
?>