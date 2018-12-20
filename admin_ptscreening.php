<?php
session_start();
require_once 'mysql_connect.php';
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($conn));


if (isset($_POST['submitted'])) {

    $patientid = $_GET['id'];
    $screeningdate = $_POST['screeningdate'];
    $sc_bloodpressure = $_POST['sc_bloodpressure'];
    $sc_pulserate = $_POST['sc_pulserate'];
    $sc_bodytemperature = $_POST['sc_bodytemperature'];
    $sc_respirationrate = $_POST['sc_respirationrate'];
    $sc_oxysaturation = $_POST['sc_oxysaturation'];
    $sc_dextrostix = $_POST['sc_dextrostix'];
    $sc_ptcomplaint = $_POST['sc_ptcomplaint'];
    $sc_painlevel = $_POST['sc_painlevel'];


    $query = "INSERT INTO screening(sc_bloodpressure, sc_pulserate, sc_bodytemperature, sc_respirationrate, sc_oxysaturation, sc_dextrostix, sc_ptcomplaint, sc_painlevel, patientid, screeningdate) VALUES('$_POST[sc_bloodpressure]','$_POST[sc_pulserate]','$_POST[sc_bodytemperature]','$_POST[sc_respirationrate]','$_POST[sc_oxysaturation]','$_POST[sc_dextrostix]','$_POST[sc_ptcomplaint]','$_POST[sc_painlevel]', $patientid ,'$_POST[screeningdate]')";
    $result = mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn)==1){
        echo "<script>alert('Data Have Been Added');document.location.href='admin_pt.php?';</script>";
    }

}

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
        <a href="admin_dashboard.php"><i class="fa fa-dashboard">  Dashboard</i></a>
        <a href="admin_ph.php"><i class="fa fa-user-md">  Physician</i></a>
        <a href="admin_pt.php"><i class="fa fa-user">  Patient</i></a>
    </div>

    <!-- main site -->
    <style>
        /* Main content */
        .main {
            margin-left: 240px; /* Same as the width of the sidenav */
            font-size: 16px; /* Increased text to enable scrolling */
            padding: 50px 10px;
        }
    </style>

    <div class="main">
        <h1>ADMIN</h1>
        <h2>Patient Health Screening</h2>
            <div class="mbr-section mbr-section-nopadding">
                <div class="container">
                    <div class="row">
                        <form role="form" name="submitted" method="post">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">

                                    <?php
                                    $query9 = "SELECT * FROM patients WHERE patientid='".$_GET['id']."'";
                                    $result9 = mysqli_query($conn, $query9);

                                        while($row= mysqli_fetch_array($result9))
                                        {
                                            ?>
                                            <td style="width:20%">Patient Name: </td>
                                    <?php
                                            echo$row["pt_name"];
                                    ?>
                                            <br>
                                            <td style="width:20%">IC Number: </td>
                                    <?php
                                            echo$row["pt_ic"];
                                        }
                                    ?>


                                    <br></br>

                                    <label class="form-control-label" for="form1-14-phone">Date :</label>
                                    <input type="date" class="form-control" name="screeningdate" required="" >
                                    <br></br>

                                    <tr>
                                        <td style="width:20%">Blood Pressure: </td>
                                        <td colspan="2"><input type="text" placeholder="" name="sc_bloodpressure" required></td>
                                        <label for="unit">mm Hg</label>
                                    </tr>

                                    <br></br>

                                    <tr>
                                        <td style="width:20%">Pulse Rate: </td>
                                        <td colspan="2"><input type="text" placeholder="" name="sc_pulserate" required></td>
                                        <label for="unit">/min</label>
                                    </tr>

                                    <br></br>

                                    <td style="width:20%">Body Temperature: </td>
                                    <td colspan="2"><input type="text" placeholder="" name="sc_bodytemperature" required></td>
                                    <label for="unit">°C</label>
                                    </tr>

                                    <br></br>

                                    <tr>
                                        <td style="width:20%">Respiration Rate: </td>
                                        <input type="text" placeholder="" name="sc_respirationrate" required>
                                        <label for="unit">/min</label>
                                    </tr>

                                    <br></br>

                                    <tr>
                                        <td style="width:20%">Oxygen Saturation: </td>
                                        <input type="text" placeholder="" name="sc_oxysaturation" required>
                                        <label for="unit">%</label>
                                    </tr>

                                    <br></br>

                                    <tr>
                                        <td style="width:20%">Dextrostix: </td>
                                        <input type="text" placeholder="" name="sc_dextrostix" required>
                                        <label for="unit">mmol/L</label>
                                    </tr>

                                    <br></br>

                                    <tr>
                                        <td style="width:20%">Patient Complaint: </td>
                                        <input type="text" placeholder="" size="100" name="sc_ptcomplaint" required>
                                    </tr>

                                    <br></br>

                                    <tr>
                                        <td style="width:20%">Pain Level: </td>
                                        <input type="text" placeholder="" name="sc_painlevel" required>
                                    </tr>

                                    <br></br>


                                    <div><button type="submit" class="btn btn-info" name="submitted">Submit Screening</button></div>
                                    <input type="hidden" name="submitted" value="TRUE" />
                                </div>
                        </form>
                    </div>
                </div>

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