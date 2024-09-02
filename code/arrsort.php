<?php

$name = ["hanu"=>36,"bharath"=>21,"love"=>100,"ajay"=>1];
$keys = array_keys($name);
sort($keys);
sort($name);

for($i=0;$i<count($name);$i++){
    
    echo $name[$i];
    echo "\n";
    echo $keys[$i];
    echo "\n";
}
