<?php  

namespace Challenge\Model;

use Challenge\Model;

/**
* Recipient
*/
class Recipient extends Model
{
	private $id;
	private $document;
	private $name;
	private $bankInfo;
	private $idBank;
	/**
	 * Class Constructor
	 * @param    $document   
	 * @param    $name   
	 */
	public function __construct($document, $name)
	{
		$this->document = $document;
		$this->name = $name;
		//Mockup data for test
		$this->bankInfo = array(
					"agencia"=> "0932", 
				    "agencia_dv"=> "5", 
				    "bank_code"=> "341", 
				    "conta"=> "58054", 
				    "conta_dv"=> "1", 
				    "document_number"=> "26268738888", 
				    "legal_name"=> "API BANK ACCOUNT"
			);

	}

	/**
     * @return mixed
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param mixed $document
     *
     * @return self
     */
    public function setDocument($document)
    {
        $this->document = $document;

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
    public function getIdBank()
    {
        return $this->idBank;
    }

    /**
     * @param mixed $idBank
     *
     * @return self
     */
    public function setIdBank($idBank)
    {
        $this->idBank = $idBank;

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

    /**
     * @return mixed
     */
    public function getBankInfo()
    {
        return $this->bankInfo;
    }

    /**
     * @param mixed $bankInfo
     *
     * @return self
     */
    public function setBankInfo($bankInfo)
    {
        $this->bankInfo = $bankInfo;

        return $this;
    }
}

?>
