<?php 

function gbp($fromCurrency,$amount) {

if ($fromCurrency == "yen")
  {
    $conversionRate = 0.0070;   
    $result = $amount * $conversionRate;
    echo sprintf("yen to gbp is %f",$result);
    exit ();
  }
if ($fromCurrency == "inr")
  {
    $conversionRate = 0.011;  
    $result = $amount * $conversionRate ;
    echo sprintf("inr to gbp is %f",$result);
    exit ();
  }
if ($fromCurrency == "usd")
  {
    $conversionRate = 0.77;  
    $result = $amount * $conversionRate ;
    echo sprintf("usd to gbp is %f",$result);
    exit ();
  }
} 


