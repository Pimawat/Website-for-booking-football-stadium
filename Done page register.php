<?php
	$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
	$uname=$_GET["txtUsername"];
	$id=$_GET["txtUserID"];
	$pass=$_GET["txtPassword"];
	$name=$_GET["txtName"];
	$status=$_GET["status"];
	$tel = $_GET["txtTel"];
	$sql="INSERT INTO member (UserID,Username,Password,Name,Status,Tel) VALUES ('$id','$uname','$pass','$name','$status','$tel')";
	mysqli_query($conn,$sql);
	?>
<html>
<body background="images.jpg">
	<font color=lightgreen>Register completed!!!
<br><br>
	<a href="login.php"><font color=white>Go to Login page</a>
</body>
</html>

