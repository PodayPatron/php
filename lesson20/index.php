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

	if ( (! empty( $_GET['name'] ) && ! empty( $_GET['check'] )) == 1 ) {
		echo 'Hello: ' . $name;

	} elseif ( (empty( $_GET['name'] ) && empty( $_GET['check'] )) == 0 ) {
		echo 'Goodbye: ' . $name;
	}
}

nz_todo1();
?>
