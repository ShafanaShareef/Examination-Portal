
<?php
//session_start();
//$regno=$_SESSION['un'];
//$course=$_SESSION['course'];
@$semi=$_POST['semi'];
//$q2=$_POST['2'];
//$q3=$_POST['3'];

if($semi=='1st')
{
@$course1='ict1113';
}
if($semi=='2nd')
{
@$course1='ict1212';
}
?>

<html>
<body bgcolor="#456221">

	<center><fieldset style="width:40%; height: 40%;">
	<legend align="center"><b><u>Select course to sit the Exam</u></b></legend>
	
	<form action="SitExamination.php" method="POST" align="center">
	<!--<form action="Examtype.php" method="POST" align="center">-->
	
	<table width='40%' height='40%'  border='0'   >

		
		
				<tr><td><b>Course:</b></td><td><select name="course" >
										<option value=" ">
										<option value=<?php echo @$course1;?>><?php echo @$course1;?>.
										
										</select></td>
										
								</tr>
		
	</table>	<br>
	<center><input type="submit" value="Select"><input type="Reset" value="Reset"></center>
	
	</form>
	</fieldset></center>
</body>
</html>