
<?php session_start();

if(!isset($_SESSION["userName"]))
{
	header('Location:Login.php');
}

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8">
<title>Profile</title>
<link rel="stylesheet" href="css/profile.css">
</head>

<body>
	<form id="form9" name="form10" method="post" action="editprofile.php" enctype="multipart/form-data">
	<div class="container">
		<?php
		
		 $con = mysqli_connect("localhost","root","","grocery");
		if(!$con)
		{	
			die("Cannot connect to DB server");		
		}
		
		$sql ="SELECT * FROM `customer` WHERE `email`='".$_SESSION["userName"]."'";	
					
		$result = mysqli_query($con,$sql);
			
		if(mysqli_num_rows($result)> 0)
	{
			while($row = mysqli_fetch_assoc($result))
			
	?>
				  
					 
		
			
		<img src="<?php echo $row['filepath']?>"   width="50" height="50" /> 
			
		 
        <input type="text"  name="txtemail" value = "<?php echo $row['email']?>" readonly>
			
         
        <input type="text" placeholder="Enter First Name " name="txtfname"  value = "<?php echo row['first_name']?>" required>
			
			
			<input type="text" placeholder="Enter Last Name " name="txtlname"  value = "<?php echo row['last_name']?>" required>
			
			 
			<input type="text" placeholder="Enter Contact number " name="txtcontact"  value = "<?php echo row['contact_no']?>" required>
			
			<input type=file name="file">
			
			
	<?php   
	  $_SESSION['path'] = $row['filePath'];
	  mysqli_close($con);
	  } 
	
	  ?>
	</div>
</body>
</html>