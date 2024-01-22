<?php
@session_start();
@$regno=$_SESSION['un'];

//@$reg=$_POST['reg'];
@$course=$_POST['course'];
	@$_SESSION['course']=$course;
	include("connect.php");

		@$q = "SELECT  *  FROM lecturersubject where lecturer='$regno' and course='$course'"; 
	 
	@$result1 = mysql_query($q);
	
	
	
	if (!$result1) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
    
			}

			if (mysql_num_rows($result1) > 0) 
				{
				
					echo	"<html>";
					echo	"<body bgcolor='#456221'>";

					echo	"<center><fieldset style='width:60%; height: 40%;'>";
					echo	"<legend align='center'><b><u>Enter the student registration number to mark the paper</u></b></legend>";
	
					echo	"<form action='markpaper3.php' method='POST' align='center'>";
					echo	"<table width='60%' height='40%'  border='0'   >";

		
		
					echo	"<tr><td><b>Registration No: </b></td><td><input type='text' name='reg' ></td>";
					echo	"</tr>	";	
								
		
					echo	"</table>	<br>";
					echo	"<center><input type='submit' value='Select'><input type='Reset' value='Reset'></center>";
	
					echo	"</form>";
					echo	"</fieldset></center>";
					echo	"</body>";
					echo	"</html>";
	
				}
				
							else
							{
							include("Markpaper.php");
	
							die( "<br><center><font color='red'>You dont handle the course $course " . mysql_error());
  					  
	
							}

	?>






