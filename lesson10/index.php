<!-- 1 -->
<h2>1.Спросите имя пользователя с помощью формы.
Результат запишите в переменную $name. Выведите на экран фразу 'Привет, %Имя%'. </h2>

<form action = "" method="GET">
	<input type = "text" name="name">
	<input type = "submit">
</form>

<?php
function nz_todo1() {
	if ( ! empty( $_GET['name'] ) ) {
		$name = $_GET['name'];

		echo 'Your Name:  ' . $name;
	}
}

nz_todo1();
?>

<!-- 2 -->
<h2>2Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в textarea). 
Выведите эти данные на экран в формате, приведенном под данной задачей.
Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт.. </h2>

<form action = "" method="GET" style="display: flex; flex-direction:column;width:300px;">
	<input type = "text" name = "name2" style="margin-bottom: 20px;">
	<input type = "number" name = "age2" >
	<textarea name="text2" id="" cols="30" rows="10" style="margin-top: 20px;">
	</textarea>
	<input type = "submit">
</form>

<?php
function nz_todo2() {
	if ( isset( $_GET['name2'] ) && isset( $_GET['age2'] ) && isset( $_GET['text2'] ) ) {
		$name = strip_tags( $_GET['name2'] );
		$age  = $_GET['age2'];
		$text = strip_tags( $_GET['text2'] );

		echo 'Your Name:  ' . $name . '</br>';
		echo 'Your Age:  ' . $age . '</br>';
		echo 'Your TExt:  ' . $text . '</br>';
	}
}

nz_todo2();
?>

<!-- 3 -->
<h2>3. Спросите возраст пользователя. Если форма была отправлена и введен возраст,
то выведите его на экран, а форму уберите. 
Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее </h2>

<?php
function nz_todo_3() {
	if ( empty( $_GET['age3'] ) ) {
		?>
			<form action="" method="GET">
				<input type="text" name="age3"><br><br>
				<input type="submit">
			</form>
		<?php
	}

	if ( ! empty( $_GET['age3'] ) ) {
		$age = htmlspecialchars( trim( $_GET['age3'] ) );
		echo 'Ваш возраст - ' . $age;
	}
}

nz_todo_3();
?>

<!-- 4 -->
<h2>4. Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. 
Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'.  </h2>

<form action="" method="POST">
	<input type="text" name="login4" placeholder="login">
	<input type="password" name="pass4">
	<input type="submit" name="submit">
</form>

<?php
function nz_todo_4() {

	if ( ! empty( $_POST['login4'] ) && ! empty( $_POST['pass4'] ) ) {
		$get_users = file_get_contents( 'user.txt' );
		$arr_data  = json_decode( $get_users, true );
		$login     = htmlspecialchars( trim( $_POST['login4'] ) );
		$password  = htmlspecialchars( trim( $_POST['pass4'] ) );
		$access    = false;

		foreach ( $arr_data as $value ) {
			if ( $value['login'] === $login && $value['password'] === $password ) {
				$access = true;
			}
		}

		if ( $access ) {
			echo 'Доступ разрешен!';
		} else {
			echo 'Доступ запрещен!';
		}
	}
}

nz_todo_4();
?>

<!-- 5 -->
<h2>5. Спросите имя пользователя с помощью формы. Результат запишите в переменную $name. 
Сделайте так, чтобы после отправки формы значения ее полей не пропадали. </h2>

<?php
function nz_todo_5() {
	$user = '';

	if (!empty($_GET['user'])) {
		$user = htmlspecialchars($_GET['user']);

		echo 'Your Name:  ' . $user;
	}
	?>

	<form action="" method="GET">
		<input type="text" name="user" value= "<?php echo $user ?>">
		<input type="submit">
	</form>

	<?php
}

nz_todo_5();
?>

<!-- 6 -->
<h2>6. Спросите у пользователя имя, а также попросите его ввести сообщение (textarea). 
Сделайте так, чтобы после отправки формы значения его полей не пропадали.  </h2>

<?php
function nz_todo_6() {
	$user = '';
	$text = '';

	if (!empty($_GET['user6']) && !empty($_GET['message'])) {
		$user = htmlspecialchars($_GET['user6']);
		$text = htmlspecialchars($_GET['message']);

		echo 'Name:  ' . $user;
	}
	?>

	<form action="" method="GET">
		<input type="text" name="user6" value= "<?php echo $user ?>">
		<textarea name="message" id="" cols="30" rows="10"><?php echo $text ?></textarea>
		<input type="submit">
	</form>

	<?php
}

nz_todo_6();
?>
