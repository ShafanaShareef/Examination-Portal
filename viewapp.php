<?php

session_start();

$regno=$_SESSION['un'];
@$course=$_POST['course'];
	

include("connect.php");
/*@$con=mysql_connect('localhost','root','zainab');
	
	if(!$con)
		die("<br>Connection Failed".mysql_error());
	
	
	@$d=mysql_select_db('rifthy');
	if(!$d)
		die("<br>Database selection Failed".mysql_error());*/
			
		@$q1 = "SELECT * FROM application where nicNo='$regno' and couc='$course'"; 
		

		
		
		
		
		
	 
	@$result = mysql_query($q1);
	@$r=mysql_fetch_array($result);
if(!$result)
{
die( "cant display".mysql_error());
}


	if (mysql_num_rows($result) <1) {
			die("<center><font color='red'>You have not applied the application for $course</font></center>");
									}




	
	//echo $r[0];
else
{	
	
//@$mal="";
//@$fem="";

//$qry=mysql_query("SELECT * FROM reg_table where id=$id ");

//$res=mysql_fetch_array($qry);
@$radio11 = $r[1];
//echo $r[4];

switch($radio11)
{ 
   case "yes":
   $yes = "checked";
   break; 
   case "no":
   $no = "checked";
   break; 
}




@$radio1 = $r[4];
//echo $r[4];

switch($radio1)
{ 
   case "male":
   $mal = "checked";
   break; 
   case "female":
   $fem = "checked";
   break; 
}

//echo $fem;
//echo $mal;
	
	@$radio2 = $r[2];
//echo $r[4];

switch($radio2)
{ 
   case "Single":
   @$mal1 = "checked";
   break; 
   case "Married":
   @$mal2 = "checked";
   break; 
   case "Widowed":
   @$mal3 = "checked";
   break; 
   case "Divorced":
   @$mal4 = "checked";
   break; 
}
	
	
}	
/*<tr><td><input type="radio" name="chk1" value="yes" checked=<?php @$yes; ?>>yes(Date)</td><td><input type="radio" name="chk1" value="no" checked=<?php @$no; ?>>No</td></tr>
	*/		
	?>
	
	
<html>
<body>
	
	<center><fieldset style="width: 40%; height: 150%;">
	<font size="05"> Section 1:Personal Information</font>
	<form action="view2.php" method="POST" align="center">
	<table width='90%' height='90%' border='0'   >

		<tr><td><b>Name<br>(last/first/middle) :</b></td><td><?php echo $r[0]?></td></tr><br><br>
		<tr width="100%"><td colspan="2"  >Have you ever applied for postgraduate studies at the university of peratheniya</td><td><?php echo $r[1]?></td>
		</tr>
		<tr><td>Marital Status</td><td><?php echo $r[2]?></td>
		
		<tr><td><b>NationalIdentification<br>Number:</b></td><td><?php echo $r[7]?></td></tr>
		
		<tr><td><b>Gender :</b></td><td><?php echo $r[4]?></td>
		
		<tr><td><b>Date Of Bith<br>(yy/mm/dd) :</b></td><td><?php echo $r[5]?></td></tr><br><br>
		<tr><td><b>MailingAddress<br>(No,Street):</b></td><td><?php echo $r[3]?></td></tr>
		<tr><td><b>city/state/postalcode:</b></td><td><?php echo $r[6]?><?php echo $r[8]?><?php echo $r[9]?></td></tr>
		
		<tr><td><b>E-mail:</b></td><td><?php echo $r[10]?></td></tr><br>
		<tr><td><input type="submit" value="Next"></td><td></tr>
		
		
		<td><?php echo $r[35]?></td>
		
		
	</table>	
	
	</form>
	</fieldset></center>
</body>
</html>	