<?php
@session_start();
@$regno=$_SESSION['un'];

//@$reg=$_POST['reg'];
@$n1=$_POST['no1'];
@$n2=$_POST['no2'];
@$n3=$_POST['no3'];
@$_SESSION['n1']=$n1;
@$_SESSION['n2']=$n2;
@$_SESSION['n2']=$n3;



@$qs1=$_POST['qs1'];
@$qs2=$_POST['qs2'];
@$qs3=$_POST['qs3'];
@$_SESSION['qs1']=$qs1;
@$_SESSION['qs2']=$qs2;
@$_SESSION['qs3']=$qs3;



@$course=$_SESSION['course'];
$a1="$course"."sort";
		
include("connect.php");

/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
		
		@$q = "SELECT  *  FROM $course "; 
	 
	@$result1 = mysql_query($q);
	
	
	
	if (!$result1) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
					}

			if (mysql_num_rows($result1) > 0) 
				{
				echo	"<html>";
					echo	"<body bgcolor='#456221'>";

					echo	"<center><fieldset style='width:80%; height: 80%;'>";
					echo	"<legend align='center'><b><u>To update the question paper for course unit $course</u></b></legend>";
	
					echo	"<form action='editsort4.php' method='POST' align='center'>";
					echo	"<table  width='100%' height='100%' border='1'   >";

		
		
					echo	"<tr ><td >Already you have set some question for this course unit $course";
					echo   "Do tou want to Update the paper with new Questions?</td></tr>";
		
					echo	"</table>	<br>";
					echo	"<center><input type='submit' value='Update'><input type='Reset' value='Reset'></center>";
	
					echo	"</form>";
					echo	"</fieldset></center>";
					echo	"</body>";
					echo	"</html>";
	
				}
				
				
			else
				{
				@$q3="insert into $a1 values('$n1','$qs1'),('$n2','$qs2'),('$n3','$qs3')";
				//echo $q3;
	
								@$result3 = mysql_query($q3);
								if (!$result3) {
								die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
													}
						
								//if (mysql_num_rows($result3) >0) 
								//{
						//include("markpaper2.php");
						die( "<br><center><font color='blue'>Questions are inserted".mysql_error()."</center></font>");
								//}
						
							if (mysql_num_rows($result3) <1) 
								
								{
						//include("markpaper2.php");
						die( "<br><center><font color='blue'>Questions are  not inserted".mysql_error()."</center></font>");
								}
						
					
				
				}			