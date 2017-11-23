<?php 

namespace Challenge\Model;

use Challenge\Model;
use Challenge\Recipient;

/**
* Product
*/
class Product extends Model
{
	
	private $name;
	private $price;
	private $recipient;

	function __construct($name,$price)
	{
		$this->setName($name);
		$this->setPrice($price);
	}

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param mixed $provide
     *
     * @return self
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRateFree()
    {
        return $this->rateFree;
    }

    /**
     * @param mixed $rateFree
     *
     * @return self
     */
    public function setRateFree($rateFree)
    {
        $this->rateFree = $rateFree;

        return $this;
    }

    public function getInfo()
    {
    	return array(
                    "id"=>"xx-".$this->name,
					"title"=>$this->name,
					"unit_price"=>$this->price,
                    "quantity"=> 1,
                    "tangible"=> true
				);
    }
}



?>