<?php
session_start();
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

$user=$_POST['user_id'];
$pass=$_POST['password'];
$userid=$_POST['userid'];



$sql = mysqli_query($conn,"SELECT user_id,password,userid FROM register WHERE user_id='$user' and password='$pass' and userid='$userid'");
$user_id = mysqli_fetch_assoc($sql);
if($user==$user_id['user_id'])
{
	$_SESSION["userid"]=$userid;
	header('Location:book_issue.php');
}
else
	echo'error';

?>





