<?php
Trait A
{

function sayhello(){
	echo "hello";
}
}
Trait B
{
function sayhi(){
	echo "hi";
}
}
class car
{
	use A,B;

}

$obj = new car();
$obj->sayhi();
$obj->sayhello();
?>

