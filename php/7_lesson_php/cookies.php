<?php 


// echo date("Y - M - D h:i:s a");

echo "<br>";

// $currentTime =  time(); // created_at

// $targetTime = time() + 3600 ; // expiration


setcookie('name' , 'kareem' , time() + 60 * 60 );

if( count($_COOKIE) > 0 ) {

	echo 'cookie enabled';

} else {

	echo 'cookie disabled';

}

echo "<pre>";
print_r($_COOKIE);


