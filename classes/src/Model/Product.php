<?php 

namespace Challenge\Model;

use Challenge\Model;

/**
* Product
*/
class Product extends Model
{
	
	private $name;
	private $price;
	private $provider;
	private $rateFree;

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
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @param mixed $provide
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

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
					"name"=>$this->name,
					"price"=>$this->price,
					"provider"=>$this->provider,
					"rateFree"=>$this->rateFree
				);
    }
}



?>