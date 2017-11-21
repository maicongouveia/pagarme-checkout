<?php 

use Challenge\Model\Checkout;
use \PagarMe\Sdk\PagarMe;
use \PagarMe\Sdk\Customer\Address;
use \PagarMe\Sdk\Customer\Phone;
/**
* @covers Checkout
*/
class CheckoutTest extends \PHPUnit_Framework_TestCase
{
	
	public function testCustomer()
	{
		$pagarMe = new PagarMe('ak_test_LuuGNNy0CHFLNqRdLzUQ8mtWxZaJQ6');
		$addressData = array(
						"street"=>"Rua Américo Batista",
						"streetNumber"=>"77",
						"neighborhood"=>"Jardim Iguatemi",
						"zipcode"=>"08380190",
						"complementary"=>"",
						"city"=>"São Paulo",
						"state"=>"SP",
						"country"=>"br"
						);
		$address = new Address($addressData);
		$phoneData = array("ddd"=>"11","number"=>"972431309","ddi"=>"+55");
		$phone = new Phone($phoneData);		

		/** @var $customer \PagarMe\Sdk\Customer\Customer */
		$customer = $pagarMe->customer()->create(
		    'John Dove',
		    'john@site.com',
		    '09130141095',
		    /** @var $address \PagarMe\Sdk\Customer\Address */
		    $address,
		    /** @var $phone \PagarMe\Sdk\Customer\Phone */
		    $phone,
		    '15021994',
		    'M'
		);

		/** @var $customerList array */
		$customerList = $pagarMe->customer()->getList();

		$this->assertEquals("Testando", $customerList);


	}

	/*public function testCard()
	{

		$pagarMe = new PagarMe('ak_test_LuuGNNy0CHFLNqRdLzUQ8mtWxZaJQ6');

		
		$card = $pagarMe->card()->create(
									'4242424242424242',
		       						'JOHN DOVE',
		       						'0722'
								   );

		$card->create();

		$this->assertEquals(true);

	}*/
}

?>