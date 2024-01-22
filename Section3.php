<?php
	session_start();
	$r1c1=$_POST['r1c1'];
	$r1c2=$_POST['r1c2'];
	$r1c22=$_POST['r1c22'];
	$r1c3=$_POST['r1c3'];
	$r1c4=$_POST['r1c4'];
	$r1c5=$_POST['r1c5'];
	$r2c1=$_POST['r2c1'];
	$r2c2=$_POST['r2c2'];
	$r2c22=$_POST['r2c22'];
	$r2c3=$_POST['r2c3'];
	$r2c4=$_POST['r2c4'];
	$r2c5=$_POST['r2c5'];
	$r3c1=$_POST['r3c1'];
	$r3c2=$_POST['r3c2'];
	$r3c22=$_POST['r3c22'];
	$r3c3=$_POST['r3c3'];
	$r3c4=$_POST['r3c4'];
	$r3c5=$_POST['r3c5'];
	$r4c1=$_POST['r4c1'];
	$r4c2=$_POST['r4c1'];
	$r4c22=$_POST['r4c1'];
	$r4c3=$_POST['r4c1'];
	$r4c4=$_POST['r4c1'];
	$r4c5=$_POST['r4c1'];
	//$r4c1=$_POST['r4c1'];
			
	if(!empty($r1c1)&&!empty($r1c2)&&!empty($r1c22)&&!empty($r1c3)&&!empty($r1c4)&&!empty($r1c5))
	{
			
				$_SESSION['r1c1']=$r1c1;
				$_SESSION['r1c2']=$r1c2;
				$_SESSION['r1c22']=$r1c22;
				$_SESSION['r1c3']=$r1c3;
				$_SESSION['r1c4']=$r1c4;
				$_SESSION['r1c5']=$r1c5;
				
				$_SESSION['r2c1']=$r2c1;
				$_SESSION['r2c2']=$r2c2;
				$_SESSION['r2c22']=$r2c22;
				$_SESSION['r2c3']=$r2c3;
				$_SESSION['r2c4']=$r2c4;
				$_SESSION['r2c5']=$r2c5;
				
				$_SESSION['r3c1']=$r3c1;
				$_SESSION['r3c2']=$r3c2;
				$_SESSION['r3c22']=$r3c22;
				$_SESSION['r3c3']=$r3c3;
				$_SESSION['r3c4']=$r3c4;
				$_SESSION['r3c5']=$r3c5;
				
				$_SESSION['r4c1']=$r4c1;
				$_SESSION['r4c2']=$r4c2;
				$_SESSION['r4c22']=$r4c22;
				$_SESSION['r4c3']=$r4c3;
				$_SESSION['r4c4']=$r4c4;
				$_SESSION['r4c5']=$r4c5;
				
				
				//echo $_SESSION['fn'];
				
				include("Section3.html");
				
			
		
	}
	else 
	{
		echo "<font color='red'>Please Fill all Information</font>";
		include("Section2.html");
	}


	
	
	
	
	
	
	
?>