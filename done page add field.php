<?php
	//if upload button is pressed
	if (isset($_POST['upload']))
	{
		// the path to the store
		$target = "image/".basename($_FILES['image']['name']);
		// connect to database
		$conn=mysqli_connect("127.0.0.1","2018_f3","2018_f3","2018_f3_");
		
		//get all the submitted data
		$image=$_FILES['image']['name'];
		$name=$_POST['Fieldname'];
		$address=$_POST['Fieldaddress'];
		$size=$_POST['Fieldsize'];
		$price=$_POST['Fieldprice'];
		$tel=$_POST['FieldTel'];
		session_start();
		$admin=$_SESSION['UserID'];
		$sql="INSERT INTO field(Name,Address,Size,Price,Image,Tel,admin) VALUES ('$name','$address','$size','$price','$image','$tel','$admin')";
		mysqli_query($conn,$sql);
		
		//move image to folder images
		if(move_uploaded_file($_FILES['image']['name'], $target))
		{
			$msg = "Image uploaded";
		}
		else
		{
			$msg = "There is a problem";
		}
	}
?>
<html>
<body background=images.jpg>
	<font color=lightgreen>Add complete !!!
<br><br>
	<a href="admin_page.php"><font color=white>Back to Admin page</a>
</body>
</html>



