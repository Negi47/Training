<?php include "./includes/header.php" ?>
<?php require "./database/dataconnect.php";

$error = "";

if (isset($_POST['submit'])) {

    $user = $_POST['user'];
    $pswd = $_POST['pswd'];	
    $email = $_POST['user'];

    if(empty($user) || empty($email) || empty($pswd)){
        $error = "Please enter the details";
    }
    else{
       
        $search_data = "select *from admin where email = '$email'  and password='$pswd'";
        $search_result = $con->query($search_data);

        if($search_result->num_rows > 0)
        {
            header("location: feedback.php"); 
        }
        // $insert_data = "select (username,email,password) values('$user','$email','$pswd')";
        // $con->query($insert_data);
        else{
            echo 'Incorrect Coredentials';
                }
               
    }
}

?>

<div class="maindiv">
<div class="signup">
    <center><h2 class="signup_header">Login</h2></center>
        <form action="" method ="POST" >
        <div class="row">
            <div class="input-field col">
                <label class="signup_text">Email</label>
                <input type="text" name="user" class="form-control" placeholder="Enter email"><br>
            </div>
        </div>
        <div class="row">
            <div class="input-field col">
                <label class="signup_text">password</label>
                <input type="password" name="pswd" class="form-control" placeholder="Enter password"><br>
            </div>
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Login"> 
        <button class="btn btn-primary"><a href="register.php" style="color: white;">New to Login</a></button>  

            <!--<input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Login">-->
            <!--<input type="submit" name="submit" class="submit_btn" value="Login">-->
            <?php echo "<div>$error</div>" ?>
        </form>
</div>
</div>