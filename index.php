<!DOCTYPE html>
<html>
<head>
	<title>BIODATA</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<center>
	<form action="index.php" method="POST" enctype="multipart/form-data">
		<table border="0">
			<tr>
				<td colspan="4" class="BioData"><h1>BIODATA</h1></td>
			</tr>
			<tr class="id">
				<td colspan="4" align="right">
				<div style="border-style: solid; width: 150px; height: 150px; margin-right: 150px;"><p style="text-align: center; margin-top: 70px;">2x2 Picture</p></div>
				</td>
			</tr>
			<tr>
				<td colspan="4" align="right"><input style="margin-right: 65px;" type="file" name="img" accept="image/*"></td>
			</tr>
			<tr>
				<td><label>Name</label></td>
				<td><input type="text" name="name"></td>
			</tr>
				<td><label>Present Address</label></td>
				<td><input type="text" name="preAdd"></td>
			</tr>
				<td><label>Permanent Address</label></td>
				<td><input type="text" name="perAdd"></td>
			</tr>
				<td><label>Date of Birth</label></td>
				<td><input type="date" name="DoB"></td>
				<td><label>Religion</label></td>
				<td>
				<select style="width: 165px;" name="religion">
					<option value="Roman Catholic">Roman Catholic</option>
				  	<option value="Born Again">Born Again</option>
				 	<option value="INC">INC</option>
				  <option value="Islam">Islam</option>
				</select>
				</td>
			</tr>
				<td><label>Civil Status</label></td>
				<td>
					<input type="radio" name="status" value="Single">
					<label for="single">Single</label>
					<input type="radio" name="status" value="Married">
					<label for="married">Married</label>
					<input type="radio" name="status" value="Widowed">
					<label for="widowed">Widowed</label>
					<input type="radio" name="status" value="Divorced">
					<label for="divorced">Divorced</label>
				</td>
				<td><label>Age</label></td>
				<td><input type="text" name="age"></td>
			</tr>
				<td><label>Citizenship</label></td>
				<td><input type="text" name="citizen"></td>
				<td><label>Weight</label></td>
				<td><input type="text" name="weight"></td>
			</tr>
				<td><label>Place of Birth</label></td>
				<td><input type="text" name="PoB"></td>
				<td><label>Height</label></td>
				<td>
					<select style="width: 165px;" name="height">
						<option value="5'0">5'0"</option>
					  	<option value="5'1">5'1"</option>
					 	<option value="5'2">5'2"</option>
				  		<option value="5'3">5'3"</option>
				  		<option value="5'4">5'4"</option>
					  	<option value="5'5">5'5"</option>
					 	<option value="5'6">5'6"</option>
				  		<option value="5'7">5'7"</option>
				  		<option value="5'8">5'8"</option>
					  	<option value="5'9">5'9"</option>
					 	<option value="5'10">5'10"</option>
				  		<option value="5'11">5'11"</option>
				  		<option value="6'0">6'0"</option>
					  	<option value="6'1">6'1"</option>
					 	<option value="6'2">6'2"</option>
				  		<option value="6'3">6'3"</option>
				  		<option value="6'4">6'4"</option>
					  	<option value="6'5">6'5"</option>
					 	<option value="6'6">6'6"</option>
				  		<option value="6'7">6'7"</option>
				  		<option value="6'8">6'8"</option>
					  	<option value="6'9">6'9"</option>
					 	<option value="6'10">6'10"</option>
				  		<option value="6'11">6'11"</option>
				  		<option value="7'0">7'0"</option>
					  	<option value="7'1">7'1"</option>
					 	<option value="7'2">7'2"</option>
				</select>
				</td>
			</tr>
				<td><label>Name of Father</label></td>
				<td><input type="text" name="nameF"></td>
			</tr>
				<td><label>Name of Mother</label></td>
				<td><input type="text" name="nameM"></td>
			</tr>
				<td><label>Address</label></td>
				<td><input type="text" name="address"></td>
			</tr>
				<td><label>Languages or Dialects Spoken</label></td>
				<td><input type="text" name="language"></td>
			</tr>
				<td><label>Person to be notified In Case of Emergency</label></td>
				<td><input type="text" name="pce"></td>
			</tr>
		
			<tr>
				<td><h4>EDUCATIONAL BACKGROUND</h4></td>
			</tr>
			<tr>
				<td><label>Elementary</label></td>
				<td><input type="text" name="elem"></td>
				<td><label>Year Graduate</label></td>
				<td><input type="text" name="eYearG"></td>
			</tr>

			</tr>
			<tr>
				<td><label>High School</label></td>
				<td><input type="text" name="high"></td>
				<td><label>Year Graduate</label></td>
				<td><input type="text" name="hYearG"></td>
			</tr>
			<tr>
				<td><label>College</label></td>
				<td><input type="text" name="college"></td>
				<td><label>Year Graduate</label></td>
				<td><input type="text" name="cYearG"></td>
			</tr>
			<tr>
				<td><label>Course</label></td>
				<td><input type="text" name="course"></td>
			</tr>
			<tr>
				<td><label>Special Skills</label></td>
				<td><input type="text" name="ss"></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
				<input type="reset" value="Reset">	<input type="submit" value="Save Record" name="btn"></td>
			</tr>
		</table>

		<?php
	if (isset($_POST['btn'])){
		$imageTemp=$_FILES['img']['tmp_name'];
		$imageName=$_FILES['img']['name'];
		$imageSize=$_FILES['img']['size'];
		

		$Name=$_POST['name'];
		$PreAdd=$_POST['preAdd'];
		$PerAdd=$_POST['perAdd'];

		$DBirth=$_POST['DoB'];
		$Religion=$_POST['religion'];

		$CivilStatus=$_POST['status'];
		$Age=$_POST['age'];

		$Citizenship=$_POST['citizen'];
		$Weight=$_POST['weight'];

		$PBirth=$_POST['PoB'];
		$Height=$_POST['height'];

		$NameF=$_POST['nameF'];
		$NameM=$_POST['nameM'];
		$Address=$_POST['address'];
		$Languages=$_POST['language'];
		$PCE=$_POST['pce'];

		//Educational Background
		$Elementary=$_POST['elem'];
		$EYGrad=$_POST['eYearG'];

		$HighShool=$_POST['high'];
		$HYGrad=$_POST['hYearG'];

		$College=$_POST['college'];
		$CYGrad=$_POST['cYearG'];

		$Course=$_POST['course'];

		$SS=$_POST['ss'];


		

		echo "<h2>RECORDED!</h2>";
		echo "<table width=1200 border=2> <tr> <td>";
		echo "<center><h1>BIODATA\n</h1></center>";

		move_uploaded_file($imageTemp, $imageName);
		echo "<img src='$imageName' width='200' height='200' align='right'>";

		echo "<br>";
		echo "<p>Name: ".$Name."\n</p>";
		echo "<p>Present Address: ".$PreAdd."\n</p>";
		echo "<p>Permanent Address: ".$PerAdd."\n</p>";

		echo "<p>Date of Birth: ".$DBirth."\n</p>";
		echo "<p>Age: ".$Age."\n</p>";
		echo "<p>Weight: ".$Weight."\n</p>";
		echo "<p>Height: ".$Height."\n</p>";
		echo "<p>Religion: ".$Religion."\n</p>";

		echo "<p>Civil Status: ".$CivilStatus."\n</p>";
		echo "<p>Citizenship: ".$Citizenship."\n</p>";
		echo "<p>Place of Birth: ".$PBirth."\n</p>";
		echo "<p>Name of Father: ".$NameF."\n</p>";
		echo "<p>Name of Mother: ".$NameM."\n</p>";
		echo "<p>Address: ".$Address."\n</p>";
		echo "<p>Languages or Dialects Spoken: ".$Languages."\n</p>";
		echo "<p>Person to be notified In Case of Emergency: ".$PCE."\n</p>";

		/*EDUCATIONAL BACKGROUND*/
		echo "<h3>EDUCATIONAL BACKGROUND</h3>";
		echo "<p>Elementary: ".$Elementary."\n</p>";
		echo "<p>Year Graduate: ".$EYGrad."\n</p>";

		echo "<p>High School: ".$HighShool."\n</p>";
		echo "<p>Year Graduate: ".$HYGrad."\n</p>";

		echo "<p>College: ".$College."\n</p>";
		echo "<p>Year Graduate: ".$CYGrad."\n</p>";

		echo "<p>Course: ".$Course."\n</p>";
		echo "<p>Special Skills: ".$SS."\n</p>";
	}
	?>
	</form>
	</center>
</body>
</html>