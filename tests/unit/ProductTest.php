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
		$product->setProvider("Maria Barros");
		$product->setRateFree(true);

		$productArray = array(
							"name"=>"Fantasia - Darth Vader",
							"price"=>125.00,
							"provider"=>"Maria Barros",
							"rateFree"=>true
						);

		$this->assertEquals($productArray, $product->getInfo());
	}

	

	
}

?>