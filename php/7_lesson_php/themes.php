
<?php 

	// first time -- default color
	$mainColor = 'white';
	// cookies 
	if (isset($_COOKIE['color'])) {
		$mainColor = $_COOKIE['color'];
	}
	// form submition
 	if ($_SERVER['REQUEST_METHOD'] == "POST"){
 		$color =  $_POST['color'];
 		setcookie('color' , $color , time() + 3600);
 	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body style="background: <?= $mainColor ?>;">
	
	<form method="post">
		<input type="color" name="color">
		<button type="submit">click</button>
	</form>

</body>
</html>