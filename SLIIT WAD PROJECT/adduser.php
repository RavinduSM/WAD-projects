

<?php

    $fname=$_POST["txt_f_name"];
    $lname=$_POST["txt_l_name"];
    $contact=$_POST["txt_tele"];
    $email=$_POST["txt_email"];
    $pw=$_POST["txtpassword"];
	$image = "profile/".basename($_FILES["file"]["name"]);
		move_uploaded_file($_FILES["file"]["tmp_name"],$image);

    //connecting to database
    $con=mysqli_connect("localhost:3306","root","","grocery");
    if(!$con){
        die("Error occured in db connection, Please try again");
    }

    //inserting values to sql
    $sql="INSERT INTO `customer`(`first_name`, `last_name`, `email`, `contact_no`, `password`, `filePath`) VALUES ('".$fname."', '".$lname."' , '".$email."' , '".$contact."', '".$pw."', '".$image."')";
    
    //validation and redirection
    if(mysqli_query($con,$sql)){
        header('Location:login.php');
    }

    //closing database connection
    mysqli_close($con);
    

?>