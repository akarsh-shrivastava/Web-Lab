<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php
			if(isset($_COOKIE["name"])){
				echo "welcome ".$_COOKIE["name"];
			}
			else{
				?>
				<form action="submit.php" method="POST">
					<table>
						<tr>
							<td>name</td>
							<td><input type="text" name="name"></td>
						</tr>
						<tr>
							<td>email</td>
							<td><input type="email" name="email"></td>
						</tr>
						<tr>
							<td>password</td>
							<td><input type="password" name="password"></td>
						</tr>
						<tr>
							<td><input type="submit"></td>
						</tr>
					</table>
				</form>
				<?php
			}
		?>
	</body>
</html>