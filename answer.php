<?php
session_start();
$regno=$_SESSION['un'];
$course=$_SESSION['course'];
$q1=$_POST['1'];
$q2=$_POST['2'];
$q3=$_POST['3'];

//echo $q1;
//echo $q2;
//echo $q3;
include("connect.php");
/*$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	//echo $regno;
	$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		$a1="$course"."answers";
		
	//echo $a1;
			
	$in=mysql_query("insert into $a1 values('$regno','$q1','$q2','$q3')");
	
	if($in)
	{
	//include("signin.html");
	echo "<br><font color='blue' size='3'><b>successfully you have sent your answers </b></font>";
	//$in2=mysql_query("insert into username values('$nicNo','$password')");
	}
	else 
	{
	//include("acreation.html");
	die( "<br><font color='blue' size='3'><b>You have already sit the Exam<b>".mysql_error());
	}
	//echo
	
	?>
