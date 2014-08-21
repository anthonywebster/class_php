<?php  
session_start();

define("NAME","anthony");
define("PASS","123");

if ($_POST) {
	$name = $_POST['name'];
	$pass = $_POST['pass'];

	if ($name === NAME && $pass === PASS) {
		$_SESSION['username'] = $name;
		header("location:about.php");
		exit();
	}
}
?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<li>
			<label for="">Name:</label>
			<input type="text" name="name">
		</li>

		<li>
			<label for="">Pass</label>
			<input type="text" name="pass">
		</li>

		<input type="submit">
	</form>
</body>
</html>