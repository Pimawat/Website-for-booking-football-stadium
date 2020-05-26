<html>
<head>
<title> Login form </title>
</head>
<body background="images.jpg">

<br>
<form name="form1" method="post" action="check_login.php">
<center>
	<p style="font-family:impact; font-size:30pt; color:lightgreen">Login</p>

	<table border="1" style="width:300px">
	<tbody>
		<tr>
			<td> &nbsp;<font size=3 font color=lightgreen>Username</td>
			<td>
				<input name="txtUsername" type="text" id="txtUsername">
			</td>
		</tr>
		<tr>
			<td> &nbsp;<font size=3 font color=lightgreen>Password</td>
			<td>
				<input name="txtPassword" type="password" id="txtPassword">
			</td>
		</tr>
	</tbody>
	</table>
	<br><input type="submit" name="Submit" value="Login">
<br><br>
	<a href="Homepage.php"><font color=white>Back to Homepage</a>
	
</form>
</body>
</html>