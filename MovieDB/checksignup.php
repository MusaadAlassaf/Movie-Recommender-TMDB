<?php
session_start();
include 'DB-CONFG.php';

$email="";
$name="";
$pwd1="";
$pwd2="";


if(empty($_POST["email"]) or empty($_POST["name"]) or empty($_POST["pwd1"]) or empty($_POST["pwd2"])){
    header('Location:signup.php?error=Please fill the Required Parameters!');
} 
else{

    $email= $_POST['email'];
    $name=  $_POST['name'];
    $pwd1= $_POST['pwd1']; 
    $pwd2= $_POST['pwd2'];
    

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno())
        die("Cannot connect to DB".mysqli_connect_error());
    
        $query = "SELECT * FROM user WHERE email='$email'";
     $result = mysqli_query($con,$query);
     if( mysqli_num_rows($result)>0){
        mysqli_close($con);
        header('Location:signup.php?error=This email already exists!');
     }
    else{

    if( $pwd1 != $pwd2){
        mysqli_close($con);
        header('Location:signup.php?error=The two passwords do not match!');
    }else{
        $insert = "INSERT INTO `user` (`email`, `password`, `role`) VALUES ('$email', '$pwd1', '0')";
        mysqli_query($con,$insert);
        mysqli_close($con);
        header('Location:index.php?message=Thank you! You can now Sign in.'); 
    }
    }

}

