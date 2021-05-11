<?php
ob_start();
?>

<!-- 1 -->
<h2>1. По заходу на страницу запишите в куку с именем test текст '123'. 
обновите страницу и выведите содержимое этой куки на экран.</h2>
<?php
/**
 * nz_todo1
 *
 * @return int
 */
function nz_todo1() {
	if ( empty( $_COOKIE['test1'] ) ) {
		setcookie( 'test1', '123' );
	} else {
		echo $_COOKIE['test1'];
	}
}

nz_todo1();
?>

<!-- 2 -->
<h2>2. Удалите куку с именем test.</h2>
<?php
/**
 * nz_todo1
 */
function nz_todo2() {
	if ( ! empty( $_COOKIE['test'] ) ) {
		setcookie( 'test', '123', time() );
	} else {
		echo $_COOKIE['test'];
	}
}

nz_todo2();
?>

<!-- 3 -->
<h2>3.Сделайте счетчик посещения сайта посетителем. 
Каждый раз, заходя на сайт, он должен видеть надпись: 'Вы посетили наш сайт % раз!'.</h2>
<?php
/**
 * nz_todo3
 *
 * @return string
 */
function nz_todo3() {
	$num = ++$_COOKIE['visits'];
	setcookie( 'visits', $num );

	echo 'Вы посетили наш сайт ' . $num . ' раз!';
}

nz_todo3();
?>

<!-- 4 -->
<h2>4. Спросите дату рождения пользователя. 
При следующем заходе на сайт напишите сколько дней осталось до его дня рождения. 
Если сегодня день рождения пользователя - поздравьте его!</h2>
<?php
function nz_todo4() {
	if ( empty( $_COOKIE['birthday-user'] ) ) {
		?>

		<form action="" method="get">
			<input type="date" name="date_4" id="">
			<input type="submit">
		</form>

		<?php
		if ( ! empty( $_GET['date_4'] ) ) {
			setcookie( 'birthday-user', htmlspecialchars( $_GET['date_4'] ) );
		}
	} else {
		$arr  = explode( '-', $_COOKIE['birthday-user'] );
		$days = round( strtotime( $arr[2] . '-' . $arr[1] . '-' . date( 'Y' ) ) - strtotime( date( 'd-m-Y' ) ) );
		$days = intval( $days / ( 3600 * 24 ) );

		if ( 0 === $days ) {
			echo 'Happy birthday';
			return;
		}

		if ( 0 > $days ) {
			$days += 365;
		}

		echo $days;
	}
}

nz_todo4();
?>
