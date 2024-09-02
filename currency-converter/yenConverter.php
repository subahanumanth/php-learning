<?php
function yen($fromCurrency,$amount) {

if ($fromCurrency == "gbp")
  {
    $conversionRate = 142.56;
    $result = $amount * $conversionRate;
    echo sprintf("gbp to yen is %f",$result);
    exit ();
  }
if ($fromCurrency == "usd")
  {
    $conversionRate = 109.87;
    $result = $amount * $conversionRate;
    echo sprintf("usd to yen is %f",$result);
    exit ();
  }
if ($fromCurrency == "inr")
  {
    $conversionRate = 1.55;  
    $result = $amount *$conversionRate;
    echo sprinf("inr to yen is %f",$result);
    exit ();
  }
}

