
<?php
session_start();


echo "<br>";
echo "<br>";
echo "<br>";
if (isset($_SESSION["userid"])){
echo "welcome"." ".$_SESSION["userid"];
echo "<br>"; 
}
?>

<a href="logout.php">logout</a>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>pages</title>
    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link href="css1/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
    <link href="css1/slidefolio.css" rel="stylesheet">
  <!-- Font Awesome -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,600,700");

:root {
    /* Base font size */
    font-size: 10px;

    /* Full grid area variable */
    --fullGrid: 1 / 1 / -1 / -1;
}

body {
    font-family: "Montserrat", Arial, sans-serif;
    background-color: #fcfcfc;
}

header {
    /* Create grid spanning viewport width & height */
    display: grid;
    grid-template-rows: 100vh;
    overflow: hidden;
    box-shadow: 0 0.5em 0.5em rgba(0, 0, 0, 0.7);
}

.video-bg {
    /* Span the full grid */
    grid-area: var(--fullGrid);

    /* Re-size video to cover full screen while maintaining aspect ratio */
    width: 100%;
    height: 100%;
    object-fit: cover;

    /* Display video below overlay */
    z-index: -1;
}

.video-bg::-webkit-media-controls {
    display: none !important;
}

.video-overlay {
    /* Span the full grid */
    grid-area: var(--fullGrid);

    /* Center Content */
    display: grid;
    justify-content: center;
    align-content: center;
    text-align: center;

    /* Semi-transparent background */
    background-color: rgba(0, 0, 0, 0.55);
}

h1 {
    font-size: calc(1.8em + 2.5vw);
    font-weight: 700;
    line-height: 1.5;
    letter-spacing: 0.02em;
    color: #fff;
    text-shadow: 0.05em 0.05em 0.05em rgba(0, 0, 0, 0.4);
}

main {
    padding: 5em 2em;
    max-width: 94em;
    margin: 0 auto;
}

h2 {
    font-size: calc(3em + 0.2vw);
    font-weight: 600;
    text-align: center;
    margin: 1.2em 0;
    color: #111;
}

p {
    font-size: calc(2em + 0.2vw);
    font-weight: 400;
    line-height: 2;
    color: #222;
}

::-moz-selection {
    background-color: rgba(0, 0, 0, 0.75);
    color: #fff;
}

::selection {
    background-color: rgba(0, 0, 0, 0.75);
    color: #fff;
}





.box{width:320px; height:250px; border:1px solid #000; border-radius:2px; float:left; margin:20px 30px;  }
.box img{width:320px; height:250px;}
.box .overlay{width:320px; height:250px; background:#fff; margin:-250px 0px 0px 0px; opacity:0.5; }
.box a{padding:2px 7px; border:1px solid #000; text-decoration:none; font-family:sans-serif; font-size:14px; margin:-180px 0px 0px 15px; display:inline-block; opacity:0; transition:all 0.5s ease-in-out;    cursor: pointer;/* z-index: 10000; */position: absolute;}



.box .overlay:hover{opacity:0.1; transition:all 0.5s ease-in-out; width:300px; margin-left:50px; float:right; }
.box:hover{box-shadow:0px 0px 10px #6A6A6A; border:1px solid #00DFDF;transition:all 0.5s ease-in-out;}
.box:hover a{opacity:1; background:#FFFFFF; color:#000000; margin:-60px 0px 10px 25px;  border-radius:1px; }
.box a:hover{border:5px solid #00DFDF;transition:all 0.5s ease-in-out;   }





  </style>
  </head>
  <body>
    <!-- Header Area -->
    <div class="container-fluid">
    <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php"><font color="white"><b>Libx AN Automated Bibliotheca</b></font></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php"> <font color="white"><b>HOME</b></font></a></li>
        <li><a href="book_issue.php"><font color="white"> <b>BOOKS</b></font></a></li>
        <li><a href="pages.php"><font color="white"> <b>PAPERS</b></font></a></li>
            <a href="
    register.php"><button class="btn btn-danger navbar-btn">REGISTER</button></a>
 <a href="
    login.php"><button class="btn btn-danger navbar-btn">LOGIN</button></a>
    <a href="
    admin.php"><button class="btn btn-danger navbar-btn">Admin</button></a>
 

      </ul>
    
    </div>
    
  </div>
</nav>
</div>
    <!-- Portfolio --><header>

    <!-- Video from coverr.co -->
    <video class="video-bg" autoplay muted loop>
        <source src="http://www.georgewpark.com/video/blurred-street.mp4" type="video/mp4" />
        <source src="http://www.georgewpark.com/video/blurred-street.webm" type="video/webm" />
    </video>

    <div class="video-overlay">
        <h1>
    <div class="container">
    <div class="main">
        <div class="box">
            <img src="http://blogs.lse.ac.uk/lsereviewofbooks/files/2016/02/Books-for-Survey.jpg" />
                <div class="overlay">
                </div>
            <a href="vpapers.html"><center>VIT PAPERS</center></a>
            
            
        </div>
        
        <div class="box">
            <img src="https://i1.wp.com/iluminet.com/press/wp-content/uploads/2015/08/IEEE_1.jpg?resize=729%2C365" href="vieee.html"/>
                <div class="overlay">
                </div>
            <a href="vieee.html">IEEE PAPERS</a>
        </div>
        
        <div class="box">
            <img src="https://www.ecampusnews.com/files/2011/08/videoCamera.jpg" />
                <div class="overlay">
                </div>
            <a href="http://ocw.vit.edu.in/login/#/"><center>VIDEO LECTURE</center></a>
        </div>
        
    </h1>
    </div>

</header>
    <!-- /Contact -->
  
   
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    
  </body>

</html>