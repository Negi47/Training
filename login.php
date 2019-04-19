<!-- <?php include "./includes/header.php" ?>
<?php require "./database/dataconnect.php";

$error = "";

if (isset($_POST['submit'])) {

    $user = $_POST['user'];
    $pswd = $_POST['pswd'];	

    if(empty($user) || empty($pswd)){
        $error = "Please enter the details";
    }
    else{
        
        $insert_data = "select (username,email,password) values('$user','$email','$pswd')";
        $con->query($insert_data);
        header("location: login.php");        
    }
}

?>


<div class="signup">
    <h2 class="signup_header">Signup</h2>
        <form action="" method ="POST" >

            <label class="signup_text">Username</label>
            <input type="text" name="user"><br>

            <label class="signup_text">password</label>
            <input type="text" name="pswd"><br>
            
            <input type="submit" name="submit" class="submit_btn" value="Login">
            <?php echo "<div>$error</div>" ?>
        </form>
</div> -->
