
<?php

class model extends car{

        public $modelname;

        public function __construct($modelname,$color,$shape,$number){

                $this->modelname = $modelname ;
                parent::__construct($color,$shape,$number);

        }
        public function getmodelname(){

                return "color is ".$this->color;
        }

}

class car{

        protected $color;
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

	public function color(){

		return $this->color;
}
}


$audi = new model("audi111","red","circle","7824");
echo $audi->getmodelname();
