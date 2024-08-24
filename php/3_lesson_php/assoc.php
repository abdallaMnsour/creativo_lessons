<?php 
echo "<pre>";


$cars = [

	'germany' => 'bmw' ,
	'italy'	=> 'fiat' ,
	'usa' => 'dodge' ,
	'france' => 'renault'

];

// $cars['france'] = 'peugeot';

// $cars['egypt'] = 'Nasr';

// print_r($cars);

// echo $cars['italy'];

// $values = array_values($cars) ;

// for ($i = 0; $i <  count($values); ++$i) {
// 		echo $values[$i]  . "<br>";
// }	


$cars = [

	'germany' => 'bmw' ,
	'italy'	=> 'fiat' ,
	'usa' => 'dodge' ,
	'france' => 'renault'

];

 // foreach ($cars as $key =>  $car) {

 // 	echo $key . " --- " . $car  . "<br>";

 // }

#-------------------------

 // multidimensional array

 $cars = [

	 ['bmw' , 'mercedes'] ,
	 ['fiat' , 'ferrari'] ,
	 ['dodge' , 'chevrolet'] ,
	 ['renault' , 'peugeot'] ,

];

// print_r($cars);
// echo $cars[2][0];


#-----------------------------

 $cars = [

	 ['bmw' , 'mercedes'] ,
	 ['fiat' , 'ferrari'] ,
	 ['dodge' , 'chevrolet' , 'ford'] ,
	 ['renault' , 'peugeot'] ,

];

foreach ($cars as $key => $car) {

	foreach ($car as $newCar) {

		echo $newCar  . "<br>";
	}

}

// for ($i = 0; $i < count($cars) ; $i++) {
// 	for ($m = 0; $m <  count($cars[$i]) ; $m++) {
// 		echo $cars[$i][$m]  . "<br>";		
// 	}
// }


// return string without x
$str = 'wexlcxomxxxe xto pxxxhxp';
echo str_replace('x', '', $str);
