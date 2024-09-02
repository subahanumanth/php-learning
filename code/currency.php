<?php

class CurrencyConverter{

	public function convertToUsd($INR){

		$ConversionRate = 0.014;
		$USD = $ConversionRate * $INR;
		return $USD;

	}
}

$Converter = new CurrencyConverter();
echo $Converter->convertToUsd(100);
