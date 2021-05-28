<?php
require 'functions.php';

update_item_blog();
$result          = nz_edit_btn( $_GET['id'] );
$result_category = nz_get_select();

require 'header.php';
?>


	<?php foreach ( $result as $row ) : ?>
		<form class="create-main-form" method="POST">
			<input placeholder="Title" name="update" value="<?php echo $row['title']; ?>" type="text">
			<select name="category">

				<?php foreach ( $result_category as $row2 ) : ?>
					<option> 
						<?php echo $row2['text']; ?>
					</option>
				<?php endforeach; ?>

			</select>
			<input placeholder="Short Text" name="update-short" value="<?php echo $row['short_text']; ?>" type="text">
			<textarea  name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10" aria-label="text"><?php echo $row['text']; ?></textarea>
			<button type="submit" name="send_update" class="btn btn-outline-success btn-add">Update</button>
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
		</form>
	<?php endforeach; ?>

<?php
require 'footer.php';
?>
