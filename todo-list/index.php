<?php
	add_todo_data();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>Todo.php</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	</head>

	<body>
		
		<main class="app">
			<header>
				<h1>Todo</h1>
			</header>

			<?php
				require 'configDB.php';

				$query = $pdo->query( ' SELECT * FROM `tasks` ORDER BY `id` DESC');

			while ( $row = $query->fetch( PDO::FETCH_OBJ ) ) {
				?>

						<li class="todo-item">
							<input class="checkbox" type="checkbox">
							<label class="title"><?php echo $row->task; ?></label>
							<input class="textfield" type="text">
							<button type="button" class="btn btn-outline-warning edit"><i class="fal fa-edit"></i></button>
							<a href="<?php echo $row->id; ?>"><button type="button" class="btn btn-outline-danger delete"><i class="fal fa-trash-alt"></i></button></a>
						</li>

					<?php
			}
			?>

			<form action="" class="todo-form" method="POST">
				<input id="task" name="task" type="text">
				<button type="submit" name="sendTask" class="btn btn-outline-success btn-add"><i class="fal fa-calendar-plus"></i></button>
			</form>
			
		</main>
	</body>
</html>

<?php
function add_todo_data() {
	$task = $_POST['task'];
	if ( $task == '' ) {
		err_symbols();
		exit();
	}

	require 'configDB.php';

	$sql   = 'INSERT INTO tasks (task) VALUES (:task)';
	$query = $pdo->prepare( $sql );
	$query->execute( array( 'task' => $task ) );
}

function err_symbols() {
	?>

		<div class="alert alert-primary" role="alert">
			Введите само задание...
		</div>

	<?php
}
?>

<?php
function delete() {
    require 'configDB.php';

    $id = $_GET['id'];

    $sql   = 'DELETE FROM `tasks` WHERE `id` = ?';
    $query = $pdo->prepare( $sql );
    $query->execute( [$id] ); 
}
?>
