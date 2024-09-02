<?php

class car{

public function __construct(){

	echo "script started";

	}

public function sayhi(){

	echo "hi";

	}
public function __destruct(){

	echo "script finished";
	}
}

$name = new car();
$name->sayhi();

?>
