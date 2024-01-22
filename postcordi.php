<?php
session_start();
@$regno=$_SESSION['un'];
include("connect.php");
/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	//echo $regno;
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
	
	@$q = "SELECT  acid  FROM accountdetails where nicNo='$regno'"; 
	 
	@$result1 = mysql_query($q);
	@$r=mysql_fetch_array($result1);
	
	@$course=$r[0];
	//echo $course;
	$a1="$course"."posts";

	
	@$q1 = "SELECT * FROM $a1"; 
	 @$rt = mysql_query($q1);
	
	
	?>
	
	

<html>
<body bgcolor="#456221">
<center><fieldset >
	<legend align="center"><b><u>Post By the<?php echo $course?> coordinator</u></b></legend>
	
<table   >
<tr><td align='center'><font color='black' >
<?php
@$x=01;
while($nt=mysql_fetch_array($rt))
{
echo "<table border='1'><tr rowspan='5'><td>";
echo 	$x." .<b> Date ".$nt[0]."</b></td></tr>";

echo 		"   <td> <b>Following document required :</b>".$nt[1]."</td></tr>";
echo 		"   <td> <b>Final Decision:</b> ".$nt[2]."</td></tr>";
echo 		"   <td><b> Examination Date & venue:</b> ".$nt[3]."</td></tr>";
echo 		"   <td> <b>Announcements: </b>".$nt[4]."</td></tr><br>";
echo "</table>";
$x++;
}
?>
</font></td></tr>
</table>

	</fieldset></center>
	
	</body></html>