<!-- 1 -->
<h2>1.Выведите текущее время в формате timestamp. </h2>
<?php
function nz_todo1() {
	echo time();
}

nz_todo1();
?>

<!-- 2 -->
<h2>2. Выведите 1 марта 2025 года в формате timestamp.</h2>
<?php
function nz_todo2() {
	echo mktime( 3, 1, 2031 );
}

nz_todo2();
?>

<!-- 3 -->
<h2>3. Выведите 31 декабря текущего года в формате timestamp. 
Скрипт должен работать независимо от года, в котором он запущен.</h2>
<?php
function nz_todo3() {
	echo mktime( 0, 0, 0, 12, 31 );
}

nz_todo3();
?>

<!-- 4 -->
<h2>4. Найдите количество секунд, прошедших с 13:12:59 
15-го марта 2000 года до настоящего момента времени.</h2>
<?php
function nz_todo4() {
	echo mktime( 13, 12, 59, 3, 15, 2000 );
}

nz_todo4();
?>

<!-- 5 -->
<h2>5. Найдите количество целых часов, прошедших с 7:23:48 
текущего дня до настоящего момента времени.</h2>
<?php
function nz_todo5() {
	$sec   = time() - mktime( 7, 23, 48 );
	$hours = $sec / ( 60 * 60 );

	echo $hours;
}

nz_todo5();
?>

<!-- 6 -->
<h2>6. Выведите на экран текущий год, месяц, день, час, минуту, секунду.</h2>
<?php
function nz_todo6() {
	echo date( 'Y-m-d H:i:s' );
}

nz_todo6();
?>

<!-- 7 -->
<h2>7. Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'.</h2>
<?php
function nz_todo7() {
	echo date( 'Y-m-d', mktime( 0, 0, 0, 12, 31, 2025 ) ) . '</br>';
	echo date( 'd.m.Y', mktime( 0, 0, 0, 12, 31, 2025 ) ) . '</br>';
	echo date( 'd.m.y H:i:s', mktime( 12, 59, 59, 12, 31, 2025 ) );
}

nz_todo7();
?>

<!-- 8 -->
<h2>8. С помощью функций mktime и date выведите 12 февраля 2025 года в формате '12.02.2025'.</h2>
<?php
function nz_todo8() {
	echo date( 'd.m.Y', mktime( 0, 0, 0, 2, 13, 2015 ) );
}

nz_todo8();
?>

<!-- 9 -->
<h2>9.Создайте массив дней недели $week. 
Выведите на экран название текущего дня недели с помощью массива $week и функции date. 
Узнайте какой день недели был 06.06.2006, в ваш день рождения. </h2>
<?php
function nz_todo9() {
	$week    = array( 'Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat' );
	$day     = date( 'w' );
	$day_old = date( 'w', mktime( 0, 0, 0, 6, 6, 2006 ) );

	echo $week[ $day ] . '</br>';
	echo $week[ $day_old ];
}

nz_todo9();
?>

<!-- 10 -->
<h2>10. Создайте массив месяцев $month.
Выведите на экран название текущего месяца с помощью массива $month и функции date. </h2>
<?php
function nz_todo10() {
	$month = array( '', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
	$today = date( 'n' );

	echo $month[ $today ];
}

nz_todo10();
?>

<!-- 11 -->
<h2>11. Найдите количество дней в текущем месяце.
Скрипт должен работать независимо от месяца, в котором он запущен. </h2>
<?php
function nz_todo11() {
	echo date( 't' );
}

nz_todo11();
?>

<!-- 12 -->
<h2>12. Сделайте поле ввода, в которое пользователь вводит год (4 цифры), 
а скрипт определяет високосный ли год. </h2>

<form action="" method="GET">
	<input type="numbers" name="year"><br><br>
	<input type="submit">
</form>

<?php
function nz_todo12() {
	if ( ! empty( $_GET['year'] ) ) {

		if ( date( 'L', mktime( 0, 0, 0, 1, 1, $_GET['year'] ) ) ) {
			echo 'вис';
		} else {
			echo 'не вис';
		}
	}
}

nz_todo12();
?>

<!-- 13 -->
<h2>13.Сделайте форму, которая спрашивает дату в формате '31.12.2025'. С помощью функций mktime и
explode переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату. </h2>
<?php
function nz_todo13() {
	$week = array( 'Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat' );
	$date = '13.12.2025';
	$val  = explode( '.', $date );
	$val2 = mktime( 0, 0, 0, $val[1], $val[0], $val[2] );
	$day  = date( 'w', $val2 );

	echo $week[ $day ];
}

nz_todo13();
?>

<!-- 14 -->
<h2>14.Сделайте форму, которая спрашивает дату в формате '2025-12-31'.
С помощью функций mktime и explode переведите эту дату в формат timestamp.
Узнайте месяц (словом) за введенную дату. </h2>
<?php
function nz_todo14() {
	$months = array( '', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );
	$date   = '2025-12-31';
	$val    = explode( '-', $date );
	$val2   = mktime( 0, 0, 0, $val[1], $val[1], $val[0] );
	$month  = date( 'n', $val2 );

	echo $months[ $month ];
}

nz_todo14();
?>

<!-- 15 -->
<h2>15. Сделайте форму, которая спрашивает две даты в формате '2025-12-31'. 
Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше.
Выведите ее на экран. </h2>

<form action="" method="GET">
	<input type="numbers" name="date15"><br><br>
	<input type="numbers" name="date16"><br><br>
	<input type="submit">
</form>

<?php
function nz_todo15() {
	$date1 = $_GET['date15'];
	$date2 = $_GET['date16'];

	if ( $date1 > $date2 ) {
		echo "$date1 > $date2";
	} else {
		echo "$date1 < $date2";
	}
}

nz_todo15();
?>

<!-- 16 -->
<h2>16. Дана дата в формате '2025-12-31'. 
С помощью функции strtotime и функции date преобразуйте ее в формат '31-12-2025'. </h2>

<form action="" method="GET">
	<input type="numbers" name="todo16"><br><br>
	<input type="submit">
</form>

<?php
function nz_todo16() {
	$date = $_GET['todo16'];

	echo date( 'd-m-Y', strtotime( $date ) );
}

nz_todo16();
?>

<!-- 17 -->
<h2>17. Сделайте форму, которая спрашивает дату-время в формате '2025-12-31T12:13:59'.
С помощью функции strtotime и функции date преобразуйте ее в формат '12:13:59 31.12.2025'. </h2>

<form action="" method="GET">
	<input type="numbers" name="todo17"><br><br>
	<input type="submit">
</form>

<?php
function nz_todo17() {
	$date = $_GET['todo17'];

	echo date( 'H:i:s d.m.Y', strtotime( $date ) );
}

nz_todo17();
?>

<!-- 18 -->
<h2>18. В переменной $date лежит дата в формате '2025-12-31'.
Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня. </h2>

<form action="" method="GET">
	<input type="numbers" name="todo18"><br><br>
	<input type="submit">
</form>

<?php
function nz_todo18() {
	$date = $_GET['todo18'];

	echo date( 'd.m.Y', strtotime( "$date +2 day" ) ) . '<br>';
	echo date( 'd.m.Y', strtotime( "$date +1 month 3 days" ) ) . '<br>';
	echo date( 'd.m.Y', strtotime( "$date +1 year" ) ) . '<br>';

}

nz_todo18();
?>

<!-- 19 -->
<h2> 19.Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году. </h2>
<?php
function nz_todo19() {
	$newyear = mktime( 0, 0, 0, 1, 1, date( 'Y' ) + 1 );
	$sec     = $newyear - time();
	$days    = floor( $sec / ( 60 * 60 * 24 ) );

	echo "До нового года: $days дней";
}

nz_todo19();
?>

<!-- 20 -->
<h2> 20.Сделайте форму с одним полем ввода, в которое пользователь вводит год. 
Найдите все пятницы 13-е в этом году. Результат выведите в виде массива дат. </h2>

<form action="" method="GET">
	<input type="numbers" name="todo20"><br><br>
	<input type="submit">
</form>

<?php
function nz_todo20() {
	$year   = $_GET['todo20'];
	$friday = 0;

	for ( $month = 1; $month <= 12; $month++ ) {
		$days_in_month = date( 't', mktime( 0, 0, 0, $month, 1, $year ) );

		for ( $day = 1; $day <= $days_in_month; $day++ ) {
			$d = date( 'w', mktime( 0, 0, 0, $month, $day, $year ) );

			if ( $d == 5 ) {
				if ( date( 'd', mktime( 0, 0, 0, $month, $day, $year ) ) == 13 ) {
					$friday++;
					$friday_date .= date( 'd.m.Y', mktime( 0, 0, 0, $month, $day, $year ) ) . '<br>';
					
					echo $friday_date;
				}
			}
		}
	}

}

nz_todo20();
?>

<!-- 21 -->
<h2> 21. Узнайте какой день недели был 100 дней назад. </h2>
<?php
function nz_todo21() {
	$week  = array( 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' );
	$today = date_create( date( 'Y-m-d' ) );

	date_modify( $today, '-100 day' );

	$day     = intval( strtotime( date_format( $today, 'Y-m-d' ) ) );
	$num_day = date( 'w', $day );

	echo $week[ $num_day ];
}

nz_todo21();
?>
