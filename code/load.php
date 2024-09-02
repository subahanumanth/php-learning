<?php

class car{

public function sayhi(){

	echo "hi";
	}
}

class bike extends car{

public function sayhi(){

	echo "hello";
	}
}

$obj1 = new car();
$obj2 = new bike();
$obj1->sayhi();
$obj2->sayhi();
?>
