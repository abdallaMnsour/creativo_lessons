<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 

		// echo "<pre>";
		// print_r($_GET);

		// echo $_GET['name'];

		// var_dump(
		// 	isset($_GET['id'])
		// );

		if (isset($_GET['id'])) {

			$id = $_GET['id'];

			echo "<img src='images/$id.jpg'>";

		} else {

			echo "no images found";

		}
		


	?>
</body>
</html>