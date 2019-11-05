<?php
	$name  = $_POST["name"];
	$email = $_POST["email"];
	$pass  = $_POST["password"];

	setcookie("name", $name, time()+60);
	setcookie("email", $email, time()+60);
	setcookie("pass", $pass, time()+60);

	header("Location: index.php");

?>