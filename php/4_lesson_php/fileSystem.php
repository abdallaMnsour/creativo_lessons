<?php 

// echo __FILE__ ; // magic constant

// echo "<br>";

// // echo dirname(__FILE__);

// echo __DIR__ ;


// echo "<br>";

// echo basename(__FILE__);

// $x = file_exists("createivo/test.txt");

// $x = is_dir('createivo');

// $x = is_writable('tasks.php');

// if (!is_dir('createivo')) {

// 	mkdir('createivo');

// } else {

// 	rmdir('createivo');
// }

// file_put_contents('test.txt', ' php ' , FILE_APPEND);

// unlink('test.txt'); => remove files

// echo file_get_contents('test.txt');


// copy('test.txt', 'createivo/test.txt'); 

// copy('test.txt', 'test2.txt');

// rename('test.txt', 'createivo/test2.txt'); // cut

// echo file_get_contents('index.php');

// require "index.php";

// echo $name ;



#---------------------

$handler = fopen('test.txt', 'w') ; // w - write 
fwrite($handler , "data from fopen");
fclose($handler);

$handler2 = fopen('test.txt', 'r'); // r - read
$size = filesize('test.txt');
echo fread($handler2, $size);
fclose($handler2);


#---------------------

$names = ['ahmed' , 'kareem' , 'islam'];

