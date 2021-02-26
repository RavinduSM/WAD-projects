<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Details</title>
<link rel="stylesheet" href="css/signup.css">
	<script>
	function validatecount()
		{
			var no = document.getElementById("p_count").value
			if(no<0)
				{
					alert("invalid quantity amount");
					return false;
				}
			return true;
		}
		
		function Validate()
		{
			if(validatecount())
				{
					
				}
			else{
				event.preventDefault;
			}
		}
	</script>
</head>

<body>
	<div class="container">
	<h2>Product Details</h2>
	<form id="form3" name="form-addproducts" method="post" action=""  enctype="multipart/form-data">
		<input type="text" name="p_name" id="p_name" placeholder="Product Name" required><br><br>
		<input type="text" name="p_price" id="p_price" placeholder="Product Price" required><br><br>
		<input type="textarea" name="p_description" id="p_description" placeholder="Product Description" required><br><br>
		<input type="number" name="p_count" id="p_count" placeholder="Item_Count" required><br><br>
		<input type="file" name="file">
		<select name="category" id="category">
			<option>Category</option>
			<option value="Grains">Grains</option>
			<option value="Vegetables">Vegetables</option>
			<option value="Fruits">Fruits</option>
			<option value="Meats">Meat,Eggs and Fish</option>
			<option value="dairy">Dairy Products</option>
			<option value="Snacks">Snacks</option>
			<option value="Oils">Oils</option>
			<option value="Pharmacy">Pharmacy</option>
			<option value="Beauty">Beauty and Hygeine</option>
			<option value="Cleaning">Cleaning and Household</option>
			<option value="kitcen">Kitchen and Gadgets</option>
			
		</select><br><br>
		
		<p>		
		<p><input type="checkbox" checked="checked" name="cnkPublish" > Publish this </p>	
		</p>
		
		<?php
		
		if(isset($_POST["btnSubmit"]))
	   {
	   	$pname = $_POST["p_name"];
		$pprice = $_POST["p_price"];
		$pdes = $_POST["p_description"];
		$pcount = $_POST["p_count"];
		$category = $_POST["category"];
		if(isset($_POST["cnkPublish"]))
		   {	  $status = 1;}
		   else { $status = 0;}	
		$image = "uploads/".basename($_FILES["file"]["name"]);
		move_uploaded_file($_FILES["file"]["tmp_name"],$image);
			
		/* connecting to database */ 
		$con = mysqli_connect("localhost","root","","grocery");
		if(!$con)
			{	
				die("Cannot upload the file, Please choose another file");		
			}

			 //inserting values to sql
			$sql = "INSERT INTO `products`(`PID`, `p_availability`, `p_name`, `p_price`, `p_category`, `p_description`, `published`, `filepath`) VALUES (NULL, '".$pcount."', '".$pname."', '".$pprice."', '".$category."', '".$pdes."','".$status."', '".$image."')";
    
	//validation and redirection   
	 if(mysqli_query($con,$sql))
		{
		echo "File uploaded Successfully";
		 header('Location:adminpage.php');	
	}
	else
		echo "Opps something is wrong, Please select the file again";
  
		}
?>    
		
		<input type="submit" name="btnSubmit" id="btnSubmit"  value="Submit" class="registerbtn" onclick="Validate()" >
		<input type="reset" name="btnReset" id="btnReset"  class="cancelbtn" value="Reset" />
		</form>
	</div>
</body>
</html>