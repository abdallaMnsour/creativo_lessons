<?php 


// $folders = ['ahmed' , 'islam' , 'eyad' , 'kareem'];



// foreach($folders as $folder) {

// 	if (is_dir($folder)) continue ;

// 	mkdir($folder);

// 	for ($i = 1 ; $i < 4 ; $i++) {

// 		file_put_contents("$folder/filename$i.txt", 'string');

// 	}


// }


// foreach($folders as $folder) {

// 	if (!is_dir($folder)){

// 		mkdir($folder);

// 		for ($i = 1 ; $i < 4 ; $i++) {

// 			file_put_contents("$folder/filename$i.txt", 'string');

// 		}
// 	}

// }


// $badWords = ['if' , 'ind' , 'is'];

// $str = 'welcome is to if ind php if';

// $words = explode(' ', $str);

// $finalstr = '';

// for ($i = 0; $i < $words ; ++$i) {

// 	if (in_array($words[$i], $badWords)) {

// 		$words[$i] =  '**' ;

// 	}
	
// }

// echo implode(' ', $finalstr);




// for ($i = 0; $i < count($badWords) ; ++$i) {
	
// 	str_replace( $badWords[$i] , ** , $str)

// }











// for ($i = 0; $i < count($files) ; ++$i) {
	

// 	if ($files[$i] == 'islam') {
// 		continue ;
// 	}

// 	echo $files[$i]  . "<br>";

// }