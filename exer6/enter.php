<?php
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$db         = "test";

	$conn = mysqli_connect($servername, $username, $password, $db);
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$name   = $_POST["name"];
	$email  = $_POST["email"];
	$mobile = $_POST["mobile"];
	$pass   = $_POST["pass"];

	$queryxyz = "insert into `loginInfo` (`name`, `email`, `mobile`, `password`) values ('$name', '$email', $mobile, '$pass')";
	$donekya  = mysqli_query($conn, $queryxyz);
	if ($donekya){
		echo "done";
	}
	else{
		echo "error";
	}

	mysqli_close($conn);

?>