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
