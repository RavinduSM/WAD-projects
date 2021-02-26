<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>login</title>
<link rel="stylesheet" href="css/login.css">
</head>

<body>
	
	<div class="container">
	<h2>SIGN UP</h2>
	<form id="form1" name="form1" method="post" action="">
		<input type="text" name="txtuname"  placeholder="User Name" required><br><br>
		<input type="password" name="txtpassword"  placeholder="Password" required><br><br>
		
		<p>
		<?php 
		  if(isset($_POST["btnsubmit"])){
		
		
		  $uname=$_POST["txtuname"];
		  $password=$_POST["txtpassword"];
			$con = mysqli_connect("localhost:3306","root","","grocery");   
			  if(!$con)
			  {
				  die("error , please go home");
			  }
			  $sql = "select email,password from customer where email='".$uname."' and password='".$password."'";
			  $result=mysqli_query($con,$sql);
			  $val=false;
		     if( mysqli_num_rows($result)>0){
				 $val=true ;
				 
			 }
			  mysqli_close($con);
			  
			  
		  if($val)
		  {
			  $_SESSION["userName"]=$uname;
			  header('Location:main.php');
			  
		  }
		  else
		  {
			  echo'<span style="color:#fff;text-align:center;">invalid user or password</span>';
		  }}
		  ?>
		  </p>
		
		 <button type="submit" name="btnsubmit" >Login</button>
		 <a href="main.php"><button type="button" class="cancelbtn">Cancel</button></a><br>
		
		<label>
		<input type="checkbox" checked="checked" name="remember"> Remember me
    	</label>
		
		
    	 <a href="#">Forgot password?</a> 
		<a href="signup.php">Dont have an account</a>
		
		</form>
	</div>
</body>
</html>
