<?php
session_start();


@$total=$_POST['total'];


@$course=$_SESSION['course'];
	

@$reg=$_SESSION['reg'];

	include("connect.php");
/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
	@$q = "SELECT  acid  FROM accountdetails where nicNo='$reg'"; 
	 
	@$result1 = mysql_query($q);
	@$r=mysql_fetch_array($result1);
	
	@$subject=$r[0];
	$a1="$subject"."results";
	
		
if(($total<100) && ($total>79))
{
$result='A+';

}

else if(($total<80) && ($total>74))
{
$result='A';

}
else if(($total<75) && ($total>69))
{
$result='A-';

}
else if(($total<70) && ($total>64))
{
$result='B+';

}
else if(($total<65) && ($total>59))
{
$result='B';

}
else if(($total<60) && ($total>54))
{
$result='B-';

}

else if(($total<55) && ($total>49))
{
$result='C+';

}
else if(($total<50) && ($total>44))
{
$result='C';

}
else if(($total<45) && ($total>39))
{
$result='C-';

}


else if(($total<40) && ($total>34))
{
$result='D+';

}
else if(($total<35) && ($total>29))
{
$result='D';

}
else
{
$result='E';
}


				@$q2= "SELECT  regno  FROM $a1 where regno='$reg'"; 
			 
				@$result12 = mysql_query($q2);
			
	
	
				if (!$result12) {
				die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
				
						}

				if (mysql_num_rows($result12) < 1) 
				{
	
	//echo $a1;
				@$q3="insert into $a1(regno,$course) values('$reg','$result')";
				//echo $q3;
	
								@$result3 = mysql_query($q3);
								if (!$result3) {
								die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
													}
						
								//if (mysql_num_rows($result3) >0) 
								//{
						//include("markpaper2.php");
						die( "<br><center><font color='blue'>Result of $reg student successfully inserted".mysql_error()."</center></font>");
								//}
						
							if (mysql_num_rows($result3) <1) 
								
								{
						//include("markpaper2.php");
						die( "<br><center><font color='blue'>Result of $reg student not inserted".mysql_error()."</center></font>");
								}
						
						
						
						
						
						
				}
				else
				{
				
				@$q22= "SELECT  $course  FROM $a1 where regno='$reg' "; 
			 
				@$result122 = mysql_query($q22);
			
			if (!$result122) {
				die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
				
						}

				if (mysql_num_rows($result122) < 1) 
				{
				
				
				
				
				@$q4="update $a1 set $course='$result' where regno='$reg' ";
								@$result4 = mysql_query($q4);

					
					//echo $q4;	
								
											if (!$result4) {
						die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
															}
							
								if (mysql_num_rows($result4) > 0) 
								{
						include("markpaper.php");
							die( "<br><center><font color='blue'>Result of $reg student successfully inserted".mysql_error()."</center></font>");
								}
						
							else 
								{
						include("markpaper.php");
						die( "<br><center><font color='red'>Result of $reg student not inserted".mysql_error()."</center></font>");
								}
				}	
				
				
				else
				{
				include("markpaper.php");
						
				die( "<br><center><font color='red'>Result of $reg student  already have inserted".mysql_error()."</center></font>");
						
				}
				
						
								
				}


?>

