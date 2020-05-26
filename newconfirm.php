
<?php
session_start();
$STN = $_SESSION['STN'];
$name = $_SESSION['UserID'];
$date=$_SESSION['date'];
$started_time = $_SESSION['started_time'];
$stopped_time = $_SESSION['stopped_time'];
$how_long = $stopped_time-$started_time;

$count = 0;

$db=mysqli_connect("127.0.0.1","2018_f3","2018_f3");
mysqli_select_db($db,"2018_f3_");

$sql="INSERT INTO history VALUES 
('$STN','$name','$date','$started_time','$stopped_time','$stopped_time'-'$started_time')";
$sql2="SELECT * FROM history WHERE s_name = '$STN' AND date='$date'";
$sql3="UPDATE member SET point=point+1 WHERE Name = '$name'";
$result=mysqli_query($db,$sql);
$result2=mysqli_query($db,$sql3);


?>

<html>

<head>
	<title>Reservation completely</title>
</head>
<a href=user_page.php><font color=white>Back to User page</a>
<body background=images.jpg>
<center>
<br><br>
<p style="font-family:impact; font-size:30pt; color:lightgreen">BOOKING COMPLETELY</p>


</html>