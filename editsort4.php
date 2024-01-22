<?php
@session_start();
@$n1=$_SESSION['n1'];
@$n2=$_SESSION['n2'];
@$n3=$_SESSION['n2'];

@$qs1=$_SESSION['qs1'];
@$qs2=$_SESSION['qs2'];
@$qs3=$_SESSION['qs3'];


@$course=$_SESSION['course'];
$a1="$course"."sort";

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
					@$q3="insert into $a1 values('$n1','$qs1')";
					@$q4="insert into $a1 values('$n2','$qs2')";
					@$q5="insert into $a1 values('$n3','$qs3')";
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