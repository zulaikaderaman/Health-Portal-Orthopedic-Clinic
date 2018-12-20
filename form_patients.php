<?php
include_once 'mysql_connect.php';

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Create
if (isset($_POST['create'])) {

    try {

        $pt_name = $_POST['pt_name'];
        $pt_ic = $_POST['pt_ic'];
        $pt_password = $_POST['pt_password'];
        $pt_address = $_POST['pt_address'];
        $pt_email = $_POST['pt_email'];
        $pt_phonenum = $_POST['pt_phonenum'];


        $stmt = $conn->prepare("INSERT INTO patients(pt_name, pt_ic, pt_password, pt_address, pt_email, pt_phonenum) VALUES(:pt_name, :pt_ic, :pt_password, :pt_address, :pt_email, :pt_phonenum)");

        $stmt->bindParam(':pt_name', $pt_name, PDO::PARAM_STR);
        $stmt->bindParam(':pt_ic', $pt_ic, PDO::PARAM_STR);
        $stmt->bindParam(':pt_password', $pt_password, PDO::PARAM_STR);
        $stmt->bindParam(':pt_address', $pt_address, PDO::PARAM_STR);
        $stmt->bindParam(':pt_email', $pt_email, PDO::PARAM_STR);
        $stmt->bindParam(':pt_phonenum', $pt_phonenum, PDO::PARAM_STR);
        //nnti tambah utk portfolio

        $stmt->execute();

    }


    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
}
?>
<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" role="form" name="create" method="post">
        <div class="container">
            <h1>Patient Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="pt_name"><b>Name</b></label><br>
            <input type="text" placeholder="Enter Name" name="pt_name" required>
            <br></br>
            <label for="pt_ic"><b>IC</b></label><br>
            <input type="text" placeholder="Enter IC" name="pt_ic" required>
            <br></br>
            <label for="pt_password"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="pt_password" required>
            <br></br>
            <label for="pt_address"><b>Address</b></label><br>
            <input type="text" placeholder="Enter Address" name="pt_address" required>
            <br></br>
            <label for="pt_email"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="pt_email" required>
            <br></br>
            <label for="pt_phonenum"><b>Phone Number</b></label><br>
            <input type="text" placeholder="Enter Phone Number" name="pt_phonenum" required>
            <br></br>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" name="create">Sign Up</button>
            </div>
        </div>
    </form>
</div>
