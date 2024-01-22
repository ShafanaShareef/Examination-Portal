<?php
@session_start();
$regno=$_SESSION['un'];
$n1=$_POST['dt'];
$n2=$_POST['dr'];
$n3=$_POST['fd'];
$n4=$_POST['ed'];
$n5=$_POST['ans'];

$course=$_SESSION['course'];
$a1="$course"."posts";
	include("connect.php");
	/*$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	//echo $regno;
	$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
			
	
					$q1 = "insert into $a1 values('$n1','$n2','$n3','$n4','$n5') ;"; 
					$rt = mysql_query($q1);
	
	
				if (!$rt) {
				include("post.php");
							die( "<br><center><font color='red'>Posts are not inserted " . mysql_error());
							}
				else
				{
					include("post.php");
					die( "<br><center><font color='red'>Posts are inserted  " . mysql_error());
				}
					
					
		
		//else
			//die( "<br><center><font color='blue'>" . mysql_error());
    	
			
			
			
			
?>			