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
       
        $search_data = "select *from adminlogin where username = '$user'  and password='$pswd'";
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


<div class="signup">
    <h2 class="signup_header">Login</h2>
        <form action="" method ="POST" >

            <label class="signup_text">Username</label>
            <input type="text" name="user" class="form-control" placeholder="Enter email"><br>

            <label class="signup_text">password</label>
            <input type="text" name="pswd" class="form-control" placeholder="Enter password"><br>
            
            <input type="submit" name="submit" class="submit_btn" value="Login">
            <?php echo "<div>$error</div>" ?>
        </form>
</div>
