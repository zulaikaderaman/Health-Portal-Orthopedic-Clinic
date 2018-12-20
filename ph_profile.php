<?php
session_start();
require_once 'mysql_connect.php';
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($conn));
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: "Lato", sans-serif;
        }
    </style>
</head>
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
        <a class="w3-bar-item w3-button w3-padding-large w3-hide-small w3-right" href="index.php" ><i class="fa fa-sign-out"></i> LOG OUT</a>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <a class="w3-bar-item w3-button w3-padding-large" href="index.php#what hurts?" ><i class="fa fa-stethoscope"></i> WHAT HURTS?</a>
    <a class="w3-bar-item w3-button w3-padding-large" href="index.php#sign up" ><i class="fa fa-user"></i> SIGN UP</a>
    <a class="w3-bar-item w3-button w3-padding-large" href="index.php#log in" ><i class="fa fa-sign-in"></i> LOG IN</a>
    <a class="w3-bar-item w3-button w3-padding-large" href="index.php#about us" ><i class="fa fa-group"></i> ABOUT US</a>
    <a class="w3-bar-item w3-button w3-padding-large w3-right" href="index.php" ><i class="fa fa-sign-out"></i> LOG OUT</a>
    <div class="w3-dropdown-hover w3-hide-small"></div>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

    <!-- side navigation -->
    <style>
        /* sidenav, full height */
        .sidenav {
            height: 100%;
            width: 130;
            position: fixed;
            z-index: 1;
            top: 46px;
            left: 10;
            background-color: #111;
            overflow-x: hidden;
            padding-top: 30px;
        }

        /* Style the sidenav links and the dropdown button */
        .sidenav a {
            padding: 16px 32px 16px 32px;;
            text-decoration: none;
            font-size: 22px;
            color: #818181;
            display: block;
            border: none;
            background: none;
            width: 100%;
            text-align: left;
            cursor: pointer;
            outline: none;
            transition: 0.3s;
        }


        /* On mouse-over */
        .sidenav a:hover{
            color: #f1f1f1;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        /* Some media queries for responsiveness */
        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>

    <div id="mySidenav" class="sidenav">
        <a href="ph_dashboard.php"><i class="fa fa-dashboard">  Dashboard</i></a>
        <a href="ph_profile.php"><i class="fa fa-user-circle-o">  Profile</i></a>
        <a href="ph_search.php"><i class="fa fa-search">  Search Patient</a>
    </div>

    <!-- main site -->
    <style>
        /* Main content */
        .main {
            margin-left: 260px; /* Same as the width of the sidenav */
            font-size: 16px; /* Increased text to enable scrolling */
            padding: 50px 10px;
        }

    </style>

    <div class="main">
        <h1>PHYSICIAN</h1>
        <h2>Profile</h2>
        <form id='update' action='ph_profile.php' method="post">

            <?php

            if (isset($_POST['edit'])) {

                $conn = mysqli_connect("localhost","root","","orthopedic");

                $ph_profilepic = $_POST["ph_profilepic"];
                $ph_name = $_POST["ph_name"];
                $ph_personalcode = $_POST["ph_personalcode"];
                $ph_password = $_POST["ph_password"];
                $ph_address = $_POST["ph_address"];
                $ph_email = $_POST["ph_email"];
                $ph_phonenum = $_POST["ph_phonenum"];
                $ph_qualification = $_POST["ph_qualification"];

                $query95 = "UPDATE physicians SET ph_profilepic='".$ph_profilepic."',ph_name='".$ph_name."',ph_personalcode='".$ph_personalcode."',ph_password='".$ph_password."',ph_address='".$ph_address."',ph_email='".$ph_email."',ph_phonenum='".$ph_phonenum."',ph_qualification='".$ph_qualification."' WHERE ph_personalcode='".$_POST["ph_personalcode"]."'";
                $result95 = mysqli_query($conn, $query95);

                if ($result95 = mysqli_query($conn, $query95)) {
                    echo '<div data-form-alert="true">
					    <div data-form-alert-success="true" class="alert alert-form alert-success "><b>Successfully Edit Profile</b></div></div>';

                }

                else {

                    echo '<div data-form-alert="false">
						<div data-form-alert-success="false" class="alert alert-form alert-danger "><b>Warning: Problem While Editing Profile</b></div></div>';
                }

            }

            ?>

            <form action="ph_profile.php" method="POST">

                <?php

                $_SESSION["physicianid"];

                $query = "SELECT * FROM physicians WHERE ph_personalcode ='".$_SESSION["physicianid"]."'"; //have to do in this way because the userid hold a varchar
                $result = mysqli_query($conn, $query) or die(mysql_error());

                while($row= mysqli_fetch_array($result)){
                    echo'<table class="table table-hover">';
                    echo'<thead>';

                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';

                    echo'<tr>';
                    echo'<td style="width:20%"><b>Profile Picture: </b></td>';
                    echo'<td colspan="2"><input type="file" class="form-control"  name="ph_profilepic" value="'.$row["ph_personalcode"].'" ></td>';
                    echo'</tr>';


                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';

                    echo'<tr>';
                    echo'<td style="width:20%"><b>Name: </b></td>';
                    echo'<td colspan="2"><input type="text" size="50" name="ph_name" value="'.$row["ph_name"].'" ></td>';
                    echo'</tr>';


                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';

                    echo'<tr>';
                    echo'<td style="width:20%"><b>Personal Code: </b></td>';
                    echo'<td colspan="2"><input type="text" size="50" name="ph_personalcode" value="'.$row["ph_personalcode"].'"></td>';
                    echo'</tr>';

                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';

                    echo'<tr>';
                    echo'<td style="width:20%"><b>Password: </b></td>';
                    echo'<td colspan="2"><input type="text" size="50" name="ph_password" value="'.$row["ph_password"].'"></td>';
                    echo'</tr>';

                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';

                    echo'<tr>';
                    echo'<td style="width:20%"><b>Address: </b></td>';
                    echo'<td colspan="2"><input type="text" size="100" name="ph_address" value="'.$row["ph_address"].'"></td>';
                    echo'</tr>';

                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';

                    echo'<tr>';
                    echo'<td style="width:20%"><b>Email: </b></td>';
                    echo'<td colspan="2"><input type="text" size="50" name="ph_email" value="'.$row["ph_email"].'"></td>';
                    echo'</tr>';

                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';

                    echo'<tr>';
                    echo'<td style="width:20%"><b>Phone Number: </b></td>';
                    echo'<td colspan="2"><input type="text" size="20" name="ph_phonenum" value="'.$row["ph_phonenum"].'"></td>';
                    echo'</tr>';

                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';

                    echo'<tr>';
                    echo'<td style="width:20%"><b>Qualification: </b></td>';
                    echo'<td colspan="2"><input type="text" size="100" name="ph_qualification" value="'.$row["ph_qualification"].'"></td>';
                    echo'</tr>';

                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';
                    echo'<tr>';


                    echo'<tr>';
                    echo'<td colspan="2"><button type="submit" class="btn btn-sm btn-success" name="edit">Update</button>
					    <input type="hidden" name="ph_personalcode" value="'.$row["ph_personalcode"].'"></td>';
                    echo'</tr>';
                    echo'</form>';
                    echo'</thead>';
                    echo'</table>';

                }

                ?>
            </form>

            <!-- End Page Content -->
    </div>
    <br>
    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }

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
