<?php 

require 'vendor/autoload.php';
use Challenge\Page;

$app = new \Slim\App;

$app->get('/', function() {
    
	require('views/index.html');

});

$app->run();

?>