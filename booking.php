<HTML>
<HEAD>
<BODY>
<a href=user_page.php><font color=lightgreen>Back to User page</a>
<body background = "images.jpg">
<?php
$STN = $_GET['name'];
session_start();
$_SESSION['STN']=$STN ;
$db=mysqli_connect("127.0.0.1","2018_f3","2018_f3");
mysqli_select_db($db,"2018_f3_");
$sql="SELECT * FROM field WHERE Name = '$STN'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result);
$name = $row['Name'];
$detail = $row['Detail'];
$pic = $row['Image'];
$status = $row['Status'];

echo "<IMG SRC=$pic width=1335px height=600px>";
echo "<br><br>";
echo "<center><font size='18' color=lightgreen>".$name."</font></center>"."<br>";
echo $detail."<br><br>";
echo "<br>";



	$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
	$strSQL = "SELECT * FROM history WHERE s_name = '".$_SESSION['STN']."' ORDER BY date";
	$objQuery = mysqli_query($conn,$strSQL);

$name=$_SESSION['UserID'] ;
$STN2=$_SESSION['STN'] ;
	while($row=mysqli_fetch_array($objQuery))
{
	$name=$_SESSION['UserID'] ;
	$STN2=$_SESSION['STN'] ;
	$date=$row['date'];
	$stt=$row['started_time'];
	$stp=$row['stopped_time'];
	$n=$row['u_name'];
	echo $row['date']." : ".$row['started_time']." - ".$row['stopped_time']." : ".$row['how_long']." Hours."." : ".$row['u_name'];
	if($n==$name)
	{
		echo "<a href=delete_u.php?name=$name&STN=$STN2&stt=$stt&stp=$stp&date=$date>delete</a>";
	}
	echo "<br>";
}

echo "<br><br>";

if($status=="open")
{	
	echo 'BOOKING<br>';
	echo '<form action="booking2.php">';
	echo 'Date : <input type="date" name="date" min="2018-11-30"><br>';
	echo 'Select started time : <input type="time" name="started_time"><br>
Select stopped time : <input type="time" name="stopped_time"><br>'
	.'<br>'.'<input type="submit" value="Book">';
	echo "</form>";
}
else
{
	echo "Sorry, Stadium is closed today.<br>";
}


	







?>

<br>
<br>
<br>
Review<br>
<form action="review.php">
<input type="text" name="comment"><input type="submit" value="review">
</form>
<?php
$db2=mysqli_connect("127.0.0.1","2018_f3","2018_f3");
mysqli_select_db($db2,"2018_f3_");
$sql2="SELECT * FROM review WHERE STN = '$STN'";
$result2=mysqli_query($db2,$sql2);
while($row=mysqli_fetch_array($result2))
{
	echo $row['name']." : ".$row['review']."<br>";

}






?>





</BODY>
</HEAD>
</HTML>