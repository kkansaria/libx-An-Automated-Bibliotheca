<?
$conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn,"test");
$id=$_GET['id'];
$query="select * from demo where id='$id' ";
$query1=mysqli_query($conn,$query);
while($ros=mysqli_fetch_array($query1))
{
	$path=$ros['path'];
	header('content-Disposition:attachment; filename='.$path.'');
header('content-Disposition:application/octent-strem');
header('content-length='.filesize($path));
readfile($path);
}
?>