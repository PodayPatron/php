<?php
require 'functions.php';

nz_login();
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
							<li class="active">
								<a href="#">
									Log In
								</a>
							</li>

							<li>
								<a href="#">
									Sing Up
								</a>
							</li>
						</ul>
					</div>
					<div class="header-col-right">
						<div class="disconds">
							<span class="primary-color"></span> 
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section class="login-section">
		<div class="container">

			<h2>Log In</h2>
			<form method="POST" class="login-form">
				<label for="">Username*</label>
				<input type="text" name="username" value="<?php echo $_POST['username']; ?>">
				<label for="">Password*</label>
				<input type="text" name="password">
				<button class="btn" type="submit" name="submit-login">Send</button>
			</form>

		</div>
	</section>


<?php
require 'footer.php';
?>
