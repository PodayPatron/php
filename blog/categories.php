<?php
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
		<h2>Posts</h2>
	</section>

	<section class="section-create body-color">
		<div class="create-article">
			<a href="create_category.php" class="btn btn-create-article">Create Category</a>
		</div>
	</section>

<?php
require 'footer.php';
?>