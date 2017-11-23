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
	private $deliveryFee;
	private $splitRules;
	private $mainRecipient;

	public function __construct($deliveryFee)
	{
		$this->products = new \ArrayObject();
		$this->deliveryFee = $deliveryFee;
		$this->splitRules = array();
	}

	public function getProducts()
	{
		return $this->products;
	}

	public function getProductsInfo()
	{
		$info = array();

		foreach ($this->products as $product) {
			array_push($info, $product->getInfo());
		}

		return $info;
	}

	public function addProduct(Product $product)
	{
		$this->products->append($product);
	}

	public function setDeliveryFee($value){
		$this->deliveryFee = $value;
	}

	public function getDeliveryFee(){
		return $this->deliveryFee;
	}

	public function getOrderTotal(){
		$total = $this->getDeliveryFee();

		foreach ($this->products as $product) {
			$total += $product->getPrice();
		}

		return $total;
	}

	public function setMainRecipient($idRecipient,$porcentage){
		$this->mainRecipient = $idRecipient;
		$this->mainRecipientPorcentage = $porcentage;
	}

	public function getSplitRules(){
		$mainRecipientTotal = $this->deliveryFee;
		$splitRules = array();

		foreach ($this->products as $product) {
			$price = $product->getPrice();
			$idRecipient = $product->getRecipient();

			if(!isset($splitRules[$idRecipient])){
				if($idRecipient === $this->mainRecipient){
					$splitRules[$idRecipient] = $mainRecipientTotal + $price;
				}
				else{
					$splitRules[$idRecipient] = $price * ((100-$this->mainRecipientPorcentage)/100);
					$splitRules[$this->mainRecipient] += $price * (($this->mainRecipientPorcentage)/100);
				}
			}
			else{
				if($idRecipient === $this->mainRecipient){
					$splitRules[$idRecipient] += $price;
				}
				else{
					$splitRules[$idRecipient] += $price * ((100-$this->mainRecipientPorcentage)/100);
					$splitRules[$this->mainRecipient] += $price * (($this->mainRecipientPorcentage)/100);
				}
			}
		}

		$rules = array();

		foreach ($splitRules as $idRecipient => $price) {
			array_push(
					$rules,
					array(
							"liable"=>true,
							"charge_processing_fee"=>true,
							"amount" => intval($price*100),
							"charge_remainder_fee" => true,
							"recipient_id"=>$idRecipient
						)
				);
		}

		return $rules;
	}
}

?>