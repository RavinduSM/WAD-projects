<?php session_start();

if(!isset($_SESSION["userName"]))
{
	header('Location:login.php');
}

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/comment.css" />
</head>

<body>
<form id="form8" name="form8" method="post" action="addComment.php">
 
    
      
        <div class="container">
        
        <img src="<?php echo $_GET['path']?>"  />
       

   
      <p>
      
        
        <label for="title"><b>Comments<br />
        </b></label>
        <textarea name="txtComment" required="required" class="text"> </textarea>
      </p>
      <button type="submit" name="btnsubmit" >Post</button>
   

    
    <?php

	    $con = mysqli_connect("localhost","root","","grocery");
		 $_SESSION['id'] = $_GET['id'];
		if(!$con)
		{	
			die("Cannot connect to DB server");		
		}
		$sql ="SELECT * FROM `review` WHERE `RID`='".$_GET['id']."';	";
					
		$result = mysqli_query($con,$sql);
			
		if(mysqli_num_rows($result)> 0)
		{
			while($row = mysqli_fetch_assoc($result))
			{
   				echo " <p>".$row['comment']."</p>
						<p><i>by  ".$row['email']."</i> <br> on ".$row['date']."</p>
				<hr />";
    
			}
		}
			?>
    </div>
   
</form>


</body>
</html>