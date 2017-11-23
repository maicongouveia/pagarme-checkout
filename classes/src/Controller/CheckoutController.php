<?php 

namespace Challenge\Controller;

use Challenge\Model\Card;
use Challenge\Model\Order;
use Challenge\Model\Customer;

/**
* Controller
*/
class CheckoutController
{

	private $apiKey;

	public function __construct($apiKey){
		$this->apiKey = $apiKey;
	}
	
	public function getIdCard(Card $card)
	{

		$data = array(
					"api_key"=>$this->apiKey,
				    "card_number"=> $card->getNumber(),
					"card_expiration_date"=> $card->getExpirationDate(), 
				    "card_holder_name"=> $card->getName(),
				    "card_cvv"=> $card->getCVV() 
				);

		$ch = curl_init("https://api.pagar.me/1/cards");

		curl_setopt_array($ch, array(
		    CURLOPT_POST => TRUE,
		    CURLOPT_RETURNTRANSFER => TRUE,
		    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
		    CURLOPT_POSTFIELDS => json_encode($data)
		));
		// Acessar a URL e retornar a saída
		$output = curl_exec($ch);
		// liberar
		curl_close($ch);
		// Imprimir a saída
		// echo $output;

		$response = json_decode($output);

		return $response->id;
	}

	public function setTransaction(Order $order, Card $card, Customer $customer){

		$data = array(
			"api_key"=> $this->apiKey,
		    "amount"=> intval($order->getOrderTotal()*100),
		    "payment_method"=>"credit_card",
		    "card_id"=> $card->getId(),
		    "customer"=> $customer->getInfo(),
		    "billing"=> $customer->getBillingInfo(),
		    "shipping"=> $customer->getShippingInfo(),
		    "items"=> $order->getProductsInfo(),
		    "split_rules"=>$order->getSplitRules()
		    
		);

		$ch = curl_init("https://api.pagar.me/1/transactions");

		curl_setopt_array($ch, array(
		    CURLOPT_POST => TRUE,
		    CURLOPT_RETURNTRANSFER => TRUE,
		    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
		    CURLOPT_POSTFIELDS => json_encode($data)
		));
		$output = curl_exec($ch);
		curl_close($ch);
		$response = json_decode($output);

		$transaction = array(
						"id"=>$response->acquirer_id,
						"status"=>$response->status
						);

		return $transaction;


	}
}


?>