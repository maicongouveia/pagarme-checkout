<?php 

namespace Challenge\Controller;

use Challenge\Model\Recipient;

/**
* Controller Recipient
*/
class RecipientController
{
	private $recipient;
	private $apiKey;

	public function __construct($document,$name,$apiKey)
	{
		$this->recipient = new Recipient($document,$name);
		$this->apiKey = $apiKey;
	}

	public function getBankId(){
		$data = $this->recipient->getBankInfo();

		$data["api_key"]=$this->apiKey;

		$ch = curl_init("https://api.pagar.me/1/bank_accounts");

		curl_setopt_array($ch, array(
		    CURLOPT_POST => TRUE,
		    CURLOPT_RETURNTRANSFER => TRUE,
		    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
		    CURLOPT_POSTFIELDS => json_encode($data)
		));
		// 
		$output = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($output);

		$this->recipient->setIdBank($response->id);

	}
	public function getRecipientId()
	{		
		$data = array(

				    "api_key"=>$this->apiKey, 
				    "bank_account_id"=> $this->recipient->getIdBank(), 
				    "transfer_day"=> "5", 
				    "transfer_enabled"=> "true", 
				    "transfer_interval"=> "weekly"
				    // "register_information"=> array(
								// 				"document_number"=>  $this->recipient->getDocument(),
								// 				"name"=> $this->recipient->getname()
								// 			)
				);

		// var_dump($data);
		$ch = curl_init("https://api.pagar.me/1/recipients");

		curl_setopt_array($ch, array(
		    CURLOPT_POST => TRUE,
		    CURLOPT_RETURNTRANSFER => TRUE,
		    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
		    CURLOPT_POSTFIELDS => json_encode($data)
		));
		
		$output = curl_exec($ch);
		curl_close($ch);

		$response = json_decode($output);

		// echo $output;

		$this->recipient->setId($response->id);
	}

	public function getRecipient(){
		return $this->recipient;
	}
}


?>