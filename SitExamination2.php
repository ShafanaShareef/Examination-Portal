


<?php
session_start();
@$regno=$_SESSION['un'];
@$course=$_SESSION['course'];
include("connect.php");
$a1="$course"."answers";


@$ans = "SELECT  *  FROM $a1 where regno='$regno'"; 
	 
	@$ans2 = mysql_query($ans);
	@$ans3=mysql_fetch_array($ans2);

if (mysql_num_rows($ans2) < 1)
 {
		
		
	
	@$q = "SELECT  *  FROM $course where no='01'"; 
	 
	@$result1 = mysql_query($q);
	@$r=mysql_fetch_array($result1);
	
	@$q2 = "SELECT  *  FROM $course where no='02'"; 
	 
	@$result2 = mysql_query($q2);
	@$r2=mysql_fetch_array($result2);
	
	
	@$q3 = "SELECT  *  FROM $course where no='03'"; 
	 
	@$result3 = mysql_query($q3);
	@$r3=mysql_fetch_array($result3);
	
	
	
//

echo "<html>";
echo "<body >";
echo "<fieldset >";
echo 	"<legend align='center'><b><u><?php echo $course?> Exam Paper</u></b></legend>";
echo "<form action='answer.php' method='POST' align='left'>";	
//<?php
//@$x=01;
//while($nt=mysql_fetch_array($r))
{
echo "<table border='0'><tr rowspan='5' align='left'>";
echo 	"<td>".$r[0] ."</td><td colspan='4' align='left'><b>".$r[1]."</b></td></tr>";

echo 		"   <td> <input type='radio' name=".$r[0]." value='01'>".$r[2]."</td>";
echo 		"   <td> <input type='radio' name=".$r[0]." value='02'>".$r[3]."</td>";
echo 		"   <td> <input type='radio' name=".$r[0]." value='03'>".$r[4]."</td>";
echo 		"   <td> <input type='radio' name=".$r[0]." value='04'>".$r[5]."</td></tr>";

echo 	"<td>".$r2[0] ."</td><td colspan='4'><b>".$r2[1]."</td></tr>";
echo 		"   <td> <input type='radio' name=".$r2[0]." value='01'>".$r2[2]."</td>";
echo 		"   <td> <input type='radio' name=".$r2[0]." value='02'>".$r2[3]."</td>";
echo 		"   <td> <input type='radio' name=".$r2[0]." value='03'>".$r2[4]."</td>";
echo 		"   <td> <input type='radio' name=".$r2[0]." value='04 '>".$r2[5]."</td></tr>";

echo 	"<td>".$r3[0] ."</td><td colspan='4'><b>".$r3[1]."</td></tr>";

echo 		"   <td> <input type='radio' name=".$r3[0]." value='01'>".$r3[2]."</td>";
echo 		"   <td> <input type='radio' name=".$r3[0]." value='02'>".$r3[3]."</td>";
echo 		"   <td> <input type='radio' name=".$r3[0]." value='03'>".$r3[4]."</td>";
echo 		"   <td> <input type='radio' name=".$r3[0]." value='04'>".$r3[5]."</td></tr>";


//echo 		"   <td> <b>Announcements: </b>".$nt[4]."</td></tr><br>";
echo "</table>";
//$x++;
echo      "<center><input type='submit' value='Select'><input type='Reset' value='Reset'></center>";
	
}


echo "</form>";
echo 	"</fieldset>";
	
echo	"</body></html>";
	
	
}

else 
die( "<br><center><font color='red'>You Have already sit the MCQ Exam form $course " . mysql_error());
    
	?>	
	