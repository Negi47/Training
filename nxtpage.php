<?php include "./includes/header.php" ?>
<?php require "./database/dataconnect.php";
//   $error = "";
//   $tabledata = array();
//   if(isset($_POST['submit'])) {

//     $emp_name= $_POST["emp_name"];
      
//       if(empty($emp_name)) {     
//         $error = "Please fill faculty name";
//       }
//       else
//       {
//         $retrieve_data = "select * from feedback where empname='" . $emp_name ."'";
// 		$result = $con->query($retrieve_data);
// 		if($result->num_rows > 0)
// 		{
// 			while($row = $result->fetch_assoc())
// 			{
// 				$tabledata[] = $row;
// 			}
// 		}
//       }   
//   }
?>


<center>
	<h2>HOD Evaluation</h2>
</center>

<div class="hod">
	<form action="" method="POST">
		
		<label class="understand">a) Understanding</label><br>        
			<input type="radio" name="understand" value="Good">Good
			<input type="radio" name="understand" value="Average">Average
			<input type="radio" name="understand" value="Poor">Poor<br><br>
	
		<label class="Job">b) Application at Job:</label><br>
			<input type="radio" name="Job" value="well">Applies Well
			<input type="radio" name="Job" value="eviden">No evidence of application
			<input type="radio" name="Job" value="Lack">Exhibits Lack of understanding
			<input type="radio" name="Job" value="Knowledgeable">Indifferent though Knowledgeable <br/><br/>

		<label class="remarks">c) General Remarks:</label><br>
			<textarea name="remarks" class="txtarea">Enter text here..</textarea><br>

		<input type="submit" name="submit" value="Submit">
		

	</form>
</div>


