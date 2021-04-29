<!-- 1 -->
<h2>1. Дана строка 'php'. Сделайте из нее строку 'PHP'.</h2>
<?php
function nz_todo1() {
	echo strtoupper( 'php' );
}

nz_todo1();
?>

<!-- 2 -->
<h2>2. Дана строка 'PHP'. Сделайте из нее строку 'php'.</h2>
<?php
function nz_todo2() {
	echo strtolower( 'php' );
}

nz_todo2();
?>

<!-- 3 -->
<h2>3. Дана строка 'london'. Сделайте из нее строку 'London'.</h2>
<?php
function nz_todo3() {
	echo ucfirst( 'london' );
}

nz_todo3();
?>

<!-- 4 -->
<h2>4.  Дана строка 'London'. Сделайте из нее строку 'london'.</h2>
<?php
function nz_todo4() {
	echo lcfirst( 'London' );
}

nz_todo4();
?>

<!-- 5 -->
<h2>5. Дана строка 'london is the capital of great britain'. 
Сделайте из нее строку 'London Is The Capital Of Great Britain'.</h2>
<?php
function nz_todo5() {
	echo ucwords( 'london is the capital of great britain' );
}

nz_todo5();
?>

<!-- 6 -->
<h2>6.Дана строка 'LONDON'. Сделайте из нее строку 'London'.</h2>
<?php
function nz_todo6() {
	$str  = 'LONDON';
	$str2 = strtolower( $str );

	echo ucfirst( $str2 );
}

nz_todo6();
?>

<!-- 7 -->
<h2>7. Дана строка 'html css php'. Найдите количество символов в этой строке.</h2>
<?php
function nz_todo7() {
	echo strlen( 'html css php' );
}

nz_todo7();
?>

<!-- 8 -->
<h2>8.Дана переменная $password, в которой хранится пароль пользователя. Если количество символов пароля больше 5-ти и меньше 10-ти,
то выведите пользователю сообщение о том, что пароль подходит, иначе сообщение о том, что нужно придумать другой пароль.</h2>
<?php
function nz_todo8() {
	$password = 'asdasda';

	if ( strlen( $password ) > 5 && strlen( $password ) < 10 ) {
		echo 'Podhodit!';
	} else {
		echo 'Pridumai drugoi';
	}
}

nz_todo8();
?>

<!-- 9 -->
<h2>9. Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.</h2>
<?php
function nz_todo9() {
	echo substr( 'html css php', 9 ) . '</br>';
	echo substr( 'html css php', 0, 5 ) . '</br>';
	echo substr( 'html css php', 5, 3 );
}

nz_todo9();
?>

<!-- 10 -->
<h2>10. Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.</h2>
<?php
function nz_todo10() {
	echo substr( 'html css php', 9 );
}

nz_todo10();
?>

<!-- 11 -->
<h2>11. Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.</h2>
<?php
function nz_todo11() {
	$str = 'http://awdawdawd.com';

	if ( 'http://' === substr( $str, 0, 7 ) ) {
		echo 'da';
	} else {
		echo 'net';
	}
}

nz_todo11();
?>

<!-- 12 -->
<h2>12. Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.</h2>
<?php
function nz_todo12() {
	$str = 'https://awdawdawd.com';

	if ( 'http://' === substr( $str, 0, 7 ) || 'https://' === substr( $str, 0, 8 ) ) {
		echo 'da';
	} else {
		echo 'net';
	}
}

nz_todo12();
?>

<!-- 13 -->
<h2>13. Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.</h2>
<?php
function nz_todo13() {
	$str = '1.png';

	if ( '.png' === substr( $str, 1, 4 ) ) {
		echo 'da';
	} else {
		echo 'net';
	}
}

nz_todo13();
?>

<!-- 14 -->
<h2>14. Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.</h2>
<?php
function nz_todo14() {
	$str = '1.jpg';

	if ( '.png' === substr( $str, 1, 4 ) || '.jpg' === substr( $str, 1, 4 ) ) {
		echo 'da';
	} else {
		echo 'net';
	}
}

nz_todo14();
?>

<!-- 15 -->
<h2>15. Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5 символов,
добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.</h2>
<?php
function nz_todo15() {
	$str = '1.jpgfghj';

	if ( strlen( $str ) > 5 ) {
		echo substr( $str, 5 );
	} else {
		echo $str;
	}
}

nz_todo15();
?>

<!-- 16 -->
<h2>16. Дана строка '31.12.2013'. Замените все точки на дефисы.</h2>
<?php
function nz_todo16() {
	$str = '31.12.2013';

	echo str_replace( '.', '-', $str );
}

nz_todo16();
?>

<!-- 17 -->
<h2>17. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.</h2>
<?php
function nz_todo17() {
	$str = 'abc';
	$str = str_replace( 'a', '1', $str );
	$str = str_replace( 'b', '2', $str );
	$str = str_replace( 'c', '3', $str );
	echo $str;
}

nz_todo17();
?>

<!-- 18 -->
<h2>18. </h2>
<?php
function nz_todo18() {
	$str = '1a2b3c4b5d6e7f8g9h0';
	echo str_replace( array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 0 ), array( '' ), $str );
}

nz_todo18();
?>

<!-- 19 -->
<h2>19. Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.
Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).</h2>
<?php
function nz_todo19() {
	$str = 'aabbcc';

	echo strtr(
		'aabbcc',
		array(
			'a' => 1,
			'b' => 2,
			'c' => 3,
		)
	);
}

nz_todo19();
?>

<!-- 20 -->
<h2>20. Дана строка $str. Вырежите из нее подстроку с 3-го символа 
(отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.</h2>
<?php
function nz_todo20() {
	$str = 'aabbccddeeff';

	echo substr_replace( $str, '!!!', 3, 5 );
}

nz_todo20();
?>

<!-- 21 -->
<h2>21. Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.</h2>
<?php
function nz_todo21() {
	$str = 'abc abc abc';

	echo strpos( $str, 'b' );
}

nz_todo21();
?>

<!-- 22 -->
<h2>22. Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.</h2>
<?php
function nz_todo22() {
	$str = 'abc abc abc';

	echo strrpos( $str, 'b' );
}

nz_todo22();
?>

<!-- 23 -->
<h2>23.  Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать 
поиск не с начала строки, а с позиции 3..</h2>
<?php
function nz_todo23() {
	$str = 'abc abc abc';

	echo strpos( $str, 'b', 3 );
}

nz_todo23();
?>

<!-- 24 -->
<h2>24.  Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать 
поиск не с начала строки, а с позиции 3..</h2>
<?php
function nz_todo24() {
	$str = 'aaa aaa aaa aaa aaa';

	echo strpos( $str, ' ' );
}

nz_todo24();
?>

<!-- 25 -->
<h2>25.Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.</h2>
<?php
function nz_todo25() {
	$str = 'aaa aaa a..aa aaa aaa';

	if ( strpos( $str, '..' ) ) {
		echo 'est';
	} else {
		echo 'net!';
	}
}

nz_todo25();
?>

<!-- 26 -->
<h2>26. Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.</h2>
<?php
function nz_todo26() {
	if ( strpos( 'http://aaa aaa', 'http://' ) === 0 ) {
		echo 'verno';
	} else {
		echo 'Ne verno';
	}
}

nz_todo26();
?>

<!-- 27 -->
<h2>27. Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.</h2>
<?php
function nz_todo27() {
	$str = 'html css php';
	$arr = explode( ' ', $str );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo27();
?>

<!-- 28 -->
<h2>28. Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.</h2>
<?php
function nz_todo28() {
	$arr = array( 'html', 'css', 'php' );

	echo implode( ', ', $arr );
}

nz_todo28();
?>

<!-- 29 -->
<h2>29. В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'. </h2>
<?php
function nz_todo29() {
	$date = '2013-12-31';
	$arr  = explode( '-', $date );

	echo $arr[2] . '.' . $arr[1] . '.' . $arr[0];
}

nz_todo29();
?>

<!-- 30 -->
<h2>30. Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.</h2>
<?php
function nz_todo30() {
	$str = '1234567890';
	$arr = str_split( $str, 2 );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo30();
?>

<!-- 31 -->
<h2>31. Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.</h2>
<?php
function nz_todo31() {
	$str = '1234567890';
	$arr = str_split( $str, 1 );

	echo '<pre>';
	print_r( $arr );
	echo '</pre>';
}

nz_todo31();
?>

<!-- 32 -->
<h2>32.Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.</h2>
<?php
function nz_todo32() {
	$text = '1234567890';
	$arr  = str_split( $text, 2 );

	echo implode( '-', $arr );
}

nz_todo32();
?>

<!-- 33 -->
<h2>33. Дана строка. Очистите ее от концевых пробелов.</h2>
<?php
function nz_todo33() {
	$str = '    slovo    ';
	echo trim( $str );
}

nz_todo33();
?>

<!-- 34 -->
<h2>34. Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.</h2>
<?php
function nz_todo34( $text ) {
	echo trim( $text, '/' );
}

nz_todo34( '/php/' );
?>

<!-- 35 -->
<h2>35. Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть. 
Сделайте так, чтобы в конце этой строки гарантировано стояла точка. 
То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать.
Задачу решите через rtrim без всяких ифов</h2>
<?php
function nz_todo35() {
	$str = 'слова слова слова';

	echo rtrim( $str, '.' ) . '.';
}

nz_todo35();
?>

<!-- 36 -->
<h2>36.Дана строка '12345'. Сделайте из нее строку '54321'.</h2>
<?php
function nz_todo36() {
	$str = '12345';

	echo strrev( $str );
}

nz_todo36();
?>

<!-- 37 -->
<h2>37.Проверьте, является ли слово палиндромом 
(одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).</h2>
<?php
function nz_todo37( $str ) {
	if ( $str === strrev( $str ) ) {
		echo $str . ' палиндромом <br>';
	}
}

nz_todo37( 'madam' );
nz_todo37( 'otto' );
nz_todo37( 'kayak' );
nz_todo37( 'nun' );
nz_todo37( 'level' );
?>

<!-- 38 -->
<h2>38.Проверьте, является ли слово палиндромом 
(одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).</h2>
<?php
function nz_todo38() {
	$str = '12345678';

	echo str_shuffle( $str );
}

nz_todo38();

?>

<!-- 39 -->
<h2>39.Создайте строку из 6-ти случайных маленьких латинских букв так, чтобы буквы не повторялись.
Нужно сделать так, чтобы в нашей строке могла быть любая латинская буква, а не ограниченный набор.</h2>
<?php
function nz_todo39() {
	$str = 'abcdejklmnop';

	$qwerty = str_shuffle( $str );
	echo substr( $str, 0, 6 );
}

nz_todo39();
?>

<!-- 40 -->
<h2>40. Дана строка '12345678'. Сделайте из нее строку '12 345 678'.</h2>
<?php
function nz_todo40() {
	$str = '12345678';

	echo number_format( $str );
}

nz_todo40();
?>

<!-- 41 -->
<h2>41.  Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. 
Решите задачу с помощью одного цикла и функции str_repeat.</h2>
<?php
function nz_todo41() {
	for ( $i = 1; $i <= 9; $i++ ) {
		echo str_repeat( 'x', $i ) . '<br>';
	}
}

nz_todo41();
?>

<!-- 42 -->
<h2>42.  Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat..</h2>
<?php
function nz_todo42() {
	for ( $i = 1; $i <= 9; $i++ ) {
		echo str_repeat( $i, $i ) . '<br>';
	}
}

nz_todo42();
?>

<!-- 43 -->
<h2>43. Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.</h2>
<?php
function nz_todo43() {
	$str = 'html, <b>php</b>, js';

	echo strip_tags( $str );
}

nz_todo43();
?>

<!-- 44 -->
<h2>44. Дана строка $str. Удалите все теги из этой строки, кроме тегов .</h2>
<?php
function nz_todo44() {
	$str = 'html, <b>php</b>, js';

	echo strip_tags( $str, array( '<b></b>' ) );
}

nz_todo44();
?>

<!-- 45 -->
<h2>45. Дана строка 'html, <b>php</b>, js'.
Выведите ее на экран 'как есть': то есть браузер не должен преобразовать в жирный.</h2>
<?php
function nz_todo45() {
	$str = 'html, <b>php</b>, js';

	echo htmlspecialchars( $str );
}

nz_todo45();
?>

<!-- 46 -->
<h2>46. Узнайте код символов 'a', 'b', 'c', пробела.</h2>
<?php
function nz_todo46() {

}

nz_todo46();
?>

<!-- 47 -->
<h2>47. Изучите таблицу ASCII. Определите границы,
в которых располагаются буквы английского алфавита.</h2>
<?php
function nz_todo47() {
	for ( $i = 65; $i <= 90; $i++ ) {
		echo chr( $i ) . ' ';
	}

	echo '<br>';

	for ( $i = 97; $i <= 122; $i++ ) {
		echo chr( $i ) . ' ';
	}
}

nz_todo47();
?>

<!-- 48 -->
<h2>48. Выведите на экран символ с кодом 33.</h2>
<?php
function nz_todo48() {
	$num = 33;

	echo chr( $num );
}

nz_todo48();
?>

<!-- 49 -->
<h2>49.  Запишите в переменную $str случайный символ - большую букву латинского алфавита. 
Подсказка: с помощью таблицы ASCII определите какие целые числа соответствуют большим 
буквам латинского алфавита.</h2>
<?php
function nz_todo49() {

}

nz_todo49();
?>

<!-- 50 -->
<h2>50. Запишите в переменную $str случайную строку $len длиной, 
состоящую из маленьких букв латинского алфавита. Подсказка: воспользуйтесь циклом for или while.</h2>
<?php
function nz_todo50() {
	$len = 10;

	for ( $i = 0; $i <= $len; $i++ ) {
		$str = mt_rand( 97, 122 );
		echo chr( $str );
	}
}

nz_todo50();
?>

<!-- 51 -->
<h2>51. Дана буква английского алфавита. Узнайте, она маленькая или большая.</h2>
<?php
function nz_todo51() {
	$str = 'a';

	if ( 65 <= ord( $str ) && ord( $str ) <= 90 ) {
		echo 'Bolshaya';
	} elseif ( 97 <= ord( $str ) && ord( $str ) <= 122 ) {
		echo 'Malenka';
	} else {
		echo 'error';
	}
}

nz_todo51();
?>

<!-- 52 -->
<h2>52. Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.</h2>
<?php
function nz_todo52() {
	$str = 'ab-cd-ef';

	echo strchr( $str, '-' );
}

nz_todo52();
?>

<!-- 53 -->
<h2>53. Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'.</h2>
<?php
function nz_todo53() {
	$str = 'ab-cd-ef';

	echo strrchr( $str, '-' );
}

nz_todo53();
?>

<!-- 54 -->
<h2>54. Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.</h2>
<?php
function nz_todo54() {
	$str = 'ab--cd--ef';

	echo strstr( $str, '--' );
}

nz_todo54();
?>

<!-- 55 -->
<h2>55.Преобразуйте строку 'var_test_text' в 'varTestText'. 
Скрипт, конечно же, должен работать с любыми аналогичными строками.</h2>
<?php
function nz_todo55() {
	$str = 'var_test_text';

	echo str_replace( ' ', '', ucwords( str_replace( '_', ' ', $str ) ) );
}

nz_todo55();
?>

<!-- 56 -->
<h2>56.Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.</h2>
<?php
function nz_todo56() {
	$arr = array( 11, 23, 173, 33, 53, 44, 55, 66, 77 );

	foreach ( $arr as $value ) {
		if ( strpos( $value, '3' ) || 0 === strpos( $value, '3' ) ) {
			echo $value . '<br>';
		}
	}
}

nz_todo56();
?>
