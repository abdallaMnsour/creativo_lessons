<?php 

$conn = new mysqli('localhost' , 'root' , '' , 'focus');


$update = "UPDATE doctors SET 
			
			username = 'ayman' ,
			password = '123213',
			email = 'ayman@i.com'

		WHERE username = 'islam'

";

$query  = $conn -> query($update);

if (!$query) echo $conn -> error ;