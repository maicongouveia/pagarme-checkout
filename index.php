<?php 

require 'vendor/autoload.php';

use Challenge\Page;
use Challenge\Model\Checkout;
use \PagarMe\Sdk\Customer\Customer;
use \PagarMe\Sdk\Customer\Address;
use \PagarMe\Sdk\Customer\Phone;
use \PagarMe\Sdk\Card\Card;
use \Slim\App;

$config = [
    'settings' => [
        'displayErrorDetails' => true
    ]
];
$app = new App($config);



$app->get('/', function() {
    require('views/index.html');
});

$app->get('/checkout/', function() {

	$apiKey = "ak_test_LuuGNNy0CHFLNqRdLzUQ8mtWxZaJQ6";

	// $pagarMe = new \PagarMe\Sdk\Pagarme($apiKey);

	// $addressData = array(
	// 				"street"=>"Rua Américo Batista",
	// 				"streetNumber"=>"77",
	// 				"neighborhood"=>"Jardim Iguatemi",
	// 				"zipcode"=>"08380190",
	// 				"complementary"=>"",
	// 				"city"=>"São Paulo",
	// 				"state"=>"SP",
	// 				"country"=>"br"
	// 				);
	
	// /** @var $address \PagarMe\Sdk\Customer\Address */
	// $address = new Address($addressData);

	// $phoneData = array("ddd"=>"11","number"=>"972431309","ddi"=>"+55");	

	// /** @var $phone \PagarMe\Sdk\Customer\Phone */
	// $phone = new Phone($phoneData);		

	// /** @var $customer \PagarMe\Sdk\Customer\Customer */
	// $customer = $pagarMe->customer()->create(
	// 										'John Dove',
	// 										'john@site.com',
	// 										'09130141095',
	// 										$address,									
	// 										$phone,
	// 										'15021994',
	// 										'M'
	// 									);

	// /** @var $card \PagarMe\Sdk\Card\Card */
	// $card = $pagarMe->card()->create(
	//     '4242424242424242',
	//     'JOHN DOVE',
	//     '0722'
	// );

	// /** @var $transaction \PagarMe\Sdk\Transaction\CreditCardTransaction */
	// $transaction = $pagarMe->transaction()->creditCardTransaction(
	//     37500,
	//     $card,
	//     $customer,
	//     1,
	//     true,
	//     'https://requestb.in/12odcsu1',
	//     null
	// );



	// Faz um POST
	$data = array(
		"api_key"=> $apiKey,
		"amount"=> 21000,
	    "card_number"=> "4111111111111111",
	    "card_cvv"=> "123",
	    "card_expiration_date"=> "0922",
	    "card_holder_name"=> "Morpheus Fishburne",
	    "customer"=> array(
	      "external_id"=> "#3311",
	      "name"=> "Morpheus Fishburne",
	      "type"=> "individual",
	      "country"=> "br",
	      "email"=> "mopheus@nabucodonozor.com",
	      "documents"=> 
	      array(
	        array(
	          "type"=> "cpf",
	          "number"=> "00000000000"
	        )
	      ),
	      "phone_numbers"=> array("+5511999998888", "+5511888889999"),
	      "birthday"=> "1965-01-01"
	    ),
	    "billing"=> 
	    array(
	      "name"=> "Trinity Moss",
	      "address"=> array(
	        "country"=> "br",
	        "state"=> "sp",
	        "city"=> "Cotia",
	        "neighborhood"=> "Rio Cotia",
	        "street"=> "Rua Matrix",
	        "street_number"=> "9999",
	        "zipcode"=> "06714360"
	      )
	    ),
	    "shipping"=> 
	    array(
	      "name"=> "Neo Reeves",
	      "fee"=> 1000,
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
	    ),
	    "items"=> 
	    array(

	      array(
	        "id"=> "r123",
	        "title"=> "Red pill",
	        "unit_price"=> 10000,
	        "quantity"=> 1,
	        "tangible"=> true
	      ),
	      array(
	        "id"=> "b123",
	        "title"=> "Blue pill",
	        "unit_price"=> 10000,
	        "quantity"=> 1,
	        "tangible"=> true
	      )
	    )
	);

	$ch = curl_init("https://api.pagar.me/1/transactions");

	curl_setopt_array($ch, array(
	    CURLOPT_POST => TRUE,
	    CURLOPT_RETURNTRANSFER => TRUE,
	    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
	    CURLOPT_POSTFIELDS => json_encode($data)
	));
	// Acessar a URL e retornar a saída
	$output = curl_exec($ch);
	// liberar
	curl_close($ch);
	// Imprimir a saída
	// echo $output;

	$response = json_decode($output);

	// echo "<pre>";
	// print_r($response);
	// echo "</pre>";

	$idTransaction = $response->acquirer_id;

	// echo $idTransaction;

	//Fazendo o cadastro dos Recebedores

	 $bankAccount = $pagarMe->bankAccount()->create(
	    '341',
	    '0932',
	    '58054',
	    '5',
	    '26268738888',
	    'API BANK ACCOUNT',
	    '1'
	);

	$recipient = $pagarMe->recipient()->create(
	    /** @var $customer \PagarMe\Sdk\BankAccount\BankAccount */
	    $bankAccount,
	    'monthly',
	    13,
	    true,
	    true,
	    42
	);
	$recipient2 = $pagarMe->recipient()->create(
	    /** @var $customer \PagarMe\Sdk\BankAccount\BankAccount */
	    $bankAccount,
	    'monthly',
	    13,
	    true,
	    true,
	    42
	);
	$recipient3 = $pagarMe->recipient()->create(
	    /** @var $customer \PagarMe\Sdk\BankAccount\BankAccount */
	    $bankAccount,
	    'monthly',
	    13,
	    true,
	    true,
	    42
	);


	$splitRule = $pagarMe->splitRule()->percentageRule(
	    85,
	    $recipient,
	    true,
	    true
	);



});


$app->run();

?>