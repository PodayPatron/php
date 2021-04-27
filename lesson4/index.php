<!-- 1 -->
<h2> Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.</h2>
<?php
function nz_todo1() {
	$arr = array( 'html', 'css', 'php', 'js', 'jq' );

	foreach ( $arr as $el ) {
		echo $el . '</br>';
	}
}

nz_todo1();
?>

<!-- 2 -->
<h2>Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.</h2>
<?php
function nz_todo2() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = 0;

	foreach ( $arr as $el ) {
		$result += $el;
	}

	echo $result;
}

nz_todo2();
?>

<!-- 3 -->
<h2>Дан массив с элементами 1, 2, 3, 4, 5.
С помощью цикла foreach найдите сумму квадратов элементов этого массива. 
Результат запишите переменную $result.</h2>
<?php
function nz_todo3() {
	$arr    = array( 1, 2, 3, 4, 5 );
	$result = 0;

	foreach ( $arr as $el ) {
		$result += $el ** 2;
	}

	echo $result;
}

nz_todo3();
?>

<!-- 4 -->
<h2>Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.</h2>
<?php
function nz_todo4() {
	$arr = array(
		'green' => 'зеленый',
		'red'   => 'красный',
		'blue'  => 'голубой',
	);

	foreach ( $arr as $key => $val ) {
		echo $key . ' - ' . $val . '</br>';
	}
}

nz_todo4();
?>
