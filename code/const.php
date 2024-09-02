<?php
class model extends car{

	public $address;
	public function __construct($address,$color,$shape,$number){

		parent::__construct($color,$shape,$number);
		$this->address=$address;
		echo $this->address;
		echo parent::name;
	}

}

class car{

	const name="Hanu";
        private $color;
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

$audi = new model("vnr","red","circle","7824");
echo car::name;
