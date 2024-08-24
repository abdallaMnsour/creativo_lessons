<?php 

/*
$names = ['ahmed','islam','eman' ,'mostafa' , 'emad'];

function searchElement($target , $array) {

	for($i = 0 ; $i < count($array) ; $i++) {

		if ($array[$i] == $target) {

			return true ;

		} 
	}


	return false ;

}

$x = searchElement('emadddd' , $names); // return boolean

var_dump($x);

*/

/*
$names = ['islam','ahmed','mostafa' ,'islam','eman' ,'mostafa' , 'emad','eman' ];

function unique($array) {

	$newArray = [] ;

	for ($i = 0; $i < count($array) ; ++$i) {
		
		if (!in_array($array[$i], $newArray)) {

			$newArray[] = $array[$i] ;

		}

	}


	return $newArray ;


}

unique($names); // return array
*/


