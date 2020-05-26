<html>
<head>
<title>History of reservation</title>
</head>
<body background=images.jpg>
<center>
<br><br>
<p style="font-family:impact; font-size:30pt; color:lightgreen">HISTORY</p>

<?php
	session_start();

	$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
	$strSQL = "SELECT * FROM history WHERE u_name = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($conn,$strSQL);
	

	while($row=mysqli_fetch_array($objQuery))
{
	echo $row['s_name']." : ".$row['date']." : ".$row['started_time']." : ".$row['stopped_time']." : ".$row['how_long']."<br>";

}
?>

</body>
</html>