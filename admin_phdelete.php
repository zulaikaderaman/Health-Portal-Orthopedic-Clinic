<?php
session_start();
require_once 'mysql_connect.php';
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error " . mysqli_error($conn));

$id = $_GET['id'];

$query = "DELETE FROM physicians WHERE ph_personalcode='".$id."'";
$result = mysqli_query($conn, $query);

if(mysqli_affected_rows($conn)==1){
    echo "<script>alert('User Have Been Deleted');document.location.href='admin_ph.php?';</script>";
}

?>

