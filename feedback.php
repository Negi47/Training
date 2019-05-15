<?php include "./includes/header.php" ?>
<?php require "./database/dataconnect.php";

  $error = "";
  if(isset($_POST['submit'])) {

    $ename = $_POST["empname"];
    $dept = $_POST["dept"];
    $training = $_POST["training"];
    $org = $_POST["org"];
    $date = $_POST["date"];
      
      if(empty($ename) || empty($dept) || empty($training) || empty($org) || empty($date)) {     
        $error = "Please fill all the details";
      }
      else
      {
        $insert_data = "insert into feedback(empname,dept,training,org,date) values('$ename','$dept','$training','$org','$date')";
        $con->query($insert_data);

        if($con)
          echo"inserted";
          // header("location: nxtwindow.php");
        else
          echo "$con->error";
      }   
  }
?>
  
  <h2>
    <center><span>FEEDBACK  ON  TRAINING<span></center>
  </h2>
  
  <div class="feedback">
    
    <form action="" method="POST">
      
      <label class="name">Name of the Employee:</label>
        <input type="text" name="empname"><br>
      
      <label class="dept">Department:</label>
        <input type="text" name="dept"><br>
      
      <label class="training">Name of the Training program:</label>
        <input type="text" name="training"><br>
      
      <label class="org">Organization in which training is udertaken:</label>
        <textarea name="org" >Enter text here..</textarea><br>
      
      <label class="date">Date of Training:</label>
        <input type="date" name="date"><br>
        
      <input type="submit" name="submit" value="Next">
    
    <?php 
      //  if(!empty($error))
        echo "<div>$error</div>" ?>
    </form>


</div>