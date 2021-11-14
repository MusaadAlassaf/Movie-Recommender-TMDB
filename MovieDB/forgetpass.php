<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Sign in </title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->

<meta name="theme-color" content="#7952b3">


    <style>
         body{
            background: linear-gradient(-45deg, #2196F3 50%, #EEEEEE 50%);
    background-repeat: repeat;
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
    </style>

    
    <!-- Custom styles for this template -->
    <link href="bootstrap/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="ressetPW.php">
      <?php
      if(isset($_GET['error'])){
          echo "<div class='alert alert-danger' role='alert'>".$_GET['error']."</div>";
      }
      if(isset($_GET['message'])){
          echo "<div class='alert alert-success' role='alert'>".$_GET['message']."</div>";
           }
      ?>
    <img class="mb-4" src="IMAGES/PikPng.com_movie-clapper-png_3037906.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Reset Password</h1>
   <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
      <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd1">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pwd2">
                    <label for="floatingPassword">Confirm Password</label>
                </div>
    

   
    <button class="w-100 btn btn-lg btn-primary" type="submit">submit</button>
    <p class="mt-5 mb-3 text-muted">&copy;HDMOVIES 2021</p>
  </form>
</main>


    
  </body>
</html>