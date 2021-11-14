<?php
session_start();
include 'DB-CONFG.php';

$email="";
$pwd="";

if(empty($_POST["email"]) or empty($_POST["pwd"]) )
  header('Location:index.php?error=Please fill the Required Parameters');
else{
    
    $email= $_POST['email'];
    $pwd= $_POST['pwd'];
    $_SESSION['email']=$_POST['email'];
    
    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno())
        die("Cannot connect to DB".mysqli_connect_error());
    
    $query = "SELECT * FROM user WHERE email='$email'AND password='$pwd'";
    $result = mysqli_query($con,$query);
    
      if($row = $result->fetch_assoc()) {
    $role= $row['role'];
}
    if( mysqli_num_rows($result)>0){
       
       if($role == 0) {
        mysqli_close($con);
           
        header('Location:Homepage.php');
       }elseif($role == 1) {
        mysqli_close($con);
        header('Location:Homepage1.php');
       }
    }else{
        mysqli_close($con);
         header('Location:index.php?error=Wrong Email or Password');
    }
}
   