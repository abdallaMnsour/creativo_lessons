<?php 



// function sum( $num1 , $num2 = 10 ) { // parameter

// 	return  $num1 + $num2 ; 

// }


// echo sum( 1 , 5 ) ; // argument

// var_dump(sum(1,2));


#----------------------------------


// global scope
$z = 10 ; 



function sum ($num1 , $num2 , $num3) {

	// local scope
	// global $z ;
	return $num1 + $num2 + $num3 ;

}



// global scope
echo sum(1, 5 , $z); // 6




 // 14 % 2 



















