<?php
/**
 * Created by PhpStorm.
 * User: JM26071702
 * Date: 15/8/2018
 * Time: 12:17 AM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "orthopedic";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($conn));

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


