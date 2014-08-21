<?php  
session_start();

if (isset($_SESSION['username'])) {
	echo $_SESSION['username'];
}

?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
</body>
</html>