<?php
@session_start();
@$regno=$_SESSION['un'];
@$course=$_POST['course'];
@$_SESSION['course']=$course;


include("connect.php");


/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	//echo $regno;
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		//$a1="$course"."$semi";
		
	
	@$q = "SELECT  *  FROM lecturersubject where lecturer='$regno' and course='$course'"; 
	 
	@$result1 = mysql_query($q);
	
	
	
	if (!$result1) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
    
			}

	

if (mysql_num_rows($result1) > 0) 
		{
			
	
					@$q1 = "SELECT nicNo FROM application where couc='$course'"; 
					@$rt = mysql_query($q1);
	
					@$r=mysql_fetch_array($rt);
	
			
			
					echo	"<html>";
					echo "<body bgcolor='#456221'>";
					echo "<center><fieldset style='width:40%; height: 40%;'>";
					echo "<legend align='center'><b><u>List of Students who have submitted the application for  $course </u></b></legend>";
						
					echo "<table   >";
					echo "<tr><td align='center'><font color='black' >";

					@$x=01;
					while($nt=mysql_fetch_array($rt))
					{
					echo "<table border='1'><tr rowspan='5'><td>";
					echo 	$x." .<b>".$nt[0]."</b></td></tr>";

					//echo 		"   <td> <b>Following document required :</b>".$nt[1]."</td></tr>";
					//echo 		"   <td> <b>Final Decision:</b> ".$nt[2]."</td></tr>";
					//echo 		"   <td><b> Examination Date & venue:</b> ".$nt[3]."</td></tr>";
					//echo 		"   <td> <b>Announcements: </b>".$nt[4]."</td></tr><br>";
					//echo "</table>";
					$x++;
					}

					echo "</font></td></tr>";
					echo "</table>";

					echo 	"</fieldset></center>";
						
					echo 	"</body></html>";	
								
								
			
			
			
			
			
			}
	
	else
	{
	include("viewstudent.php");
			die( "<br><center><font color='red'>You do not handle the perticular course $course".mysql_error()."</center></font>");
	
	}
	
	
	
	
	
	?>
	
	

