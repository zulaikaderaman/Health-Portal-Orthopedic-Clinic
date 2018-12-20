<?php
session_start();
require_once 'mysql_connect.php';
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($conn));

try{
    $pt_ic  = $_POST['pt_ic'];
    $pt_password = $_POST['pt_password'];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $login = $conn->prepare("SELECT * FROM patients WHERE pt_ic = :pt_ic AND pt_password = :pt_password");
    $login->bindParam(':pt_ic', $pt_ic, PDO::PARAM_STR);
    $login->bindParam(':pt_password', $pt_password, PDO::PARAM_STR);

    $login->execute();
    $row = $login->fetch(PDO::FETCH_ASSOC);
    print_r($row);

    $_SESSION["patientid"] = $_POST['pt_ic'];

    if ($_POST['pt_ic'] == $pt_ic && $_POST['pt_password'] == $pt_password ) {
        header("Location:pt_dashboard.php");
        exit();
    }

    else{
        header("Location:loginpt.php");
        exit();
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;


?>


