<html>
<body background=images.jpg>
<?php

$name=$_GET['name'];
$email=$_GET['email'];
$message=$_GET['message'];


$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
$db=mysqli_select_db($conn,"2018_f3_");

$sql="INSERT INTO quiz_chin VALUES('$name','$email','$message')";

mysqli_query($conn,$sql);



?>

<font color=lightgreen>Thank you for your support. Have a nice day !!!

<br><br>

<A href="Homepage.php"><font color=white>Back to Homepage</a>


</body>
</html>