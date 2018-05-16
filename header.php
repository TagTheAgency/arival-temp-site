<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Arival">
		<!-- <link rel="shortcut icon" type="image/png" href="/favicon.png"/> -->
		<title>Arival</title>
		<link rel="stylesheet" href="https://use.typekit.net/heh7zye.css">
		<link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/spacing.css">
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<link rel="stylesheet" href="css/style.min.css">
	</head>
	<body>
		<div class="fixed search-overlay container-fluid overlay-black vw-100 vh-100 text-white popup" data-popup="dome-video">
			<div class="container">
				<div class="row">
					<div class="col-12 text-right pt-5">
						<i class="material-icons hover popup-close font-lg" data-popup-close="dome-video">close</i>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-10 col-sm-8 text-right pt-5 video-wrapper">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/mTm8MjmK0q0?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="fixed search-overlay container-fluid overlay-black vw-100 vh-100 text-white popup" data-popup="metric-video">
			<div class="container">
				<div class="row">
					<div class="col-12 text-right pt-5">
						<i class="material-icons hover popup-close font-lg" data-popup-close="metric-video">close</i>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-10 col-sm-8 text-right pt-5 video-wrapper">
						<iframe src="https://player.vimeo.com/video/229355496" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="fixed search-overlay container-fluid black vw-100 vh-100 text-white popup" data-popup="search-overlay">
			<div class="container">
				<div class="row">
					<div class="col-12 text-right pt-5">
						<i id="search-overlay-close" class="material-icons hover popup-close" data-popup-close="search-overlay">close</i>
					</div>
				</div>
				<div class="row vh-75 align-items-center justify-content-center">
					<div class="col-10">
						<form action="" class="search-form mb-4 input-minimal">
							<input id="search-form-input" class="input-light w-100 b-none bb-2" type="text" name="search" placeholder="search...">
						</form>
						<div class="d-flex align-items-center justify-content-between">
							<div class="btn btn-white m-0 btn-sm">SEARCH</div>
							<p>Press 'Enter' to search or 'Esc' to close.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="mobile-menu" class="fixed vh-100 w-100 black text-white container-fluid d-lg-none">
			<div class="row text-right p-2 pt-4 p-sm-4">
				<div class="col-12">
					<i id="mobile-menu-close" class="material-icons hover gradient-text">close</i>
				</div>
				<div class="col-12 mt-4">
					<ul class="ls-4">
						<li class="mb-4 nav-item-uppercase <?php if ($currentPage == "home"){?>active-page<?php } ?>"><a class="hover-secondary" href="./">HOME</a></li>
						<li class="mb-4 nav-item-uppercase <?php if ($currentPage == "about"){?>active-page<?php } ?>"><a class="hover-secondary" href="about.php">ABOUT</a></li>
						<li class="mb-4 nav-item-uppercase <?php if ($currentPage == "solution"){?>active-page<?php } ?>"><a class="hover-secondary" href="solution.php">SOLUTION</a></li>
						<li class="mb-4 nav-item-uppercase <?php if ($currentPage == "products"){?>active-page<?php } ?>"><a class="hover-secondary" href="products.php">PRODUCTS</a></li>
						<li class="mb-4 nav-item-uppercase <?php if ($currentPage == "team"){?>active-page<?php } ?>"><a class="hover-secondary" href="team.php">TEAM</a></li>
						<li class="form-scroll nav-item-uppercase <?php if ($currentPage == "contact"){?>active-page<?php } ?>"><a class="hover-secondary" href="contact.php">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</div>
		<nav id="navbar" class="fixed black drop-shadow <?php if ($currentPage == "home"){?>bg-on-scroll bg-transparent<?php } ?>">
			<div class="container text-white">
				<div class="row justify-content-between align-items-center nav-bar">
					<div class="col-auto">
						<div class="logo-wrapper hover">
							<a href="./"><img src="img/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-auto d-none d-lg-flex align-items-center">
						<ul class="ls-2">
							<li class="mr-sm-1 mr-md-4 nav-item-uppercase <?php if ($currentPage == "home"){?>active-page<?php } ?>"><a class="hover-secondary" href="./">HOME</a></li>
							<li class="mr-sm-1 mr-md-4 nav-item-uppercase <?php if ($currentPage == "about"){?>active-page<?php } ?>"><a class="hover-secondary" href="about.php">ABOUT</a></li>
							<li class="mr-sm-1 mr-md-4 nav-item-uppercase <?php if ($currentPage == "solution"){?>active-page<?php } ?>"><a class="hover-secondary" href="solution.php">SOLUTION</a></li>
							<li class="mr-sm-1 mr-md-4 nav-item-uppercase <?php if ($currentPage == "products"){?>active-page<?php } ?>"><a class="hover-secondary" href="products.php">PRODUCTS</a></li>
							<li class="mr-sm-1 mr-md-4 nav-item-uppercase <?php if ($currentPage == "team"){?>active-page<?php } ?>"><a class="hover-secondary" href="team.php">TEAM</a></li>
							<li class="form-scroll nav-item-uppercase <?php if ($currentPage == "contact"){?>active-page<?php } ?>"><a class="hover-secondary" href="contact.php">CONTACT</a></li>
						</ul>
						<div class="d-none btn btn-secondary btn-round ml-4 search-overlay-btn py-2 px-4 btn-sm" data-popup-open="search-overlay">SEARCH</div>
					</div>
					<div class="col-auto d-block d-lg-none">
						<i id="mobile-menu-btn" class="material-icons hover">menu</i>
					</div>
				</div>
			</div>
		</nav>
