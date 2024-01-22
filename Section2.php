<?php
	session_start();
	$fname=$_POST['ls'];
	$postgr=$_POST['chk1'];
	$marital=$_POST['mr1'];
		$nicNo=$_POST['nsi'];
	$gender=$_POST['gen'];
	$dob=$_POST['da'];
	
	$address1=$_POST['mst'];
	//$address2=$_POST['country'];
	
	$city=$_POST['ct'];
$state=$_POST['stt'];
	$post=$_POST['pct'];
	$email=$_POST['email'];
	//echo $_SESSION['mr1'];
				
	if(!empty($fname)&& isset($postgr) && isset($marital)&&!empty($address1)&& isset($gender)&&!empty($dob)&&!empty($city)&&!empty($nicNo)&&!empty($state)&&!empty($post)&&!empty($email))
	{
		if(!is_numeric($fname)&&!is_numeric($address1)&&!is_numeric($nicNo)&&!is_numeric($state)&&!is_numeric($email))
		{
			
				//echo "<font color='red'>First Name and LastName maximum charactres is 25</font>";
				//include("AddStudent.html");
				$_SESSION['fn']=$fname;
				$_SESSION['pgr']=$postgr;
				$_SESSION['mr1']=$marital;
				$_SESSION['add']=$address1;
				$_SESSION['gen']=$gender;
				$_SESSION['dob']=$dob;
				$_SESSION['cty']=$city;
				$_SESSION['nic']=$nicNo;
				$_SESSION['stt']=$state;
				$_SESSION['pst']=$post;
				$_SESSION['email']=$email;
				
				include("Section2.html");
				//echo $marital;
	
				
			
		}
		else
			{
			echo "<font color='red'>please enter the appropriate  Information correctly</font>";
			include ("Application.php");
			}
		
		
	}
	else 
	{
		echo "<font color='red'>Please Fill all Information</font>";
		include("Application.php");
	}


	
	
	
	
	
	
	
?>