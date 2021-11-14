<?php
session_start();
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPWD","");
define("DBNAME","recommenderdb");

$movieTitle=$_GET['id'];
$genres="";
$con = mysqli_connect(DBHOST,DBUSER,DBPWD,DBNAME);
$query = "SELECT * from movierequest WHERE title='$movieTitle'";
$result = mysqli_query($con,$query);


//$pageid=$_GET['id'];
//include("../../Models/Connction/Connction.php");
//
//sqlsrv_query($con,"DELETE FROM movierequest WHERE title=".$movieTitle);
mysqli_query($con,"DELETE FROM movierequest WHERE title='$movieTitle'");
//mysql_query( $sql,$connect);
//header('Location:Homepage1.php?message=Request has been fullfilled.'); 
header('Location:Homepage1.php?message=Request has been denied.');
?>