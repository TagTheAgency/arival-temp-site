<?php
	$currentPage = "home";
	require('header.php');
?>

		<div class="container-fluid hero-container">
			<div class="row hero-banner hero-banner-full hero-fixed vh-100 vh text-left justify-content-center align-items-center" style="background-image: url('./img/bg.jpg');">
				<div class="col-8 text-white fade-in">
					<h2 class="hero-header ls-15"><strong>ARIVAL</strong></h2>
					<p class="hero-sub-header ls-6">BRINGING FANS INTO THE GAME</p>
					<a href="about.php" class="btn btn-white-filled m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></a>
				</div>
			</div>
		</div>
		<div class="spacer-40 black"></div>
		<div class="container black py-5 text-white">
			<div class="row text-center justify-content-center align-items-center py-sm-5 fade-in">
				<div class="col-10 col-md-7 col-xl-8">
					<h2 class="ls-8 text-white"><strong>ABOUT</strong></h2>
					<p>Arival is the technology platform that is revolutionising live sports engagement. Fan engagement with live sports has been challenged to keep pace with the fast changing and evolving world of technology and innovation.</p>
					<a href="about.php" class="btn btn-secondary-filled m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></a>
				</div>
			</div>
		</div>
		<div class="container black text-white pb-5 pb-sm-0 fade-in">
			<div class="row text-right align-items-center justify-content-center py-5 section-img hero-banner-full">
				<div class="col-11 col-sm-5">
					<div class="img-container">
						<img src="img/solution.jpg" alt="">
					</div>
				</div>
				<div class="col-11 text-center text-sm-center col-sm-7 col-md-4 fade-in">
					<h2 class="ls-8 text-white"><strong>SOLUTION</strong></h2>
					<p>The Arival solution begins in the stadium and sports arenas, layering the live game with Augmented reality data on player stats and information, we can also provide live data at key points to a game, enabling fans to engage and potentially be rewarded for the results.</p>
					<a href="solution.php" class="btn btn-secondary-filled m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></a>
				</div>
			</div>
		</div>
		<div class="container black text-white pb-5 pb-sm-0 fade-in">
			<div class="row text-right align-items-center justify-content-center py-5 section-img hero-banner-full">
				<div class="col-11 text-center text-sm-center col-sm-7 col-md-6">
					<h2 class="ls-8 text-white"><strong>FAN MASKS</strong></h2>
					<p>Building on our fan engagement focus we work with Image-Metrics, the world's leading Fan mask and facial recognition brand to deliver Fan Mask activations for your sports game.</p>
					<a href="fanmasks.php" class="btn btn-secondary-filled m-0 mt-4 form-scroll btn-round d-inline-flex align-items-center btn-arrow">LEARN MORE <i class="material-icons">keyboard_arrow_right</i></a>
				</div>
				<div class="col-8 col-sm-5 mt-5 mt-sm-0">
					<div class="img-container">
						<img src="img/fan.png" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="d-none d-sm-block spacer-40 black"></div>
		<div class="container black text-white text-center pb-sm-5 fade-in">
			<div class="row justify-content-center align-items-center py-2 py-sm-5">
				<div class="col-11 col-md-6 col-lg-5">
					<h2 id="form-header" class="underline underline-gradient ls-8 text-white">GET IN TOUCH <i class="material-icons">arrow_right_alt</i></h2>
				</div>
				<div id="form-container" class="col-11 col-md-6 col-lg-5">
					<form action="POST" id="contactform" class="contact-form" action="mailer.php">
						<input id="form-name" class="w-100 input-light mb-3" name="name" type="text" placeholder="NAME" required>
						<input class="w-100 input-light mb-3" type="email" name="email" placeholder="EMAIL" required>
						<input class="w-100 input-light mb-3" type="number" name="number" placeholder="PHONE NUMBER" required>
						<input class="w-100 input-light mb-3" type="text" name="message" placeholder="MESSAGE" required>
						<input class="btn btn-secondary-filled w-100 m-0" type="submit" value="SUBMIT">
					</form>
				</div>
			</div>
		</div>
		<div class="d-none d-sm-block spacer-40 black"></div>
		<?php require('footer.php') ?>
