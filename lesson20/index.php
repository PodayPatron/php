<!-- 1 -->
<h2>1.Спросите у пользователя имя с помощью формы. Сделайте чекбокс: если он отмечен, 
то поприветствуйте пользователя, если не отмечен - попрощайтесь с пользователем. </h2>

<form action="" method="GET">
	<input type="text" name="name" placeholder="Name">
	<input type="checkbox" name="check" value="1">
	<input type="submit">
</form>

<?php
function nz_todo1() {
	$name = $_GET['name'];

	if ( ! empty( $_GET['check'] ) ) {
		echo 'Hello: ' . $name;

	} elseif ( ! $_GET['name'] && ! $_GET['check'] ) {
		echo 'Goodbye';
	}
}

nz_todo1();
?>

<!-- 2 -->
<h2>2.Спросите у пользователя, какие из языков он знает: html, css, php, javascript. Выведите на экран те языки, которые знает пользователь</h2>

<form action="" method="get">
	<input type="checkbox" name="lang[]" value="html"><span>html</span><br><br>
	<input type="checkbox" name="lang[]" value="css"><span>css</span><br><br>
	<input type="checkbox" name="lang[]" value="php"><span>php</span><br><br>
	<input type="checkbox" name="lang[]" value="javascript"><span>javascript</span><br><br>
	<input type="submit">
</form>

<?php
function nz_todo2() {
	if ( isset( $_GET['lang'] ) ) {
		echo 'Вы знаете: ' . implode( ',', $_GET['lang'] );
	}
}

nz_todo2();
?>

<!-- 3 -->
<h2>3. Спросите у пользователя знает ли он PHP с помощью двух radio-кнопок. 
Выведите результат на экран. Сделайте так, чтобы по умолчанию один из вариантов был уже отмечен.</h2>

<form action="" method="GET">
	<input type="checkbox" name="todo3" value="yes"><span>yes</span><br><br>
	<input type="checkbox" checked="checked" name="todo3_2" value="no"><span>no</span><br><br>
	<input type="submit">
</form>

<?php
function nz_todo3() {
	$name = 'php';

	if ( ! empty( $_GET['todo3'] ) ) {
		echo 'You know: ' . $name;
	} elseif ( ! empty( $_GET['todo3_2'] ) ) {
		echo 'You don`t know: ' . $name;
	}
}
nz_todo3();
?>

<!-- 4 -->
<h2>4. Спросите у пользователя его возраст с помощью нескольких radio-кнопок.
Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.</h2>

<form action="" method="GET">
	<input type="radio" name="age" value="17"><span>17 years</span><br><br>
	<input type="radio" name="age" value="24"><span>24 years</span><br><br>
	<input type="radio" name="age" value="45"><span>45 years</span><br><br>
	<input type="submit">
</form>

<?php
function nz_todo4() {
	if ( ! empty( $_GET['age'] ) ) {

		if ( $_GET['age'] == 17 ) {
			echo 'менее 20 лет';
		} elseif ( $_GET['age'] == 24 ) {
			echo ' 20-25 лет';
		} elseif ( $_GET['age'] == 45 ) {
			echo 'более 30';
		}
	}
}
nz_todo4();
?>

<!-- 5 -->
<h2>5. Спросите у пользователя его возраст с помощью нескольких select -кнопок.
Варианты ответа сделайте такими: менее 20 лет, 20-25, 26-30, более 30.</h2>

<form action="" method="GET">
	<select name="select" id="">
		<option value="17">17</option>
		<option value="24">24</option>
		<option value="35">35</option>
		<option value="45">45</option>
	</select>
	<input type="submit">
</form>

<?php
function nz_todo5() {
	if ( ! empty( $_GET['select'] ) ) {

		if ( $_GET['select'] <= 20 ) {
			echo 'менее 20 лет';
		} elseif ( $_GET['select'] >= 20 && $_GET['select'] <= 25 ) {
			echo ' 20-25 лет';
		} elseif ( $_GET['select'] >= 30 ) {
			echo 'более 30';
		}
	}
}
nz_todo5();
?>

<!-- 6 -->
<h2>6.  Спросите у пользователя с помощью мультиселекта, 
какие из языков он знает: html, css, php, javascript. 
Выведите на экран те языки, которые знает пользователь..</h2>

<form action="" method="GET">
	<select name="select2[]" id="" multiple="true">
		<option value="html">html</option>
		<option value="css">css</option>
		<option value="php">php</option>
		<option value="javascript">javascript</option>
	</select>
	<input type="submit">
</form>

<?php
function nz_todo6() {
	if ( isset( $_GET['select2'] ) ) {
		echo 'Вы знаете: ' . implode( ',', $_GET['select2'] );
	}
}
nz_todo6();
?>

<!-- 7 -->
<h2>7. Сделайте функцию, которая создает обычный текстовый инпут.
Функция должна иметь следующие параметры: type, name, value.</h2>
<?php
function nz_todo7() {
	function input( $type, $name, $value ) {
		return '<input type="' . $type . '" name="' . $name . '" value="' . $value . '">';
	}

	echo input( 'text', 'input', '1' );
}

nz_todo7();
?>

<!-- 8 -->
<h2>8.Модифицируйте функцию из предыдущей задачи так, 
чтобы она сохраняла значение инпута после отправки </h2>
<form action="">
<?php
function input2( $name, $value ) {
	if ( isset( $_GET[ $name ] ) ) {
		$value = $_GET[ $name ];
	}

	return '<input type="text" name="' . $name . '" value="' . $value . '">';
}
	
echo input2('input2', '1' );
?>
<input type="submit" value="Send">
</form>