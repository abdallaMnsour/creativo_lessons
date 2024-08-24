<?php 

	session_start();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post" action="server.php">
		<input name="username" type="text" placeholder="username">
		<input name="password" type="password" placeholder="password">
		<button type="submit">login</button>
	</form>

	<div>
		<?php 

			if (isset($_SESSION['error'])) {

				echo $_SESSION['error'];
				unset($_SESSION['error']);


			}		

			print_r($_SESSION);


		 ?>
	</div>

</body>
</html>
