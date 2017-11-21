<?php 

namespace Challenge\Model;

use Challenge\Model;
use Challenge\Model\Product;

/**
 * Order
 */
class Order extends Model
{
	private $products;

	public function __construct()
	{
		$this->$products = new \ArrayObject();
	}

	public function getProducts()
	{
		return $this->$products;
	}

	public function addProduct(Product $product)
	{
		$this->$products->append($product);
	}	
}

?>