<?php include "./includes/header.php"?>
<?php require "./database/dataconnect.php";

  $error = "";
  $reterive_data = "select * from feedback order by eid DESC limit 1";
  $store = $con->query($reterive_data);
  $rslt = $store->fetch_assoc();
  // print_r($rslt);
  if(isset($_POST['submit'])) {


    $exec = $_POST["presentation"];
    $topic = $_POST["topic"];
    $level = $_POST["level"];
    $res = $_POST["res"];
    $future = $_POST["future"];
    $recc=$_POST["recc"];
      
      if(empty($exec) || empty($topic) || empty($level) || empty($res) || empty($future)||empty($recc)) {     
        $error = "Please fill all the details";
      }
      else
      {
        
        $insert_data = "update feedback set presentation='$exec',topic='$topic',level='$level',res='$res' ,future='$future',recc='$recc' where eid=".$rslt['eid'];
        $res = $con->query($insert_data);
        if(!$res)
        {
          echo "$con->error";
        }
        echo "<script type=\"text/javascript\">window.alert('Data Entered');
        window.location.href = './home.php';</script>";
      }   
}
?>
<div class="maindiv">
<center>
  <label class="heading"> Presentation by faculty</label>
</center>
<div class="nxtwindow">
  <form action="" method="POST">
    
    <label class="exec">Excellent:</label>
      <input type="radio" name="presentation" value="Good">Good
      <input type="radio" name="presentation" value="Average">Average
      <input type="radio" name="presentation" value="Poor">Poor
      <input type="radio" name="presentation" value="very poor">very poor
      <br>

    <label class="topic">Coverage of topic: </label><br>
      <textarea name="topic" class="txtarea"></textarea><br>

    <label class="level">Your level of understaning</label>
      <input type="radio" name="level" value="Good">Good
      <input type="radio" name="level" value="Average">Average
      <input type="radio" name="level" value="Poor">Poor
      <br>
      
    (Specify briefly reasons)<br>
    <textarea name="res" class="txtarea"></textarea><br>

    <label class="future">Do you want such programs in future:</label>
      <input type="radio" name="future" value="Yes">Yes
      <input type="radio" name="future" value="Poor">No
      <br>

    <label class ="recommend">if Yes, what topics would you recommend?</label><br>
    <textarea name="recc" class="txtarea"></textarea><br>
    
    <input type="submit" name="submit" value="Submit">
  
  </form>      
</div>
</div>