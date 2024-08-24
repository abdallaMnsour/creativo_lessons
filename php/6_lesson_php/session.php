<?php 

session_start();


$_SESSION['name'] = 'kareem';


echo "<pre>";
print_r($_SESSION);
