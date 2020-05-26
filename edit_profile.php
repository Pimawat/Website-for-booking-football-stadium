<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
	$strSQL = "SELECT*FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>
<head>
<title>Edit Profile</title>
</head>
<body background=images.jpg>
<br>
<center>

<form name="form1" method="post" action="save_profile.php">
	<p style="font-family:impact; font-size:30pt; color:lightgreen">Edit Profile</p> <br>
	<table width="400" border="1" style="width:400px">
	<tbody>
		<tr>
			<td width="125">&nbsp;<font color=lightgreen>UserID</td>
			<td width="180">
				<b><?php echo $objResult["UserID"];?></b>
			</td>
		</tr>
		<tr>
			<td>&nbsp;<font color=lightgreen>Username</td>
			<td>
				<input name="txtUsername" type="text" value="<?php echo $objResult["Username"];?>">
			</td>
		</tr>
		<tr>
			<td>&nbsp;<font color=lightgreen>Password</td>
			<td><input name="txtPassword" type="password" id="txtPassword" value="<?php echo $objResult["Password"];?>"></td>
		</tr>
		<tr>
			<td>&nbsp;<font color=lightgreen>Confirm Password</td>
			<td><input name="txtConPassword" type="password" id="txtConPassword" value="<?php echo $objResult["Password"];?>"></td>
		</tr>
		<tr>
			<td>&nbsp;<font color=lightgreen>Name</td>
			<td><input name="txtName" type="text" id="txtName" value="<?php echo $objResult["Name"];?>"></td>
		</tr>
		<tr>
			<td>&nbsp;<font color=lightgreen>Status</td>
			<td>
				<b><?php echo $objResult["Status"];?></b>	
			</td>
		</tr>
	</tbody>
	</table>
	<br>
	<input name="Submit" type="submit" value="Save">
</form>
<br><a href=login.php><font color=white>Back to Login page</a>
</body>
</html>
<?mysqli_close($conn)
?>
		