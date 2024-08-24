<?php 


// class -> bluprint

// object -> instance of class


class House {

	// property - variables or contants
	public $color = 'red';
	public $floorNum = 10 ;

	// method  --- function
	public function isSecured()
	{
		echo 'true';
	}

} // end class

#----------------------------------

$villa = new House;
$villa -> floorNum = 20 ;
// echo $villa -> floorNum ;
// $villa -> isSecured();

#-------------------------

$home = new House ;

echo $home -> floorNum ;
