<?php session_start();

if(!isset($_SESSION["username"]))
{
	header('Location:adminlogin.php');
}

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit content</title>
<link rel="stylesheet" type="text/css" href="css/edit.css" />
</head>

<body>
<form id="form9" name="form9" method="post" action="edit.php" enctype="multipart/form-data">
  
        
    
    <?php
	
	 $con = mysqli_connect("localhost","root","","grocery");
	if(!$con)
	{	
		die("Cannot connect to DB server");		
	}
	$sql ="SELECT * FROM `products` WHERE `products`.`PID` = ".$_GET["id"];					
	$result = mysqli_query($con,$sql);
	if(mysqli_num_rows($result) >0)
		{
			
			$row = mysqli_fetch_assoc($result)
		
	?>
	
	<div class="container">
      <img src="<?php echo $row['filepath']?>"   class="imgcontainer" /> 
       <p>
      
        
        <input type="text"  name="txtID" value = "<?php echo $row['PID']?>" readonly>
        
            
       
        <input type="text" placeholder="Enter Product Name " name="txtname"  value = "<?php echo $row['p_name']?>" required>
		  
		
        <input type="text" placeholder="Enter Product Price " name="txtprice"  value = "<?php echo $row['p_price']?>" required>
		  
		
        <input type="text" placeholder="Enter Product Category " name="txtcategory"  value = "<?php echo $row['p_category']?>" required>
		  
		
        <input type="text" placeholder="Enter Product Quantity " name="txtquantity"  value = "<?php echo $row['p_availability']?>" required>
        
		
        <input type="text" placeholder="Enter Product Description " name="txtdescription"  value = "<?php echo $row['p_description']?>" class="des" required>
		  
       
        <input type="file" name= "file"  />
        
      </p>
      <p><input type="checkbox" <?php if($row['published'] == 1){  echo "checked='checked'"; }?> name="chkPublish"> Publish this </p>
            
      <?php   
	  $_SESSION['path'] = $row['filepath'];
		
		
	 mysqli_close($con);
		
		
	  } 
		   
	
	  ?>
	  
      <button type="submit" name="btnsubmit" >Edit  </button>
      
    
    </div>
	


    
    
</form>
</body>
</html>