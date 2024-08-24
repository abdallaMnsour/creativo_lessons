<?php 



$badWords = ['if' , 'ind' , 'is'];

$str = 'welcome is to if ind php if';

for ($i = 0; $i < count($badWords) ; ++$i) {
		
	$str = str_replace($badWords[$i], stars($badWords[$i]) , $str);

}

function stars($val) {

	$star = '' ;

	for ($i = 0; $i <  strlen($val); ++$i) {
		$star .= '*';
	}

	return $star ;

}

echo "<pre>";
print_r($str);

