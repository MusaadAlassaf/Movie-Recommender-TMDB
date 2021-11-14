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

if(empty($_POST["mname"])  or empty($_POST["mgenre"]) or empty($_POST["poster"]) or empty($_POST["rating"]) or empty($_POST["comments"])){
    header('Location:Homepage.php?error=Please fill the Required Parameters!');
} 
else{
$mname =$_POST['mname'];

$poster =$_POST['poster'];
$comments =$_POST['comments'];
$mgenre =$_POST['mgenre'];
$rating=$_POST['rating'];

$conn = new mysqli(DBHOST, DBUSER, DBPWD, DBNAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

    $insert = "INSERT INTO `movierequest` (`title`, `genres`, `poster`, `rating`, `comment`) VALUES ('$mname' , '$mgenre' , '$poster' , '$rating' , '$comments')";
    if ($conn->query($insert) === TRUE) {
         header('Location:Homepage.php?message=Your request has been sent');
      } else {
        header('Location:Homepage.php?error=Something wrong happend!Try again.');;
      }
      

}