<?php

use Challenge\Model\Customer;

/**
 * @covers Costumer 
 */
	
class CustomerTest extends \PHPUnit_Framework_TestCase
{

	/*
	*	It should return the value of the variable $name
	*/
	public function testCostumerName()
	{
		$customer = new Customer(
					"Maicon Soares Gouveia",
					"gouveia.maicon@gmail.com",
					1,
					"individual",
					"br",
					"23061994",
					array("+5511972431309"),
					array("type"=>"cpf","number"=>"43072807841")
				);

		$this->assertEquals("Maicon Soares Gouveia", $customer->getName());
	}

	/*
	* It should return a array with all data from the Costumer
	*/
	
	/*public function testCostumerArray()
	{
		$customer = new Costumer();
		$customer->setName("Maicon Soares Gouveia");
		$customer->setDocuments("cpf","43072807841");

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
				$customer->getArray());
	}*/
	

	/*
	*	It should return the value of the variable $name
	*/
	/*public function testCostumerName()
	{
		$customer = new Costumer();
		$customer->setName("Maicon Soares Gouveia");

		$this->assertEquals("Maicon Soares Gouveia", $customer->getName());
	}*/
}

?>