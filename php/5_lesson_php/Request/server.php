<?php 

/*
echo $_SERVER['REQUEST_METHOD'];

echo  "<br>";

echo "<pre>";

print_r($_POST);
*/

$username = $_POST['username']; 
$password = $_POST['password']; 

$admins = ['ahmed' , 'kareem' , 'ali'];

if (in_array($username, $admins)) {

	echo "welcome $username";

} else {


	header("location: form.php");

}