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
        <a class="w3-bar-item w3-button w3-padding-large" href="index.php" ><i class="fa fa-home"></i> HOME</a>
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-small" href="index.php#what hurts?" ><i class="fa fa-stethoscope"></i> WHAT HURTS?</a>
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-small" href="index.php#sign up" ><i class="fa fa-user"></i> SIGN UP</a>
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-small" href="index.php#log in" ><i class="fa fa-sign-in"></i> LOG IN</a>
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-small" href="index.php#about us" ><i class="fa fa-group"></i> ABOUT US</a>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a class="w3-bar-item w3-button w3-padding-large" href="index.php#what hurts?" ><i class="fa fa-stethoscope"></i> WHAT HURTS?</a>
    <a class="w3-bar-item w3-button w3-padding-large" href="index.php#sign up" ><i class="fa fa-user"></i> SIGN UP</a>
    <a class="w3-bar-item w3-button w3-padding-large" href="index.php#log in" ><i class="fa fa-sign-in"></i> LOG IN</a>
    <a class="w3-bar-item w3-button w3-padding-large" href="index.php#about us" ><i class="fa fa-group"></i> ABOUT US</a>
    <div class="w3-dropdown-hover w3-hide-small"></div>
</div>


<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- side navigation -->
    <style>
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 46px;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
    </head>
    <body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="WhatHurts_Burn.php">Burns</a>
        <a href="WhatHurts_Choking.php">Choking</a>
        <a href="WhatHurts_InfantChoking.php">Infant Choking</a>
        <a href="WhatHurts_Poison.php">Poison</a>
        <a href="WhatHurts_BeeSting.php">Bee Sting</a>
        <a href="WhatHurts_AnimalBites.php">Animal Bites</a>
        <a href="WhatHurts_EyeInjuries.php">Eye Injuries</a>
        <a href="WhatHurts_Faint.php">Faint</a>
    </div>

    <div id="main">
        <span style="font-size:18px;cursor:pointer" onclick="openNav()">&#9776; what hurts?</span>
    </div>

    <!-- emergency treatment -->
    <div style="margin-left:80px;">
        <h2>FAINT</h2>
        <p>Treatment :</p>
        <p> Call 911 if: </p>
        <p> •	Has blue lips or face
            <br>•	An irregular or slow heartbeat
            <br>•	Chest pain
            <br>•	Difficulty breathing
            <br>•	Is difficult to awaken
            <br>•	Acts confused</p>
        <br>
        <p><b>1. Make the Person Safe</b></p>
        <p> •	Lay the person flat on his or her back.
            <br>•	Elevate the person's legs to restore blood flow to the brain.
            <br>•	Loosen tight clothing.</p>

        <p><b>2. Try to Revive the Person</b></p>
        <p> •	Shake the person vigorously, tap briskly, or yell.
            <br>•	If the person doesn't respond, call 911 immediately and start CPR if necessary.
            <br>•	If an AED is available, bring it by the person and use it if you have been trained on its use.</p>

        <p><b>3. Turn the Person on His or Her Side if He or She:</b></p>
        <p> •	Is vomiting or bleeding from the mouth</p>

        <p><b>4. Do Home Care for Simple Fainting</b></p>
        <p> •	If the person is alert, give fruit juice, especially if the person has not eaten in more than 6 hours or has diabetes.
            <br>•	Stay with the person until he or she is fully recovered.</p>

        <p><b>5. Call a Health Care Provider</b></p>
        <p>See a health care provider right away if the person:</p>
        <p> •	Hit his or her head when fainting
            <br>•	Faints more than once in a month
            <br>•	Is pregnant or has a heart condition or other serious illness
            <br>•	Experiences unusual symptoms, such as chest pain, shortness of breath, confusion, blurred vision, or difficulty talking</p>
    </div>
    </body>

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


    //used to open and close sidenav
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>

</body>
</html>