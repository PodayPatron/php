<?php
require 'functions.php';

$result = nz_get_blogs_item( $_GET['category'] );
$result_category = nz_get_select();
nz_echo_errors();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
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
							<li class="active">
								<a href="#">
									Blog
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

	<section class="blog-intro">
		<h2>Blog</h2>
	</section>

	<section class="tabs">
		<div class="container">
			<a class="btn" href="?category=all">All</a>
			<?php foreach ( $result_category as $row ): ?>
				<a class="btn" href="?category=<?php echo $row['text']; ?>"><?php echo $row['text']; ?></a>
			<?php endforeach; ?>
		</div>
	</section>

	<section class="blog">
		<div class="container">

			<?php 
				if ( !$result ) { ?>
					<div class="error-line">
						<div class="post-error">There are no posts for this category!</div>
					</div>
				<?php
				}
			?>

			<div class="row">
				<!--ITEM 1-->
				<?php foreach ( $result as $row ): ?>

					<div class="col-lg-4">
						<article class="inner-article text-center">
							<div class="art-img">
								<div class="img-scale">
									<a href="blog-info.php?id=<?php echo $row['id']; ?>">
										<img src="./uploads/<?php echo $row['img']; ?>" alt="" srcset="">
									</a>
								</div>
							</div>
							<div class="artic-category">
								<?php echo $row['category']; ?>
							</div>
							<div class="artic-text">
								<h5 class="blog-title">
									<a href="blog-info.php?id=<?php echo $row['id']; ?>">
										<?php echo $row['title']; ?>
									</a>
								</h5>
								<div class="date">
									<span class="date-text">
										<?php echo $row['date']; ?>
									</span>
									<span class="date-text">
										<img class="author" src="./img/merak-testimonials-3.jpg" alt="">
										By
									</span>
									<span>
										<?php echo $row['author']; ?>
									</span>
								</div>
								<div class="comments-all">
									<span class="comments-line">
										<a href="blog-info.php?id=<?php echo $row['id']; ?>">
											<i class="fal fa-comments"></i>
											<?php echo nz_count_comments( $row['id'] ); ?>
										</a>
									</span>
								</div>
								<span>
									<?php echo $row['short_text']; ?>
								</span>
								<footer class="article-footer">
									<div class="continue">
										<a href="blog-info.php?id=<?php echo $row['id']; ?>">
											Continue reading
											<i class="fal fa-arrow-right continue-arrow"></i>
										</a>
									</div>
								</footer>
							</div>
						</article>
					</div>

				<?php endforeach; ?>
			</div>

			<section class="section-create">
				<div class="create-article">
					<a href="create.php" class="btn btn-create-article">Create New Article</a>
					<a href="select.php" class="btn btn-create-article">Create Category</a>
				</div>
			</section>

		</div>
	</section> <!-- /.BLOG-->

</body>
</html>