<?php

class model extends car{


        public $address;
        public function __construct($address,$color,$shape,$number){

                parent::__construct($color,$shape,$number);
        }

	public static function say(){

		echo parent::$name;
	}
}



class car{

	protected static $name = "hanu";
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


echo model::say();
