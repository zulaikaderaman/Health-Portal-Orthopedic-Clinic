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
        .sidenav a, .dropdown-btn {
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
        .sidenav a:hover, .dropdown-btn:hover {
            color: #f1f1f1;
        }

        /* Add an active class to the active dropdown button */
        .active {
            background-color: green;
            color: white;
        }

        /* Dropdown container (hidden by default). */
        .dropdown-container {
            display: none;
            background-color: #262626;
            padding-left: 8px;
        }

        /* Optional: Style the caret down icon */
        .fa-caret-down {
            float: right;
            padding-right: 8px;
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
        <?php
        $_SESSION["patientid"];

        $query = "SELECT * FROM patients WHERE pt_ic ='".$_SESSION["patientid"]."'"; //have to do in this way because the userid hold a varchar
        $result = mysqli_query($conn, $query) or die(mysqli_error());

        if($row= mysqli_fetch_array($result))

        echo'
        <table class="dashboard">
        <a href="pt_dashboard.php"><i class="fa fa-dashboard">  Dashboard</i></a>
        <a href="pt_profile.php"><i class="fa fa-user-circle-o">  Profile</i></a>
        <a href="pt_phyinfo.php"><i class="fa fa-user-md">  Physician Info</i></a>
        <button class="dropdown-btn"><i class="fa fa-copy">  Medical History </i><i class="fa fa-chevron-down"></i></button>
        <div class="dropdown-container">
            <a href="pt_screening.php?id='.$row["patientid"].'"><i class="fa fa-heartbeat">  Health Screening</i></a>
            <a href="pt_medicine.php?id='.$row["patientid"].'"><i class="fa fa-medkit">  Medicine</i></a>
        </div>
        </tbody>
            </table>';
        ?>

    </div>

    <!-- main site -->
    <style>
        /* Main content */
        .main {
            margin-left: 300px; /* Same as the width of the sidenav */
            font-size: 16px; /* Increased text to enable scrolling */
            padding: 50px 10px;
        }


    </style>

    <div class="main">
        <h1>PATIENT</h1>
        <h2>Dashboard</h2>
        <br>
<?php
$_SESSION["patientid"];

$query = "SELECT * FROM patients WHERE pt_ic ='".$_SESSION["patientid"]."'"; //have to do in this way because the userid hold a varchar
$result = mysqli_query($conn, $query) or die(mysqli_error());

if($row= mysqli_fetch_array($result))

    echo'<table class="dashboard">

        <div class="w3-row-padding w3-margin-bottom">
            <div class="w3-quarter">
                <div class="w3-container w3-pink w3-padding-16">
                    <div class="w3-clear"></div>
                    <div class="w3-left"></div>
                    <h4><a href="pt_profile.php"><i class="fa fa-user-circle-o w3-xxlarge"><br>Patient Profile</i></a>
                    </h4>
                </div>
            </div>

            <div class="w3-quarter">
                <div class="w3-container w3-purple w3-text-white w3-padding-16">
                    <div class="w3-clear"></div>
                    <div class="w3-left"></div>
                    <h4><a href="pt_phyinfo.php"><i class="fa fa-user-md w3-xxlarge"><br>Physician Info</i></a></h4>
                </div>
            </div>

            <div class="w3-quarter">
                <div class="w3-container w3-pink w3-padding-16">
                    <div class="w3-clear"></div>
                    <div class="w3-left"></div>
                    <h4><a href="pt_screening.php?id='.$row["patientid"].'"><i class="fa fa-heartbeat w3-xxlarge"><br>Health Screening</i></a></h4>
                </div>
                </a>
            </div>

            <div class="w3-quarter">
                <div class="w3-container w3-purple w3-padding-16">
                    <div class="w3-clear"></div>
                    <div class="w3-left"></div>
                    <h4><a href="pt_medicine.php?id='.$row["patientid"].'"><i class="fa fa-medkit w3-xxlarge"><br>Medicine</i></a></h4>
                </div>
            </div>

        </div>
    </div>
    

       </tbody>
            </table>';
        ?>


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


    </script>

</body>
</html>