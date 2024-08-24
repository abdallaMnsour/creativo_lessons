<?php 
session_start();


$username = $_POST['username']; 
$password = $_POST['password']; 

$admins = ['ahmed' , 'kareem' , 'ali'];

if (in_array($username, $admins)) {

	$_SESSION['login'] = $username ;
	header("location: index.php");

} else {

	$_SESSION['error'] = 'wrong credentials';
	header("location: login.php");

}