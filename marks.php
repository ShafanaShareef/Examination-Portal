<?php

@session_start();

@$qs1=$_POST['qs1'];
@$qs2=$_POST['qs2'];
@$qs3=$_POST['qs3'];
@$qs4=$_POST['qs4'];
@$qs5=$_POST['qs5'];
@$qs6=$_POST['qs6'];

if(!empty($qs1)&& !empty($qs2) && !empty($qs3) && !empty($qs4) && !empty($qs5) && !empty($qs6))
{
$total=$qs1+$qs2+$qs3+$qs4+$qs5+$qs6;
//total.value=$total;



@$course=$_SESSION['course'];
	

@$reg=$_SESSION['reg'];

$a1="$course"."answers";
$a2="$course"."answerssort";				
include("connect.php");

	
	
	@$q11 = "SELECT * FROM $a1 where regno='$reg' "; 
	
				@$result11 = mysql_query($q11);
				@$r1=mysql_fetch_array($result11);
	
	
	@$q12 = "SELECT * FROM $a2 where regno='$reg' "; 
	
				@$result12 = mysql_query($q12);
				@$r12=mysql_fetch_array($result12);
	
	
	
	
	if (!$result11) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
    
			}

	
	if(mysql_num_rows($result11) > 0)
					{
		
	@$radio1 = $r1[2];
//echo $r[4];

$ans1="";
$ans2="";
$ans3="";
$ans4="";
$ans12="";
$ans22="";
$ans32="";
$ans42="";
$ans13="";
$ans23="";
$ans33="";
$ans43="";

switch($radio1)
{ 
   case "01":
   $ans1 = "checked";
   break; 
   case "02":
   $ans2 = "checked";
   
   break; 
   case "03":
   $ans3= "checked";
   break; 
   case "04":
   $ans4= "checked";
   break; 
}
	@$radio2 = $r1[3];
//echo $r[4];

switch($radio2)
{ 
   case "01":
   $ans12 = "checked";
   break; 
   case "02":
   $ans22 = "checked";
   
   break; 
   case "03":
   $ans32= "checked";
   break; 
   case "04":
   $ans42= "checked";
   break; 
}
	@$radio3 = $r1[3];
//echo $r[4];

switch($radio3)
{ 
   case "01":
   $ans13 = "checked";
   break; 
   case "02":
   $ans23 = "checked";
   
   break; 
   case "03":
   $ans33= "checked";
   break; 
   case "04":
   $ans43= "checked";
   break; 
}






		
					
	@$q = "SELECT  *  FROM $course where no='01'"; 
	 
	@$result1 = mysql_query($q);
	@$r=mysql_fetch_array($result1);
	
	@$q2 = "SELECT  *  FROM $course where no='02'"; 
	 
	@$result2 = mysql_query($q2);
	@$r2=mysql_fetch_array($result2);
	
	
	@$q3 = "SELECT  *  FROM $course where no='03'"; 
	 
	@$result3 = mysql_query($q3);
	@$r3=mysql_fetch_array($result3);
	
	
	@$s = "SELECT  *  FROM $sort where no='01'"; 
	 
	@$res1 = mysql_query($s);
	@$sr=mysql_fetch_array($res1);
	
	@$s2 = "SELECT  *  FROM $sort where no='02'"; 
	 
	@$res2 = mysql_query($s2);
	@$sr2=mysql_fetch_array($res2);
	
	@$s3 = "SELECT  *  FROM $sort where no='03'"; 
	 
	@$res3 = mysql_query($s3);
	@$sr3=mysql_fetch_array($res3);
	
	
	
	
							//if((mysql_num_rows($result1) > 0) && (mysql_num_rows($result2) > 0) && (mysql_num_rows($result3) > 0))
							//{
	
								echo	"<html>";
								echo "<body >";
								echo "<fieldset >";
								echo	"<legend align='center'><b><u>$course Exam Paper of student $reg</u></b></legend>";
								echo "<form action='marks2.php' method='POST' align='left'>";	

								//@$x=01;
								//while($nt=mysql_fetch_array($r))
								//{
								echo "<table border='0'><tr rowspan='5' align='left'>";
								echo 	"<td>".$r[0] ."</td><td colspan='4' align='left'><b>".$r[1]."</b></td><td><input type='text' name='qs1' value='0'></td></tr>";

								echo 		"   <td> <input type='radio' name=".$r[0]." value='01' checked= '$ans1' >".$r[2]."</td>";
								echo 		"   <td> <input type='radio' name=".$r[0]." value='02' checked= '$ans2'>".$r[3]."</td>";
								echo 		"   <td> <input type='radio' name=".$r[0]." value='03' checked= '$ans3'>".$r[4]."</td>";
								echo 		"   <td> <input type='radio' name=".$r[0]." value='04' checked= '$ans4'>".$r[5]."</td></tr>";

								echo 	"<td>".$r2[0] ."</td><td colspan='4'><b>".$r2[1]."</td><td><input type='text' name='qs2' value='0'></tr>";
								echo 		"   <td> <input type='radio' name=".$r2[0]." value='01' checked= '$ans12'>".$r2[2]."</td>";
								echo 		"   <td> <input type='radio' name=".$r2[0]." value='02' checked= '$ans22'>".$r2[3]."</td>";
								echo 		"   <td> <input type='radio' name=".$r2[0]." value='03' checked= '$ans32'>".$r2[4]."</td>";
								echo 		"   <td> <input type='radio' name=".$r2[0]." value='04 ' checked= '$ans42'>".$r2[5]."</td></tr>";

								echo 	"<td>".$r3[0] ."</td><td colspan='4'><b>".$r3[1]."</td><td><input type='text' name='qs3' value='0'></tr>";

								echo 		"   <td> <input type='radio' name=".$r3[0]." value='01' checked= '$ans13'>".$r3[2]."</td>";
								echo 		"   <td> <input type='radio' name=".$r3[0]." value='02' checked= '$ans23'>".$r3[3]."</td>";
								echo 		"   <td> <input type='radio' name=".$r3[0]." value='03' checked= '$ans33'>".$r3[4]."</td>";
								echo 		"   <td> <input type='radio' name=".$r3[0]." value='04' checked= '$ans43'>".$r3[5]."</td></tr>";

								
								echo 	"<tr><td>".$sr[0] ."</td><td colspan='2'><b>".$sr[1]."</td><td><input type='text' name='qs4' size='5'></td></tr>";
								echo    "<tr><td><textarea name='qss' rows='6' style='width:250%;' >$r12[1]</textarea></td></tr>";
								
								
								echo 	"<tr><td>".$sr2[0] ."</td><td colspan='2'><b>".$sr2[1]."</td><td><input type='text' name='qs5' size='5'></td></tr>";
								echo    "<tr><td><textarea name='qss2' rows='6' style='width:250%;' >$r12[2]</textarea></td></tr>";
								
								
								echo 	"<tr><td>".$sr3[0] ."</td><td colspan='2'><b>".$sr3[1]."</td><td><input type='text' name='qs6' size='5'></td></tr>";
								echo    "<tr><td><textarea name='qss3' rows='6' style='width:250%;' >$r12[3]</textarea></td></tr>";
								
								
								
								
								
								echo			"<tr><td>Total Marks:</td><td><input type='text' name='total' value='$total'>";
								//echo 		"   <td> <b>Announcements: </b>".$nt[4]."</td></tr><br>";
								echo "</table>";
								//$x++;
								echo      "<center><input type='submit' value='Insert'><input type='Reset' value='Reset Marks'></center>";
									
								//}


								echo "</form>";
								echo 	"</fieldset>";
									
								echo	"</body></html>";
									
					
					
					
					}
	
		else
	{
	include("markpaper2.php");
			die( "<br><center><font color='red'>$reg student did not sit the exam for $course".mysql_error()."</center></font>");
	
	}
	
}

else
{
include("markpaper3.php");
			die( "<br><center><font color='red'>Enter the marks for every question".mysql_error()."</center></font>");
	

}










	
	?>