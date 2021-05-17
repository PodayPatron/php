<?php
require 'functions.php';
update_data_task();
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
			<h1>UPDATE LIST</h1>
		</header>

		<?php
			require 'configDB.php';
			$id = $_GET['edit'];

			$query = $pdo->prepare( ' SELECT * FROM `tasks` WHERE id = :id ' );
			$query->bindParam(':id' , $id);
			$query->execute();
			$result = $query->fetchAll();

			foreach ($result as $row  ) {
				?>
				<form action="" class="todo-form" method="POST" autocomplete="off">
					<input id="task" name="update" value="<?php echo $row['task']; ?>" type="text">
					<button type="submit" name="send_update" class="btn btn-outline-success btn-add">Update</button>
					<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
				</form>
				<?php
			}
			
			?>
	</main>
</body>
</html>