<?php

$number = [];
array_Push($number,5,8,10,3,11,2);
print_r($number);
$times = count($number);
$result = $number[0];

for($i=1;$i<$times;$i++){

	if($result<$number[$i]){

	$result = $number[$i];

	}
	else{

	continue;

	}

}
echo $result;

?>
