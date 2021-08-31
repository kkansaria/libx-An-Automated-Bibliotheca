<html>
<head>
<title>
	</title>
</head>
<body>
	<form name="form1" method="post" action="" enctype="multipart/form-data"/>
	upload file <input type="file" name="f"/></br>
	name:<input type="text" name="t" />
	<br>
	<input type="submit" name="submit" value="submit"/>
</form>
</body>

<?php
$filename =$_POST['t'];
$conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn,"test");
if(isset($_POST["submit1"]))
{
	$fnm = $_FILES["f"]["name"];
	$dst = "./images/".$fnm;
	move_uploaded_file ($_FILES["f"]["tmp_name"],$dst);
	$query ="insert into demo (filename,name,path) values ('$filename','$fnm','$dst')";
	$query1=mysqli_query($query);
	if($query1==true)
	{
		echo "insert data";
	}
}
?>
</html>