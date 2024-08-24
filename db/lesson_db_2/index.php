<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<form method="post" action="insert.php">
		<input name="username" type="text" placeholder="username">
		<input name="password" type="password" placeholder="password">
		<input name="email" type="text" placeholder="email">
		<input name="mobile" type="text" placeholder="mobile">
		<select name="dep">
		<?php 
		$conn = new mysqli('localhost' , 'root' , '' , 'focus');
		$selectDep = "SELECT * FROM departments";
		$queryDep = $conn -> query($selectDep);
		foreach ($queryDep as $dep) {
		?>
			<option value="<?= $dep['id'] ?>"><?= $dep['name'] ?></option>
		<?php } ?>
		</select>
		<button type="submit">Insert</button>
	</form>
</body>
</html>