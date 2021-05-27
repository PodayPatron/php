<?php
require 'functions.php';

$result         = nz_get_post();
$result_reviews = nz_get_comments( $_GET['id'] );
nz_create_comment();
nz_echo_errors();

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

			<?php foreach ( $result as $row ) : ?>
				<div class="row">
					<div class="col-lg-12 col-title">
						<h2 class="blog-title blog-info-title">
							<?php echo $row['title']; ?>
							<span class="blog-inner-date">
								<?php echo $row['date']; ?>
							</span>
						</h2>
					</div>
					<div class="col-lg-12 col-img">
						<div class="art-img">
							<img src="./uploads/<?php echo $row['img']; ?>" alt="Image of blog">
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

		<?php foreach ( $result_reviews as $row_rev ) : ?>
			<div class="row coments" id="1">

				<div class="col-lg-12">
					<div class="info-box info-box-verical rev-info-box">
							<div class="user-info">
								<div class="user-photo">
									<a href="#"></a>
									<img src="./uploads/merak-testimonials-2.jpg" alt="img">
								</div>
								<div class="user-title">
									<h5 class="user-name">
										<?php echo $row_rev['name']; ?>
									</h5>
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
				<input placeholder="Your Name" type="text" name="acc-name" aria-label="Your Name">
				<input placeholder="Specialization" type="text" name="acc-spec" aria-label="Your Specialization">
				<textarea placeholder="Yout Comment" name="acc-text" id="" cols="30" rows="10" aria-label="Yout Comment"></textarea>
				<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
				<button type="submit" class="btn" name="submit-rev" aria-label="button add">Add</button>
			</form>

		</div>
	</section>
<?php
require 'footer.php';
?>
