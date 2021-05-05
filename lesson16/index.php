<?php
function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}
?>

<!-- 1 -->
<h2>1. Заполните массив следующим образом: в первый элемент запишите 'x', во второй 'xx', в третий 'xxx' и так далее. </h2>
<?php
function nz_todo1() {
	$arr = array();

	for ( $i = 1; $i <= 5; $i++ ) {
		$arr[] .= str_repeat( 'x', $i );
	}

	ar( $arr );
}

nz_todo1();
?>

<!-- 2 -->
<h2>2. С помощью двух вложенных циклов заполните массив следующим
образом: в первый элемент запишите '1', во второй '22', в третий '333' и так далее. </h2>
<?php
function nz_todo2() {
	$arr = array();

	for ( $i = 1; $i <= 5; $i++ ) {
		for ( $n = 1; $n <= $i; $n++ ) {
			$arr[ $i ] .= $i;
		}
	}

	ar( $arr );
}

nz_todo2();
?>

<!-- 3 -->
<h2>3. Сделайте функцию arrayFill, которая будет заполнять массив заданными значениями. 
Первым параметром функция принимает значение, которым заполнять массив, 
а вторым - сколько элементов должно быть в массиве. Пример: arrayFill('x', 5) сделает массив ['x', 'x', 'x', 'x', 'x']. </h2>
<?php
function nz_todo3() {
	$arr = array();
	$arr = get_ol_arrayFill( $arr, 'x', 5 );

	ar( $arr );
}

function get_ol_arrayFill( $arr = array(), $str, $num ) {
	for ( $i = 0; $i <= $num; $i++ ) {
		$arr[] .= $str;
	}

	return $arr;
}

nz_todo3();
?>

<!-- 4 -->
<h2>4. Дан массив с числами. Узнайте сколько элементов с начала массива надо сложить,
чтобы в сумме получилось больше 10-ти. Считайте, что в массиве есть нужное количество элементов.</h2>
<?php
function nz_todo4() {
	$arr    = array( 5, 5, 4, 5, 6, 2, 3, 4 );
	$result = 0;

	for ( $i = 0; $i <= count( $arr ); $i++ ) {
		$result += $arr[ $i ];

		if ( 10 < $result ) {
			echo $i;
			break;
		}
	}
}

nz_todo4();
?>

<!-- 5 -->
<h2>5. Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]]. 
Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.</h2>
<?php
function nz_todo5() {
	$sum = 0;
	$arr = array( array( 1, 2, 3 ), array( 4, 5 ), array( 6 ) );

	array_walk_recursive(
		$arr,
		function( $i ) use ( &$sum ) {
			$sum += $i;
		}
	);

	echo $sum;
}

nz_todo5();
?>

<!-- 6 -->
<h2>6. Дан трехмерный массив с числами, например [[[1, 2], [3, 4]], [[5, 6], [7, 8]]].
Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным.</h2>
<?php
function nz_todo6() {
	$sum = 0;
	$arr = array( array( array( array( 1, 2 ), array( 3, 4 ) ), array( array( 5, 6 ), array( 7, 8 ) ) ) );

	array_walk_recursive(
		$arr,
		function( $i ) use ( &$sum ) {
			$sum += $i;
		}
	);

	echo $sum;
}

nz_todo6();
?>

<!-- 7 -->
<h2>7. С помощью двух циклов создайте массив [[1, 2, 3], [4, 5, 6], [7, 8, 9]].</h2>
<?php
function nz_todo7() {
	$arr = array();

	for ( $i = 1; $i <= 3; $i++ ) {
		for ( $n = $i * 3 - 3; $n < $i * 3; $n++ ) {
			$arr[ $i ][] .= $n + 1;
		}
	}

	ar( $arr );
}

nz_todo7();
?>
