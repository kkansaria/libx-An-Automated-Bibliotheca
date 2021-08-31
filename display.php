<html>
<head>
	<title>

	</title>
</head>

<body>

	<?
	$conn=mysqli_connect('localhost','root',"");
		mysqli_select_db($conn,"test");
		$query="select * from demo";
		$query1 = mysqli_query($conn,$query);
		while($ros=mysqli_fetch_array($query1))
		{
			$path=$ros['path'];
			$id=$ros['id'];
			echo '<img src="'.$path.'"width="200px" height="200px"/>';

		}
		?>
		<a href="download.php?id=<? echo $id ?>" > download</a>
		</body>
		</html>