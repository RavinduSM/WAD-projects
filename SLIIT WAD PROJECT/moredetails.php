<?php session_start();

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8">
<title>More Details</title>
<link rel="stylesheet" href="css/more.css">	
</head>

<body>
	
	
	
	<container>
	
			 <?php
		
		 $con = mysqli_connect("localhost","root","","grocery");
		if(!$con)
		{	
			die("Cannot connect to DB server");	
		}
				  
				  $sql ="SELECT * FROM `products` WHERE `products`.`PID`=".$_GET['pid'];
				  
					
		$result = mysqli_query($con,$sql);
			
		if(mysqli_num_rows($result)> 0)
	{
			while($row = mysqli_fetch_assoc($result))
			{
			
	?>
				  
               
				 <img src="<?php echo $row['filepath']?>" class="img-rounded"  width="50" height="50" /> 
				
				<h2 class="name"> <?php echo $row["p_name"]; ?></h5>
				<h5 class="price">Rs: <?php echo $row["p_price"]; ?></h5>
                 <h2 class="name"> <?php echo $row["p_description"]; ?></h5>
				<h5 class="price">Rs: <?php echo $row["p_price"]; ?></h5>
				 
				
				 
				
			
                 
				
               
        <?php
			}}
			?>
    
    
    
      
		</container>
	
	
		
</body>
</html>