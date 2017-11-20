<?php

use Challenge\Model\Costumer;
/**
 * @covers Costumer 
 */
	
class CostumerTest extends \PHPUnit_Framework_TestCase
{

	/*
	*	It should return the value of the variable $name
	*/
	public function testCostumerName()
	{
		$costumer = new Costumer();
		$costumer->setName("Maicon Soares Gouveia");

		$this->assertEquals("Maicon Soares Gouveia", $costumer->getName());
	}

	/*
	* It should return a array with all data from the Costumer
	*/
	
	/*public function testCostumerArray()
	{
		$costumer = new Costumer();
		$costumer->setName("Maicon Soares Gouveia");
		$costumer->setDocuments("cpf","43072807841");

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
				$costumer->getArray());
	}*/
	

	/*
	*	It should return the value of the variable $name
	*/
	/*public function testCostumerName()
	{
		$costumer = new Costumer();
		$costumer->setName("Maicon Soares Gouveia");

		$this->assertEquals("Maicon Soares Gouveia", $costumer->getName());
	}*/
}

?>