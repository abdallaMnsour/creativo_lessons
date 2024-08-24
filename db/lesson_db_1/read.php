<?php
echo "<pre>";

// read 

$conn = new mysqli('localhost', 'root', '');

$conn->query("USE focus_test");

$select = "SELECT * FROM users";

$query = $conn->query($select);

// fetch data to php 
// $doctor = $query -> fetch_assoc();


while ($doctor = $query->fetch_assoc()) {

	// print_r($doctor);

	echo "<p>{$doctor['username']}</p>";


	print_r($doctor);
}
