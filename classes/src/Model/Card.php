<?php 

namespace Challenge\Model;

use Challenge\Model;

/**
* Card
*/
class Card extends Model
{
	private $number;
	private $expirationDate;
	private $name;
	private $cvv;
	private $id;
	/**
	 * Class Constructor
	 * @param    $number   
	 * @param    $expirationDate   
	 * @param    $name   
	 * @param    $cvv   
	 */
	public function __construct($number, $expirationDate, $name, $cvv)
	{
		$this->number = $number;
		$this->expirationDate = $expirationDate;
		$this->name = $name;
		$this->cvv = $cvv;
	}

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     *
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param mixed $expirationDate
     *
     * @return self
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
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
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * @param mixed $cvv
     *
     * @return self
     */
    public function setCvv($cvv)
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}

?>