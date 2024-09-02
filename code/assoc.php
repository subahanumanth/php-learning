<?php

$name = array("hanu"=>36,"mukesh"=>35,"siva"=>60);
$sub = array_keys($name);
$number = count($name);

foreach($name as $key=>$value){
	echo "name is ".$key." and mark is ".$value.". ";

}

for($i=0;$i<$number;$i++){

	echo "Name is ".$sub[$i]."Roll number is ".$name[$sub[$i]];

}
?>
