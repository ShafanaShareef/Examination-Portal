<?php

session_start();

$_SESSION['un']=$_POST['un'];
$_SESSION['pa']=$_POST['pa'];//_SESSION['post']=$_POST['post'];



	$users=$_SESSION['un'];
	$pwords=$_SESSION['pa'];
	//$post=$_SESSION['post'];
	
	include("connect.php");
	
	/*$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
//admin admin
//ict36 123	
	
	$q1 = "SELECT * FROM username where username='$users'"; 
	 
	$result = mysql_query($q1);
	$r=mysql_fetch_array($result);
	if($r[0]=="$users")
	{
		if($users=="cordinatorcs" &&$r[1]==$pwords)
		{
			mysql_free_result($result);
			@$_SESSION['course']='COMPUTERSCIENCE';
			include("coordinator2.html");
		}
		else if($users=="cordinatormt" &&$r[1]==$pwords)
		{
			mysql_free_result($result);
			
			include("coordinator2.html");
		}
		elseif($users=="cordinatorst" &&$r[1]==$pwords)
		{
			mysql_free_result($result);
			
			include("coordinator2.html");
		}
		elseif($users=="cordinatorch" &&$r[1]==$pwords)
		{
			mysql_free_result($result);
			
			include("coordinator2.html");
		}
		elseif($users=="coordinatorph" &&$r[1]==$pwords)
		{
			mysql_free_result($result);
			
			include("coordinator2.html");
		}
		elseif($users=="kethees" &&$r[1]==$pwords)
		{
			mysql_free_result($result);
			
			include("lecturer.html");
		}
		elseif($users=="rifthy" &&$r[1]==$pwords)
		{
			mysql_free_result($result);
			
			include("lecturer.html");
		}
		/*if($users=="lecturerst" &&$r[1]==$pwords)
		{
			mysql_free_result($result);
			
			include("lecturer.html");
		}
		if($users=="lecturerch" &&$r[1]==$pwords)
		{
			mysql_free_result($result);
			
			include("lecturer.html");
		}
		if($users=="lecturerph" &&$r[1]==$pwords)
		{
			mysql_free_result($result);
			
			include("lecturer.html");
		}*/
		
		elseif($r[1]==$pwords)
		{
			//mysql_free_result($result);
			include("StudentMain.html");
		}
		else
		{
			echo "<center><font color='red' align='right' size='5'>your password is wrong</font></center>";
			include("Signin.html");
		}
	}
	else
	{
		echo "<center><font color='red' align='right'  size='5'>Your username is invalid</font></center>";
		include("Signin.html");
	}
	mysql_close($con);	


	
?>