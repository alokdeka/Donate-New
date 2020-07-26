<?php
session_start();
include('_actions/config.php');
if (empty($_GET['id'])){
    echo "\n";
    echo ("<script>
     window.location.href='index.php';
     </script>");
}
elseif (is_numeric(htmlspecialchars($_GET['id']))) {

	$id = $_GET['id'];
	$query = "SELECT * FROM `tbl_patients` WHERE `id`='$id' AND `is_varified`='0'";
	$result = mysqli_query($db,$query);
	if (mysqli_num_rows($result) == 0) {
		echo "\n";
		echo ("<script>
		 window.location.href='index.php';
		 </script>");
	}
	$row = mysqli_fetch_assoc($result);
	$otp = rand(100000, 999999);
	$_SESSION["otp"] = $otp;
	$phone = $row['phone'];

?>
<html>

<head>
	<title>Plasma Finder | Donor Home</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="icon" href="images/favicon/favicon.ico" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->
	<!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
	<style>
		#ui-datepicker-div {
			width: 30%;
		}

		.ui-datepicker-month {
			display: inline-block;
		}

		.ui-datepicker-year {
			display: inline-block;
		}

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

<body class="is-preload">
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
				<p id="data2">Please enter the OTP sent to your mobile number: </p><br>
				<p>Yoy OTP: <?php echo $_SESSION["otp"];?></p>
			</header>
			<div class="box">
				<div id="verificationEnter">
					<div class="gtr-uniform">
						<div class="col-12" style="margin-bottom: 10px;">
							<input type="text" name="phone" id="phone" value="<?php echo $phone;?>" disabled />
						</div>
						<div class="col-12" style="margin-bottom: 10px;">
							<input type="text" name="verification" id="verification" value="" placeholder="OTP" />
						</div>
						<div class="col-12">
							<ul class="actions special">
								<li><input id="verficationBtn" type="submit" value="Verify" /></li>
							</ul>
						</div>
					</div>
				</div>
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
			var value = <?php echo $_SESSION['otp'] ?>;
			$('#verficationBtn').click(function(){
				var otp = $("#verification").val();
				if(otp.length == 0){
					alert('Please enter OTP')
				} 
				else{
					if(value == otp){
						alert('Verified');
						<?php unset($_SESSION['otp']); ?>;
						window.location.href='index.php';
					}
					else{
						alert('Wrong OTP');
					}
				}

			});
		});
	</script>
</body>

</html>

<?php 
  }
                
    else {
        echo "\n";
        echo ("<script>
         window.location.href='index.php';
         </script>");
    }?>