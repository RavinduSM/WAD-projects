<?php

	 $con = mysqli_connect("localhost","root","","grocery");
	if(!$con)
	{	
		die("Cannot connect to DB server");		
	}
$sql = "UPDATE `products` SET `published` = '1' WHERE `products`.`PID` = ".$_GET['id'].";";

	mysqli_query($con,$sql);

mysqli_close($con);
header('Location:adminpage.php');	


?>