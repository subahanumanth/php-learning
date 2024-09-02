<?php

class car{

public $color;
public $shape;
public $number;

public function __construct($color,$shape,$number){

	$this->color = $color;
	$this->shape = $shape;
	$this->number = $number;

}

public function details(){

	return "The details are ".$this->color." ".$this->shape." ".$this->number;
}

}

$audi = new car("red","square","7824");
echo $audi->details();
echo "\n";

$benz = new car("black","rectangle");
echo $benz->details();

?>
