<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" href="main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="test">
		<form action="profile.php" method="POST" enctype="multipart/form-data">
			<input class="input" type="text" name="name" placeholder="name">
			<br><br>
			<input class="input" type="text" name="username" placeholder="username">
			<br><br>
			<input class="input" type="email" name="email" placeholder="email">
			<br><br>
			<input class="input" type="password" name="pass" placeholder="password">
			<br><br>
			<input type="file" name="image">
			<br><br>
			<input class="submit" type="submit" name="submit" value="Submit">
		</form>
	</div>
	
</body>
</html>
