<?php
$str = "age:20 weight:54";
sscanf($str,"age:%d weight:%d",$age,$weight);
var_dump($age,$weight);
?>
