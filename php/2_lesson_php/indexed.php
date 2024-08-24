<?php 

echo "<pre>";


// array  -- data structure 
// indexed array 
// count      1			2		 3		  4
// index      0			1		 2		  3	
$names = ['kareem' , 'ahmed' , 'ali' , 'eman' ,'islam'];
$colors = ['red' , 'green' , 'blue' , 'cyan' , 'magenta'];

// echo $names[3];
// $counter = count($names) - 1 ;

// echo $names[$counter];

// echo end($names);

// function lastElement($array) {
	
// 	return $array[count($array) - 1];

// }

// echo lastElement($colors); // return last element


// $names[] = 'mostafa';
// print_r($names);
// echo $names[0];






# ---------------------------------------------

$names = ['kareem' , 'ahmed' , 'ali' , 'eman' ,'islam'];
$colors = ['red' , 'green' , 'blue' , 'cyan' , 'magenta'];


// for ($i = 0 ; $i < count($names) ; $i++) {

// 	echo  "<p style='color:$colors[$i]'>$names[$i]</p>";
// }




# -------------------------------------------

// $names = ['kareem' , 'ahmed' , 'ali' , 'eman' ,'islam'];

// last elm  -- add -> push() -- remove -> pop()
// array_push($names, 'mostafa');
// array_pop($names);


// first elm -- add -> unshift() -- remove -> shift()
// array_unshift($names, 'mostafa');
// array_shift($names);

### task ###
// array_splice(input, offset);


### search
$names = ['kareem' , 'ahmed' , 'ali' , 'eman' ,'islam'];

// $x = array_search('kareem', $names); // return index

// $x = in_array('ali', $names); // return boolean

#------------------

$str = 'ahmed ayman islam' ;


// string -> array 

$array = explode(' ', $str); // return array

// print_r($array);


$names = ['kareem' , 'ahmed' , 'ali' , 'eman' ,'islam'];

// implode()   array -> string

// echo implode(' ', $names);

// print_r(str_split($str));


# -----------------------

$imageName = 'one.two.docx' ;

// $extensions = ['jpg' , 'png' , 'gif'];

// // get file exteinsion 
// $array = explode('.', $imageName);
// $ext = end($array);

// if (in_array($ext, $extensions)) {

// 	echo "file uploaded with success";
// } else {

// 	echo "wrong file extension";
// }



$imageName = 'one.two.png' ;

function checkImg($name){

	$extensions = ['jpg' , 'png' , 'gif'];

	// get file exteinsion 
	$array = explode('.', $name);
	$ext = end($array);

	if (in_array($ext, $extensions)) {

		return "file uploaded with success";

	} else {

		return  "wrong file extension";
	}
}

// echo checkImg($imageName);


# -------------------


$names = ['islam','kareem' , 'ahmed' , 'ali' ,  'ahmed','eman' ,'islam','kareem' ];

// rsort($names);

$x = array_unique($names); // reuturn new array with unique values

print_r($x);

# -------------------------


// tasks

// in_array(needle , haystack); // return boolean
// array_unique(array name);