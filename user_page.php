<html>
<head>
<title>Booking Football field</title>
</head>
<body background=images.jpg>
<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "<font color=lightgreen>Please Login!!!";
		exit();
	}

	if($_SESSION['Status'] != "USER")
	{
		echo "<font color=lightgreen>This page for User only!!!";
		exit();
	}	
	
	$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>


<center>
<marquee><font size=4 color="red">Welcome to User page !!! </marquee>

	<p style="font-family:impact; font-size:30pt; color:lightgreen">USER</p>

  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;<font color=lightgreen>Username</td>
        <td width="197"><b><?php echo $objResult["Username"];?></b>
        </td>
      </tr>
      <tr>
        <td> &nbsp;<font color=lightgreen>Name</td>
        <td><b><?php echo $objResult["Name"];?><b/></td>
      </tr>
    </tbody>
  </table>

<br><br>
  <a href="member1.php"><font color=white>Search field</a>

  <br><br>
  <a href="edit_profile.php"><font color=white>Edit profile</a>
<br><br>
  <a href="logout.php"><font color=white>Logout</a>
<br><br>
<a href="history of reservation.php"><font color=white>history of reservation</a>

</body>
</html>