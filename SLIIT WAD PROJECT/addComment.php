<?php session_start();

$comment = $_POST['txtComment'];


 $con = mysqli_connect("localhost:3308","root","","grocery");
		if(!$con)
		{	
			die("Cannot connect to DB server");		
		}
$sql = "INSERT INTO `review` (`RID`, `email`, `PID`, `comment`, `date`) VALUES (NULL, '".$_SESSION['userName']."', '".$_SESSION['id']."', '".$comment."', '".date("Y-m-d")."');";



	mysqli_query($con,$sql);

mysqli_close($con);

header('Location:main.php');	

?>