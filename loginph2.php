<?php
session_start();
require_once 'mysql_connect.php';
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($conn));

try{
    $ph_personalcode  = $_POST['ph_personalcode'];
    $ph_password = $_POST['ph_password'];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $login = $conn->prepare("SELECT * FROM physicians WHERE ph_personalcode = :ph_personalcode AND ph_password = :ph_password");
    $login->bindParam(':ph_personalcode', $ph_personalcode, PDO::PARAM_STR);
    $login->bindParam(':ph_password', $ph_password, PDO::PARAM_STR);

    $login->execute();
    $row = $login->fetch(PDO::FETCH_ASSOC);
    print_r($row);

    $_SESSION["physicianid"] = $_POST['ph_personalcode'];

    if ($_POST['ph_personalcode'] == $ph_personalcode && $_POST['ph_password'] == $ph_password ) {
        header("Location:ph_dashboard.php");
        exit();
    }

    else{
        header("Location:loginph.php");
        exit();
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;


?>


