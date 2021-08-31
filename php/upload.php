<?php
if(isset($_REQUEST["submit"]))
{
$file=$_FILES["file"]["name"];
$tmp_name=$_FILES["file"]["tmp_name"];
$path="upload/".$file;
$file1=explode(".",$file);
$ext=$file1[1];
$allowed=array("jpg","png","gif","pdf","txt");
if(in_array($ext,$allowed))
{
	move_uploaded_file($tmp_name,$path);
}
}
?>

<form enctype="multipart/form-data" method="post"> 

	file upload:<input type="file" name="file">
	<input type="submit" name="submit" value="upload">

</form>