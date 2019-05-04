<?php include "./includes/header.php" ?>
<?php require "./database/dataconnect.php";
  $error = "";
  $tabledata = array();
  if(isset($_POST['submit'])) {

		$retrieve_data = "select * from feedback.empname,feedback.dept,feedback.training,feedback.org,feedback.date,feeback2.presentation,
											feedback2.topic,feedback2.level,feedback2.res,feedback2.future,feedback2.recc from feedback 
											inner join feedback2 on feedback.eid=feedback2.eid ";
		
		$result = $con->query($retrieve_data);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				$tabledata[] = $row;
			}
		}
       
  }
?>


<center>
	<h2>HOD Evaluation</h2>
</center>

<div class="hod">
	<form action="" method="POST">
		<!-- <label class="name">Name: </label>
  			<input type="text" name="emp_name"/><br/> -->
		<!-- <label class="understand">a) Understanding</label><br>        
			<input type="radio" name="understand",value="Good">Good
			<input type="radio" name="understand",value="Average">Average
			<input type="radio" name="understand",value="Poor">Poor<br><br>
	
		<label class="Job">b) Application at Job:</label><br>
			<input type="radio" name="Job",value="well">Applies Well
			<input type="radio" name="Job",value="eviden">No evidence of application
			<input type="radio" name="Job",value="Lack">Exhibits Lack of understanding
			<input type="radio" name="Job",value="Knowledgeable">Indifferent though Knowledgeable <br/><br/>

		<label class="remarks">c) General Remarks:</label><br>
			<textarea name="remarks" class="txtarea">Enter text here..</textarea><br> -->

		<input type="submit" name="submit" value="Submit">
		

	</form>
</div>

<br/>

<div class="display">
  	<table>
			<tr>
				<th>Employee Name</th>
				<th>Department</th>
				<th>Training</th>
				<th>Organization</th>
				<th>Date</th>
				<th>Presentation</th>
				<th>Topic</th>
				<th>Level</th>
				<th>Reason</th>
				<th>Future</th>
				<th>Recommended</th>
			</tr>

			<?php  
				foreach ($tabledata as $value) {
					echo "<tr>";
					echo "<td>" . $value['empname'] . "</td>";
					echo "<td>" . $value['dept'] . "</td>";
					echo "<td>" . $value['training'] . "</td>";
					echo "<td>" . $value['org'] ."</td>";
					echo "<td>" . $value['date'] ."</td>";
					// echo "<td>" . $value['presentation'] . "</td>";
					// echo "<td>" . $value['topic'] . "</td>";
					// echo "<td>" . $value['res'] . "</td>";
					// echo "<td>" . $value['future'] ."</td>";
					// echo "<td>" . $value['recc'] ."</td>";

					// echo "<td>" .'<input type="radio" name="emp_name"  checked> '. "<td>";
					// echo "<td>" . '<button name="Review"><a href="./nxtpage.php">Review</a></button>' . "<td>";
					echo "</tr>";
				}
			?>
	  </table>
</div>
