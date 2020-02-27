<?php
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$image = $_FILES['image']['name'];
		$imageTmp = $_FILES['image']['tmp_name'];
		move_uploaded_file($imageTmp, '../images/'.$image);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Profile</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>
	<div class="main" style="position: absolute; left: 50%; top: 40%; transform: translate(-50%,-50%);">
	    <img src="../images/<?=$image;?>" alt="" style="border-radius: 50%; height: 300px; width: 300px;">
		<div class="main-block" style="text-align: center;">
	        <h1><?=$name;?></h1>
	        <h1><?=$username;?></h1>
	        <br> 
	        <h1><?=$email;?></h1>
	    </div>
	</div>
</body>
</html>