<?php

$name = "hanu";
$curl  = curl_init();
curl_setopt($curl,CURLOPT_URL,"http://localhost/samples/training/currency.php/main.php");
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_POST,1);
curl_setopt($curl,CURLOPT_POSTFIELDS,$name);
$output = curl_exec($curl);
curl_close($curl);
print_r($output);
