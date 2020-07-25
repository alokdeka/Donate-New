<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Plasma Finder | Inform</title>
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
                </ul>
            </nav>
        </header>

        <!-- Banner -->
        <section id="banner">
            <h2 class="head1">Inform</h2>
        </section>


        <section id="main" class="container medium">
            <div>
                <div class="box">
                    <!-- Enter phone number -->
                    <div id="phoneEnter" method="post">
                        <div class="gtr-uniform">
                            <div class="col-12" style="margin-bottom: 10px;">
                                <!-- <input type="hidden" name="phone1" id="phone1" value="+91" /> -->
                                <input type="text" name="phone" id="phone" value=""
                                    placeholder="Enter your phone number" />
                            </div>
                            <div class="col-12">
                                <ul class="actions special">
                                    <li><input id="phoneSubmit" type="submit" value="Send Code" /></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Enter verification code -->
                    <div id="verificationEnter" method="POST">
                        <div class="gtr-uniform">
                            <div class="col-12" style="margin-bottom: 10px;">
                                <input type="text" name="verification" id="verification" value=""
                                    placeholder="Enter the verification code sent to your phone number" />
                            </div>
                            <div class="col-12">
                                <ul class="actions special">
                                    <li><input id="verficationBtn" type="submit" value="Verify" /></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <ul class="actions special buttons">
                        <li><a href="#" class="button primary" id="cancelCurrentRequest">Cancel Donation</a></li>
                        <li><a href="#" class="button primary" id="completeCurrentRequest">Complete Donation</a></li>
                    </ul>

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

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>

<script>
    $(document).ready(function () {

        $('#verificationEnter').hide();
        $('.buttons').hide();


        // $('#phoneSubmit').click(function () {
        //     $('#verificationEnter').show();
        //     $('#phone').attr('disabled', 'disabled');
        //     $('#verification').prop("disabled", false);
        //     $('#phoneSubmit').hide();
        // });

        $('#verficationBtn').click(function () {
            $('.buttons').show();
            $('#verification').attr('disabled', 'disabled');
            $('#verficationBtn').hide();
        });

        generateVerificationCodeEnums = {
            DONOR_NOT_FOUND: 0,
            NO_PENDING_DONATION_REQUEST_FOUND: 1,
            RAN_OUT_OF_CHANCES: 2,
            UNEXPECTED_ERROR: 3
        }

        donationCancellationEnums = {
            DONOR_NOT_FOUND: 0,
            INCORRECT_VERIFICATION_CODE_ANOTHER_ONE_SENT: 1,
            INCORRECT_VERIFICATION_CODE_AND_RAN_OUT_OF_CHANCES: 2,
            RAN_OUT_OF_CHANCES: 3,
            NO_PENDING_DONATION_REQUEST_FOUND: 4,
            UNEXPECTED_ERROR: 5
        }

        donationCompletionEnums = {
            DONOR_NOT_FOUND: 0,
            INCORRECT_VERIFICATION_CODE_ANOTHER_ONE_SENT: 1,
            INCORRECT_VERIFICATION_CODE_AND_RAN_OUT_OF_CHANCES: 2,
            RAN_OUT_OF_CHANCES: 3,
            NO_PENDING_DONATION_REQUEST_FOUND: 4,
            UNEXPECTED_ERROR: 5
        }

        // Submit phone number
        $("#phoneSubmit").click(function () {

            $.ajax({

                type: 'post',
                url: "https://agile-tundra-26237.herokuapp.com/api/donor/generate-verification-code/",
                crossDomain: true,
                dataType: 'json',


                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'origin': 'https://agile-tundra-26237.herokuapp.com/api/donor/generate-verification-code/'
                },


                data: {
                    // "phone": "+91" + $("#phone").val(),

                    "phone": "+919999888822"
                },
                success: function (e) {
                    console.log(e);
                    alert("Success");
                    $('#verificationEnter').show();
                    $('#phone').attr('disabled', 'disabled');
                    $('#verification').prop("disabled", false);
                    $('#phoneSubmit').hide();
                },
                error: function (errorCode) {
                    // console.log(errorCode);

                    if (errorCode === generateVerificationCodeEnums.DONOR_NOT_FOUND) {
                        alert(
                            'Invalid phone number entered'
                        );
                    } else if (errorCode === generateVerificationCodeEnums
                        .NO_PENDING_DONATION_REQUEST_FOUND) {
                        alert(
                            "The user linked to this phone number has no pending donation requests"
                        );
                    } else if (errorCode === generateVerificationCodeEnums
                        .RAN_OUT_OF_CHANCES) {
                        alert('You have run out of chances to request verification codes');
                    } else if (errorCode === generateVerificationCodeEnums
                        .UNEXPECTED_ERROR) {
                        alert(
                            'We encountered an unexpected error. Please email us at email@plasmafinder.com to inform us of this so that we can investigate it.'
                        );
                    }

                    // alert("Something went wrong!");
                }

            });
        });



        // Cancel donation
        $("#cancelCurrentRequest").click(function () {

            $.ajax({

                type: 'post',
                url: "https://agile-tundra-26237.herokuapp.com/api/donor/cancel-donation/",
                crossDomain: true,
                dataType: 'json',


                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'origin': 'https://agile-tundra-26237.herokuapp.com/api/donor/cancel-donation/'
                },


                data: {
                    // "phone": "+91" + $("#phone").val(),
                    // "verificationCode": $("#verification").val()

                    "phone": "+919999999988",
                    "verificationCode": 123456
                },
                success: function (e) {
                    console.log(e);
                    alert("Your donation request has been cancelled successfully.");
                },
                error: function (errorCode) {
                    // console.log(errorCode);

                    if (errorCode === donationCancellationEnums.DONOR_NOT_FOUND) {
                        alert(
                            'Invalid phone number entered'
                        );
                    } else if (errorCode === donationCancellationEnums
                        .INCORRECT_VERIFICATION_CODE_ANOTHER_ONE_SENT) {
                        alert(
                            "The verification code that you entered was incorrect. We have sent you another verification code. Please enter it carefully this time."
                        );
                    } else if (errorCode === donationCancellationEnums
                        .INCORRECT_VERIFICATION_CODE_AND_RAN_OUT_OF_CHANCES) {
                        alert(
                            'The verification code that you entered was incorrect and you have run out of chances to request verification codes'
                        );
                    } else if (errorCode === donationCancellationEnums.RAN_OUT_OF_CHANCES) {
                        alert(
                            'You have run out of chances to request verification codes'
                        );
                    } else if (errorCode === donationCancellationEnums
                        .NO_PENDING_DONATION_REQUEST_FOUND) {
                        alert(
                            'You have no pending donation requests'
                        );
                    } else if (errorCode === donationCancellationEnums.UNEXPECTED_ERROR) {
                        alert(
                            'We encountered an unexpected error. Please email us at email@plasmafinder.com to inform us of this so that we can investigate it.'
                        );
                    }

                    // alert("Something went wrong!");

                }
            });
        });



        // Complete donation
        $("#completeCurrentRequest").click(function () {

            $.ajax({

                type: 'post',
                url: "https://agile-tundra-26237.herokuapp.com/api/donor/complete-donation/",
                crossDomain: true,
                dataType: 'json',


                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'origin': 'https://agile-tundra-26237.herokuapp.com/api/donor/complete-donation/'
                },


                data: {
                    // "phone": "+91" + $("#phone").val(),
                    // "verificationCode": $("#verification").val()

                    "phone": "+919999999988",
                    "verificationCode": 123456
                },
                success: function (e) {
                    console.log(e);
                    alert("Your donation request has been completed successfully.");
                },
                error: function (errorCode) {
                    // console.log(errorCode);

                    if (errorCode === donationCompletionEnums.DONOR_NOT_FOUND) {
                        alert(
                            'Invalid phone number entered'
                        );
                    } else if (errorCode === donationCompletionEnums
                        .INCORRECT_VERIFICATION_CODE_ANOTHER_ONE_SENT) {
                        alert(
                            "The verification code that you entered was incorrect. We have sent you another verification code. Please enter it carefully this time."
                        );
                    } else if (errorCode === donationCompletionEnums
                        .INCORRECT_VERIFICATION_CODE_AND_RAN_OUT_OF_CHANCES) {
                        alert(
                            'The verification code that you entered was incorrect and you have run out of chances to request verification codes'
                        );
                    } else if (errorCode === donationCompletionEnums.RAN_OUT_OF_CHANCES) {
                        alert(
                            'You have run out of chances to request verification codes'
                        );
                    } else if (errorCode === donationCompletionEnums
                        .NO_PENDING_DONATION_REQUEST_FOUND) {
                        alert(
                            'You have no pending donation requests'
                        );
                    } else if (errorCode === donationCompletionEnums.UNEXPECTED_ERROR) {
                        alert(
                            'We encountered an unexpected error. Please email us at email@plasmafinder.com to inform us of this so that we can investigate it.'
                        );
                    }

                    // alert("Something went wrong!");

                }
            });
        });



    });
</script>

</html>