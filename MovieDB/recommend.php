
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
            <a class="nav-link active" aria-current="page" href="Homepage.php">Home Page</a>
          </li>
          
          
        </ul>
        <form class="d-flex" method="post" action="search.php">
       <input  type="search" style="margin-left:85%;" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success" href="search.php" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<div class="div1">
    <form action="checkrec.php" method="post">
Release Date :<input type="number" min="1900" max="2021" step="1" value="2021" name="rdate" ><br>
Select Genre:  Action <input type="radio" style="margin: left 5px;" value="Action" name="mgenre">
 Comedy <input type="radio" style="margin: left 5px;" value="Comedy" name="mgenre" > 
 Fantasy <input type="radio" style="margin: left 5px;" value="Fantasy" name="mgenre">
Horror <input type="radio" style="margin: left 5px;" value="Horror" name="mgenre">
Drama <input type="radio" style="margin: left 5px;" value="Drama" name="mgenre">
    List size :<input type="number" min="1" max="10" step="1" value="1" name="size"> 
        <input type="submit" name="madd" id="add" value="ADD">
        
     </form>
   
    
    
      </div>
      
      

  <!-- FOOTER -->
  


    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>


  </body>
</html>