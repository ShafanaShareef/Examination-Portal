
<?php

session_start();

$regno=$_SESSION['un'];

include("connect.php");
/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
			
		@$q1 = "SELECT * FROM application where nicNo='$regno'"; 
	 
	@$result = mysql_query($q1);
	@$r=mysql_fetch_array($result);
	echo $r[0];
	?>
	


<html>
<body>
	<center><fieldset >
	<table  border='0'   >
	<tr><td>Degree Sought:  </td><td><?php echo $r[35]?></td></tr>
	<tr><td>Course Code:    </td><td><?php echo $r[36]?></td></tr>
	<tr><td>Course Title:   </td><td><?php echo $r[37]?></td></tr>
	<tr><td>Year and Semester:</td><td><?php echo $r[38]?></td></tr>
	
<table>
	
	<br>
</fieldset></body></html>