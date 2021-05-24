<?php
require 'functions.php';

$result = nz_get_post();
$result_reviews = nz_get_comments( $_GET['id'] );
nz_create_comment();
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
						<div class="info-box header-info-box box-border">
							<div>USD</div>
							<i class="arrow-down fas fa-chevron-down"></i>
						</div>
						<div class="info-box header-info-box">
							<div class="usa-flag">
								<img src="./uploads/united-states.svg" alt="">
							</div>
							<div>USA</div>
							<i class="arrow-down fas fa-chevron-down"></i>
						</div>	
					</div>

				</div>
			</div>
		</div>
		<!-- HEADER MAIN-->
		<div class="header-main header-row">
			<div class="container">
				<div class="header-row-inner">
					<div class="header-col-left flex-align flex-shrink">

						<div class="main-logo">
							<a href="#">
								<img src="./uploads/merak-logo.svg" alt="">
							</a>
						</div>

					</div>
					<div class="header-col-center">

						<form class="header-search flex-align" action="">
							<button class="form-btn center-icon">
								<i class="fal fa-search"></i>
							</button>
							<input placeholder="Search for products" type="text" name="" id="">
							<div class="header-select">
								<span></span>
								<select class="header-select-inner" name="">
									<option value="0">Select Category</option>
									<option value="1">1</option>
									<option value="2">2</option>
								</select>
							</div>
						</form>

					</div>
					<div class="header-col-right flex-align">
						<div class="burger">
							<i class="fas fa-bars"></i>
						</div>

						<div class="info-box sign-box">
							<i class="icons-main-header fal fa-user-alt"></i>
							<div>Login / Register</div>
						</div>
						<div class="info-box sign-box">
							<i class="icons-main-header far fa-heart"></i>
							<div>Wishlist</div>
						</div>
						<div class="info-box sign-box">
							<i class="icons-main-header fal fa-shopping-bag"></i>
							<div>2 <span class="light-color">/ $280.00</span></div>
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
									Blog Article
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

	<section class="blog-info-section">
		<div class="container mt-5">

			<?php foreach ( $result as $row ): ?>
				<div class="row">
					<div class="col-lg-12 col-title">
						<h2 class="blog-title blog-info-title">
							<?php echo $row['title']; ?>
							<span class="blog-inner-date"><?php echo $row['date']; ?></span>
						</h2>
					</div>
					<div class="col-lg-12 col-img">
						<div class="art-img">
							<img src="./uploads/<?php echo $row['img']; ?>" alt="" srcset="">
						</div>
					</div>
					<div class="col-lg-12 col-text">
						<p class="blog-text">
							<?php echo $row['text']; ?>
						</p>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
	</section>

	<section class="reviews">
		<div class="container">

		<?php foreach ( $result_reviews as $row_rev ): ?>
			<div class="row coments">

				<div class="col-lg-12">
					<div class="info-box info-box-verical rev-info-box">
							<div class="user-info">
								<div class="user-photo">
									<a href="#"></a>
									<img src="./uploads/merak-testimonials-2.jpg" alt="">
								</div>
								<div class="user-title">
									<h5 class="user-name"><?php echo $row_rev['name']; ?></h5>
									<p class="user-position">
									<?php echo $row_rev['work']; ?>
									</p>
								</div>
							</div>
							<p class="info-text">
								<?php echo $row_rev['text']; ?>
							</p>
					</div>
				</div>

			</div>
		<?php endforeach; ?>

		<form action="" method="POST" class="reviews-form">
			<input placeholder="Your Name" type="text" name="acc-name" id="">
			<input placeholder="Specialization" type="text" name="acc-spec" id="">
			<textarea placeholder="Yout Comment" name="acc-text" id="" cols="30" rows="10"></textarea>
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			<button type="submit" class="btn" name="submit-rev">Add </button>
		</form>

		</div>
	</section>
</body>
</html>