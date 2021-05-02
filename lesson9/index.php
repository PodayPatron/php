<!-- 1 -->
<h2>1.Дан массив с числами. Найдите среднее арифметическое его элементов (сумма элементов делить на количество) не используя цикл.</h2>
<?php
function nz_todo1() {
	$arr = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 2 );
	echo array_sum( $arr ) / count( $arr );
}

nz_todo1();
?>

<!-- 2 -->
<h2>2. Найдите сумму чисел от 1 до 100 не используя цикл</h2>
<?php
function nz_todo2() {
	$arr = range( 1, 100 );

	echo array_sum( $arr );
}

nz_todo2();
?>

<!-- 3 -->
<h2>3. Выведите столбец чисел от 1 до 100 не используя цикл.</h2>
<?php
function nz_todo3() {
	$arr = range( 1, 100 );

	echo implode( '</br>', $arr );
}

nz_todo3();
?>

<!-- 4 -->
<h2>4. Заполните массив 10-ю иксами не используя цикл.</h2>
<?php
function nz_todo4() {
	echo '<pre>';
	print_r( array_fill( 0, 10, 'x' ) );
	echo '</pre>';
}

nz_todo4();
?>

<!-- 5 -->
<h2>5.Заполните массив 10-ю случайными числами от 1 до 10 так, чтобы они не повторялись. Цикл использовать нельзя </h2>
<?php
function nz_todo5() {
	$arr = range( 1, 10 );
	shuffle( $arr );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo5();
?>

<!-- 6 -->
<h2>6. Найдите факториал заданного числа не используя цикл.
Факториал - это произведение чисел от 1 до заданного числа включительно </h2>
<?php
function nz_todo6() {
	$num = 7;
	$arr = range( 1, $num );

	echo '<pre>';
	print_r( array_product( $arr ) );
	echo '</pre>';
}

nz_todo6();
?>

<!-- 7 -->
<h2>7. Дано число. Найдите сумму цифр этого числа не используя цикл </h2>
<?php
function nz_todo7() {
	$num = 12345;

	echo array_sum( str_split( $num, 1 ) );
}

nz_todo7();
?>

<!-- 8 -->
<h2>8. Дана строка. Сделайте заглавным последний символ этой строки не используя цикл. </h2>
<?php
function nz_todo8() {
	$str = 'banana';
	$str = strrev( $str );
	$str = ucfirst( $str );
	$str = strrev( $str );
	echo $str;
}

nz_todo8();
?>

<!-- 9 -->
<h2>9. Дан массив с числами. Получите из него массив с квадратными 
корнями этих чисел не используя цикл </h2>
<?php
function nz_todo9() {
	$arr    = array( 1, 4, 16, 25 );
	$result = array_map( 'sqrt', $arr );

	echo '<pre>';
	print_r( $result );
	echo '</pre>';
}

nz_todo9();
?>

<!-- 10 -->
<h2>10. Заполните массив числами от 1 до 26 так,
чтобы ключами этих чисел были буквы английского алфавита: ['a'=>1, 'b'=>2...] </h2>
<?php
function nz_todo10() {
	$key = range( 'a', 'z' );
	$val = range( 1, 26 );
	$arr = array_combine( $key, $val );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo10();
?>

<!-- 11 -->
<h2>11. Дана строка с числами '1234567890'. 
Найдите сумму пар чисел: 12+34+56+78+90. Решите задачу, не используя цикл </h2>
<?php
function nz_todo11() {
	$str    = '1234567890';
	$split  = str_split( $str, 2 );
	$result = array_sum( $split );

	echo $result;
}

nz_todo11();
?>
