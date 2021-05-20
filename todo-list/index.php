<?php
	require 'functions.php';
	update_data_task();
	nz_add_todo_data();
	nz_remove_todo();
	nz_edit_btn();
	nz_checked_btn();
	$result = nz_order_list();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Todo.php</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
	<main class="app">
		<header>
			<h1>Todo</h1>
		</header>

		<?php foreach ( $result as $row ): ?>

			<li class="todo-item">
				<?php if ( $row['checked'] ) : ?>
					<input data-todo-id ="<?php echo $row['id']; ?>" data-done="<?php echo --$row['checked']; ?>" 
					class="checkbox qqq" type="submit" value="X" areal-label="checkbox">

					<label class="title checked"><?php echo $row['task']; ?></label>
				<?php else : ?>
					<input data-todo-id ="<?php echo $row['id']; ?>" data-done="<?php echo ++$row['checked']; ?>" 
					class="checkbox" type="submit" value="X"  areal-label="checkbox">

					<label class="title"><?php echo $row['task']; ?></label>
				<?php endif; ?>	

				<a class="btn btn-outline-warning edit button" href="?edit=<?php echo $row['id']; ?>">
					<i class="fal fa-edit"></i>
				</a>
				<a class="btn btn-outline-danger delete button" href="?delete=<?php echo $row['id']; ?>">
					<i class="fal fa-trash-alt"></i>
				</a>
			</li>

			<?php
		endforeach;
		?>

		<form action="" class="todo-form" method="POST" autocomplete="off">
			<input id="task" name="task" type="text" aria-label="Input text">
			<button type="submit" name="sendTask" class="btn btn-outline-success btn-add button">
				<i class="fal fa-calendar-plus"></i>
			</button>
		</form>
	</main>

	<script src="./jquery-3.6.0.min.js"></script>
	<script src="./main.js"></script>
</body>
</html>
