<?php
session_start();
require_once 'mysql_connect.php';
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($conn));


try{
    $uname  = $_POST['admin_username'];
    $pwd  = $_POST['admin_password'];

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $login = $conn->prepare("SELECT * FROM admin WHERE admin_username = :uname AND admin_password = :pwd");
    $login->bindParam(':uname', $uname, PDO::PARAM_STR);
    $login->bindParam(':pwd', $pwd, PDO::PARAM_STR);

    $login->execute();
    $row = $login->fetch(PDO::FETCH_ASSOC);
    print_r($row);

    $_SESSION["adminid"] = $_POST['admin_username'];

    if ($_POST['admin_username'] == $uname && $_POST['admin_password'] == $pwd ) {
        header("Location:admin_dashboard.php");
        exit();
    }

    else{
        header("Location:loginadmin.php");
        exit();
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>