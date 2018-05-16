<?php
	$currentPage = 'contact';
	require('header.php');
?>
<div class="spacer-100"></div>
<div class="container-fluid pt-4">
	<div class="row text-center justify-content-center align-items-center">
		<div class="col-10 col-sm-5 text-white pt-4">
			<h1 class="ls-10"><strong>CONTACT</strong></h1>
			<p>Some blurb about getting in touch with us. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi iste voluptatibus explicabo animi.</p>
		</div>
	</div>
</div>
<div class="container-fluid black text-white">
	<div class="row justify-content-center align-items-center">
		<div class="col-10 col-sm-8">
			<form action="" class="contact-form">
				<input id="form-name" class="w-100 input-light mb-3 ls-4" type="text" placeholder="NAME">
				<input class="w-100 input-light mb-3 ls-4" type="text" placeholder="EMAIL">
				<input class="w-100 input-light mb-3 ls-4" type="text" placeholder="PHONE NUMBER">
				<input class="btn btn-secondary-filled w-100 m-0" type="submit" value="SUBMIT">
			</form>
		</div>
	</div>
</div>
<?php require('footer.php') ?>
