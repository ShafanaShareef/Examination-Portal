
<?php

session_start();

@$regno=$_SESSION['un'];
@$course=$_POST['course'];
//$couc=$_POST['cc'];
//$cout=$_POST['ct'];
@$semi=$_POST['semi'];
include("connect.php");

	
if(!empty($course) &&!empty($semi))
	{
		$a1="$course"."$semi";
		$_SESSION['$a1']=$a1;
		
		if($a1=="CS1st1st")
		{
			$a="ICT1113";
			$b="ICT1122";
			$c="ICT1132";
			$d="ICT1142";
			$e="ICT1152";
			$f="ICT1162";
			$g="ICT1172";
			$h="ACU1110";
			$i="";
			$j="";
		
		}		
}
	@$q1 = "SELECT * FROM $a1 where nicNo='$regno'"; 
	 
	@$result = mysql_query($q1);
	@$r=mysql_fetch_array($result);
	//echo $r[0];
	?>
	


<html>
<body>
	<center><fieldset >
	<table  border='0'   >
	<tr><td> <?php echo $a?> :</td><td><?php echo $r[1]?></td></tr>
	<tr><td><?php echo $b?>   : </td><td><?php echo $r[2]?></td></tr>
	<tr><td><?php echo $c?>  :</td><td><?php echo $r[3]?></td></tr>
	<tr><td><?php echo $d?> :</td><td><?php echo $r[4]?></td></tr>
	<tr><td><?php echo $e?> :</td><td><?php echo $r[5]?></td></tr>
	<tr><td><?php echo $f?> :</td><td><?php echo $r[6]?></td></tr>
	<tr><td><?php echo $g?> :</td><td><?php echo $r[7]?></td></tr>
	<tr><td><?php echo $h?> :</td><td><?php echo $r[8]?></td></tr>
	<tr><td><?php echo $i?> :</td><td><?php echo $r[9]?></td></tr>
	<tr><td><?php echo $j?> :</td><td><?php echo $r[10]?></td></tr>
	
<table>
	CV:Attach a two page CV
	<br>
</fieldset></body></html>