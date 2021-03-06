<?php
require 'functions.php';

update_item_blog();
$result          = nz_edit_btn( $_GET['id'] );
$result_category = nz_get_select();
nz_exit();

require 'header.php';
?>

	<header class="header-general">
		<!-- HEADER TOP-->
		<div class="header-top header-row color-scheme-light">
			<div class="container">
				<div class="header-row-inner">
					<div class="header-col header-col-left ">
						<div class="info-box  contact-box">
							<div>Call Now: (+035) 527-1710-70</div>
						</div>
						<div class="info-box  contact-box">
							<div>Email: Contact@merak.com</div>
						</div>
					</div>
					<div class="header-col header-col-right">
						<div class="info-box header-info-box">
							<div class="ample-text">Ample end might folly quiet one set spoke.</div>
						</div>
					</div>

				</div>
			</div>
		</div>


		<!--HEADER BOTTOM-->
		<div class="header-bottom header-row">
			<div class="container">

				<div class="header-row-inner">
					<div class="header-col header-col-left flex-align">
						<ul class="main-nav">
							<li >
								<a href="index.php">
									<i class="fal fa-arrow-left create-arrow-back"></i>
									Back
								</a></li>
							<li class="active">
								<a href="#">
									Edit 
								</a>
							</li>
						</ul>
					</div>
					<div class="header-col-right">
						<div class="disconds">
							Winter <span class="primary-color">discounts</span> up to 40%
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="creating-section">
		<div class="container mt-5">

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

		</div>
	</section>

<?php
require 'footer.php';
?>
