
<?php

session_start();

@$regno=$_SESSION['un'];

@$reg=$_SESSION['reg'];
include("connect.php");
/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
			
		@$q1 = "SELECT * FROM application where nicNo='$reg'"; 
	 
	@$result = mysql_query($q1);
	@$r=mysql_fetch_array($result);
	//echo $reg;
	
	if (!$result) {
    die( "<br><center><font color='red'>Could not successfully run query  from DB: " . mysql_error());
    
			}

	
	
	?>
	


<html>
<body>
	<center><fieldset >
	<font size="05"> Section 2:Education and Professional Qualification</font>
	<form action="viewapl3.php" method="POST" align="center">
	<table  border='1'   >
	<tr><td rowspan="2">Institution</td><td colspan="2"><center>DateOfAttendence</center></td><td rowspan="2">MajoFieldOfStudy</td><td rowspan="2">DegreeRecieved</td><td rowspan="2">DateDegreeGranted</td></tr>
	<td>From</td><td>To</td></tr>
	<tr><td><?php echo $r[11]?></td><td><?php echo $r[12]?></td><td><?php echo $r[13]?></td><td><?php echo $r[14]?></td><td><?php echo $r[15]?></td><td><?php echo $r[16]?></td></tr>
	<tr><td><?php echo $r[17]?></td><td><?php echo $r[18]?></td><td><?php echo $r[19]?></td><td><?php echo $r[20]?></td><td><?php echo $r[21]?></td><td><?php echo $r[22]?></td></tr>
	<tr><td><?php echo $r[23]?></td><td><?php echo $r[24]?></td><td><?php echo $r[25]?></td><td><?php echo $r[26]?></td><td><?php echo $r[27]?></td><td><?php echo $r[28]?></td></tr>
	<tr><td><?php echo $r[29]?></td><td><?php echo $r[30]?></td><td><?php echo $r[31]?></td><td><?php echo $r[32]?></td><td><?php echo $r[33]?></td><td><?php echo $r[34]?></td></tr>
	
<table>
<input type="submit" value="Next">

</fieldset></body></html>