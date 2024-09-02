<?php

class CurrencyConverter{

	private $amount;
	private $fromCurrency;
	private $toCurrency;
	public function set($amount,$fromCurrency){

		$this->amount = $amount;
		$this->fromCurrency = $fromCurrency;
	}

	public function get($toCurrency){

		$this->toCurrency = $toCurrency;

		switch($this->toCurrency){

			case "usd" :
				include("usdConverter.php");
				usd($this->fromCurrency,$this->amount);
			case "yen" :
				include("yenConverter.php");
				yen($this->fromCurrency,$this->amount);
			case "inr" :
				include("inrConverter.php");
				inr($this->fromCurrency,$this->amount);
			case "gbp" :
				include("gbpConverter.php");
				gbp($this->fromCurrency,$this->amount);
		}
	}
}

$currencyConverter = new CurrencyConverter();
$currencyConverter->set(534,"inr");
$currencyConverter->get("gbp");


