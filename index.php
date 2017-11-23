<?php 

require 'vendor/autoload.php';

use Challenge\Page;
use Challenge\Model\Checkout;
use Challenge\Model\Card;
use Challenge\Model\Product;
use Challenge\Model\Recipient;
use Challenge\Model\Order;
use Challenge\Model\Customer;


use Challenge\Controller\CheckoutController;
use Challenge\Controller\RecipientController;

use \Slim\App;

$config = [
    'settings' => [
        'displayErrorDetails' => true
    ]
];
$app = new App($config);

$app->get('/', function() {

	$page = new Page();

	$page->setTpl("index");
});

$app->get('/checkout/', function() {

	/**
	* Pagar.me API KEY 
	*/
	$apiKey = "ak_test_LuuGNNy0CHFLNqRdLzUQ8mtWxZaJQ6";

	$checkoutController = new CheckoutController($apiKey);

	/**
	* Create a card to get the id from the Pagar.me API
	*/

	$card = new Card("4018720572598048","1122","Aardvark Silva","123");

	$card->setId($checkoutController->getIdCard($card));

	/**
	* Use Credit Card
	*/

	$payment_method = "credit_card";

	/**
	* Set the split rule 
	*/

	$recipientController = new RecipientController("78945604567","Maria Barros",$apiKey);
	$recipientController->getBankId();
	$recipientController->getRecipientId();
	$recipient = $recipientController->getRecipient();

	$product = new Product("Fantasia do Darth Vader",125.00);
	$product->setRecipient($recipient->getId());

	$recipientController = new RecipientController("145678979817","João Thiago Samuel Cavalcanti",$apiKey);
	$recipientController->getBankId();
	$recipientController->getRecipientId();
	$recipient = $recipientController->getRecipient();

	$product2 = new Product("Fantasia do Cafú",100.00);
	$product2->setRecipient($recipient->getId());

	$recipient = new RecipientController("12797703847","César Anthony João Martins",$apiKey);
	$recipientController->getBankId();
	$recipientController->getRecipientId();
	$recipient = $recipientController->getRecipient();

	$product3 = new Product("Máscara de Cavalo",150.00);
	$product3->setRecipient($recipient->getId());

	$order = new Order(42.00);

	$order->addProduct($product);
	$order->addProduct($product2);
	$order->addProduct($product3);
 
	$order->setMainRecipient($product->getRecipient(),15);

	$customer = new Customer(
					"Maicon Soares Gouveia",
					"gouveia.maicon@gmail.com",
					1,
					"individual",
					"br",
					"23061994",
					array("+5511972431309"),
					array("type"=>"cpf","number"=>"43072807841")
				);

	$infoTransaction = $checkoutController->setTransaction($order,$card,$customer);

	$page = new Page();

	$page->setTpl(
			"checkout",
			array(
				"title"=>"Checkout",
				"transaction"=>$infoTransaction["id"],
				"status"=>$infoTransaction["status"]
			)
		);

});


$app->run();

?>