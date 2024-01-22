<?php
@session_start();
@$regno=$_SESSION['un'];

//@$reg=$_POST['reg'];
@$course=$_POST['course'];
	@$_SESSION['course']=$course;
	
	include("connect.php");
/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
		
		
		@$q = "SELECT  *  FROM lecturersubject where lecturer='$regno' and course='$course'"; 
	 
	@$result1 = mysql_query($q);
	
	
	
	if (!$result1) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
					}

			if (mysql_num_rows($result1) > 0) 
				{
				
					echo	"<html>";
					echo	"<body bgcolor='#456221'>";

					echo	"<center><fieldset style='width:80%; height: 80%;'>";
					echo	"<legend align='center'><b><u>Edit the mcq question paper for course unit $course</u></b></legend>";
	
					echo	"<form action='edit3.php' method='POST' align='center'>";
					echo	"<table  width='100%' height='100%' border='1'   >";

		
		
					echo	"<tr ><td rowspan='2'>Que No:<input type='text' name='no1' size='4' value='01' ></td><td colspan='4'>Enter the Question:<input type='text' name='qs1' size='130' ></td></tr>";
					echo	"<td>Answer 01:<input type='text' name='ans11' size='35'></td><td>Answer 02:<input type='text' name='ans12' size='35'></td><td>Answer 03:<input type='text' name='ans13' size='35'></td><td>Answer 04:<input type='text' name='ans14' size='35'></td></tr>	";	
					
						echo	"<tr><td rowspan='2'>Que No:<input type='text' name='no2' size='4' value='02'></td><td colspan='4'>Enter the Question:<input type='text' name='qs2' size='130'></td></tr>";
					echo	"<tr><td>Answer 01:<input type='text' name='ans21' size='35'></td><td>Answer 02:<input type='text' name='ans22' size='35'></td><td>Answer 04:<input type='text' name='ans23' size='35'></td><td>Answer 04:<input type='text' name='ans24' size='35' ></td></tr>	";	
					
					echo	"<tr><td rowspan='2'>Que No:<input type='text' name='no3' size='4' value='03'></td><td colspan='4'>Enter the Question:<input type='text' name='qs3' size='130'></td></tr>";
					echo	"<tr><td>Answer 01:<input type='text' name='ans31' size='35'></td><td>Answer 02:<input type='text' name='ans32' size='35'></td><td>Answer 03:<input type='text' name='ans33' size='35'></td><td>Answer 04:<input type='text' name='ans34' size='35'></td></tr>	";	
					
		
					echo	"</table>	<br>";
					echo	"<center><input type='submit' value='SET'><input type='Reset' value='Reset'></center>";
	
					echo	"</form>";
					echo	"</fieldset></center>";
					echo	"</body>";
					echo	"</html>";
	
				}
				
							else
							{
							include("Edit.php");
	
							die( "<br><center><font color='red'>You dont handle the course $course " . mysql_error());
  					  
	
							}

?>