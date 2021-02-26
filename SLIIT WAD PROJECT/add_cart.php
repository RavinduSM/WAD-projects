<?php session_start();
	$id = $_POST["txtID"];
	$title = $_POST["txtTitle"];
	if(isset($_POST["chkPublish"]))
	{	  
	 	$status = 1;
   	}
	else
	{ 
		$status = 0;
	}	
	if(is_uploaded_file($_FILES['contentFile']['tmp_name']))
	{
   		$image = "uploads/".basename($_FILES["contentFile"]["name"]);
		move_uploaded_file($_FILES["contentFile"]["tmp_name"],$image);
	}  
	else
	{
		 $image = $_SESSION['path'];		
	}
 $con = mysqli_connect("localhost:3308","root","","postdb");
	if(!$con)
	{	
		die("Cannot connect to DB server");		
	}	
	  $sql = "UPDATE `post` SET `title` = '".$title."', `published` = '".$status."', `filePath` = '".$image."' WHERE `post`.`postId` = ".$id.";";
	   
	if( mysqli_query($con,$sql))
	{
			header('Location:mainTasks.php');	
	}
	 ?>