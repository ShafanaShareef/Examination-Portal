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

@$ans11=$_POST['ans11'];
@$ans12=$_POST['ans12'];
@$ans13=$_POST['ans13'];
@$ans14=$_POST['ans14'];

@$_SESSION['ans11']=$ans11;
@$_SESSION['ans12']=$ans12;
@$_SESSION['ans13']=$ans13;
@$_SESSION['ans14']=$ans14;

@$ans21=$_POST['ans21'];
@$ans22=$_POST['ans22'];
@$ans23=$_POST['ans23'];
@$ans24=$_POST['ans24'];
@$_SESSION['ans21']=$ans21;
@$_SESSION['ans22']=$ans22;
@$_SESSION['ans23']=$ans23;
@$_SESSION['ans24']=$ans24;


@$ans31=$_POST['ans31'];
@$ans32=$_POST['ans32'];
@$ans33=$_POST['ans33'];
@$ans34=$_POST['ans34'];
@$_SESSION['ans31']=$ans31;
@$_SESSION['ans32']=$ans32;
@$_SESSION['ans33']=$ans33;
@$_SESSION['ans34']=$ans34;



@$course=$_SESSION['course'];
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
	
					echo	"<form action='edit4.php' method='POST' align='center'>";
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
				@$q3="insert into $course values('$n1','$qs1','$ans11','$ans12','$ans13','$ans14'),('$n2','$qs2','$ans21','$ans22','$ans23','$ans24'),('$n3','$qs3','$ans31','$ans32','$ans33','$ans34')";
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