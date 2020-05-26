<html>
<body background=images.jpg>
</body>
</html>
<?PHP
	session_start();
	if($_SESSION['UserID']=="")
	{
		echo "<font color=lightgreen>Please Login!<br><br><a href='edit_profile.php'><font color=white>Back to Edit</a>";
		exit();
	}
	$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
	if($_POST["txtPassword"]!=$_POST["txtConPassword"])
	{
		echo "<font color=lightgreen>Password not Match!<br><br><a href='edit_profile.php'><font color=white>Back to Edit</a>	 ";
		exit();
	}
	$strSQL="UPDATE member SET Password='".trim($_POST['txtPassword'])."',Name='".trim($_POST['txtName'])."',Username='".trim($_POST['txtUsername'])."' WHERE UserID='".$_SESSION["UserID"]."' ";
	$objQuery=mysqli_query($conn,$strSQL);
	
	echo "<font color=lightgreen>Save Complete!!!<br>";
	if($_SESSION["Status"]=="ADMIN")
	{
		
		echo "<br> <a href='admin_page.php'><font color=white>Back to Admin page</a>";
	}
	else
	{
		echo "<br> <a href='user_page.php'><font color=white>Back to User page</a>";
	}

	mysqli_close($conn)
?>
