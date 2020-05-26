<html>
<body background = images.jpg>
</body>
</html>
<?php
	session_start();
	$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
	$strSQL = "SELECT * FROM member WHERE Username ='".mysqli_real_escape_string($conn,$_POST['txtUsername'])."' and 
										  Password ='".mysqli_real_escape_string($conn,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
		echo "<font color=lightgreen>Username and Password Incorrect <br><br><a href='login.php'><font color=white>Back to Login page</a>";
	}
	else
	{
		$_SESSION["UserID"] = $objResult["UserID"];
		$_SESSION["Status"] = $objResult["Status"];
		
		session_write_close();
		if($objResult["Status"] == "ADMIN")
		{
			header("location:admin_page.php");
		}
		else
		{
			header("location:user_page.php");
		}
	}
	mysqli_close($conn);
?>
	