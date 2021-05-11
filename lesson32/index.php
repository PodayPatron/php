<?php
session_start();
ob_start();
?>


<!-- 1 -->
<h2>1.По заходу на страницу запишите в сессию текст 'test'. 
Затем обновите страницу и выведите содержимое сессии на экран. </h2>
<?php
/**
 * nz_todo1
 *
 * @return string
 */
function nz_todo1() {
	if ( ! $_SESSION['text'] ) {
		$_SESSION['text'] = 'Text';
	} else {
		echo $_SESSION['text'];
		unset( $_SESSION['text'] );
	}
}

nz_todo1();
?>

<!-- 3 -->
<h2>3.Сделайте счетчик обновления страницы пользователем. Данные храните в сессии. 
Скрипт должен выводить на экран количество обновлений. При первом заходе на страницу 
он должен вывести сообщение о том, что вы еще не обновляли страницу. </h2>
<?php
/**
 * nz_todo3
 *
 * @return int
 */
function nz_todo3() {
	if ( ! isset( $_SESSION['counter'] ) ) {
		$_SESSION['counter'] = 1;
	} else {
		$_SESSION['counter'] += 1;
	}

	echo $_SESSION['counter'];
}

nz_todo3();
?>

<!-- 4 -->
<h2>4.Сделайте две страницы:index.php и test.php. При заходе на index.php спросите 
с помощью формы страну пользователя, запишите ее в сессию 
(форма при этом должна отправится на эту же страницу).
Пусть затем пользовайтель задет на страницу test.php - выведите там страну пользователя. </h2>

<form action="" method="GET">
	<input type="text" placeholder="Enter your Country" name="input" id="">
	<input type="submit" value="Search">
</form>

<?php
/**
 * nz_todo4
 *
 * @return string
 */
function nz_todo4() {
	if ( ! empty( $_GET['input'] ) ) {
		$_SESSION['country'] = htmlspecialchars( $_GET['input'] );

		header( 'Location: test.php' );
	}
}

nz_todo4();
?>

<!-- 5 -->
<h2>5. Запишите в сессию время захода пользователя на сайт. 
При обновлении страницы выводите сколько секунд назад пользователь зашел на сайт. </h2>
<?php
/**
 * nz_todo5
 *
 * @return int
 */
function nz_todo5() {
	if ( empty( $_SESSION['time'] ) ) {
		$_SESSION['time'] = time();
	} else {
		echo time() - $_SESSION['time'];
	}
}

nz_todo5();
?>


<!-- 6 -->
<h2>6. Спросите у пользователя email с помощью формы. 
Затем сделайте так, чтобы в другой форме (поля: имя, фамилия, пароль, email)
при ее открытии поле email было автоматически заполнено. </h2>

<?php
/**
 * nz_todo6
 *
 * @return string
 */
function nz_todo6() {
	if ( empty( $_SESSION['email-s'] ) ) {
		?>
		<form action="" method="get">
			<input type="email" name="email">
			<input type="submit">
		</form>
		<?php

		if ( ! empty( $_GET['email'] ) ) {
			$_SESSION['email-s'] = htmlspecialchars( $_GET['email'] );
		}
	}
}

nz_todo6();
?>

<form action="" method="GET">
	<input placeholder="Name" type="text" name="" id="">
	<input placeholder="Surname" type="text" name="" id="">
	<input placeholder="Email" type="text" name="" id="" value="<?php echo $_SESSION['email-s'] ?>">
	<input placeholder="Password" type="password" name="" id="">
	<input type="submit" value="Send">
</form>
