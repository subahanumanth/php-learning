
<?php


class car{

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

	public function __get($property){

		echo "You are trying to access private property ".$this->$property;
	}

	public function __set($property,$value){

		$this->$property = $value;
		echo "Your value has changed to ".$value;
	}
}

$audi = new car("red","circle","7824");
echo $audi->color;

