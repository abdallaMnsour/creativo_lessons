<?php 

$conn = new mysqli('localhost' , 'root' , '' , 'focus');

$del = "DELETE FROM doctors WHERE id = 3";

if (!$conn -> query($del)) {

	echo $conn -> error ;

}

