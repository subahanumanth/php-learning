<?php

$names = [3,5,23,546,678,756,5];
$times = count($names);

for($i=0;$i<$times;$i++){

	for($j=0;$j<$times-1;$j++){

		if($names[$j]>$names[$j+1]){

		$temp = $names[$j];
		$names[$j] = $names[$j+1];
		$names[$j+1] = $temp; 

		}
	}
}

print_r($names);

?>
