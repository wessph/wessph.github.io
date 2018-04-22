<?php
session_start();	
session_destroy();
header("Location: index.html"); exit;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="logout.php">SAIR</a>
</body>
</html>