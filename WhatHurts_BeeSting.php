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
        <h2>BEE STING</h2>
        <p>Treatment :</p>
        <p><b>Home Treatment</b></p>
        <p>Here are the steps you need to take after someone who is allergic has been stung:</p>
        <p> •	Remove any stingers immediately. Some experts recommend scraping out the stinger with a credit card.
            <br>•	Remove tight clothing and jewelry from areas near the bite in case swelling occurs.
            <br>•	Applying ice to the site may provide some mild relief. Apply ice for 20 minutes once every hour as needed. Wrap the ice in a towel or keep a cloth between the ice and skin to keep from freezing the skin.
            <br>•	Taking an antihistamine such as diphenhydramine (Benadryl) or a nonsedating one such as loratadine (Claritin) will help with itching and swelling.
            <br>•	Take acetaminophen (Tylenol) or ibuprofen (Motrin)for pain relief as needed.
            <br>•	Wash the sting site with soap and water. Placing hydrocortisone cream on the sting can help relieve redness, itching, and swelling.
            <br>•	Watch for signs of shock or allergic reaction. Signs include swelling or itching at the wound site, dizziness, nausea or difficulty breathing. Seek medical attention immediately if any of these signs occur.
            <br>•	Continue monitoring victim for shock until medical help arrives.
            <br>•	Check victim’s Airway, Breathing, and Circulation (ABC’s). If ABC’s are impaired then call 911 and begin CPR. IMPORTANT: only a trained & qualified person should administer CPR.</p>

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