<?php
	$currentPage = 'contact';
	require('header.php');
?>
<div class="spacer-100"></div>
<div class="container-fluid pt-4">
	<div class="row text-center justify-content-center align-items-center">
		<div class="col-10 col-sm-5 text-white pt-4">
			<h1 id="form-header" class="ls-10"><strong>CONTACT</strong></h1>
		</div>
	</div>
</div>
<div class="container black text-white" id="form-container">
	<div class="row justify-content-center align-items-center">
		<div class="col-10 col-sm-8">
			<form id="contactform" method="POST" class="contact-form" action="mailer.php">
				<input id="form-name" class="w-100 input-light mb-3" name="name" type="text" placeholder="NAME" required>
				<input class="w-100 input-light mb-3" type="email" name="email" placeholder="EMAIL" required>
				<input class="w-100 input-light mb-3" type="number" name="number" placeholder="PHONE NUMBER" required>
				<input class="w-100 input-light mb-3" type="text" name="message" placeholder="MESSAGE" required>
				<input class="btn btn-secondary-filled w-100 m-0" type="submit" value="SUBMIT">
			</form>
		</div>
	</div>
</div>
<?php require('footer.php') ?>
