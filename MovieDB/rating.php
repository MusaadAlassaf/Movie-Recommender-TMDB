<?php
session_start();
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPWD","");
define("DBNAME","recommenderdb");
$rating="";
$comment="";
$email="";
 $id1="";
 $userId="";
  $resultid="";
if(!isset($_POST["rating"]) or empty($_POST["comment"]) or empty($_POST["email"]) ){
  header('Location:search.php?error=Please fill the Required Parameters');
}
else{
    $email= $_POST['email'];
    $rating= $_POST['rating']; 
     $comment= $_POST['comment'];
    
    $con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
    $query ="SELECT * FROM user WHERE email='$email'";
     $resultid = mysqli_query($con,$query);
    
      if($row = $resultid->fetch_assoc()) {
    $userId= $row['userId'];
}
    
    
   
  
    
    $id1=$_SESSION['id'];
    
   
    $query1 = "INSERT INTO `ratings` (`userId`, `movieId`, `rating` , `comment`) VALUES ('$userId', '$id1', '$rating' , '$comment')";
    mysqli_query($con,  $query1);
     mysqli_close($con);
   
    header('Location:Homepage.php?message=Thank you!.');
}