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
    background-repeat: repeat
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
            width=200px;
            height=200px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%)
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
       <input class="searchh" type="search" style="margin-left:85%;" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-success" href="search1.php" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>
      
      <div class="container-sm">
        <form method="post">  
      <?php
      $conn = mysqli_connect("localhost","root","","recommenderdb");
  
      if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
      $query = "SELECT * from movierequest";
       $result = mysqli_query($conn,$query);
            
      if(mysqli_num_rows($result)>0 ){
          while($row =$result ->fetch_assoc()){
            echo "<p>". $row["title"] ." ".$row["genres"]."</p>" ; 
             $img= $row['poster'];
            echo"<img src='$img' style='width:200px;'> ";
                   
//      echo "<a class='btn btn-outline-success'  type='submit' name='accept'>Accept</a>";
//        echo "<a class='btn btn-outline-success' type='submit' name'decline'>Decline</a>";
              
    echo "<a href='Accept.php?id=" . $row['title'] . "' class='btn btn-outline-success' >Accept</a>";
      echo "<a href='Decline.php?id=" . $row['title'] . "' class='btn btn-outline-success'  >Decline</a>";
//              
//              $link ='<a href="Accept.php?id=' . $row['title'] . '" class='btn btn-outline-success' >Accept</a>';
//                    $linkdel ='<a href="Decline.php?id=' . $row['title'] . '" class='btn btn-outline-success'  >Decline</a>'
//      echo $link ;
//        echo $linkdel ;          
          }
      }else{
             echo "<h1>No requests</h1>";
          }
            
      ?>
         </form> 
          </div>
    </body>