
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

                return "The details are ".$this->color;
        }

}
$audi = new car("red","circle","1301");
echo $audi->details();


?>


