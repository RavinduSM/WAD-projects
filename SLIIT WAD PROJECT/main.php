<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<meta charset="utf-8">
<title>main</title>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/card.css" rel="stylesheet" type="text/css">
</head>

<body>
<section>
	
	<!-- This is the section 1 of the page -->
	<div class="section1">
		<img src="images/logo.png" class="logo">
		
	
	
	</div>
	<!-- End of the section 1 of the page -->
	
	<!-- This is the section 2 of the page -->
	<div class="section2">
		<input type="text" placeholder="search" class="txtsrch"/><button type="button" class="btnsearch">search</button>
		
		<a href="signup.php"><button type="button" class="btn" > Register</button></a>
		<a href="login.php"><button type="button" class="btn" > Login</button></a>
		<a href="profile.php"><button type="button" class="btn" > Profile</button></a>
		<a href="adminpage.php"><button type="button" class="btn" > Admin</button></a>
		<nav>
			<a class="menu">Home</a>
			<a class="menu">Our Services</a>
			<a class="menu">Delivery Service</a>
			<a class="menu">Contact</a>
			<a class="menu">About Us</a>
			
		
		</nav>
	
	</div>
	<!-- End of the section 2 of the page -->
	</section>
	

	<!-- navigation sidebar-->
	<div class="sidenav">
  		<a href="#about">Grains</a>
  		<a href="#about">Vegetables</a>
  		<a href="#about">Fruits</a>
  		<a href="#about">Meats, Eggs & fish</a>
		<a href="#about">Dairy products</a>
		<a href="#about">beverages</a>
		<a href="#about">snacks</a>
		<a href="#about">Bakery products</a>
		<a href="#about">Pharmacy</a>
		<a href="#about">Beauty & Hygeine</a>
		<a href="#about">Cleaning & Household</a>
		<a href="#about">Kitchen Gadgets</a>
	</div>
	<!-- end navigation sidebar-->
	
	
	<div class="main">
	
<div class="slideshow-container">
	<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/a.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/b.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/c.jpg" style="width:100%">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  SetTimeout(showSlides,3000); //slides changes in every 3 seconds. 
}
</script>
	
	
	
	
	
		<?php
		$con = mysqli_connect("localhost","root","","grocery");
		if(!$con)
			{	
				die("Cannot connect to the DB");		
			}
		 //retrieving values from sql
			$sql ="SELECT * FROM `products` WHERE `published`='1'";	
					
		$result = mysqli_query($con,$sql);
			
		if(mysqli_num_rows($result)> 0)
	{
			while($row = mysqli_fetch_assoc($result))
			{
				?>
	<form method="post" action="">
	<card>
        <img src="<?php echo $row['filepath']?>" class="img-rounded"   />
		<div class="container">
		<h2 class="name"> <?php echo $row["p_name"]; ?></h5>
		<h5 class="price">Rs: <?php echo $row["p_price"]; ?></h5>
		<input type="text" class="value" value="1">
		<input type="submit" name="add" value="Add to Cart" class="button">
			<a  href="moredetails.php?pid=<?php echo $row['PID']; ?>" title="click for more details" ><button>More</button></a> 
			</div>
     </card>	
    
	
	
	
	<?php
			}
	}
	
	?>

	
	</div>
	
		</form>
	<div class="footer">
	<h4>Copyright@SMsoftwares</h4>
	</div>
</body>
</html>
