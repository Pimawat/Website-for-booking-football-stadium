<html>
<head><title>Register</title></head>
<body background = "images.jpg">
<br>
<center>
	<p style="font-family:impact; font-size:30pt; color:lightgreen">Register</p>

	<form action="Done page register.php">
	<table border ="1" style width="300px">
	<tbody>
		<tr>
			<td><font color=lightgreen>UserId</td>
			<td><input name="txtUserID" type ="text"></td>
		</tr>
		<tr>
			<td><font color=lightgreen>Username</td>
			<td><input name="txtUsername" type ="text"></td>
		</tr>
		<tr>
			<td><font color=lightgreen>Password</td>
			<td><input name="txtPassword" type ="password"></td>
		</tr>
		<tr>
			<td><font color=lightgreen>Name</td>
			<td><input name="txtName" type ="text"></td>
		</tr>
		<tr>
			<td><font color=lightgreen>Tel</td>
			<td><input name="txtTel" type ="text"></td>
		</tr>
		<tr>
			<td><font color=lightgreen>Status</td>
			<td><input name="status" type="text "style="text-transform: uppercase"><td><input type="button" value="HINT" onclick="alert('Choose ADMIN or USER')"/></td> </td>
		</tr>
	</tbody>
	</table><br>
	<input type="submit" value="register">
	</form>
	<a href="login.php"><font color=white>Back to login page</a>


</body>
</html>