<?php

class CurrencyConverter{

	public $amount;
	public $fromCurrency;
	public $toCurrency;
	public function set($amount,$fromCurrency){

		$this->amount = $amount;
		$this->fromCurrency = $fromCurrency;
	}

	public function get($toCurrency){

		$toCurrency = $toCurrency;

		switch($toCurrency){

			case "usd":
				if($this->fromCurrency=="yen"){
					$result = $this->amount *0.0091;
					echo "Yen to Usd is ".$result;
					break;
				}
				if($this->fromCurrency=="inr"){
                                	$result = $this->amount *0.014;
                               		echo "inr to Usd is ".$result;
                                	break;
                        	}
				if($this->fromCurrency=="gbp"){
        	                        $result = $this->amount *1.30;
                	                echo "gbp to Usd is ".$result;
                        	        break;
                      	  	}

			case "yen":
				if($this->fromCurrency=="gbp"){
                	                $result = $this->amount *142.56;
                        	        echo "gbp to yen is ".$result;
                                	break;
       	                 	}
        	                if($this->fromCurrency=="usd"){
                	                $result = $this->amount *109.87;
                        	        echo "usd to yen is ".$result;
                                	break;
                        	}
       	                	if($this->fromCurrency=="inr"){
        	                        $result = $this->amount *1.55;
                	                echo "inr to yen is ".$result;
                        	        break;
                       		}

			case "inr":
				if($this->fromCurrency=="yen"){
                	                $result = $this->amount *0.64;
                        	        echo "yen to inr is ".$result;
                                	break;
                        	}
                        	if($this->fromCurrency=="usd"){
                               		$result = $this->amount *70.84;
                                	echo "usd to inr is ".$result;
                                	break;
                        	}
                        	if($this->fromCurrency=="gbp"){
                                	$result = $this->amount *91.91;
                                	echo "gbp to inr is ".$result;
                                	break;
                        	}
			case "gbp":
				if($this->fromCurrency=="yen"){
                                	$result = $this->amount *0.0070;
                                	echo "yen to gbp is ".$result;
                               		break;
                        	}
                        	if($this->fromCurrency=="inr"){
                                	$result = $this->amount *0.011;
                                	echo "inr to gbp is ".$result;
                                	break;
                        	}
                        	if($this->fromCurrency=="usd"){
                                	$result = $this->amount *0.77;
                                	echo "usd to gbp is ".$result;
                                	break;
                        	}

		}

	}

}

$currencyConverter = new CurrencyConverter();
$currencyConverter->set(7534,"yen");
$currencyConverter->get("inr")

?>
