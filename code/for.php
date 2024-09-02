<?php

$cars = [];
array_push($cars,"volvo","audi","benz");
$length = count($cars);

for($i = 0; $i < $length; $i++) {
    echo $cars[$i];
    echo "<br>";
}

?>



