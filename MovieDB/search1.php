



<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>HDMOVIE</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
      
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
    <!-- Favicons -->

<meta name="theme-color" content="#7952b3">
      

    <style>
        body{
           
            background: linear-gradient(-45deg, #2196F3 50%, #EEEEEE 50%);
    background-repeat: repeat;

  /* Center and scale the image nicely */
  
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

         .btn {
            text-decoration: none;
            background: none;
            border-radius: 30px;
            margin-top: 15px;
            margin-right: 15px;
            border: 1px solid #3498db;
            padding:10px 20px;
            font-family: sans-serif;
            font-size: 20px;
            cursor: pointer;
            transition: 0.8s;
            color:#3498db;
        }
          .btn:hover{
            color: #fff;
             background-color: #3498db;

        }
        .movie-img
        {
          height: 350px;
          box-shadow: -4px 4px 5px 0 ;
        }
        .div1{
            width:400px;
            height:200px;
            border-radius: 50%;
            position: relative;
            top: 10%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .abohmeed{
            background-color: #FFF;
    border-radius: 25px;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    padding: 40px;
    z-index: 0;
        }


    </style>


    <!-- Custom styles for this template -->
    <link href="bootstrap/css/homepage.css" rel="stylesheet">
      <link href="bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>
  <body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" >
    <div class="container-fluid">
      <a class="navbar-brand" href="#">HDMOVIE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Sign out</a>
          </li>
             <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Homepage1.php">Home Page</a>
          </li>
          
          
        </ul>
        <form class="d-flex" method="post" action="search1.php">
       <input  type="search" style="margin-left:85%;" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success" href="search1.php" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>




  <div class="div1">
<?php
session_start();

$name="";
$resultid="";
$resulttmdb="";
$title="";
$tmdb="";
$genres="";
$rating="";
   
      
if(empty($_POST["search"])){
     header('Location:search.php?error=Please fill the Required Parameters'); 
}else{

    
    $name=$_POST['search'];
    
    $con = mysqli_connect("localhost","root","","recommenderdb");
    if(mysqli_connect_errno())
        die("Cannot connect to DB".mysqli_connect_error());
    
    
     $resultid = mysqli_query($con,"SELECT * FROM movies WHERE title LIKE '$name%'");
        if($row = $resultid->fetch_assoc()) {
    $id= $row['movieId'];
}
    if($row = $resultid->fetch_assoc()) {
    $title= $row['title'];
}
    if($row = $resultid->fetch_assoc()) {
    $genres= $row['genres'];
}
   
     $resulttmdb= mysqli_query($con, "SELECT tmdbId FROM links WHERE movieId='$id'");
   
   

     if($row = $resulttmdb->fetch_assoc()) {
    $tmdb= $row['tmdbId'];
}
    
  $_SESSION['id']= $id; 

$key='922149881d44c7d254a2690c9b838ff0';

$json = file_get_contents("https://api.themoviedb.org/3/movie/$tmdb?api_key=$key");

$result = json_decode($json, true);

$poster_path = $result["poster_path"];
 $overview=  $result["overview"];
    $rating=  $result["vote_average"];
 $rating= $rating/2;
   $original_title =$result["original_title"];
    $release_date=$result["release_date"];
  
    
echo "<div class='container-fluid' style='margin-top:25%;'>
 

  

<h1 style='color:black;'>$original_title </h1><h1 style='color:black;'>$release_date</h1>
<h3>tmdb Rating:  $rating</h3>
</div>
<img src=\"https://image.tmdb.org/t/p/w300$poster_path\"><br><br>
<div class='abohmeed' role='alert'><p>$overview</p></div><br> 
   
 

   <form method='post' action='rating.php' >
   <p> Rating :<input type='number' min='1' max='5' step='1' value='1' name='rating'> </p>
   <p>Comments :<input  type='text' style='padding-bottom: 30px; width: 270px;' placeholder='Write any comments' name='comment'></span><div class='form-group col-md-12'>
   <label class='form-control-label'>Email</label> <input name='email' type='email' ></div>
   <p><input class='btn btn-secondary' type='submit' name='mcomment' id='add' value='submit'></p>
      </form> ";
    
    
   echo "<div class='container-fluid' style='margin-top:25%;'>";
    $query3="SELECT * FROM ratings WHERE movieId='$id'";
    $resultcomment=mysqli_query($con, $query3);
    
    

    if(mysqli_num_rows($resultcomment)>0 ){
          while($row =$resultcomment ->fetch_assoc()){
            echo "<div class='alert alert-secondary' role='alert'><p>". $_SESSION['email'] ." Rating:".$row["rating"]."</p>
            <p>".$row['comment']."</p>
            <p>------------------</p></div>" ; 
              
           
          }
      }else{
             echo"<p>No comments</p></div>";
          }
    echo"</div>";
    
mysqli_close($con);
}
?>
      
      </div>
      
      

  <!-- FOOTER -->
  


    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>


  </body>
</html>