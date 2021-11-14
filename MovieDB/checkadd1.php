<?php
session_start();
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPWD","");
define("DBNAME","recommenderdb");

$mname ="";
$poster ="";
$comments ="";
$mgenre ="";
$rating="";
$email=$_SESSION['email'];


if(empty($_POST["mname"])  or empty($_POST["mgenre"]) or empty($_POST["poster"]) or empty($_POST["rating"]) or empty($_POST["comments"])){
    header('Location:Homepage1.php?error=Please fill the Required Parameters!');
} 
else{
$mname =$_POST['mname'];
$poster =$_POST['poster'];
$comments =$_POST['comments'];
$mgenre =$_POST['mgenre'];
$rating=$_POST['rating'];

    
$conn = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $insert = "INSERT INTO `movies` (`title`, `genres`) VALUES ('$mname' , '$mgenre')";
    mysqli_query($conn,$insert);
    $query="SELECT * FROM movies WHERE title='$mname'";
      $result = mysqli_query($conn,$query);
    
    while($row= mysqli_fetch_assoc($result))
   $id= $row['movieId'];
  
   $result1=mysqli_query($conn,"SELECT * FROM user WHERE email='$email'");
  
   while($row1= mysqli_fetch_assoc($result1))
    $userId= $row1['userId'];
    
   $insert1="INSERT INTO `ratings` (`userId`, `movieId`, `rating` , `comment`) VALUES ('$userId', '$id', '$rating' , '$comments')";
    mysqli_query($conn,$insert1);
   header('Location:Homepage1.php');
   
}