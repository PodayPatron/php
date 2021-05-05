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
	if ( ($num % 2) === 0 ) {
		echo 'true';
	} else {
		echo 'false';
	}
}

nz_isEven(12);
?>
