<?php
	$name = $_POST["name"];
	$pass = $_POST["pass"];

	setcookie("name", $name, time()+3600*24);
	setcookie("pass", $pass, time()+3600*24);

	echo "success<br>";

	echo "<br> username = ".$_COOKIE["name"];
?>