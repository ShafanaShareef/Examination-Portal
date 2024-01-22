<?php
@session_start();
$regno=$_SESSION['un'];
$course=$_SESSION['course'];
$n1=$_POST['dt'];
$n2=$_POST['dr'];


//echo $n1;
//echo $n2;
//$a1="$";
include("connect.php");
/*$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	//echo $regno;
	$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
			
			
			
					$q11 = "select password from username where username='$n1' ;"; 
					$rt1 = mysql_query($q11);
	
	
			if (!$rt1) {
					die( "<br><center><font color='red'>Could not successfully run query $q11 from DB: " . mysql_error());
						}
			
			if (mysql_num_rows($rt1) > 0) 
		{	
			
	
					$q1 = "insert into lecturersubject values('$n1','$n2') ;"; 
					$rt = mysql_query($q1);
						if (!$rt) 
							{
							die( "<br><center><font color='red'>alocation failure " . mysql_error());
							include("alocatecourse.php");
							
							}
				else
				{
					include("alocatecourse.php");
					die( "<br><center><font color='blue'>allocation success " . mysql_error());
				}
		}


			else
				{
					include("alocatecourse.php");
					die( "<br><center><font color='red'>there is no lecturer with the username $n1 " . mysql_error());
				}
		
					
		?>