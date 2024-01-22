<?php
@session_start();
@$regno=$_SESSION['un'];
@$course=$_POST['course'];
@$_SESSION['course']=$course;
?>




<html>
<body bgcolor="#456221">

	<center><fieldset style="width:40%; height: 40%;">
	<legend align="center"><b><u>Select Exam Type</u></b></legend>
	
	<!--<form action="SitExamination.php" method="POST" align="center">-->
	<table width='40%' height='40%'  border='0'   >

		
		
				<tr><td><b><a href="SitExamination.php">MCQ</a></b></td><br>
				<td><a href="SortAnswer.php">Short Answer Question</td></tr>
		
	</table>	<br>
	<center><input type="submit" value="Select"><input type="Reset" value="Reset"></center>
	
	<!--</form>-->
	</fieldset></center>
</body>
</html>