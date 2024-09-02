<?php

class model extends car{

	public $modelname;

	public function __construct($modelname,$color,$shape,$number){

		$this->modelname = $modelname ;
		parent::__construct($color,$shape,$number);

	}
	public function getmodelname(){

		return $this->modelname." ".$this->color;
	}

}

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


$benz = new model("benz111","red","circle","1301");
echo $benz->getmodelname();

?>
