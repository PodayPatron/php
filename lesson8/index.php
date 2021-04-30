<!-- 1 -->
<h2>1.  Дан массив $arr. Подсчитайте количество элементов этого массива.</h2>
<?php
function nz_todo1() {
	$arr = array( '1', '2', '3', 'a', 'b', 'c' );

	echo count( $arr );
}

nz_todo1();
?>

<!-- 2 -->
<h2>2.  Дан массив $arr. С помощью функции count выведите последний элемент данного массива.</h2>
<?php
function nz_todo2() {
	$arr = array( '1', '2', '3', 'a', 'b', 'c' );
	$val = count( $arr );

	echo $arr[ $val - 1 ];
}

nz_todo2();
?>

<!-- 3 -->
<h2>3. Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.</h2>
<?php
function nz_todo3() {
	$arr    = array( 1, 2, 3, 4, 5, 6, 7, 8, 23, 44, 54, 34, 63 );
	$result = in_array( 3, $arr );

	var_dump( $result );
}

nz_todo3();
?>

<!-- 4 -->
<h2>4.Дан массив [1, 2, 3, 4, 5]. Найдите сумму элементов данного массива.</h2>
<?php
function nz_todo4() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = array_sum( $arr );

	echo $result;
}

nz_todo4();
?>

<!-- 5 -->
<h2>5. Дан массив [1, 2, 3, 4, 5]. Найдите произведение (умножение) элементов данного массива.</h2>
<?php
function nz_todo5() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = array_product( $arr );

	echo $result;
}

nz_todo5();
?>


<!-- 6 -->
<h2>6. Дан массив $arr. С помощью функций array_sum и count найдите среднее
арифметическое элементов (сумма элементов делить на их количество) данного массива.</h2>
<?php
function nz_todo6() {
	$arr  = array( 12, 22, 4, 5, 6, 12, 11, 14 );
	$sum  = array_sum( $arr );
	$nums = count( $arr );

	echo $sum / $nums;
}

nz_todo6();
?>

<!-- 7 -->
<h2>7. Создайте массив, заполненный числами от 1 до 100.</h2>
<?php
function nz_todo7() {
	$arr = range( 1, 100 );

	var_dump( $arr );
}

nz_todo7();
?>

<!-- 8 -->
<h2>8. Создайте массив, заполненный буквами от 'a' до 'z'.</h2>
<?php
function nz_todo8() {
	$arr = range( 'a', 'z' );

	var_dump( $arr );
}

nz_todo8();
?>

<!-- 9 -->
<h2>9. Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл </h2>
<?php
function nz_todo9() {
	$arr    = range( 1, 9 );
	$to_str = implode( '-', $arr );

	echo $to_str;
}

nz_todo9();
?>

<!-- 10 -->
<h2>10. Найдите сумму чисел от 1 до 100 не используя цикл. </h2>
<?php
function nz_todo10() {
	$arr = range( 1, 100 );
	$sum = array_sum( $arr );

	echo $sum;
}

nz_todo10();
?>

<!-- 11 -->
<h2>11. Найдите произведение чисел от 1 до 10 не используя цикл. </h2>
<?php
function nz_todo11() {
	$arr    = range( 1, 10 );
	$result = array_product( $arr );

	echo $result;
}

nz_todo11();
?>

<!-- 12 -->
<h2>12. Даны два массива: первый с элементами 1, 2, 3, 
второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'. </h2>
<?php
function nz_todo12() {
	$arr1   = array( 1, 2, 3 );
	$arr2   = array( 'a', 'b', 'c' );
	$result = array_merge( $arr1, $arr2 );

	var_dump( $result );
}

nz_todo12();
?>

<!-- 13 -->
<h2>13.Дан массив с элементами 1, 2, 3, 4, 5. С помощью функции array_slice создайте из него массив $result с элементами 2, 3, 4. </h2>
<?php
function nz_todo13() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = array_slice( $arr, 1, 3 );

	var_dump( $result );
}

nz_todo13();
?>

<!-- 14 -->
<h2>14. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice преобразуйте массив в [1, 4, 5]. </h2>
<?php
function nz_todo14() {
	$arr = array( 1, 2, 3, 4, 5 );

	array_splice( $arr, 1, 2 );
	var_dump( $arr );
}

nz_todo14();
?>

<!-- 15 -->
<h2>15. Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice запишите в новый массив элементы [2, 3, 4]. </h2>
<?php
function nz_todo15() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = array_splice( $arr, 1, 3 );

	var_dump( $result );
}

nz_todo15();
?>

<!-- 16 -->
<h2>16.Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него массив [1, 2, 3, 'a', 'b', 'c', 4, 5]. </h2>
<?php
function nz_todo16() {
	$arr = array( 1, 2, 3, 4, 5 );
	array_splice( $arr, 3, 0, array( 'a', 'b', 'c' ) );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo16();
?>

<!-- 17 -->
<h2>17.Дан массив [1, 2, 3, 4, 5]. С помощью функции array_splice сделайте из него массив [1, 'a', 'b', 2, 3, 4, 'c', 5, 'e']. </h2>
<?php
function nz_todo17() {
	$arr = array( 1, 2, 3, 4, 5 );
	array_splice( $arr, 1, 0, array( 'a', 'b' ) );
	array_splice( $arr, 6, 0, array( 'c' ) );
	array_splice( $arr, 8, 0, array( 'e' ) );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo17();
?>

<!-- 18 -->
<h2>18. Дан массив 'a'=>1, 'b'=>2, 'c'=>3'. Запишите в массив $keys ключи из этого массива, а в $values – значения. </h2>
<?php
function nz_todo18() {
	$arr    = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);
	$keys   = array_keys( $arr );
	$values = array_values( $arr );

	echo '<pre>';
	print_r( $keys );
	print_r( $values );
	echo '</pre>';
}

nz_todo18();
?>

<!-- 19 -->
<h2>19.  Даны два массива: ['a', 'b', 'c'] и [1, 2, 3]. Создайте с их помощью массив 'a'=>1, 'b'=>2, 'c'=>3'.</h2>
<?php
function nz_todo19() {
	$keys   = array( 'a', 'b', 'c' );
	$values = array( 1, 2, 3 );
	$result = array_combine( $keys, $values );

	echo '<pre>';
	print_r( $result );
	echo '</pre>';
}

nz_todo19();
?>

<!-- 20 -->
<h2>20. Дан массив 'a'=>1, 'b'=>2, 'c'=>3. Поменяйте в нем местами ключи и значения.</h2>
<?php
function nz_todo20() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
	);

	echo '<pre>';
	print_r( array_flip( $arr ) );
	echo '</pre>';
}

nz_todo20();
?>

<!-- 21 -->
<h2>21.Дан массив с элементами 1, 2, 3, 4, 5. Сделайте из него массив с элементами 5, 4, 3, 2, 1. </h2>
<?php
function nz_todo21() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo '<pre>';
	print_r( array_reverse( $arr ) );
	echo '</pre>';
}

nz_todo21();
?>


<!-- 22 -->
<h2>22. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-'.</h2>
<?php
function nz_todo22() {
	$arr = array( 'a', '-', 'b', '-', 'c', '-', 'd' );

	echo array_search( '-', $arr );
}

nz_todo22();
?>

<!-- 23 -->
<h2>23. Дан массив ['a', '-', 'b', '-', 'c', '-', 'd']. Найдите позицию первого элемента '-' и удалите его с помощью функции array_splice.</h2>
<?php
function nz_todo23() {
	$arr    = array( 'a', '-', 'b', '-', 'c', '-', 'd' );
	$arr2   = array_search( '-', $arr );
	$result = array_splice( $arr, 1, 1 );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo23();
?>

<!-- 24 -->
<h2>24. Дан массив ['a', 'b', 'c', 'd', 'e']. Поменяйте элемент с ключом 0 на '!', а элемент с ключом 3 - на '!!'.</h2>
<?php
function nz_todo24() {
	$arr = array( 'a', 'b', 'c', 'd', 'e' );

	echo '<pre>';
	print_r(
		array_replace(
			$arr,
			array(
				0 => '!',
				3 => '!!',
			)
		)
	);
	echo '</pre>';
}

nz_todo24();
?>

<!-- 25 -->
<h2>25. Дан массив '3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'. Попробуйте на нем различные типы сортировок.</h2>
<?php
function nz_todo25( $arr, $arr2, $arr3 ) {
	sort( $arr );
	rsort( $arr2 );
	ksort( $arr3 );

	echo '<pre>';
	print_r( $arr );
	print_r( $arr2 );
	print_r( $arr3 );
	echo '</pre>';
}

nz_todo25(
	array(
		'3' => 'a',
		'1' => 'c',
		'2' => 'e',
		'4' => 'b',
	),
	array(
		'3' => 'a',
		'1' => 'c',
		'2' => 'e',
		'4' => 'b',
	),
	array(
		'3' => 'a',
		'1' => 'c',
		'2' => 'e',
		'4' => 'b',
	)
);
?>

<!-- 26 -->
<h2>26. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный ключ из данного массива.</h2>
<?php
function nz_todo26() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
		'd' => 4,
		'e' => 5,
	);

	echo array_rand( $arr );
}

nz_todo26();
?>

<!-- 27 -->
<h2>27. Дан массив с элементами 'a'=>1, 'b'=>2, 'c'=>3. Выведите на экран случайный элемент данного массива.</h2>
<?php
function nz_todo27() {
	$arr = array(
		'a' => 1,
		'b' => 2,
		'c' => 3,
		'd' => 4,
		'e' => 5,
	);
	$key = array_rand( $arr );

	echo $arr[ $key ];
}

nz_todo27();
?>

<!-- 28 -->
<h2>28. Дан массив $arr. Перемешайте его элементы в случайном порядке.</h2>
<?php
function nz_todo28() {
	$arr = array( 1, 2, 3, 4, 5, 6, 7 );
	shuffle( $arr );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo28();
?>

<!-- 29 -->
<h2>29.Заполните массив числами от 1 до 25 с помощью range, а затем перемешайте его элементы в случайном порядке.</h2>
<?php
function nz_todo29() {
	$arr = range( 1, 25 );
	shuffle( $arr );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo29();
?>

<!-- 30 -->
<h2>30.Создайте массив, заполненный буквами от 'a' до 'z' так, чтобы буквы шли в случайном порядке и не повторялись.</h2>
<?php
function nz_todo30() {
	$arr = range( 'a', 'z' );
	shuffle( $arr );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo30();
?>

<!-- 31 -->
<h2>31.Создайте массив, заполненный буквами от 'a' до 'z' так, чтобы буквы шли в случайном порядке и не повторялись.</h2>
<?php
function nz_todo31() {
	$arr = range( 'a', 'z' );
	shuffle( $arr );
	$arr = implode( '', $arr );
	echo substr( $arr, 0, 6 );

}

nz_todo31();
?>

<!-- 32 -->
<h2>32. Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Удалите из него повторяющиеся элементы.</h2>
<?php
function nz_todo32() {
	$arr = array( 'a', 'b', 'c', 'b', 'a' );
	$str = array_unique( $arr );

	echo '<pre>';
	print_r( $str );
	echo '</pre>';
}

nz_todo32();
?>

<!-- 33 -->
<h2>33. Дан массив с элементами 1, 2, 3, 4, 5. Выведите на экран его первый и последний элемент, 
причем так, чтобы в исходном массиве они исчезли.</h2>
<?php
function nz_todo33() {
	$arr = array( 1, 2, 3, 4, 5 );

	echo '<pre>';
	print_r( array_shift( $arr ) );
	echo '</pre>';
}

nz_todo33();
?>

<!-- 34 -->
<h2>34.Дан массив с элементами 1, 2, 3, 4, 5. Добавьте ему в начало элемент 0, а в конец - элемент 6.</h2>
<?php
function nz_todo34() {
	$arr = array( 1, 2, 3, 4, 5 );
	array_unshift( $arr, 0 );
	array_push( $arr, 6 );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo34();
?>

<!-- 35 -->
<h2>35.  Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8. 
С помощью цикла и функций array_shift и array_pop выведите на экран его элементы в следующем порядке: 18273645</h2>
<?php
function nz_todo35() {
	$arr = array( 1, 2, 3, 4, 5, 6, 7, 8 );

	$str = '';
	while ( count( $arr ) > 0 ) {
		$str .= array_shift( $arr );
		$str .= array_pop( $arr );
	}

	echo $str;

}

nz_todo35();
?>

<!-- 36 -->
<h2>36. Дан массив с элементами 'a', 'b', 'c'. Сделайте из него массив с элементами 'a', 'b', 'c', '-', '-', '-'.</h2>
<?php
function nz_todo36() {
	$arr    = array( 'a', 'b', 'c' );
	$result = array_pad( $arr, 6, '-' );

	echo '<pre>';
	print_r( $result );
	echo '</pre>';
}

nz_todo36();
?>

<!-- 37 -->
<h2>37. Заполните массив 10-ю буквами 'x'</h2>
<?php
function nz_todo37() {
	echo '<pre>';
	print_r( array_fill( 0, 10, 'x' ) );
	echo '</pre>';
}

nz_todo37();
?>

<!-- 38 -->
<h2>38. Создайте массив, заполненный целыми числами от 1 до 20. 
С помощью функции array_chunk разбейте этот массив на 5 подмассивов ([1, 2, 3, 4]; [5, 6, 7, 8] и т.д.).</h2>
<?php
function nz_todo38() {
	$arr = range( 1, 20 );

	echo '<pre>';
	print_r( array_chunk( $arr, 4 ) );
	echo '</pre>';
}

nz_todo38();
?>

<!-- 39 -->
<h2>39.Дан массив с элементами 'a', 'b', 'c', 'b', 'a'. Подсчитайте сколько раз встречается каждая из букв. </h2>
<?php
function nz_todo39() {
	$arr = array( 'a', 'b', 'c', 'b', 'b', 'b', 'a' );

	echo '<pre>';
	print_r( array_count_values( $arr ) );
	echo '</pre>';
}

nz_todo39();
?>

<!-- 40 -->
<h2>40.Дан массив с элементами 1, 2, 3, 4, 5. Создайте новый массив, в котором будут лежать квадратные корни данных элементов. </h2>
<?php
function nz_todo40() {
	$arr = [1, 2, 3, 4, 5];
	$result = array_map('sqrt', $arr);

	echo '<pre>';
	print_r($result);
	echo '</pre>';
}

nz_todo40();
?>

<!-- 41 -->
<h2>41. Дан массив с элементами '<b>php</b>', '<i>html</i>'. Создайте новый массив, в котором из элементов будут удалены теги. </h2>
<?php
function nz_todo41() {
	

	echo '<pre>';
	print_r($result);
	echo '</pre>';
}

nz_todo41();
?>

