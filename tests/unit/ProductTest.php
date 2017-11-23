<?php

use Challenge\Model\Product;
/**
 * @covers Product 
 */
	
class ProductTest extends \PHPUnit_Framework_TestCase
{

	/*
	*	It should return the value of the variable $name
	*/
	public function testProductName()
	{
		$product = new Product("Fantasia - Darth Vader",125.00);

		$this->assertEquals("Fantasia - Darth Vader", $product->getName());
	}

	/*
	*	It should return a array with all values in Product Class
	*/
	public function testProductInfo()
	{
		$product = new Product("Fantasia - Darth Vader",125.00);
		$product->setRecipient("Maria Barros");

		$productArray = array(
							"id"=>"xx-Fantasia - Darth Vader",
							"title"=>"Fantasia - Darth Vader",
							"unit_price"=>125.00,
							"quantity"=>1,
							"tangible"=>true
						);

		$this->assertEquals($productArray, $product->getInfo());
	}

	

	
}

?>