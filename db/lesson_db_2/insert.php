<?php 


// echo "<pre>";
// print_r($_POST);

// die();

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$dep_id = $_POST['dep'];



$conn = new mysqli('localhost' , 'root' , '' , 'focus');

$insert = "INSERT INTO doctors

			 (username , password , email , mobile , dep_id ) 

			 VALUES 

			 ('$username' , '$password' , 'email' , '$mobile' , '$dep_id')";

$query = $conn -> query($insert);

if (!$query) {

	echo $conn -> error ;

}  else {

	header("location: table.php");

}

