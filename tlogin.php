<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "libx";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$user=$_POST['user_id'];
$pass=$_POST['password'];



$sql = mysqli_query($conn,"SELECT user_id,password FROM tlogin WHERE user_id='$user' and password='$pass'");
$user_id = mysqli_fetch_assoc($sql);
if($user==$user_id['user_id'])
{
	$_SESSION["user_id"]=$user;
	header('Location:admin.html');
}
else
	echo'error';

?>