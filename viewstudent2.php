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
		
			
	
					@$q1 = "SELECT nicNo FROM accountdetails where acid='$course'"; 
					@$rt = mysql_query($q1);
	
					//@$r=mysql_fetch_array($rt);
	
			if (!$rt) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
   	}
			//echo $r[0];
			if (mysql_num_rows($rt) > 0) 
		{
			
					echo	"<html>";
					echo "<body bgcolor='#456221'>";
					echo "<center><fieldset style='width:40%; height: 40%;'>";
					echo "<legend align='center'><b><u>List of Students who have following subject $course </u></b></legend>";
						
					echo "<table   >";
					echo "<tr><td align='center'><font color='black' >";

					@$x=01;
					while($nt=mysql_fetch_array($rt))
					{
					echo "<table border='0'><tr rowspan='5'><td>";
					echo 	$x." .<b>".$nt[0]."</b></td></tr>";

						$x++;
					}

					echo "</font></td></tr>";
					echo "</table>";

					echo 	"</fieldset></center>";
						
					echo 	"</body></html>";	
								
		}				
		else
			{
			die( "<br><center><font color='red'>There are no students following $course: " . mysql_error());
    	
			}		
			
			
			
			
	
	
	
	
	
	
	?>
	
	

