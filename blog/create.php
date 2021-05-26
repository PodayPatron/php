<?php
require 'functions.php';

create_item_blog();
$result = nz_get_select();
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
					<?php foreach( $result as $row ) : ?>
						<option> 
							<?php echo $row['text']; ?>
						</option>
					<?php endforeach; ?>
				</select>

				<input type="text" placeholder="Blog Title" class="form-control my-3 bg-dark text-white text-center"
				name="title" value="<?php echo $_POST['title']; ?>">
				<input type="text" placeholder="Author" class="form-control my-3 bg-dark text-white text-center"
				name="author" value="<?php echo $_POST['author']; ?>">
				<input type="text" placeholder="Short Text" class="form-control my-3 bg-dark text-white text-center"
				name="short-text" value="<?php echo $_POST['short-text']; ?>">
				<textarea  name="content" class="form-control my-3 bg-dark text-white" cols="30" rows="10"><?php echo $_POST['content']; ?></textarea>
				<button type="submit" class="btn" name="submit">Add Article</button>
			</form>

		</div>
	</section>
<?php
require 'footer.php';
?>