<?php include "./includes/header.php" ?>
<?php require "./database/dataconnect.php";

$error = "";
echo "page working";
if (isset($_POST['submit'])) {

    $user = $_POST['user'];
    $pswd = $_POST['pswd'];
    $email = $_POST['email'];	

    if(empty($user) || empty($pswd) || empty($email)){
        $error = "Please enter the details";
    }
    else{
        
        $insert_data = "insert into adminlogin(username,email,password) values('$user','$email','$pswd')";
        $con->query($insert_data);
        header("location: feedback.php");        
    }
}

?>


<div class="signup">
    <h2 class="signup_header">Signup</h2>
        <form action="" method ="POST" >

            <label class="signup_text">Username</label>

            <input type="text" name="user"><br>

            <label class="signup_text">emailId</label>
            <input type="text" name="email"><br>

            <label class="signup_text">password</label>
            <input type="text" name="pswd"><br>
            
            <input type="submit" name="submit" class="submit_btn" value="Register">
            <?php echo "<div>$error</div>" ?>
        </form>
</div>

