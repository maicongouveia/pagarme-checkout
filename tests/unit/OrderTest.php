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

		$product3 = new Product("Máscara de Cavalo",150.00);
		$product3->setProvider("César Anthony João Martins");
		$product3->setRateFree(false);

		$order = new Order(42.00);
		$order->addProduct($product);
		$order->addProduct($product2);
		$order->addProduct($product3);

		$products = new \ArrayObject([$product,$product2,$product3]);

		$this->assertEquals($products, $order->getProducts());
	}
	/**
	*	It should return the sum of de order
	*/
	public function testOrderTotal()
	{
		$product = new Product("Fantasia do Darth Vader",125.00);
		$product->setProvider("Maria Barros");
		$product->setRateFree(true);

		$product2 = new Product("Fantasia do Cafú",100.00);
		$product2->setProvider("João Thiago Samuel Cavalcanti");
		$product2->setRateFree(false);

		$product3 = new Product("Máscara de Cavalo",150.00);
		$product3->setProvider("César Anthony João Martins");
		$product3->setRateFree(false);

		$order = new Order(42.00);
		$order->addProduct($product);
		$order->addProduct($product2);
		$order->addProduct($product3);

		$total = $product->getPrice() + $product->getPrice() + $product->getPrice() + $order->getDeliveryFee();

		$this->assertEquals($total, $order->getOrderTotal());
	}
}

?>