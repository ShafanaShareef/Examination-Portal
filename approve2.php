<?php

@session_start();
@$regno=$_SESSION['un'];

@$reg=$_POST['reg'];
@$course=$_POST['course'];
	

@$_SESSION['reg']=$reg;

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
	
				@$q11 = "SELECT * FROM application where nicNo='$reg' and couc='$course'"; 
	
				@$result11 = mysql_query($q11);
				@$r=mysql_fetch_array($result11);
				if(mysql_num_rows($result11) > 0)
					{
	
	
					@$q1 = "SELECT * FROM approvedstudent where nicNo='$reg' and course='$course'"; 
					
					@$result = mysql_query($q1);
					@$r=mysql_fetch_array($result);
						if(mysql_num_rows($result) < 1)
						{
							@$q3="insert into approvedstudent values('$reg','$course')";
								@$result3 = mysql_query($q3);
	
	
									if($result3)
									{
							
									die( "<center><br><font color='blue' size='4'><b>$reg Registragion no is approved  for exam by the lecturer</b></font></center>".mysql_error());
							
									include("approveapplication.php");
									}
	
	
	
						}
						
						else 
						{
						include("approveapplication.php");
	
						die( "<br><center><font color='red'>$reg student already have approved for  the course $course exam" . mysql_error());
						}

					}
					
					else 
						{
						include("approveapplication.php");
	
						die( "<br><center><font color='red'>$reg student  have not submit the application for  the course $course exam" . mysql_error());
						}
					
					
			}
			
			
			else
{
include("approveapplication.php");
	
die( "<br><center><font color='red'>You dont handle the course $course " . mysql_error());
  					  
	
}

	
?>