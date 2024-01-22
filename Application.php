<html>
<body>
	<center><fieldset style="width: 40%; height: 150%;">
	<font size="05"> Section 1:Personal Information</font>
	<form action="Section2.php" method="POST" align="center">
	<table width='90%' height='90%' border='0'   >

		<tr><td><b>Name<br>(last/first/middle) :</b></td><td><input type="text" name="ls" size="40"></td></tr><br><br>
		<tr width="100%"><td colspan="2"  >Have you ever applied for postgraduate studies at the university of peratheniya</td></tr>
		<tr><td><input type="radio" name="chk1" value="yes">yes(Date)</td><td><input type="radio" name="chk1" value="no">No</td></tr>
		<tr><td>Marital Status</td><td><input type="radio" name="mr1" value="Single">Single<input type="radio" name="mr1" value="Married">Married<input type="radio" name="mr1" value="Widowed">Widowed<input type="radio" name="mr1" value="Divorced">Divorced</td></tr>
		
		<tr><td><b>NationalIdentification<br>Number:</b></td><td><input type="text" name="nsi" size="40"></td></tr>
		
		<tr><td><b>Gender :</b></td><td><br><input type="radio" name="gen" value="male">Male<br>
										<input type="radio" name="gen" value="female">Female<br></td></tr>
		<tr><td><b>Date Of Bith<br>(yy/mm/dd) :</b></td><td><input type="date" name="da"></td></tr><br><br>
		<tr><td><b>MailingAddress<br>(No,Street):</b></td><td><input type="text" name="mst" size="40"></td></tr>
		<tr><td><b>city/state/postalcode:</b></td><td><input type="text" name="ct" size="40"><input type="text" name="stt" size="40"><input type="text" name="pct" size="40"></td></tr>
		
		<tr><td><b>E-mail:</b></td><td><input type="text" name="email" size="35"></td></tr><br>
		<tr><td><input type="submit" value="Next"></td><td><input type="reset" value="Cancel"></td></tr>
		
		
	</table>	
	
	</form>
	</fieldset></center>
</body>
</html>