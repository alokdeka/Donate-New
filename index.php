<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Plasma Finder Home</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

	<!-- <link rel="icon" href="#" type="images/favicon/favicon.ico" > -->
	<link rel="icon" href="images/favicon/favicon.ico" type="image/gif" sizes="16x16">
	<!-- <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script> -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/jquery.dialogbox.css"> -->
	<style>
		/* .ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset, .button {
				float: center;
			} */
		.row {
			padding: 0px 0px 0px 2em !important;
		}


		.ui-dialog-titlebar-close {
			visibility: hidden;
		}

		.grnbtn {
			background-color: #8cc421;
			/* #a80c0d */

		}

		input[type="button"].primary,
		#banner .button.primary {
			background: #dbdbdb;
			color: #666 !important;
		}

		.redbtn {
			background-color: #a80c0d;
		}

		label,
		.ui-dialog .ui-dialog-title,
		.ui-dialog .ui-dialog-buttonpane,
		.button {
			text-align: center;
			/* padding-left: 0.4em;
    padding-right: 0.4em; */
		}

		.head1 {
			color: #646464 !important;
		}

		.box {
			background: #fff;
			border-radius: 6px;
			box-shadow: 2px 2px 2px 2px #e5e5e5;
			margin: 0 0 2em 0;
			padding: 3em;
			height: 100%;
		}

		#footer {
			background: #fff;
			box-shadow: 0 0 0 2px #e5e5e5;
			padding: 4em 0 6em 0;
			text-align: center;
		}

		#header {
			background: #fff;
			color: #bbb;
			box-shadow: 0 2px 0 0 #e5e5e5;
			cursor: default;
			height: 5.55em;
			left: 0;
			line-height: 3.25em;
			position: fixed;
			top: 0;
			width: 100%;
			z-index: 10000;
			border-style: outset;
		}

		.col-12-narrower {
			margin-top: 20px;
			margin-left: 0;
		}


		/*  */

		/* Style the tab */
		.tab {
			overflow: hidden;
			border: 1px solid #ccc;
			background-color: #f1f1f1;
		}

		/* Style the buttons that are used to open the tab content */
		.tab button {
			background-color: inherit;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 16px;
			transition: 0.3s;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
			background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
			background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
			display: none;
			padding: 6px 12px;
			border: 1px solid #ccc;
			border-top: none;
			animation: fadeEffect 1s;
			/* Fading effect takes 1 second */
		}

		/* Go from zero to full opacity */
		@keyframes fadeEffect {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		#head1 {
			width: 70%;
			margin: 0 auto;
		}

		@media screen and (max-width: 480px) {
			#head1 {
				width: 100%;
			}
		}
	</style>
</head>

<body class="landing is-preload">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">

			<!-- <h1><a href="index.html">Plasma</a> Finder</h1> -->
			<h1><img src="images/logo.png" height="80" width="80" /></h1>

			<nav id="nav">
				<ul>
					<li><a href="index.php"><span style="color:#646464">Home</span></a></li>
					<li><a href="inform.php"><span style="color:#646464">Inform</span></a></li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<h2 class="head1">plasmafinder.com</h2>
			<p class="head1" id="head1">COVID-19 sucks. But, finding a plasma donor
				shouldn’t. Get matched
				with a plasma donor within 10 seconds. Yeah, you read that right. 10 seconds is all it takes.</p>
			<br>
			<ul class="actions special">
				<li><a href="donor.php" class="button primary" id="donor_signup">Donors, click here</a></li>
				<li><a href="patient.php" class="button primary">Patients, click here</a></li>
			</ul>
		</section>

		<!-- Main -->
		<section id="main" class="container">

			<section class="box special" style="justify-content: center;">


				<div>
					<h2> How It Works? </h2>
				</div>

				<!-- Tab links -->
				<div class="tab" style="border: none; display:flex; justify-content: center;">
					<button class="tablinks" onclick="openCity(event, 'patient')">For Patients</button>
					<button class="tablinks" onclick="openCity(event, 'donor')">For Donors</button>
				</div>

				<!-- Tab content -->
				<div id="patient" class="tabcontent" style="border: none;">
					<div class="row">
						<div class="col-4 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>Step 1</h3>
								<p>Just fill out a simple form to request a donor.</p>
								<!-- <ul class="actions special">
											<li><a href="#" class="button alt">Learn More</a></li>
										</ul> -->
							</section>

						</div>
						<div class="col-4 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Step 2</h3>
								<p>Our matching algorithm will match you to a suitable donor based on the info that you
									entered.</p>
								<!-- <ul class="actions special">
											<li><a href="#" class="button alt">Learn More</a></li>
										</ul> -->
							</section>

						</div>
						<div class="col-4 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Step 3</h3>
								<p>You’ll receive a SMS with information about your donor and how you can contact them
								</p>
								<!-- <ul class="actions special">
											<li><a href="#" class="button alt">Learn More</a></li>
										</ul> -->
							</section>

						</div>
					</div>
				</div>

				<div id="donor" class="tabcontent" style="border: none;">
					<div class="row" style="justify-content: space-around;">
						<div class="col-4 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>Step 1</h3>
								<p>Just fill out a simple form to sign up as a donor. Confirm that you’re eligible to
									donate
									plasma based on the criteria listed on our form.</p>
								<!-- <ul class="actions special">
															<li><a href="#" class="button alt">Learn More</a></li>
														</ul> -->
							</section>

						</div>
						<div class="col-4 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Step 2</h3>
								<p>If we find a patient that needs plasma, we’ll send you a SMS with information about
									them
									and how you can contact them.</p>
								<!-- <ul class="actions special">
															<li><a href="#" class="button alt">Learn More</a></li>
														</ul> -->
							</section>

						</div>
						<div class="col-4 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Step 3</h3>
								<p>You will also receive a link that you should visit after donating plasma so that we
									can
									keep track of donations.</p>
								<!-- <ul class="actions special">
															<li><a href="#" class="button alt">Learn More</a></li>
														</ul> -->
							</section>

						</div>
						<div class="col-4 col-12-narrower">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Step 4</h3>
								<p>If you’re unable to donate plasma, don’t worry, just visit the link mentioned above
									and
									we’ll match the patient assigned to you to another donor.</p>
								<!-- <ul class="actions special">
															<li><a href="#" class="button alt">Learn More</a></li>
														</ul> -->
							</section>

						</div>
					</div>
				</div>
			</section>

			<section class="box special ">
				<!-- <header class="major"></header> -->
				<h2>Associated Hospitals</h2>
				<!-- <div class="box alt"> -->

				<div class="row gtr-50 gtr-uniform">
					<div class="col-3"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
					<div class="col-3"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
					<div class="col-3"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
					<div class="col-3"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
				</div>
				<!-- </header> -->
				<!-- </div> -->
			</section>


		</section>

		<!-- Footer -->
		<footer id="footer">
			<ul class="icons">
				<li><a href="about.php" style="color:black"> About Us </a></li>
				<li><a href="terms.php" style="color:black">Terms of service</a></li>
				<ul style="padding: 0 0 0 1em;" class="copyright">
					<!-- <li>Phone number : 9999999999</li> -->
					<li>Email: email@plasmafinder.com</li>
				</ul>
			</ul>

			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
			</ul>
			<!-- <ul class="copyright">
				<li>&copy; PlasmaFinder. All rights reserved.</li>
			</ul> -->
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!-- <script src="assets/js/jquery.dialogBox.js"></script> -->
	<script>
		$(".notelig").click(function () {
			$(".don_pop").hide();
			$(".rejected").show();
		});

		$("#close_btn").click(function () {
			$("#donor_id").dialog("close");
			location.reload();
		});

	</script>
	<script>
		function openCity(evt, cityName) {
			// Declare all variables
			var i, tabcontent, tablinks;

			// Get all elements with class="tabcontent" and hide them
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}

			// Get all elements with class="tablinks" and remove the class "active"
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}

			// Show the current tab, and add an "active" class to the button that opened the tab
			document.getElementById(cityName).style.display = "block";
			evt.currentTarget.className += " active";
		}
	</script>

</body>

</html>