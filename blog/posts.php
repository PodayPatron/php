<?php
require 'functions.php';

$result = nz_get_blogs_item( $_GET['category'] );
nz_remove_item();
update_item_blog();
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
							<li class="active">
								<a href="posts.php">
									Posts
								</a>
							</li>
							<li>
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
		<h2>Posts</h2>
	</section>

	<section class="section-create">
		<div class="create-article">
			<a href="create.php" class="btn btn-create-article">Create New Post</a>
		</div>
	</section>

	<section class="blog  bottom-zero" style="padding: 0px;">
		<div class="container">

			<div class="row posts-style">
				<!--ITEM 1-->
				<?php foreach ( $result as $row ) : ?>

					<div class="col-lg-2">
						<article class="inner-article text-center ">
							<div class="art-img">
								<div class="img-scale">
									<a href="blog-info.php?id=<?php echo $row['id']; ?>">
										<img class="img-blog" src="./uploads/<?php echo $row['img']; ?>" alt="image">
									</a>
								</div>
							</div>
						</article>
						<div class="artic-text post-text">
								<h5 class="blog-title">
									<a href="blog-info.php?id=<?php echo $row['id']; ?>">
										<?php echo $row['title']; ?>
									</a>
								</h5>

								<footer class="article-footer">
									<div class="continue">
										<a class="btn" href="edit-page.php?id=<?php echo $row['id']; ?>">
											Edit
											<i class="fal fa-pen"></i>
										</a>
										<a class="btn" href="?delete-btn=<?php echo $row['id']; ?>">
											Delete
											<i class="fal fa-trash-alt"></i>
										</a>
										<a class="btn" href="blog-info.php?id=<?php echo $row['id']; ?>">
											View
											<i class="fal fa-arrow-right continue-arrow"></i>
										</a>
									</div>
								</footer>
							</div>
					</div>

				<?php endforeach; ?>
			</div>

		</div>
	</section> <!-- /.BLOG-->
<?php
require 'footer.php';
?>
