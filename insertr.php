<?php

$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'libx'))
{
	echo 'darabase not selected';
}
$bookid=$_POST['bookid'];
$userid=$_POST['userid'];
$year=$_POST['year'];
	$bookname=$_POST['bookname'];
$datepicker=$_POST['datepicker'];
$rating=$_POST['rating'];
$name = $_POST['name'];
$email_id =$_POST['email'];
$mobile =$_POST['mobile_no'];
$feedback_id =$_POST['feedback'];
$sql= "INSERT INTO bookr (bookid,userid,year,bookname,datepicker,rating,name,email,mobile_no,feedback) VALUES ('$bookid','$userid','$year','$bookname','$datepicker','$rating','$name','$email_id','$mobile','$feedback_id')";

if(!mysqli_query($con,$sql))
{

	echo 'not inserted';

}
else
{
	echo 'inserted';
}

?>
