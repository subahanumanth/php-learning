<?php

function inr($fromCurrency,$amount) {
if ($fromCurrency == "yen") 
  {
    $conversionRate = 0.64;  
    $result = $amount * $conversionRate ;
    echo sprintf("yen to inr is%f ",$result);
    exit ();
  }
if ($fromCurrency == "usd")
  {
    $conversionRate = 70.84;  
    $result = $amount * $conversionRate ;
    echo sprintf("usd to inr is %f",$result);
    exit ();
  }
if ($fromCurrency == "gbp")
  {
    $conversionRate = 91.91;  
    $result = $amount * $conversionRate ; 
    echo sprintf("gbp to inr is %f",$result);
    exit ();
  }
 }


