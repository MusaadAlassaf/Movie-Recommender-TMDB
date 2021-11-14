<?php
session_start();
include 'DB-CONFG.php';

$email="";
$pwd1="";
$pwd2="";




if(empty($_POST["email"]) or empty($_POST["pwd1"]) or empty($_POST["pwd2"]) ){
    header('Location:forgetpass.php?error=Something happend!, Please check and try again.');
}
else{

    $email= $_POST['email'];
    $pwd1= $_POST['pwd1'];
    $pwd2= $_POST['pwd2'];

    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
    if(mysqli_connect_errno())
        die("Cannot connect to DB".mysqli_connect_error());

        $query = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($con,$query);
     if( mysqli_num_rows($result)>0){

       if( $pwd1 != $pwd2){
           mysqli_close($con);
           header('Location:ressetPW.php?error=The two passwords do not match!');
       }else{
           $update = "UPDATE user SET password='$pwd1' WHERE email='$email'";
           mysqli_query($con,$update);
           mysqli_close($con);
           header('Location:index.php?message=Password changed.');
       }
       
     }else{
         mysqli_close($con);
       header('Location:ressetPW.php?error=This email does not exists!');
     }

    }


