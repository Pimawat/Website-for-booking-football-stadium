<html>
<body background=images.jpg>

<font color=lightgreen>Review complete!!!
<br><br>

<?php

$review=$_GET['comment'];
session_start();
$name=$_SESSION['UserID'] ;
$STN = $_SESSION['STN'];

$db=mysqli_connect("127.0.0.1","2018_f3","2018_f3");
mysqli_select_db($db,"2018_f3_");

$sql="INSERT INTO review VALUES('$name','$review','$STN')";


mysqli_query($db,$sql);

?>


</body>
</html>