<html>
<body>
<body background=images.jpg>
<font color=lightgreen>
<?php
session_start();
$STN = $_SESSION['STN'];
$name = $_SESSION['UserID'];
$date=$_GET['date']; 
$started_time = $_GET['started_time'];
$stopped_time = $_GET['stopped_time'];
$_SESSION['date']=$date; 
$_SESSION['started_time']=$started_time;
$_SESSION['stopped_time']=$stopped_time;

$how_long = $stopped_time-$started_time;

$count = 0;

$db=mysqli_connect("127.0.0.1","2018_f3","2018_f3");
mysqli_select_db($db,"2018_f3_");

//$sql="INSERT INTO history VALUES 
//('$STN','$name','$date','$started_time','$stopped_time','$stopped_time'-'$started_time')";
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
	echo '<center>';
	echo '<form action="newconfirm.php">';



	
	//echo "Booking Complete!!<br><br>";
	echo "Booking name ID : ".$name."<br>";
	echo "Date : ".$date."<br>";
	echo "Booking Time : ".$started_time." - ".$stopped_time."<br>";
	echo "Price : ".$row2['Price']*$how_long." Baht."."<br>";
	$count = 0;

	echo '<input type="submit" value="Confirm">'."\n"."\n";

	echo '</form>';
	echo '<form action = "booking.php">';
	echo '<input type="submit" value="Cancel">'."<br>";

	echo '</form>';
	echo '</center>';
}

else if($count == 1)
{
	echo "<center>Sorry,This time is not empty.</center>";
	$count = 0;
}




?>




</body>
</html>
