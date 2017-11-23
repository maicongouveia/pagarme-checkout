<?php 

namespace Challenge\Model;

use Challenge\Model;

/**
* Costumer
*/

class Customer extends Model
{
	
    private $name;
	private $email;
    private $id;
    private $type;
	private $country;
    private $birthday;
    private $phone_numbers;
    private $documents;

    public function __construct($name,$email,$id,$type,$country,$birthday,$phone_numbers,$documents)
    {
        $this->name = $name;
        $this->email = $email;
        $this->id = $id;
        $this->type = $type;
        $this->country = $country;
        $this->birthday = $birthday;
        $this->phone_numbers = $phone_numbers;
        $this->documents = array();
        array_push($this->documents, $documents);
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
        array_push($this->phone_numbers, $phone_numbers);

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

    public function getInfo()
    {
    	return array(
    			'external_id' => "".$this->getId(),
    			'name' => $this->getName(),
    			'type' => $this->getType(),
    			'email' => $this->getEmail(),
    			'country' => $this->getCountry(),
    			'documents'=>$this->getDocuments(),
    			'phone_numbers'=>$this->getPhoneNumbers()
    		  );
    }

    public function getBillingInfo(){
        return array(
                  "name"=> $this->getName(),
                  "address"=> array(
                    "country"=> "br",
                    "state"=> "sp",
                    "city"=> "Cotia",
                    "neighborhood"=> "Rio Cotia",
                    "street"=> "Rua Matrix",
                    "street_number"=> "9999",
                    "zipcode"=> "06714360"
                  )
                );
    }

    public function getShippingInfo(){
        return array(
                "name"=> $this->getName(),
                "fee"=> 4200,
                "delivery_date"=> "2000-12-21",
                "expedited"=> true,
                "address"=> array(
                    "country"=> "br",
                    "state"=> "sp",
                    "city"=> "Cotia",
                    "neighborhood"=> "Rio Cotia",
                    "street"=> "Rua Matrix",
                    "street_number"=> "9999",
                    "zipcode"=> "06714360"
                  )
                );
    }
}

?>