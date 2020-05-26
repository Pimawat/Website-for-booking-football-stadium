<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "<font color=lightgreen>Please Login!!! <br><br>a  ";
		exit();
	}

	if($_SESSION['Status'] != "ADMIN")
	{
		echo "<font color=lightgreen>This page for Admin only!!!  ";
		exit();
	}	
	
	$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>
<head>
<title>This is admin page</title>
</head>
<body background=images.jpg>

<marquee><font size=4 color="red">Welcome to Admin page !!! </marquee>

<center>

  <p style="font-family:impact; font-size:30pt; color:lightgreen">ADMIN</p>

 <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;<font color=lightgreen>Username</td>
        <td width="197"><font color=black><b><?php echo $objResult["Username"];?></b>
        </td>
      </tr>
      <tr>
        <td> &nbsp;<font color=lightgreen>Name</td>
        <td><font color=black><b><?php echo $objResult["Name"];?></b></td>
      </tr>
    </tbody>
  </table>
  <br><br>
  <a href="edit_profile.php"><font color=white>Edit Profile</a><br>
  <br>
  <a href="logout.php"><font color=white>Logout</a>
  <br>
  <br>
  <a href="add field.php"><font color=white>Add Football field</a>
  <br>
  <br>
  <a  href="update field info"><font color=white>Update Field Information</a>
<br>
  <br>
  <a  href="historyad.php"><font color=white>History</a>
</body>
</html>