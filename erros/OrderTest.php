<?php

use Challenge\Model\Order;
use Challenge\Model\Product;

/**
 * @covers Order 
 */
	
class OrderTest extends \PHPUnit_Framework_TestCase
{

	/*
	*	It should return a list of products
	*/
	public function testOrderListProducts()
	{
		$product = new Product("Fantasia do Darth Vader",125.00);
		$product->setProvider("Maria Barros");
		$product->setRateFree(true);

		$product2 = new Product("Fantasia do Cafú",100.00);
		$product2->setProvider("João Thiago Samuel Cavalcanti");
		$product2->setRateFree(false);

		$order = new Order();
		$order->addProduct($product);
		$order->addProduct($product2);

		$products = new \ArrayObject([$product,$product2]);

		$this->assertEquals($products, $order->getProducts());
	}
}

?>