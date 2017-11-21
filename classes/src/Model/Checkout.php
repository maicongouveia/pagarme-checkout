<?php

namespace Challenge\Model;
use Challenge\Model;
use \PagarMe\Sdk\PagarMe;	

/**
* Checkout
*/
class Checkout extends Model
{
	private $pagarMe;
	private $apiKey;

	function __construct($apiKey){

		$this->pagarMe = new PagarMe($apiKey);
		$this->apiKey = $apiKey;

	}
	
}

?>