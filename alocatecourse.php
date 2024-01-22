
<?php
@session_start();
$regno=$_SESSION['un'];
$course=$_SESSION['course'];
if($course=="COMPUTERSCIENCE")
{
$s1='ICT1113';
$s2='ICT1122';
$s3='ICT1123';
$s4='ICT1222';
}	


?>






<html>
<body bgcolor="#456221">
<center><fieldset style='width:40%; height: 40%;'>
	<legend align="center"><b><u>Edit the posts</u></b></legend>
<form action="alocatecourse2.php" method="POST" align="center">	
<table   >
<tr><td><b>Lecturer user name:</b></td><td><input type="text" name="dt" size="40"></td>

<td><b>Course</b></td><td><select name="dr" >
										<option value=" ">
										<option value=<?php echo $s1;?>><?php echo $s1;?>
										<option value=<?php echo $s2;?>><?php echo $s2;?>
										<option value=<?php echo $s3;?>><?php echo $s3;?>
										<option value=<?php echo $s4;?>><?php echo $s4;?>
										
										</select></td></tr>


</font></td></tr>
</table>
<center><input type="submit" value="Select"><input type="Reset" value="Reset"></center>
	</form>
	</fieldset></center>
	
	</body></html>
	
	
	
