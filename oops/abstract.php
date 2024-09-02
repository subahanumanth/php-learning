<?php

abstract class Base {
    	abstract function printdata();
	public function sayhi(){

		echo "hi";

	}

}

class car extends base{

	function printdata(){

		echo "hello";
	}

}

$model = new car();
$model->printdata();
$model->sayhi();

?>
