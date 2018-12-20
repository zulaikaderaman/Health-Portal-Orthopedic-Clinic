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
            background-color: #000000;
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
        <h2>BURNS</h2>
        <p>Treatment :</p>
        <p> Call 911 if: </p>
        <p> •	The burn penetrates all layers of the skin
            <br>•	The skin is leathery or charred looking, with white, brown, or black patches
            <br>•	The hands, feet, face, or genitals are burned
            <br>•	The person is an infant or a senior</p>
        <br>
        <p><b>For all burns:</b></p>
        <p><b>1. Stop burning immediately</b></p>
        <p> • Put out fire or stop the person's contact with hot liquid, steam or other material
            <br>•	Help the person "stop, drop, and roll" to smother flames.
            <br>•	Remove smouldering material from the person.
            <br>•	Remove hot or burned clothing. If clothing sticks to skin, cut or tear around it.</p>

        <p><b>2. Remove Constrictive Clothing Immediately</b></p>
        <p> •	Take off jewellery, belts, and tight clothing. Burns can swell quickly.</p>

        <p><b>3. Know burn level</b></p>
        <p><b>a) First Degree Burn :</b> Skin will appear red and may be swollen or painful. Generally does not require medical attention.</p>
        <p> 1. Cool burn
            <br>•	Hold burned skin under cool (not cold) running water or immerse in cool water until pain subsides.
            <br>•	Use compresses if running water isn’t available.</p>
        <p> 2. Protect Burn
            <br>•	Cover with sterile, non-adhesive bandage or clean cloth.
            <br>• Do not apply butter or ointments, which can cause infection.</p>
        <p> 3. Treat Pain
            <br>•	Give over-the-counter pain reliever such as ibuprofen (Advil, Motrin), acetaminophen(Tylenol), or naproxen (Aleve).</p>
        <p> 4. When to see a doctor
            <br> Seek  medical help if :
            <br>• You see signs of infection, like increased pain, redness, swelling, fever, or oozing.
            <br>• The person needs tetanus or booster shot, depending on date of last injection. Tetanus booster should be given every 10 years.
            <br>•	The burn blister is larger than two inches or oozes.
            <br>•	Redness and pain last more than a few hours.
            <br>•	Pain worsens.</p>

        <p><b>b) Second Degree Burn :</b> Skin will appear red, blistered and swollen. May require medical attention.</p>
        <p> 1. Cool burn
            <br>•	Immerse in cool water for 10 or 15 minutes.
            <br>•	Use compresses if running water isn’t available.
            <br>•	Don’t apply ice. It can lower body temperature and cause further pain and damage.
            <br>•	Don’t break blisters or apply butter or ointments, which can cause infection.</p>
        <p> 2. Protect Bum
            <br>•	Cover loosely with sterile, non-stick bandage and secure in place with gauze or tape.</p>
        <p> 3. Prevent Shock
            <br>Unless the person has a head, neck, or leg injury, or it would cause discomfort:
            <br>• Lay the person flat.
            <br>•	Elevate feet about 12 inches.
            <br>•	Elevate burn area above heart level, if possible.
            <br>•	Cover the person with coat or blanket.</p>
        <p> 4. See a doctor
            <br>•	The doctor can test burn severity, prescribe antibiotics and pain medications, and administer a tetanus shot, if needed</p>

        <p><b>c) Third Degree Burn :</b> Skin will be visibly charred and may be white. Usually very painful. REQUIRES MEDICAL ATTENTION.</p>
        <p> 1. Protect Burn Area
            <br>•	Cover loosely with sterile, nonstick bandage or, for large areas, a sheet or other material that that won’t leave lint in wound.
            <br>•	Separate burned toes and fingers with dry, sterile dressings.
            <br>•	Do not soak burn in water or apply ointments or butter, which can cause infection.</p>
        <p> 2. Prevent Shock
            <br>Unless the person has a head, neck, or leg injury, or it would cause discomfort:
            <br>•	Lay the person flat.
            <br>•	Elevate feet about 12 inches.
            <br>•	Elevate burn area above heart level, if possible.
            <br>•	Cover the person with coat or blanket.
            <br>•	For an airway burn, do not place pillow under the person's head when the person is lying down. This can close the airway.
            <br>•	Have a person with a facial burn sit up.
            <br>•	Check pulse and breathing to monitor for shock until emergency help arrives.</p>
        <p> 4. See a doctor
            <br>•	Doctors will give oxygen and fluid, if needed, and treat the burn.</p>
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