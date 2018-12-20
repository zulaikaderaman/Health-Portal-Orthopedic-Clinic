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
        <h2>INFANT CHOKING</h2>
        <p>Treatment :</p>
        <p> Call 911 if the child is: </p>
        <p> •	Unconscious
            <br>•	Not able to breathe because something is blocking the airway or has caused it to close off
            <br>•	Wheezing or gasping
            <br>•	Not able to cry, talk, or make noise
            <br>•	Turning blue in the face
            <br>•	Grabbing at the throat
            <br>•	Looking panicked
            <br>Young children are prone to choking. If the child is coughing and gagging but can breathe and talk, don't do anything. But if he can't breathe, you must act quickly to stop a life-threatening situation.</p>
        <br>
        <p><b>While Waiting for 911</b></p>
        <p><b>If the Child Is Unconscious:</b></p>
        <p><b>1. Start CPR</b></p>
        <p> • Move the child to the floor and start CPR. Take the object out of his mouth only if you can see it.</p>
        <p><b>For a Child Younger Than 1 Year Who Is Conscious but Not Breathing:</b></p>
        <p><b>1. Get the Child Into Position</b></p>
        <p> •	Hold the child face down on your forearm, supported by your thigh.
            <br>•	Keep the child's torso higher than the head.</p>

        <p><b>2. Give Forceful Blows</b></p>
        <p> •	Use the heel of your free hand to thump the child in between the shoulder blades up to five times.</p>

        <p><b>3. Turn the Child Over</b></p>
        <p> •	Turn the child face up, and keep supporting the head and neck. If the object is not out yet, go to step 4.</p>

        <p><b>4. Press the Chest</b></p>
        <p> •	Place the child on a firm surface, which may still be your forearm.
            <br>•	Put two or three fingers in the centre of the child's breastbone and push quickly up to five times.
            <br>•	Repeat the back thumping and chest pushes until the object comes out or the child loses consciousness.
            <br>•	If the child is still not breathing, open the airway by putting your thumb in the child's mouth and grasping the lower incisors or gums. The jaw should lift up so you can look for the object. Do not do a finger sweep.
            <br>•	Do not try to pull the object out unless you see it clearly. You could accidentally push the object deeper in the child's throat.</p>

        <p><b>5. Start CPR, If Needed</b></p>
        <p> •	If the child loses consciousness, perform CPR and take the object out of his mouth only if you can see it. Never do a finger sweep unless you can see the object in the child's mouth.</p>
        <br>

        <p><b>For a Child Older Than 1 Year Who Is Conscious:</b></p>
        <p><b>1. Get the Child Into Position</b></p>
        <p> • Stand behind the child and wrap your arms around his waist.
            <br>•	Place a fist just above the child's belly button.</p>

        <p><b>2. Try to Dislodge the Object</b></p>
        <p> •	Hold the fist with your free hand and quickly push in and up.
            <br>•	Repeat until the object comes out or the child loses consciousness.</p>

        <p><b>3. Start CPR, If Needed</b></p>
        <p> •	If the child loses consciousness, move the child to the floor and start CPR. Take the object out of his mouth only if you can see it. Never do a finger sweep unless you can see the object in the child's mouth.</p>
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