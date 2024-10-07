<!DOCTYPE html>
<html lang="en">
<head>
    <title>iZoe - Download Ebook</title>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-WTSE8H21ZX"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-WTSE8H21ZX');
	</script>
	<?php include 'header-css-js.php'; ?>
	<link rel="stylesheet" href="./css/download_ebook.css" type="text/css">
</head>

<body>
	<div class="background_cover">
		<div class="row main">
			<div class="col-12 col-lg-7 left-layout">
				<img id="left-img" src="images/ebook_page.png" />
			</div>
			<div class="col-12 col-lg-5 right-layout">
				<div class="row">
					<section>
						<div class="col-12">
							<img width="200px" src="images/izoe.svg" />
						</div>
					</section>
					<div class="col-12">
						<h4>Download E-Book :</h4>
					</div>
					<section class="title">
						<div class="col-12">
							<h3>Accounting is shifting online.</h3>
							<h3>Are you prepared?</h3>
						</div>
					</section>
					<section class="title-info">
						<div class="col-12">
							<h5>Automation of services has been happening gradually, so shift for your accounting to
								cloud seems the most appropriate choice right now. Here are 5 reasons why you should
								consider shifting your accounting on cloud in 2021.
							</h5>
						</div>
					</section>
					<section class="detail-form">
						<div class="col-12 text-left">
							<form action="https://izoe.in/submit_ebook_form" method="post">
								<input type="hidden" name="_token" value="W1wWM2VB9xreFHkYPjqvYKkyXUvsFRo4dyoyNlq4">
								<div class="row col-12 form_field name_field">
									<div class="col-1 p-0">
										<span class="icons fa fa-user"></span>
									</div>
									<div class="col-2 p-0">
										<span> Name:</span>
									</div>
									<div class="col-9 p-0">
										<input required type="text" name="name">
									</div>
								</div>
								<div class="row col-12 form_field email_field">
									<div class="col-1 p-0">
										<span class="icons fa fa-envelope"></span>
									</div>
									<div class="col-2 p-0">
										<span>Email:</span>
									</div>
									<div class="col-9 p-0">
										<input required type="email" name="email">
									</div>
								</div>
								<div class="row col-12 form_field phone_field">
									<div class="col-1 p-0">
										<span class="icons fa fa-phone"></span>
									</div>
									<div class="col-2 p-0">
										<span> Phone:</span>
									</div>
									<div class="col-9 p-0">
										<input required type="number" name="number" minlength="10" maxlength="10">
									</div>
								</div>
								<div class="row col-12 pb-4 ">
									<div class="col-2" <span><input id="check" type="checkbox" name="terms"
											required=""></span>
									</div>
									<div class="col-8">
										<p class="m-0">I Agree to terms and condition</p>
										<p class="m-0">View Terms and Conditions</p>
									</div>
								</div>
								<div class="row col-12 pb-4 ">
									<div class="col-12">
										<div class="g-recaptcha brochure__form__captcha"
											data-sitekey="6LcR5IgcAAAAAKhKhCvUdWWId7RogY5lfwbPI_wQ"></div>
									</div>
								</div>
								<button id="submit_ebook_form" type="submit" style="display:none;"></button>
							</form>
							<div class="row col-12 error">
								<h5 style="color: red;">Fill out the form to download book</h5>
							</div>
							<div class="row col-12">
								<button class="btn" id="download_ebook_submit">SUBMIT</button>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer-js.php'; ?>
</body>

</html>