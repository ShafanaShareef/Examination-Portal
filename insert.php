<?php
				
				$regNo=$_SESSION['un'];
				$fname=$_SESSION['fn'];
				$postgr=$_SESSION['pgr'];
				$marital=$_SESSION['mr1'];
				$address1=$_SESSION['add'];
				$gender=$_SESSION['gen'];
				$dob=$_SESSION['dob'];
				$city=$_SESSION['cty'];
				$nicNo=$_SESSION['nic'];
				$state=$_SESSION['stt'];
				$post=$_SESSION['pst'];
				$email=$_SESSION['email'];
				
	
				$r1c1=$_SESSION['r1c1'];
				$r1c2=$_SESSION['r1c2'];
				$r1c22=$_SESSION['r1c22'];
				$r1c3=$_SESSION['r1c3'];
				$r1c4=$_SESSION['r1c4'];
				$r1c5=$_SESSION['r1c5'];
				
				$r2c1=$_SESSION['r2c1'];
				$r2c2=$_SESSION['r2c2'];
				$r2c22=$_SESSION['r2c22'];
				$r2c3=$_SESSION['r2c3'];
				$r2c4=$_SESSION['r2c4'];
				$r2c5=$_SESSION['r2c5'];
				
				$r3c1=$_SESSION['r3c1'];
				$r3c2=$_SESSION['r3c2'];
				$r3c22=$_SESSION['r3c22'];
				$r3c3=$_SESSION['r3c3'];
				$r3c4=$_SESSION['r3c4'];
				$r3c5=$_SESSION['r3c5'];
				
				$r4c1=$_SESSION['r4c1'];
				$r4c2=$_SESSION['r4c2'];
				$r4c22=$_SESSION['r4c22'];
				$r4c3=$_SESSION['r4c3'];
				$r4c4=$_SESSION['r4c4'];
				$r4c5=$_SESSION['r4c5'];
				
				
				
				$degs=$_SESSION['ds'];
				$couc=$_SESSION['cc'];
				$cout=$_SESSION['ct'];
				$yas=$_SESSION['yrs'];
				
	
	include("connect.php");
	/*$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
	

	$q = "SELECT  couc  FROM application where nicNo='$regNo' and couc='$couc'"; 
	 
	$result1 = mysql_query($q);
	$r=mysql_fetch_array($result1);
	
	//$course=$r[0];
	//echo $course;
		
	
	//{
	if($regNo==$nicNo)
{	
	
	if (mysql_num_rows($result1) > 0) {
			die("<center><font color='red'>You have already applied the application for $couc</font></center>");
	
	}
	
	else
	{
	$in=mysql_query("insert into application values('$fname','$postgr','$marital','$address1','$gender','$dob','$city','$nicNo','$state','$post','$email','$r1c1','$r1c2','$r1c22','$r1c3','$r1c4','$r1c5','$r2c1','$r2c2','$r2c22','$r2c3','$r2c4','$r2c5','$r3c1','$r3c2','$r3c22','$r3c3','$r3c4','$r3c5','$r4c1','$r4c2','$r4c22','$r4c3','$r4c4','$r4c5','$degs','$couc','$cout','$yas')");
	
	//}
	if($in)
	{
	
	die( "<center><br><font color='blue' size='4'><b>insertion success</b></font></center>".mysql_error());
	
	include("Application.php");
	}
	//}
	}
	}
	
	else	
	{
	
	die( "<center><br><font color='red' size='4'><b>Application not accepted Unauthorized Access of account<b>".mysql_error());
	include("Application.php");
	
	}
	echo "<br>";
	

	
	
	
	
	
	
?>