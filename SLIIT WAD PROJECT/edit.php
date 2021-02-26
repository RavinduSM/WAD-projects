 <?php session_start();
	$id = $_POST["txtID"];
	$name = $_POST["txtname"];
	$price = $_POST["txtprice"];
	$category = $_POST["txtcategory"];
	$quantity = $_POST["txtquantity"];
	$description = $_POST["txtdescription"];
	if(isset($_POST["chkPublish"]))
	{	  
	 	$status = 1;
   	}
	else
	{ 
		$status = 0;
	}	
	if(is_uploaded_file($_FILES['file']['tmp_name']))
	{
   		$image = "uploads/".basename($_FILES["file"]["name"]);
		move_uploaded_file($_FILES["file"]["tmp_name"],$image);
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
	 
		$sql="UPDATE `products` SET `p_availability`='".$quantity."', `p_name`='".$name."', `p_price`='".$price."', `p_category`='".$category."', `p_description`='".$description."', `published`='".$status."', `filepath`='".$image."' WHERE `products`.`PID` = '".$id."';";
	   
	 if(mysqli_query($con,$sql))
	 {
		 header('Location:adminpage.php');	
	
	 }
	
	 ?>