<?php
@session_start();
@$n1=$_SESSION['n1'];
@$n2=$_SESSION['n2'];
@$n3=$_SESSION['n2'];

@$qs1=$_SESSION['qs1'];
@$qs2=$_SESSION['qs2'];
@$qs3=$_SESSION['qs3'];

@$ans11=$_SESSION['ans11'];
@$ans12=$_SESSION['ans12'];
@$ans13=$_SESSION['ans13'];
@$ans14=$_SESSION['ans14'];

@$ans21=$_SESSION['ans21'];
@$ans22=$_SESSION['ans22'];
@$ans23=$_SESSION['ans23'];
@$ans24=$_SESSION['ans24'];

@$ans31=$_SESSION['ans31'];
@$ans32=$_SESSION['ans32'];
@$ans33=$_SESSION['ans33'];
@$ans34=$_SESSION['ans34'];

@$course=$_SESSION['course'];
include("connect.php");

/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
		
		@$q = "DELETE  FROM $course "; 
	 
	@$result1 = mysql_query($q);
	
	
	
	if (!$result1) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
					}

			if (mysql_num_rows($result1) > 0) 
				{
					@$q3="insert into $course values('$n1','$qs1','$ans11','$ans12','$ans13','$ans14')";
					@$q4="insert into $course values('$n2','$qs2','$ans21','$ans22','$ans23','$ans24')";
					@$q5="insert into $course values('$n3','$qs3','$ans31','$ans32','$ans33','$ans34')";
						//echo $q3;
	
								@$result3 = mysql_query($q3);
								@$result4 = mysql_query($q4);
								@$result5 = mysql_query($q5);
								//if (!$result3) {
								//die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
													}
						
							//if (mysql_num_rows($result3) <1) 
								
								//{
						//include("markpaper2.php");
						//die( "<br><center><font color='blue'>Questions are  not inserted".mysql_error()."</center></font>");
								//}
						
						
				}
					else{
					die( "<br><center><font color='blue'>Questions are  not inserted".mysql_error()."</center></font>");
						
					}
					

?>