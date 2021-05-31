<?php
require 'functions.php';

$result_category = nz_get_select();
nz_remove_category();
nz_update_category();
nz_edit_category_btn();
nz_echo_errors();
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
							<li>
								<a href="index.php">
									Home
								</a>
							</li>
							<li>
								<a href="posts.php">
									Posts
								</a>
							</li>
							<li class="active">
								<a href="categories.php">
									Categories
								</a>
							</li>
						</ul>
					</div>
			
					<div class="header-col-right">
						<div class="disconds">
							<form method="POST">
								<button type="submit" name="log-out" class="btn" href="#">Log out</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="blog-intro bottom-zero">
		<h2>Categories</h2>
	</section>

	<section class="tabs bottom-zero">
		<div class="container column">

			<?php foreach ( $result_category as $row ) : ?>
				<div class="block-categ">
					<a class="btn style-btn" href="?category=<?php echo $row['text']; ?>">
						<?php echo $row['text']; ?>
					</a>

					<div>
						<a class="btn" href="?edit-categ-btn=<?php echo $row['id']; ?>">
							Edit
							<i class="fal fa-pen"></i>
						</a>
						<a class="btn" href="?delete-categ=<?php echo $row['id']; ?>">
							Delete
							<i class="fal fa-trash-alt"></i>
						</a>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</section>

	<section class="section-create">
		<div class="create-article">
			<a href="create_category.php" class="btn btn-create-article">Create Category</a>
		</div>
	</section>

<?php
require 'footer.php';
?>
