<?php
session_start();
if(!isset($_SESSION['email'])){
     header('Location:index.php?error=Please Sign in!');
}

?>
  

<!doctype html>
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
        .searchh{
            border: none;
            height: 100%;
            width:100%;
            padding: 0px 5px;
            border-radius: 50px;
            font-size: 18px;
            font-family: "Nunito";
            color: #424242;
            font-weight: 500;
            
        }
        .searchh:focus{
            outline: none;
            border: blue;
           transition: 0.8s;
            
        }


    </style>


    <!-- Custom styles for this template -->
    <link href="bootstrap/css/homepage.css" rel="stylesheet">
      <link href="bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>
  <body>

<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid" >
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
            <a class="nav-link active" aria-current="page" href="request.php">Requests</a>
          </li>
            
          
        </ul>
        <form class="d-flex" method="post" action="search1.php">
       <input  type="search" style="margin-left:85%;" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success searchh" href="search1.php" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

      <br>
    <br>


      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><button class="btn btn-lg btn-primary" href="#">mE</button></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>

    <div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
           
    <div class="row">



            <button type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#demo1" >Add Movie or TvSeries &raquo;</button>

<div id="demo1" class="collapse" style="margin-top: 20px;">
     <?php
      if(isset($_GET['error'])){
          echo "<div class='alert alert-danger' role='alert'>".$_GET['error']."</div>";
      }
      if(isset($_GET['message'])){
          echo "<div class='alert alert-success' role='alert'>".$_GET['message']."</div>";
           }
      ?>
   <form method="POST" action="checkadd1.php">
       
    Movie name or Tv series Name :<input type="text" placeholder="Name (Release date) " style="width: 230px;" name="mname"> 
    
    <span style="margin-left: 20px;">Poster :<input type="text" placeholder="Enter the Poster Picture link " style="width: 230px;" name="poster">  </span><p>
</p>
Select Genre:  Action <input type="radio" style="margin: left 5px;" value="Action" name="mgenre">
 Comedy <input type="radio" style="margin: left 5px;" value="Comedy" name="mgenre" > 
 SCI-FI <input type="radio" style="margin: left 5px;" value="Scifi" name="mgenre">
Horror <input type="radio" style="margin: left 5px;" value="Horror" name="mgenre">
Drama <input type="radio" style="margin: left 5px;" value="Drama" name="mgenre">
    <span style="margin-left: 20px;"> Rating :<input type="Number" min="1" max="5" step="1" value="1" name="rating"> </span>
    <span>Comments : <input  type="text" style="padding-bottom: 30px; width: 270px;" placeholder="Write any comments" name="comments"></span> 
   <p style="margin-left: 20px; margin-top: 5x;"><input type="submit" name="madd" id="add" value="ADD"></p> 
   </form>
</div>
                 
          
          
          
          
        



      <!-- /.col-lg-4 -->
      <div class="col-lg-4">

      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">

      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Horror</h2>
        <p class="lead">Horror films additionally aim to evoke viewers' nightmares, fears, revulsions and terror of the unknown or the macabre.</p>
      </div>
      <div class="col-md-5">
          <img src="IMAGES/Horror.jpg" class="movie-img">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Comedy</h2>
        <p class="lead">A comedy film is a category of film in which the main emphasis is on humor. These films are designed to make the audience laugh through amusement and most often work by exaggerating characteristics for humorous effect.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="IMAGES/Comedy.jpg" class="movie-img" >
      <!--  <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>-->

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Action</h2>
        <p class="lead">Action film is a film genre in which the protagonist or protagonists are thrust into a series of events that typically include violence, extended fighting, physical feats, rescues and frantic chases.</p>
      </div>
      <div class="col-md-5">
            <img src="IMAGES/Action.jpg" class="movie-img">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 HDMovie, Inc.</p>
  </footer>
</main>


    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>


  </body>
</html>
