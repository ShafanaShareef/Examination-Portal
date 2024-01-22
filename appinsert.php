<?php
	session_start();
	$degs=$_POST['ds'];
	$couc=$_POST['cc'];
	$cout=$_POST['ct'];
	$yas=$_POST['yrs'];
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
	
				
	if(!empty($degs)&&!empty($couc)&&!empty($cout)&&!empty($yas))
	{
			if($degs==$course)
				
				{
				
				$_SESSION['ds']=$degs;
				$_SESSION['cc']=$couc;
				$_SESSION['ct']=$cout;
				$_SESSION['yrs']=$yas;
				
				include("insert.php");
				}
				
				else
				{
				
					die("<font color='red'><center>The Degree Sought is wrong for the Perticular registration no $regno</font></center>");
				}
				
				
				
				
	//echo  $_SESSION['fn'];
				
		//echo  $_SESSION['r1c1'];	
	//echo  $_SESSION['ds'];		
			
		}
		
		
		
	
	else 
	{
		echo "<font color='red'>Please Fill all Information</font>";
		include("Section3.html");
	}


	
	
	
	
	
	
	
?>