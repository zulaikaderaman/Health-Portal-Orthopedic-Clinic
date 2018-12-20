<?php
include_once 'mysql_connect.php';

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//Create
if (isset($_POST['create_physician'])) {

    try {

        $ph_name = $_POST['ph_name'];
        $ph_personalcode = $_POST['ph_personalcode'];
        $ph_password = $_POST['ph_password'];
        $ph_address = $_POST['ph_address'];
        $ph_email = $_POST['ph_email'];
        $ph_phonenum = $_POST['ph_phonenum'];
        $ph_qualification = $_POST['ph_qualification'];

        $stmt = $conn->prepare("INSERT INTO physicians(ph_name, ph_personalcode, ph_password, ph_address, ph_email, ph_phonenum, ph_qualification) VALUES(:ph_name, :ph_personalcode, :ph_password, :ph_address, :ph_email, :ph_phonenum, :ph_qualification)");

        $stmt->bindParam(':ph_name', $ph_name, PDO::PARAM_STR);
        $stmt->bindParam(':ph_personalcode', $ph_personalcode, PDO::PARAM_STR);
        $stmt->bindParam(':ph_password', $ph_password, PDO::PARAM_STR);
        $stmt->bindParam(':ph_address', $ph_address, PDO::PARAM_STR);
        $stmt->bindParam(':ph_email', $ph_email, PDO::PARAM_STR);
        $stmt->bindParam(':ph_phonenum', $ph_phonenum, PDO::PARAM_STR);
        $stmt->bindParam(':ph_qualification', $ph_qualification, PDO::PARAM_STR);
        //nnti tambah utk portfolio

        $stmt->execute();

        ?>

        <?php
    }


    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
}

?>
<div id="id02" class="modal">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" role="form" name="create_physician" method="post">
        <div class="container">
            <h1>Physician Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>
            <label for="name"><b>Name</b></label><br>
            <input type="text" placeholder="Enter Name" name="ph_name" required>
            <br></br>
            <label for="personalcode"><b>Personal Code</b></label><br>
            <input type="text" placeholder="Enter personal code" name="ph_personalcode" required>
            <br></br>
            <label for="password"><b>Password</b></label><br>
            <input type="password" placeholder="Enter Password" name="ph_password" required>
            <br></br>
            <label for="address"><b>Address</b></label><br>
            <input type="text" placeholder="Enter Address" name="ph_address" required>
            <br></br>
            <label for="email"><b>Email</b></label><br>
            <input type="text" placeholder="Enter Email" name="ph_email" required>
            <br></br>
            <label for="phonenum"><b>Phone Number</b></label><br>
            <input type="text" placeholder="Enter Phone Number" name="ph_phonenum" required>
            <br></br>
            <label for="qualification"><b>Qualification</b></label><br>
            <input type="text" placeholder="Enter Qualification" name="ph_qualification" required>
            <br></br>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn" name="create_physician">Sign Up</button>
            </div>
        </div>
    </form>
</div>