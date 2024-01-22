<?php
@session_start();
@$regno=$_SESSION['un'];
@$course=$_POST['course'];
@$_SESSION['course']=$course;
include("connect.php");

	@$q = "SELECT  *  FROM approvedstudent where nicNo='$regno' and course='$course'"; 
	 
	@$result1 = mysql_query($q);
	
	
	
	if (!$result1) {
    die( "<br><center><font color='red'>Could not successfully run query ($sql) from DB: " . mysql_error());
    
			}

	
		if (mysql_num_rows($result1) > 0) {
		
				echo	"<html>";
				echo	"<body bgcolor='#456221'>";

				echo	"<center><fieldset style='width:40%; height: 40%;'>";
				echo	"<legend align='center'><b><u>Select Exam Type</u></b></legend>";
	
				//echo	"<!--<form action="SitExamination.php" method="POST" align="center">-->";
				echo	"<table width='40%' height='40%'  border='0'   >";

		
		
				echo		"<tr><td><b><a href='SitExamination2.php'>MCQ</a></b></td><br>";
				echo		"<td><a href='SortAnswer.php'>Sort Answer Question</td></tr>";
		
				echo	"</table>	<br>";
				//echo	"<center><input type="submit" value="Select"><input type="Reset" value="Reset"></center>";
	
				//echo	"<!--</form>-->";
				echo	"</fieldset></center>";
				echo	"</body>";
				echo	"</html>";
		
		
			//include("SitExamination2.php");
			}
	
	else
	{
	include("SitExaminationmain.php");
			die( "<br><center><font color='red'>You are not eligible to sit this course exam".mysql_error()."</center></font>");
	
	}
	?>
	
	

