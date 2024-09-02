<?php

interface A {

	public function sayhi();
}

interface B {
	public function sayint();
}

class Animal {

	public function cat() {

	echo "iam a cat";
	}
}

class Human extends Animal implements A,B{
	public function sayhello() {
		echo "hello";
}
public function sayhi() {
	echo "hi";
}
public function sayint() {
	echo "integer";
}
}

$obj = new Human();
$obj->sayhi();
$obj->sayint();
