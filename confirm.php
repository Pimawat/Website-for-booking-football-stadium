<html>
<head>
	<title>Confirm of reservation</title>
</head>

<body background=images.jpg>
<center>
<br><br>
<p style="font-family:impact; font-size:30pt; color:lightgreen">CONFIRM OF RESERVATION</p>

<?php

session_start();
$STN = $_SESSION['STN'];
$name = $_SESSION['UserID'];
$date=$_GET['date']; 
$started_time = $_GET['started_time'];
$stopped_time = $_GET['stopped_time'];
$how_long = $stopped_time-$started_time;

$count = 0;

$db=mysqli_connect("127.0.0.1","2018_f3","2018_f3");
mysqli_select_db($db,"2018_f3_");

$sql="INSERT INTO history VALUES 
('$STN','$name','$date','$started_time','$stopped_time','$stopped_time'-'$started_time')";
$sql2="SELECT * FROM history WHERE s_name = '$STN' AND date='$date'";
$sql3="SELECT * FROM field WHERE Name = '$STN'";
$result=mysqli_query($db,$sql2);
$result2=mysqli_query($db,$sql3);

While($row=mysqli_fetch_array($result))
{
	if($started_time>=$row['started_time'] && $started_time<=$row['stopped_time'])
	{
		$count = 1;	
		
	}
	else if($stopped_time>=$row['started_time'] && $stopped_time<=$row['stopped_time'])
	{
		$count = 1;	

	}
	else
	{

	}
}

$row2=mysqli_fetch_array($result2);
if($count == 0)
{



	mysqli_query($db,$sql);
	echo "Booking Complete!!<br><br>";
	echo "Booking name ID : ".$name."<br>";
	echo "Date : ".$date."<br>";
	echo "Booking Time : ".$started_time." - ".$stopped_time."<br>";
	echo "Price : ".$row2['Price']*$how_long." Baht."."<br>";
	$count = 0;

	
}

else if($count == 1)
{
	echo "Full";
	$count = 0;
}


?>
