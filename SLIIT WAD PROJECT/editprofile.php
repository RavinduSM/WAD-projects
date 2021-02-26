<?php session_start();
	$email = $_POST["email"];
	$name = $_POST["txtfname"];
	$lname = $_POST["txtlname"];
	$contact = $_POST["txtcontact"];
	if(is_uploaded_file($_FILES['contentFile']['tmp_name']))
	{
   		$image = "uploads/".basename($_FILES["contentFile"]["name"]);
		move_uploaded_file($_FILES["contentFile"]["tmp_name"],$image);
	}  
	else
	{
		 $image = $_SESSION['path'];		
	}
 $con = mysqli_connect("localhost","root","","grocery");
	if(!$con)
	{	
		die("Cannot connect to DB server");		
	}	

	  $sql = "UPDATE `customer` SET `first_name` = '".$name."',`last_name` = '".$lname."',`contact_no` = '".$contact."',`filePath` = '".$image."' WHERE `products`.`email` = ".$email.";";
	   
	if( mysqli_query($con,$sql))
	{
			header('Location:main.php');	
	}
	 ?>