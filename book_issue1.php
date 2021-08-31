<?php
session_start();


echo "<br>";
echo "<br>";
echo "<br>";

echo "welcome"." ".$_SESSION["userid"];
echo "<br>"; 
?>
<a href="logout.php">logout</a>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
    <html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  

  
  <style>
  @import url(https://fonts.googleapis.com/css?family=Open+Sans);
body{
  background-color: #020202;
  font-family: 'Open Sans', sans-serif;
}

.search {
  width: 100%;
  position: relative
}

.searchTerm {
  float: left;
  width: 100%;
  border: 3px solid #00B4CC;
  padding: 5px;
  height: 35px;
  border-radius: 5px;
  outline: none;
  color: #9DBFAF;
}

.searchTerm:focus{
  color: #00B4CC;
}

.card {
  background: #fff;
  border-radius: 10px;
  display: inline-block;
  height: 200px;
  margin: 1rem;
  position: relative;
  width: 1500px;
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}


.searchButton {
  position: absolute;  
  right: -50px;
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change! - SEARCH BAR LOCATION*/
.wrap{
  width: 90%;
  position: absolute;
  top: 2%;
  left: 46%;
  transform: translate(-50%, -50%);
}

.col-sm-6{
	

}

.slideshow{
    position: fixed;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: -1;
    list-style: none;
    margin: 0;
    padding: 0;
}

.slideshow li{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    opacity: 0;
    z-index: -1;
    animation: imageAnimation 50s linear infinite;

}
/
.slideshow li:nth-child(1) { 
    background-image: url(http://www.authenticgrowth.com/wp-content/uploads/2016/02/Library.jpg) 
  }
  .slideshow li:nth-child(2) { 
    background-image: url(http://www.textilemuseum.ca/getmedia/4fbf4357-c260-4727-a9e9-a388e5025fbb/Library-11.jpg.aspx);
    animation-delay: 10s; 
  }
  .slideshow li:nth-child(3) { 
    background-image: url(https://upload.wikimedia.org/wikipedia/commons/3/33/Firestone_Library_Princeton_shelves.jpg);
    animation-delay: 20s; 
  }
  .slideshow li:nth-child(4) { 
    background-image: url(http://www.kathir.ac.in/wp-content/uploads/2016/04/library-banner.jpg);
    animation-delay: 30s; 
  }
  .slideshow li:nth-child(5) { 
    background-image: url(https://www.nar.realtor/sites/default/files/images/mainstage/library-ebooks.jpg);
    animation-delay: 40s; 
  }
@keyframes imageAnimation { 
    0% { 
      opacity: 0; 
      animation-timing-function: ease-in;
    }
    10% {
      opacity: 1;
      animation-timing-function: ease-out;
    }
    20% {
      opacity: 1
    }
    30% {
      opacity: 0
    }
  }
  .no-cssanimations .slideshow li {
  opacity: 1;
}
/*FOR DROPDOWN */
</style>
</head>
<body>
  <ul class="slideshow">
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>
	<div class="container-fluid">
		<div class="well">
      <form action="check4.php" method="POST">
       
   &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp 

   <?php

$id=$_GET['id'];
echo "BookId :".$id;
error_reporting(0);
?>

<input type="hidden" name="bookid" value="<?=$id;?>" >
		<p> <center><h4>ISSUE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
      <input type="date" id="date1" name="date1"/> 
      </h4> </center> </p>
     
<center><input type="submit" name="submit" value="ISSUE"></center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<a href="returnb.php"><input type="button" name="return" value="Return"></a>
</form>

		<div class="wrap">
   <div class="search">
<form action="searching.php" method="POST">
      <input type="text" name="query" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit"  class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </form>
   </div>
   </div>
   </div>

   <div class="row">
    <div class="card card-1">
    <div class="col-lg-6" style="background-color:#;"> MOST RECENTLY ISSUED BOOKS LIST
    	<div class="content">
    		 <?php
$servername = "localhost";
$username = "id7097565_abc";
$password = "root123";
$dbname = "id7097565_mydb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="SELECT * FROM bookr ORDER BY datepicker ASC LIMIT 3";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<br>";
    printf ("%s \n",$row[2]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($conn);
?>
    	</div>
    </div>
  </div>
  <div class="card card-1">
    <div class="col-lg-6" style="background-color:;">RECOMMENDED BOOKS</div>

    <div class="content">
      <?php
$servername = "localhost";
$username = "id7097565_abc";
$password = "root123";
$dbname = "id7097565_mydb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="SELECT * FROM bookr ORDER BY rating DESC ";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<br>";
    printf ("%s \n",$row[2]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($conn);
?>
    </div>
   </div>
 

<div class="card card-1">
   <div class="row">
   
    <div class="col-lg-12" style="background-color:;">NEW ARRIALS IN LIBRARY</div>
   </div>

   <div class="content">

    <?php
$servername = "localhost";
$username = "id7097565_abc";
$password = "root123";
$dbname = "id7097565_mydb";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql="SELECT * FROM bookr ORDER BY datepicker DESC ";

if ($result=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      echo "<br>";
    printf ("%s \n",$row[2]);
    }
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($conn);
?>
   </div>
</div>
</div>