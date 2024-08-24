<?php 



$fullString = 'wxexlcxomxxxe txo xxpxhxp';

// // var_dump(str_replace('x', '', $str));

function replace($search , $replace , $str) {

	$string = '' ;

	for ($i = 0; $i < strlen($str) ; ++$i) {

		if ($str[$i] !== $search) {
			$string .= $str[$i];
		} else {
			$string .= $replace ;
		}

	}

	return $string ;

}




echo replace('x' , '' , $fullString);




 $cars = [

	 ['bmw' , 'mercedes'] ,
	 ['fiat' , 'ferrari'] ,
	 ['dodge' , 'chevrolet'] ,
	 ['renault' , 'peugeot'] ,

];

echo "<table border=1 >";
foreach($cars as $car) {

	echo "<tr>";

		foreach ($car as $newCar) {

			echo "<td>$newCar</td>";

		}

	echo "</tr>";

}