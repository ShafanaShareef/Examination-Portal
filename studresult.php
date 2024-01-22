<?php
@session_start();
@$regno=$_SESSION['un'];

@$course=$_SESSION['course'];
$a1="$course"."results";
	
if($course=="COMPUTERSCIENCE")
{
$s1='ICT1113';
$s2='ICT1122';
$s3='ICT1132';
$s4='ICT1142';
$s5='ICT1213';
$s6='ICT1222';
$s7='ICT1232';
$s8='ICT1242';
}	
	
	
	
	
	include("connect.php");
/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	//echo $regno;
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
			
	
					@$q1 = "select * from $a1 ;"; 
					@$rt = mysql_query($q1);
	
	
				if (!$rt) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
   	}
			//echo $r[0];
			if (mysql_num_rows($rt) > 0) 
		{
			
					echo	"<html>";
					echo "<body bgcolor='#456221'>";
					echo "<center><fieldset style='width:40%; height: 40%;'>";
					echo "<legend align='center'><b><u>Results of all students who are following $course </u></b></legend>";
						
					echo "<table   >";
					echo "<tr><td align='center'><font color='black' >";
						echo "<table border='1' cellspacing='5'><tr>";
						
						echo   "<tr><td colspan='2'>Results</td><td colspan='4' align='center'>First Semester</td><td colspan='4' align='center'>Second semester</td></tr>";
					
						
					echo   "<tr><td>No</td><td>RegNo</td><td>$s1</td><td>$s2</td><td>$s3</td><td>$s4</td><td>$s5</td><td>$s6</td><td>$s7</td><td>$s8</td></tr>";
					
					@$x=01;
					while($nt=mysql_fetch_array($rt))
					{
					echo 	"<td >$x</td><b><td>$nt[1]</b></td><td>$nt[2]</td><td>$nt[3]</td><td>$nt[4]</td><td>$nt[5]</td><td>$nt[6]</td><td>$nt[7]</td><td>$nt[8]</td><td>$nt[9]</td></tr>";

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