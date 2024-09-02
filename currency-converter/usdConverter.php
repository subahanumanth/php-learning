<?php
function usd($fromCurrency,$amount) {
if($fromCurrency=="yen"){
    $conversionRate = 0.0091;
	$result = $amount * $conversionRate ;
	echo sprintf("Yen to Usd is %f",$result);
	exit();
	}
if($fromCurrency=="inr"){
    $conversionRate = 0.014;
	$result = $amount * $conversionRate ;
	echo sprintf("inr to Usd is %f",$result);
    exit();
    }
if($fromCurrency=="gbp"){
    $conversionRate = 1.30;
    $result = $amount * $conversionRate ;
    echo sprintf("gbp to Usd is %f",$result);
    exit();
    }
}    
?>
