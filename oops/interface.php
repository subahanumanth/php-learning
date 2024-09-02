<?php

interface MyInterfaceName1 {
   public  function methodA();

}

interface MyInterfaceName2{
	public function methodB();
}

class car implements MyInterfaceName1{

	public function methodA(){

	echo "hello";

	}

	public function methodB(){
	
	echo "hi";	

	}

}

$obj = new car();
$obj->methodA();
$obj->methodB();

?>


