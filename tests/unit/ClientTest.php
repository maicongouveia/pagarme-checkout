<?php

use Challenge\Model\Client;
/**
 * @covers Client 
 */
	
class ClientTest extends \PHPUnit_Framework_TestCase
{

	/*
	*	It should return the value of the variable $name
	*/
	public function testClientName()
	{
		$client = new Client();
		$client->setName("Maicon Soares Gouveia");

		$this->assertEquals("Maicon Soares Gouveia", $client->getName());
	}

	/*
	* It should return a array with all data from the Client
	*/
	
	/*public function testClientArray()
	{
		$client = new Client();
		$client->setName("Maicon Soares Gouveia");
		$client->setDocuments("cpf","43072807841");

		$documents = [["type"=>"cpf","number"=>"43072807841"]];
		$phone_numbers = array("+5511972431309","+1127317497");

		$this->assertEquals(
				array(
					"id"=>null,
					"name"=>"Maicon Soares Gouveia",
					"type"=>null,
					"email"=>null,
					"country"=>null,
					"documents"=>$documents,
					"phone_numbers"=>$phone_numbers
				),
				$client->getArray());
	}*/
	

	/*
	*	It should return the value of the variable $name
	*/
	/*public function testClientName()
	{
		$client = new Client();
		$client->setName("Maicon Soares Gouveia");

		$this->assertEquals("Maicon Soares Gouveia", $client->getName());
	}*/
}

?>