<?php

@session_start();
@$regno=$_SESSION['un'];

@$reg=$_POST['reg'];
@$course=$_POST['course'];
	

@$_SESSION['reg']=$reg;

include("connect.php");

/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
		
		@$q = "SELECT  *  FROM lecturersubject where lecturer='$regno' and course='$course'"; 
	 
	@$result1 = mysql_query($q);
	
	
	
	if (!$result1) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
    
			}

if (mysql_num_rows($result1) > 0) 
		{
			
	@$q1 = "SELECT * FROM application where nicNo='$reg' and couc='$course'"; 
	
	@$result = mysql_query($q1);
	@$r=mysql_fetch_array($result);
		if(mysql_num_rows($result) > 0)
				{
					echo 	"<html>";
						echo "<body>";
							
							echo "<center><fieldset style='width: 40%; height: 150%;'>";
							echo "<font size='05'> Section 1:Personal Information</font>";
							echo "<form action='viewapl2.php' method='POST' align='center'>";
							echo "<table width='90%' height='90%' border='0'   >";

							echo	"<tr><td><b>Name<br>(last/first/middle) :</b></td><td>$r[0]</td></tr><br><br>";
							echo	"<tr width='100%'><td colspan='2'  >Have you ever applied for postgraduate studies at the university of peratheniya</td><td>$r[1]</td>";
							echo	"</tr>";
							echo	"<tr><td>Marital Status</td><td>$r[2]</td>";
								
							echo	"<tr><td><b>NationalIdentification<br>Number:</b></td><td>$r[7]</td></tr>";
								
							echo	"<tr><td><b>Gender :</b></td><td> $r[4]</td>";
								
							echo	"<tr><td><b>Date Of Bith<br>(yy/mm/dd) :</b></td><td>$r[5]</td></tr><br><br>";
							echo	"<tr><td><b>MailingAddress<br>(No,Street):</b></td><td> $r[3]</td></tr>";
							echo	"<tr><td><b>city/state/postalcode:</b></td><td>$r[6]<br>$r[8]<br>$r[9]</td></tr>";
								
							echo	"<tr><td><b>E-mail:</b></td><td>$r[10]</td></tr><br>";
							echo	"<tr><td><input type='submit' value='Next'></td><td></tr>";
								
								
							echo	"<td>$r[35]</td>";
								
								
							echo"</table>";	
							
							echo "</form>";
							echo "</fieldset></center>";
						echo "</body>";
						echo "</html>";	
						}
						
						else 
						{
						include("viewdetailsastudent.php");
	
						die( "<br><center><font color='red'>$reg student have not submit the application for  the course $course " . mysql_error());
						}

}
else
{
include("viewdetailsastudent.php");
	
die( "<br><center><font color='red'>You dont handle the course $course " . mysql_error());
  					  
	
}


?>