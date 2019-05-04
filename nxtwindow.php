<?php include "./includes/header.php"?>
<?php require "./database/dataconnect.php";

  $error = "";
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
       
        $insert_data = "insert into feedback2(presentation,topic,level,res ,future,recc) values('$exec','$topic','$level','$res','$future','$recc')";
        $res = $con->query($insert_data);
        if(!$res)
        {
          echo "$con->error";
        }
        echo("done");
      }   
}
?>
  
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
      <textarea name="topic" class="txtarea">Enter text here..</textarea><br>

    <label class="level">Your level of understaning</label>
      <input type="radio" name="level" value="Good">Good
      <input type="radio" name="level" value="Average">Average
      <input type="radio" name="level" value="Poor">Poor
      <br>
      
    (Specify briefly reasons)<br>
    <textarea name="res" class="txtarea">Enter text here..</textarea><br>

    <label class="future">Do you want such programs in future:</label>
      <input type="radio" name="future" value="Yes">Yes
      <input type="radio" name="future" value="Poor">No
      <br>

    <label class ="recommend">if Yes, what topics would you recommend?</label><br>
    <textarea name="recc" class="txtarea">Enter text here..</textarea><br>
    
    <input type="submit" name="submit" value="Submit">
  
  </form>      
</div>