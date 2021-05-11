<?php
function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}
?>


<!-- 1 -->
<h2>1. Из таблицы workers достаньте первые 6 записей.</h2>
<?php

$pdo = new PDO( 'mysql:host=192.168.1.132;dbname=courses', 'nazar', 'nazar' );
function nz_todo1() {
	global $pdo;
	$result = $pdo->query( 'SELECT * FROM `database` LIMIT 6' );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo1();
?>


<!-- 2 -->
<h2>2. Из таблицы workers достаньте записи со вторую, 3 штуки.</h2>
<?php
function nz_todo2() {
	global $pdo;
	$result = $pdo->query( 'SELECT * FROM `database` LIMIT 2,3' );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo2();
?>

<!-- 3 -->
<h2>3. Из таблицы workers достаньте всех работников и отсортируйте их по возрастанию зарплаты.</h2>
<?php
function nz_todo3() {
	global $pdo;
	$result = $pdo->query( 'SELECT * FROM `database` ORDER BY  salary' );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo3();
?>

<!-- 4 -->
<h2>4. Из таблицы workers достаньте всех работников и отсортируйте их по убыванию зарплаты.</h2>
<?php
function nz_todo4() {
	global $pdo;
	$result = $pdo->query( 'SELECT * FROM `database`ORDER BY salary DESC' );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo4();
?>

<!-- 5 -->
<h2>5. Из таблицы workers достаньте работников со второго 
по шестого и отсортируйте их по возрастанию возраста.</h2>
<?php
function nz_todo5() {
	global $pdo;
	$result = $pdo->query( 'SELECT * FROM `database` ORDER BY salary LIMIT 1, 4' );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo5();
?>

<!-- 6 -->
<h2>6. В таблице workers подсчитайте всех работников.</h2>
<?php
function nz_todo6() {
	global $pdo;
	$result = $pdo->query( 'SELECT COUNT(*) FROM `database`'  );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo6();
?>

<!-- 7 -->
<h2>7. В таблице workers подсчитайте всех работников c зарплатой 300$.</h2>
<?php
function nz_todo7() {
	global $pdo;
	$result = $pdo->query( 'SELECT COUNT(*) FROM `database` WHERE salary = 300'  );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo7();
?>


<!-- 10 -->
<h2>10. В таблице workers найти строки, в которых возраст работника 
начинается с числа 3, а далее идет только одна цифра.</h2>
<?php
function nz_todo10() {
	global $pdo;
	$result = $pdo->query( 'SELECT * from `database` WHERE age LIKE "3_"'  );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo10();
?>

<!-- 11-->
<h2>11.  В таблице workers найти строки, в которых имя работника заканчивается на "я".</h2>
<?php
function nz_todo11() {
	global $pdo;
	$result = $pdo->query( 'SELECT * from `database` WHERE name LIKE "%a"'  );

	foreach ( $result as $val ) {
		ar( $val );
	}
}

nz_todo11();
?>

