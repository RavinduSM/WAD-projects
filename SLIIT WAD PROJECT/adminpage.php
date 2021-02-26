<?php session_start();

if(!isset($_SESSION["username"]))
{
	header('Location:adminlogin.php');
}

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8">
<title>Admin Page</title>
<link rel="stylesheet" href="css/admin.css">	
</head>

<body>
	<div class="header">
		<h2> Product Details</h2>
		<a href="products.php"> <button type="button" class="btn"> Add Products </button></a>
		<a href="adminlogout.php"> <button type="button" class="btn"> Log Out </button></a>
	</div>
	
	
	
	<container>
	<table cellspacing="0" width="100%" >
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Name</th>
				  <th>Price</th>
				  <th>Quantity</th>
				  <th> Category</th>
                  <th>Actions</th>
                 
                </tr>
              </thead>
              <tbody>
			 <?php
		
		 $con = mysqli_connect("localhost","root","","grocery");
		if(!$con)
		{	
			die("Cannot connect to DB server");	
		}
				  
				  $sql ="SELECT * FROM `products` ";
				  
					
		$result = mysqli_query($con,$sql);
			
		if(mysqli_num_rows($result)> 0)
	{
			while($row = mysqli_fetch_assoc($result))
			{
			
	?>
				  
                <tr align="center">
                  <td>
					  <img src="<?php echo $row['filepath']?>" class="img-rounded"  width="50" height="50" /> 
				 </td>
                 <td><?php echo $row['p_name'] ?></td>
				 <td>Rs; <?php echo $row['p_price'] ?></td>
				 <td><?php echo $row['p_availability'] ?></td>
				 <td><?php echo $row['p_category'] ?></td>
				 
				 <td>
				
				 
				 <a  href="editcontent.php?id=<?php echo $row['PID']; ?>" title="click for edit" onclick="return confirm('Are you sure edit this item?')" ><button>Edit</button></a> 
				
				<a  href="deletecontent.php?id=<?php echo $row['PID']; ?>" title="click for delete" onclick="return confirm('Are you sure remove this item?')" ><button class="btn1">Remove</button></a> 
			
                 
				
                  </td>
                </tr>
               
        <?php
			}}
			?>
    
    
    
      </table>
		</container>
	
	
		<div  class="footer">
	<p>Copyright@SMsoftwares</p>
	</div>
</body>
</html>