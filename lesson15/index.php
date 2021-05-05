<!-- 1 -->
<h2>1.С помощью цикла for сформируйте строку '123456789' и запишите ее в переменную $str </h2>
<?php
function nz_todo1() {
	$str = '';
	for ( $i = 1; $i <= 9; $i++ ) {
		$str = $i;
		echo $str;
	}
}

nz_todo1();
?>

<!-- 2 -->
<h2>2.С помощью цикла for сформируйте строку '987654321' и запишите ее в переменную $str. </h2>
<?php
function nz_todo2() {
	$str = '';
	for ( $i = 9; $i >= 1; $i-- ) {
		$str = $i;
		echo $str;
	}
}

nz_todo2();
?>


<!-- 3 -->
<h2>3.С помощью цикла for сформируйте строку '-1-2-3-4-5-6-7-8-9-' и запишите ее в переменную $str. </h2>
<?php
function nz_todo3() {
	$str = '-';
	for ( $i = 1; $i <= 9; $i++ ) {
		$str .=  $i . '-';
	}

	echo $str;
}

nz_todo3();
?>

<!-- 4 -->
<h2>4. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5: </h2>
<?php
function nz_todo4() {
	for ( $i = 1; $i <= 20; $i++ ) {
		echo str_repeat( 'x', $i ) . '<br>';
	}
}

nz_todo4();
?>

<!-- 5 -->
<h2>5.  </h2>
<?php
function nz_todo5() {
	for ( $i = 1; $i <= 9; $i++ ) {

		for ( $n = 0; $n < $i; $n++ ) {
			echo $i;
		}

		echo '<br>';
	}
}

nz_todo5();
?>

<!-- 6 -->
<h2>6.  </h2>
<?php
function nz_todo6() {
	for ( $i = 1; $i <= 10; $i++ ) {
		echo str_repeat( 'x', ++$i ) . '<br>';
	}
}

nz_todo6();
?>




