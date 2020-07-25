<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Plasma Finder</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="icon" href="images/favicon/favicon.ico" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
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

		/*  */

		#ui-datepicker-div {
			width: 30%;
		}

		.ui-datepicker-month {
			display: inline-block;
		}

		.ui-datepicker-year {
			display: inline-block;
		}

		@media screen and (max-width: 480px) {
			#ui-datepicker-div {
				width: 75%;
			}

			select {

				background-size: 0.55em;
				padding-right: 1em;
			}
		}
	</style>
</head>

<body class="is-preload" onload="getLocation()">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header">
			<!-- <h1><a href="index.html">Plasma</a> Finder</h1> -->
			<h1><img src="images/logo.png" height="80" width="80" /></h1>
			<nav id="nav">
				<ul>
					<li><a href="index.php"><span style="color:#646464">Home</span></a></li>
				</ul>
			</nav>
		</header>

		<!-- Main -->
		<section id="main" class="container medium">
			<header>
				<h2 id="heading">Hello Patient!</h2>
				<p id="data1">Fill out the form below so that we find a plasma donor for you!</p>
			</header>
			<div class="box">
				<form id="registrationForm" action="_actions/registerPatient.php" method="POST">
					<!-- <form id="registrationForm" action="_actions/test.php" method="POST"> -->
					<div class="row gtr-50 gtr-uniform">

						<div class="col-12">
							<input type="text" name="name" id="name" value="" placeholder="Name" required />
						</div>
						<div class="col-12">
							<input type="text" name="phone" id="phone" value="" placeholder="Phone" required />
						</div>
						<div class="col-12">
							<input type="email" name="email" id="email" value="" placeholder="Email" required />
						</div>
						<div class="col-12">
							<input type="text" name="age" id="age" value="" placeholder="Age" required />
						</div>
						<div class="col-12">
							<select name="blood" id="blood" required>
								<option value="">Blood Group</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="O">O</option>
								<option value="AB">AB</option>
							</select>
						</div>
						<!-- <div class="col-12">
							<input type="text" name="address" id="autocomplete" value="" onFocus="geolocate()"
								placeholder="Address" />
						</div> -->
						<div class="col-12">
							<input type="text" name="lat" id="lat" value="" required />
						</div>
						<div class="col-12">
							<input type="text" name="long" id="long" value="" required />
						</div>

						<div class="col-12-narrower">
							<input type="checkbox" id="agree" name="agree" checked>
							<label for="agree">I agree to the <a href="terms.php">terms of service</a> of the
								website</label>
						</div>
						<div class="col-12">
							<ul class="actions special">
								<li><input type="submit" name="submit" value="Register" id="register" /></li>
							</ul>
						</div>
					</div>
				</form>
			</div>
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



	<!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>
		$(document).ready(function () {
			// $('#register').click(function () {
			// 	$('#verificationEnter').show();
			// 	$('#registrationForm').hide();
			// 	$('#data2').show();
			// 	$('#data1').hide();
			// 	$('#heading').hide();
			// });

			$('#agree').click(function () {
				//If the checkbox is checked.
				if ($(this).is(':checked')) {
					//Enable the submit button.
					$('#register').attr("disabled", false);
				} else {
					//If it is not checked, disable the button.
					$('#register').attr("disabled", true);
				}
			});
		});
	</script>


	<script>
		var x = document.getElementById("demo");
		var lat = document.getElementById("lat");
		var long = document.getElementById("long");

		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition);
			} else {
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}

		function showPosition(position) {
			document.getElementById('lat').value = position.coords.latitude;
			document.getElementById('long').value = position.coords.longitude;
		}
	</script>

	<script>
		// This sample uses the Autocomplete widget to help the user select a
		// place, then it retrieves the address components associated with that
		// place, and then it populates the form fields with those details.
		// This sample requires the Places library. Include the libraries=places
		// parameter when you first load the API. For example:
		// <script
		// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

		var placeSearch, autocomplete;

		var componentForm = {
			street_number: 'short_name',
			route: 'long_name',
			locality: 'long_name',
			administrative_area_level_1: 'short_name',
			country: 'long_name',
			postal_code: 'short_name'
		};

		function initAutocomplete() {
			// Create the autocomplete object, restricting the search predictions to
			// geographical location types.
			autocomplete = new google.maps.places.Autocomplete(
				document.getElementById('autocomplete'), {
					types: ['geocode']
				});

			// Avoid paying for data that you don't need by restricting the set of
			// place fields that are returned to just the address components.
			autocomplete.setFields(['address_component']);

			// When the user selects an address from the drop-down, populate the
			// address fields in the form.
			autocomplete.addListener('place_changed', fillInAddress);
		}

		function fillInAddress() {
			// Get the place details from the autocomplete object.
			var place = autocomplete.getPlace();

			for (var component in componentForm) {
				document.getElementById(component).value = '';
				document.getElementById(component).disabled = false;
			}

			// Get each component of the address from the place details,
			// and then fill-in the corresponding field on the form.
			for (var i = 0; i < place.address_components.length; i++) {
				var addressType = place.address_components[i].types[0];
				if (componentForm[addressType]) {
					var val = place.address_components[i][componentForm[addressType]];
					document.getElementById(addressType).value = val;
				}
			}
		}

		// Bias the autocomplete object to the user's geographical location,
		// as supplied by the browser's 'navigator.geolocation' object.
		function geolocate() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(function (position) {
					var geolocation = {
						lat: position.coords.latitude,
						lng: position.coords.longitude
					};
					var circle = new google.maps.Circle({
						center: geolocation,
						radius: position.coords.accuracy
					});
					autocomplete.setBounds(circle.getBounds());
				});
			}
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initAutocomplete"
		async defer></script>

</body>

</html>