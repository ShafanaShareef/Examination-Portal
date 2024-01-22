
<?php

session_start();

@$regno=$_SESSION['un'];
//@$course=$_POST['course'];
//$couc=$_POST['cc'];
//$cout=$_POST['ct'];
@$semi=$_POST['semi'];
	include("connect.php");



	@$q = "SELECT  acid  FROM accountdetails where nicNo='$regno'"; 
	 
	@$result1 = mysql_query($q);
	@$r=mysql_fetch_array($result1);
	
	@$course=$r[0];
	
	
if(!empty($semi))
	{
		$a1="$course"."$semi";
		$a2="$course"."results";
		$_SESSION['$a1']=$a1;
		
		if($a1=="COMPUTERSCIENCE1st1st")
		{
			$a="ICT1113";
			$b="ICT1122";
			$c="ICT1132";
			$d="ICT1142";
			$e="2";
			$f="3";
			$g="4";
			$h="5";
			//$i="";
			//$j="";
		
		}		
		if($a1=="COMPUTERSCIENCE1st2nd")
		{
			$a="ICT1213";
			$b="ICT1222";
			$c="ICT1232";
			$d="ICT1242";
			$e="6";
			$f="7";
			$g="8";
			$h="9";
			//$i="";
			//$j="";
		
		}		
}
		
		@$q1 = "SELECT * FROM $a2 where regno='$regno'"; 
	 
	@$result = mysql_query($q1);
	@$r2=mysql_fetch_array($result);
	//HAVE TO CREATE TABLE FOR EVERY COURSE

/*<tr><td><?php echo $e?> :</td><td><?php echo $r[5]?></td></tr>
	<tr><td><?php echo $f?> :</td><td><?php echo $r[6]?></td></tr>
	<tr><td><?php echo $g?> :</td><td><?php echo $r[7]?></td></tr>
	<tr><td><?php echo $h?> :</td><td><?php echo $r[8]?></td></tr>
	<tr><td><?php echo $i?> :</td><td><?php echo $r[9]?></td></tr>
	<tr><td><?php echo $j?> :</td><td><?php echo $r[10]?></td></tr>
	
*/

//echo $a1;
	
	if(!$result)
{
die( "<center><font color='red'>cant display".mysql_error());
}


	if (mysql_num_rows($result) <1) {
			die("<center><font color='red'>Until now you have not sit the exam </font></center>");
									}

	
else
{

echo "<html>";
echo "<body bgcolor='#456221'>";
echo 	"<center><fieldset >";
echo	"<table  border='01'  font color='black' >";
	
echo	"<tr><td>Registration number:</td><td>$r2[1]</td></tr>";
	
	echo "<tr><td>  $a:</td><td>$r2[$e]</td></tr>";
	echo "<tr><td> $b :</td><td> $r2[$f]</td></tr>";
	echo "<tr><td> $c :</td><td>$r2[$g]</td></tr>";
	echo "<tr><td> $d:</td><td>$r2[$h]</td></tr>";
	
echo "<table>";
echo	"<br>";
echo "</fieldset></body></html>";
}
?>