<?php
echo "<pre>";

// C R U D 
// Create 

// connection database 
// object oriented 

$conn = new mysqli('localhost', 'root', '');

$createDB = "CREATE DATABASE if not exists focus_test COLLATE utf8_general_ci";

$result = $conn->query($createDB);

// use database name

$conn->query("use focus_test");

// create table 

$createTable = "CREATE TABLE if not exists users (

	id int PRIMARY KEY AUTO_INCREMENT,
	username varchar(255),
	password varchar(255) 

)";

$resultTable = $conn->query($createTable);

var_dump($resultTable);
