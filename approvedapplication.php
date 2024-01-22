<?php
@session_start();
@$regno=$_SESSION['un'];

@$course=$_SESSION['course'];
include("connect.php");

/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	//echo $regno;
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
			
	
					@$q1 = "select nicNo,course from approvedstudent where left(course,3)='ict';"; 
					@$rt = mysql_query($q1);
	//select nicNo from approvedstudent where left(course,3)='ict';
	
				if (!$rt) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
   	}
			//echo $r[0];
			if (mysql_num_rows($rt) > 0) 
		{
			
					echo	"<html>";
					echo "<body bgcolor='#456221'>";
					echo "<center><fieldset style='width:40%; height: 40%;'>";
					echo "<legend align='center'><b><u>List of Students,courses who have approved for the exam $course </u></b></legend>";
						
					echo "<table   >";
					echo "<tr><td align='center'><font color='black' >";
						echo "<table border='1' cellspacing='5'><tr>";
					echo   "<tr><td>No</td><td>RegNo</td><td>Course</td></tr>";
					
					@$x=01;
					while($nt=mysql_fetch_array($rt))
					{
					echo 	"<td >".$x."</td><b><td>".$nt[0]."</b></td><td>$nt[1]</td></tr>";

						$x++;
					}

					echo "</font></td></tr>";
					echo "</table></table>";

					echo 	"</fieldset></center>";
						
					echo 	"</body></html>";	
								
		}				
		else
			{
			die( "<br><center><font color='red'>There are no students approved for exam $course: " . mysql_error());
    	
			}	
			
			
			
	?>		