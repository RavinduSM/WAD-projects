<?php

    $uname=$_POST["user_name"];
    $pw=$_POST["txtpassword"];

    //connecting to database
    $con=mysqli_connect("localhost:3306","root","","grocery");
    if(!$con){
        die("Error occured in db connection, Please try again");
    }

    //inserting values to sql
    $sql="INSERT INTO `admin`(`username`, `password`) VALUES ('".$uname."', '".$pw."')";
    
    //validation and redirection
    if(mysqli_query($con,$sql)){
        header('Location:adminlogin.php');
    }

    //closing database connection
    mysqli_close($con);
    

?>