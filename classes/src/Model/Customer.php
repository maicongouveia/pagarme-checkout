<?php 

namespace Challenge\Model;

use Challenge\Model;

/**
* Costumer
*/
class Costumer extends Model
{
	
	private $id;
	private $name;
	private $type;
	private $email;
	private $documents = array();
	private $phone_numbers = array();
	private $birthday;
	private $country;
	private $state;
	private $city;
	private $neighborhood;
	private $street;
	private $street_number;
	private $zipcode;

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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param mixed $documents
     *
     * @return self
     */
    public function setDocuments($type, $number)
    {
        $this->documents = array("type"=>$type,"number"=>$number);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumbers()
    {
        return $this->phone_numbers;
    }

    /**
     * @param mixed $phone_numbers
     *
     * @return self
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->phone_numbers = $phone_numbers;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     *
     * @return self
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * @param mixed $neighborhood
     *
     * @return self
     */
    public function setNeighborhood($neighborhood)
    {
        $this->neighborhood = $neighborhood;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreetNumber()
    {
        return $this->street_number;
    }

    /**
     * @param mixed $street_number
     *
     * @return self
     */
    public function setStreetNumber($street_number)
    {
        $this->street_number = $street_number;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param mixed $zipcode
     *
     * @return self
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    public function getArray()
    {
    	return array(
    			'id' => $this->getId(),
    			'name' => $this->getName(),
    			'type' => $this->getType(),
    			'email' => $this->getEmail(),
    			'country' => $this->getCountry(),
    			'documents'=>$this->getDocuments(),
    			'phone_numbers'=>$this->getPhoneNumbers()
    		);
    }
}

?>