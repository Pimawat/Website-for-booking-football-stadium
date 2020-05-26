<html>
<body>

<?php
$db=mysqli_connect("127.0.0.1","2018_f3","2018_f3");
mysqli_select_db($db,"2018_f3_");

$name=$_GET['name'];
$STN=$_GET['STN'];
$date=$_GET['date'];
$stt=$_GET['stt'];
$stp=$_GET['stp'];
	$sql="DELETE from history WHERE u_name='$name' AND s_name='$STN' AND date='$date' AND started_time='$stt' AND stopped_time='$stp'";
	mysqli_query($db,$sql);
?>

Done!


 
</body>
</html>

