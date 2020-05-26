<html>
<body background = "images.jpg">
<a href=user_page.php><font color=white>Back to User page</a>
<TABLE>
<center>
<?php
$STN = $_GET['stn'];
$Loc = $_GET['location'];

$db=mysqli_connect("127.0.0.1","2018_f3","2018_f3");
mysqli_select_db($db,"2018_f3_");
$sql="SELECT * FROM field WHERE Address = '$Loc' OR Name = '$STN'";
$result=mysqli_query($db,$sql);

while($row=mysqli_fetch_array($result))
{
	$name = $row['Name'];
	$pic=$row['Image'];
	
   echo "<center><font color=white><a href=booking.php?name=$name>".$row['Name']."</a></font></center>"."<br>"."<IMG SRC=$pic width=300px height=300px>"."<br><br>";
}
?>



</TABLE>
</body>
</html>