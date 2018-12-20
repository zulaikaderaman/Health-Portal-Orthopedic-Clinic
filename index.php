<!DOCTYPE html>
<html>
<title>Health Portal</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body {font-family: "Lato", sans-serif}
    .mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
    <div class="w3-bar w3-black w3-card">
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
        <a class="w3-bar-item w3-button w3-padding-large" href ="" ><i class="fa fa-home" ></i> HOME</a>
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-small" href="#what hurts?" ><i class="fa fa-stethoscope"></i> WHAT HURTS?</a>
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-small" href="#sign up" ><i class="fa fa-user"></i> SIGN UP</a>
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-small" href="#log in" ><i class="fa fa-sign-in"></i> LOG IN</a>
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-small" href="#about us" ><i class="fa fa-group"></i> ABOUT US</a>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a class="w3-bar-item w3-button w3-padding-large" href="#what hurts?" ><i class="fa fa-stethoscope"></i> WHAT HURTS?</a>
    <a class="w3-bar-item w3-button w3-padding-large" href="#sign up" ><i class="fa fa-user"></i> SIGN UP</a>
    <a class="w3-bar-item w3-button w3-padding-large" href="#log in" ><i class="fa fa-sign-in"></i> LOG IN</a>
    <a class="w3-bar-item w3-button w3-padding-large" href="#about us" ><i class="fa fa-group"></i> ABOUT US</a>
    <div class="w3-dropdown-hover w3-hide-small"></div>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- Images -->
    <style>
        .container {
            position: relative;
            text-align: center;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

    <div class="container w3-text-black">
        <img src="image\ortho1.jpg" style="width:100%;">
        <div class="centered w3-animate-opacity"><h3><b>HEALTH PORTAL : ORTHOPEDIC CLINIC</b></h3>
            <p><b>IIUM MEDICAL SPECIALIST CENTRE</b></p>
            <p><b>This portal is a platform of medical information and management of Orthopedic Department in IIUM Medical Specialist Centre</b></p>
        </div>
    </div>

    <!--The What Hurts? Section -->
    <div class="w3-black" >
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="what hurts?">
            <h2 class="w3-wide"><center>WHAT HURTS?</center></h2>
            <p class="w3-justify"><center> To Guide You In Any Emergency Situation </center></p>
            <br>
            </br>
            <a class="w3-button w3-left w3-border w3-hover-grey" href="WhatHurts_Burn.php">Burn</a>
            <a class="w3-button w3-right w3-border w3-hover-grey" href="WhatHurts_Choking.php">Choking</a>
            <br>
            </br>
            <a class="w3-button w3-left w3-border w3-hover-grey" href="WhatHurts_InfantChoking.php">Infant Choking</a>
            <a class="w3-button w3-right w3-border w3-hover-grey" href="WhatHurts_Poison.php">Poison</a>
            <br>
            </br>
            <a class="w3-button w3-left w3-border w3-hover-grey" href="WhatHurts_BeeSting.php">Bee Sting</a>
            <a class="w3-button w3-right w3-border w3-hover-grey" href="WhatHurts_AnimalBites.php">Animal Bites</a>
            <br>
            </br>
            <a class="w3-button w3-left w3-border w3-hover-grey" href="WhatHurts_EyeInjuries.php">Eye Injuries</a>
            <a class="w3-button w3-right w3-border w3-hover-grey" href="WhatHurts_Faint.php">Faint</a>
        </div>
    </div>

    <!-- The Sign Up Section -->
    <style>
        /* Add a background color when the inputs get focus */
        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        button:hover {
            opacity:1;
        }

        /* Extra styles for the cancel button */
        .cancelbtn {
            padding: 14px 20px;
            background-color: #f44336;
        }

        /* Extra styles for the sign up button */
        .signupbtn {
            padding: 14px 20px;
            background-color: #00cc00;
        }

        /* Float cancel and signup buttons and add an equal width */
        .cancelbtn, .signupbtn {
            float: left;
            width: 50%;
        }

        /* Add padding to container elements */
        .container {
            padding: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: #474e5d;
            padding-top: 50px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* Style the horizontal ruler */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 35px;
            top: 15px;
            font-size: 40px;
            font-weight: bold;
            color: #f1f1f1;
        }

        .close:hover,
        .close:focus {
            color: #f44336;
            cursor: pointer;
        }

        /* Clear floats */
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Change styles for cancel button and signup button on extra small screens */
        @media screen and (max-width: 300px) {
            .cancelbtn, .signupbtn {
                width: 100%;
            }
        }
    </style>
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="sign up">
        <h2 class="w3-wide"><center>SIGN UP</center></h2>
        <p class="w3-justify"><center>Who are you?</center></p>

        <center><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="w3-border w3-hover-grey">PATIENT</button></center>

        <?php include ('form_patients.php'); ?>

        <br>
        <center><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="w3-border w3-hover-grey">PHYSICIAN</button></center>

        <?php include ('form_physician.php'); ?>

        </br>
    </div>

    <!-- The Log In Section -->
    <div class="w3-black" >
        <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="log in">
            <h2 class="w3-wide"><center>LOG IN</center></h2>
            <p class="w3-justify"><center>Who are you?</center></p><br>
            <center><a class="w3-button w3-border w3-hover-grey" href="loginpt.php">PATIENT</a></center>
            <br>
            <center><a class="w3-button w3-border w3-hover-grey" href="loginph.php">PHYSICIAN</a></center>
            </br>
            <center><a class="w3-button w3-border w3-hover-grey" href="loginadmin.php">ADMIN</a></center>
        </div>
    </div>

    <!-- The About Us Section -->
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="about us">
        <h2 class="w3-wide"><center>ABOUT US</center></h2>
        <center><p>IIUM Medical Specialist Centre (iMSC) was launched by Tan Sri Dato’ Seri Utama Dr. Rais Yatim, President of IIUM on the 6th September 2016.
                IMSC has commenced her inpatient services and with this, IMSC is now a full-fledged private medical specialist centre providing a comprehensive medical services to the people of Kuantan and beyond.</p></center>
        <br>
        </br>
        <center>Orthopedic Clinic is one of medical department in the IIUM Medical Specialist Centre, Kuantan.
            We have a wide range of expertise within our practice, including both surgical and non surgical approaches to treating orthopedic conditions.
            Our panel of orthopedic experts include general orthopedic surgeons, physical medicine and rehabilitation physicians, and surgeons with advanced fellowship training in areas of
            foot and ankle, sports medicine, spine, hand and wrist, shoulder and upper extremity, joint preservation, and total joint replacement surgery.</p></center>
    </div>

    <!-- End Page Content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey">
    <div class="w3-container w3-theme-l1">
        <p>Powered by Orthopedic Clinic, IIUM Medical Specialist Centre</a></p>
    </div>
</footer>

<script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

</body>
</html>