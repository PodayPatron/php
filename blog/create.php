<?php
require 'functions.php';
create_item_blog();
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
							<li >
								<a href="index.php">
									<i class="fal fa-arrow-left create-arrow-back"></i>
									Back
								</a></li>
							<li class="active">
								<a href="#">
									Create Article
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

			<form enctype = "multipart/form-data" method="POST" class="create-main-form" method="POST">
				<input type="file" name="uploaded_file" accept="image/jpeg,image/png">
				<select name="category">
					<option> -Select Category- </option>
					<option> Clothes </option>
					<option> Shoes </option>
					<option> Fragrances </option>
				</select>

				<input type="text" placeholder="Blog Title" class="form-control my-3 bg-dark text-white text-center" name="title">
				<input type="text" placeholder="Author" class="form-control my-3 bg-dark text-white text-center" name="author">
				<input type="text" placeholder="Short Text" class="form-control my-3 bg-dark text-white text-center" name="short-text">
				<textarea  name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10"></textarea>
				<button type="submit" class="btn" name="submit">Add Article</button>
			</form>

		</div>
	</section>

</body>
</html>