<?php
function ar( $data ) {
	echo '<pre>';
	print_r( $data );
	echo '</pre>';
}
?>

<!-- 1 -->
<h2>1. Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, 
что оно больше нуля и меньше 10. Если это так - пусть функция возвращает true,
если не так - false.</h2>
<?php

function nz_isNumberInRange( $num ) {
	if ( 0 < $num || 10 > $num ) {
		echo 'true';
	} else {
		echo 'false';
	}
}

nz_isNumberInRange( 2 );
?>

<!-- 2 -->
<h2>2. Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти.
Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи.</h2>
<?php
function nz_todo2() {
	$arr     = array( 1, 3, 5, 7, 8, 11, 20, -3, -8, 1, 7 );
	$new_arr = array();

	foreach ( $arr as $value ) {
		if ( $value > 0 && $value < 10 ) {
			$new_arr[] = $value;
		}
	}

	ar( $new_arr );
}

nz_todo2();
?>

<!-- 3 -->
<h2>3.Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр. </h2>
<?php
function nz_getDigitsSum( $digit ) {
	$arr = str_split( $digit );

	return array_sum( $arr );
}

echo nz_getDigitsSum( 12 );
?>

<!-- 4 -->
<h2>4. Найдите все года от 1 до 2021, сумма цифр которых равна 13. 
Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи.</h2>
<?php
function nz_todo4() {
	for ( $i = 0; $i < 2021; $i++ ) {
		if ( 13 === nz_getDigitsSum( $i ) ) {
			echo $i . '<br>';
		}
	}
}

nz_todo4();
?>

<!-- 5 -->
<h2>5.Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. 
Если четное - пусть функция возвращает true, если нечетное - false. </h2>
<?php
function nz_isEven( $num ) {
	if ( ( $num % 2 ) === 0 ) {
		return 'true';
	} else {
		return 'false';
	}
}

echo nz_isEven( 2 );
?>

<!-- 6 -->
<h2>6. Дан массив с целыми числами. Создайте из него новый массив, где останутся лежать только четные из этих чисел. 
Для этого используйте вспомогательную функцию isEven из предыдущей задачи.</h2>
<?php
function nz_todo6() {
	$arr     = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );
	$new_arr = '';

	for ( $i = 1; $i <= count( $arr ); $i++ ) {
		if ( nz_isEven( $i ) === 'true' ) {
			$new_arr .= $i . '</br>';
		}
	}

	echo $new_arr;
}

nz_todo6();
?>

<!-- 7 -->
<h2>7.Сделайте функцию getDivisors,
которая параметром принимает число и возвращает массив его делителей (чисел, на которое делится данное число).</h2>
<?php
function nz_getDivisors( $num1 ) {
	$del = 0;
	$array = [];

	while( $del < abs( $num1 ) ){ 
		$del++;
		if(( $num1 % $del ) == 0 ){
			$array[] = $del;
		}
	}

	return $array;
}

ar(nz_getDivisors(20));
?>

<!-- 8 -->
<h2>8. Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей. 
Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи.</h2>
<?php
function nz_getCommonDivisors($num1, $num2) {
	$arr1 = nz_getDivisors($num1);
	$arr2 = nz_getDivisors($num2);

	return array_intersect( $arr1, $arr2 );
}

ar(nz_getCommonDivisors(12, 18));
?>
