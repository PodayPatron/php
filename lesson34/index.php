<?php
function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}
?>

<!-- 1 -->
<h2>1. Выбрать работника с id = 3.</h2>
<?php

$pdo = new PDO( 'mysql:host=192.168.1.132;dbname=courses', 'nazar', 'nazar' );

function nz_todo1() {
	$id = 3;
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE id = :id' );
	$result->bindParam( ':id', $id );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo1();
?>

<!-- 2 -->
<h2>2.Выбрать работников с зарплатой 1000$. </h2>
<?php
function nz_todo2() {
	$salary = 1000;
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE salary = :salary' );
	$result->bindParam( ':salary', $salary );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo2();
?>

<!-- 3 -->
<h2>3.Выбрать работников в возрасте 23 года.</h2>
<?php
function nz_todo3() {
	$age = 23;
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE age = :age' );
	$result->bindParam( ':age', $age );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo3();
?>

<!-- 4 -->
<h2>4. Выбрать работников с зарплатой более 400$. </h2>
<?php
function nz_todo4() {
	$salary = 400;
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE salary = :salary' );
	$result->bindParam( ':salary', $salary );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo4();
?>

<!-- 5 -->
<h2>5.  Выбрать работников с зарплатой равной или большей 500$. </h2>
<?php
function nz_todo5() {
	$salary = 500;
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE salary >= :salary' );
	$result->bindParam( ':salary', $salary );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo5();
?>

<!-- 6 -->
<h2>6.  Выбрать работников с зарплатой НЕ равной 500$. </h2>
<?php
function nz_todo6() {
	$salary = 500;
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE salary != :salary' );
	$result->bindParam( ':salary', $salary );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo6();
?>

<!-- 7 -->
<h2>7.  Выбрать работников с зарплатой равной или меньшей 900$. </h2>
<?php
function nz_todo7() {
	$salary = 900;
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE salary <= :salary' );
	$result->bindParam( ':salary', $salary );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo7();
?>


<!-- 8 -->
<h2>8.  Узнайте зарплату и возраст Васи. </h2>
<?php
function nz_todo8() {
	$id = 3;
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE id = :id' );
	$result->bindParam( ':id', $id );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val['age'] );
		ar( $val['salary'] . '$' );
	}
}

nz_todo8();
?>

<!-- 9 -->
<h2>9.  Выбрать работников в возрасте от 25 (не включительно) до 28 лет (включительно). </h2>
<?php
function nz_todo9() {
	$age = 26;
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE age > 25 AND age < 28' );
	$result->bindParam( ':age', $age );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo9();
?>

<!-- 10 -->
<h2>10. Выбрать работника Петю.</h2>
<?php
function nz_todo10() {
	$name = 'Petya';
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE name = :name' );
	$result->bindParam( ':name', $name );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo10();
?>

<!-- 11 -->
<h2>11. Выбрать работников Петю и Васю.</h2>
<?php
function nz_todo11() {
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE name = "Petya" OR name = "Vasya" ' );
	$result->bindParam( ':name', $name );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo11();
?>

<!-- 12 -->
<h2>12. Выбрать всех, кроме работника Петя</h2>
<?php
function nz_todo12() {
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE name != "Petya" ' );
	$result->bindParam( ':name', $name );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo12();
?>

<!-- 13 -->
<h2>13.  Выбрать всех работников в возрасте 27 лет или с зарплатой 1000$.</h2>
<?php
function nz_todo13() {
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE age = 27 OR salary = 1000 ' );
	$result->bindParam( ':name', $name );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo13();
?>

<!-- 14 -->
<h2>14. Выбрать всех работников в возрасте от 23 лет (включительно) 
до 27 лет (не включительно) или с зарплатой 1000$.</h2>
<?php
function nz_todo14() {
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE age >= 23 AND age < 27 OR salary = 1000 ' );
	$result->bindParam( ':name', $name );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo14();
?>

<!-- 15 -->
<h2>15.Выбрать всех работников в возрасте от 23 лет до 27 лет 
или с зарплатой от 400$ до 1000$. </h2>
<?php
function nz_todo15() {
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE age >= 23 AND age <= 27 OR salary > 400 AND salary <= 1000 ' );
	$result->bindParam( ':name', $name );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

nz_todo15();
?>

<!-- 16 -->
<h2>16. Выбрать всех работников в возрасте 27 лет или с зарплатой не равной 400$.</h2>
<?php
function nz_todo16() {
	global $pdo;

	$result = $pdo->prepare( 'SELECT * FROM `database` WHERE age = 27 OR salary != 400 ' );
	$result->bindParam( ':name', $name );
	$result->execute();
	$data = $result->fetchAll();

	foreach ( $data as $val ) {
		ar( $val );
	}
}

//nz_todo16();
?>

<!-- 17 -->
<h2>17. Добавьте нового работника Никиту, 26 лет, 
зарплата 300$. Воспользуйтесь первым синтаксисом.</h2>
<?php
function nz_todo17() {
	global $pdo;

	$result = $pdo->prepare( 'INSERT  INTO `database` SET name = "Nikita" , age = 24, salary = 400 ' );
	$result->execute();

}

//nz_todo17();
?>

<!-- 18 -->
<h2>18. Добавьте нового работника Светлану с зарплатой 1200$.
Воспользуйтесь вторым синтаксисом.</h2>
<?php
function nz_todo18() {
	global $pdo;

	$result = $pdo->prepare( 'INSERT  INTO `database` SET name = "Svetlana" , age = 27, salary = 1200 ' );
	$result->execute();

}

//nz_todo18();
?>

<!-- 19 -->
<h2>19. Добавьте двух новых работников одним
запросом: Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.</h2>
<?php
function nz_todo19() {
	global $pdo;

	$result = $pdo->prepare( 'INSERT INTO `database`  (name, age, salary) VALUES ( "Yaroslava", 30, 1200 ), ( "Petro", 31, 1000 )' );
	$result->execute();
}

//nz_todo18nz_todo19();
?>


<!-- 20 -->
<h2>20. Добавьте двух новых работников одним
запросом: Ярослава с зарплатой 1200$ и возрастом 30, Петра с зарплатой 1000$ и возрастом 31.</h2>
<?php
function nz_todo20() {
	global $pdo;

	$result = $pdo->prepare( 'DELETE FROM `database` WHERE id = 7' );
	$result->execute();
}

//nz_todo20();
?>

<!-- 21 -->
<h2>21. Удалите Колю.</h2>
<?php
function nz_todo21() {
	global $pdo;

	$result = $pdo->prepare( 'DELETE FROM `database` WHERE name = "Kolya"' );
	$result->execute();
}

//nz_todo21();
?>


<!-- 22 -->
<h2>22. Удалите всех работников, у которых возраст 23 года.</h2>
<?php
function nz_todo22() {
	global $pdo;

	$result = $pdo->prepare( 'DELETE FROM `database` WHERE age = 23' );
	$result->execute();
}

//nz_todo22();
?>


<!-- 23 -->
<h2>23. Поставьте Ivan зарплату в 200$.</h2>
<?php
function nz_todo23() {
	global $pdo;

	$result = $pdo->prepare( 'UPDATE `database` SET  salary = 200 WHERE name = "Ivan" ' );
	$result->execute();
}

//nz_todo23();
?>

<!-- 24 -->
<h2>24.  Работнику с id=5 поставьте возраст 35 лет.</h2>
<?php
function nz_todo24() {
	global $pdo;

	$result = $pdo->prepare( 'UPDATE `database` SET  age = 35 WHERE id = 5 ' );
	$result->execute();
}

//nz_todo24();
?>

<!-- 25 -->
<h2>25.  Всем, у кого зарплата 500$ сделайте ее 700$. </h2>
<?php
function nz_todo25() {
	global $pdo;

	$result = $pdo->prepare( 'UPDATE `database` SET  salary = 700 WHERE salary = 500 ' );
	$result->execute();
}

//nz_todo25();
?>


<!-- 26 -->
<h2>26.  Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23. </h2>
<?php
function nz_todo26() {
	global $pdo;

	$result = $pdo->prepare(  'UPDATE `database` SET age = 23 WHERE id > 2 AND id <= 5' );
	$result->execute();
}

//nz_todo26();
?>


<!-- 27 -->
<h2>27. Поменяйте Васю на Женю и прибавьте ему зарплату до 900$. </h2>
<?php
function nz_todo27() {
	global $pdo;

	$result = $pdo->prepare(  'UPDATE `database` SET name = "Ivan", salary = 900  WHERE name = "Petya"' );
	$result->execute();
}

//nz_todo27();
?>



