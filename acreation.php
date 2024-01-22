<?php
	$fname=$_POST['fn'];
	$lname=$_POST['ln'];
	$address=$_POST['ad'];
	$country=$_POST['country'];
	$gender=$_POST['gen'];
	$dob=$_POST['da'];
	$mobile=$_POST['mn'];
	$nicNo=$_POST['nic'];
	//$regno=$_POST['regno'];
	$email=$_POST['rgn'];
	$acid=$_POST['rgd'];
	$password=$_POST['crs'];
	$repass=$_POST['rcrs'];
	
	if(!empty($fname)&&!empty($lname)&&!empty($address)&&!empty($country)&&!empty($gender)&&!empty($dob)&&!empty($mobile)&&!empty($nicNo)&&!empty($email)&&!empty($acid)&&!empty($password)&&!empty($repass))
	{
		if(!is_numeric($fname)&&!is_numeric($lname)&&!is_numeric($address)&&!is_numeric($nicNo)&&!is_numeric($email)&&!is_numeric($acid))
		{
			if(strlen($fname)>25||strlen($lname)>25)
			{
				echo "<font color='red'>First Name and LastName maximum charactres is 25</font>";
				include("acreation.html");
				}
			if(strlen($address)>50)
				{
				echo "<font color='red'>Address maximum charactres is 50</font>";
				include("acreation.html");
				}
			if($password!=$repass)
				{
				echo "<font color='red'>password not match</font>";
				include("acreation.html");
				
				}
		}
		else
			{
			echo "<font color='red'>please enter the appropriate  Information correctly</font>";
			include ("acreation.html");
			}
		if(!is_numeric($mobile))
			{
			echo "<font color='red'>Mobile Number should Be in Integer</font>";
			include("acreation.html");
			}
		else if(!strlen($mobile)==10)
			{
			echo "<font color='red'>Mobile Number Length is 10</font>";
			include("acreation.html");
			}
		
	}
	else 
	{
		echo "<font color='red'>Please Fill all Information</font>";
		include("acreation.html");
	}


	/*$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
			
			include("connect.php");
	$in=mysql_query("insert into accountdetails values('$fname','$lname','$address','$country','$gender','$dob','$mobile','$nicNo','$email','$acid','$password','$repass')");
	
	if($in)
	{
	include("signin.html");
	echo "<br><font color='blue' size='3'><b>successfully account created</b></font>";
	$in2=mysql_query("insert into username values('$nicNo','$password')");
	}
	else 
	{
	include("acreation.html");
	die( "<br><font color='blue' size='3'><b>Account creation  failed<b>".mysql_error());
	}
	echo "<br>";
	

	
	
	
	
	
	
?>