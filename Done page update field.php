<?php
session_start();
$admin=$_SESSION['UserID'];
	$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
	$name=$_GET["txtNamefield"];
	$pic=$_GET["pic"];
	$detail=$_GET["txtDetailfield"];
	$status=$_GET["txtStatusfield"];
	$sql="UPDATE field SET Detail='$detail',Status='$status',Image='$pic' WHERE Name='$name' AND admin='$admin' ";

	mysqli_query($conn,$sql);
	?>
<html>
<body background=images.jpg>
	<font color=lightgreen>Update completed!!!
<br><br>
	<a href="admin_page.php"><font color=white>Back to Admin page</a>
</body>
</html>

