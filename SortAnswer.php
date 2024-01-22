


<?php
session_start();
@$regno=$_SESSION['un'];
@$course=$_SESSION['course'];
include("connect.php");
@$course2="$course"."sort";	
$a1="$course"."answerssort";


@$ans = "SELECT  *  FROM $a1 where regno='$regno'"; 
	 
	@$ans2 = mysql_query($ans);
	@$ans3=mysql_fetch_array($ans2);

if (mysql_num_rows($ans2) < 1)
 {
		


	@$q = "SELECT  *  FROM $course2 where no='01'"; 
	 
	@$result1 = mysql_query($q);
	@$r=mysql_fetch_array($result1);
	
	@$q2 = "SELECT  *  FROM $course2 where no='02'"; 
	 
	@$result2 = mysql_query($q2);
	@$r2=mysql_fetch_array($result2);
	
	
	@$q3 = "SELECT  *  FROM $course2 where no='03'"; 
	 
	@$result3 = mysql_query($q3);
	@$r3=mysql_fetch_array($result3);
	
	

echo "<html>";
echo "<body >";
echo "<fieldset >";
echo	"<legend align='center'><b><u><?php echo $course?> Exam Paper</u></b></legend>";
echo "<form action='answersort.php' method='POST' align='left'>";	

{
echo "<table border='0'>";
echo 	"<tr><td>".$r[0] ."</td><td ><b>".$r[1]."</b></td></tr>";

echo 		"  <tr> <td> <textarea name='qs1' rows='6' style='width:250%;' ></textarea></td></tr>";

echo 	"<tr><td>".$r2[0] ."</td><td ><b>".$r2[1]."</td></tr>";
echo 		" <tr>  <td> <textarea name='qs2' rows='6' style='width:250%;' ></textarea></td></tr>";

echo 	"<tr><td>".$r3[0] ."</td><td ><b>".$r3[1]."</td></tr>";
echo 		"  <tr> <td> <textarea name='qs3' rows='6' style='width:250%;' ></textarea></td></tr>";


echo "</table>";

echo      "<center><input type='submit' value='Select'><input type='Reset' value='Reset'></center>";
	
}


echo "</form>";
echo	"</fieldset>";
	
echo	"</body></html>";


}

else 
die( "<br><center><font color='red'>You Have already sit the Short answer Exam form $course " . mysql_error());
    
	
?>	
	