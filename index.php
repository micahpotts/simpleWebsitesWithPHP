<?php
require __DIR__ . '/vendor/autoload.php';
date_default_timezone_set("America/Kentucky/Louisville");

// $log = new Monolog\Logger('name');
// $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
// $log->addWarning('Foo');

$app = new \Slim\Slim();

$app->get('/', function() use($app) {
	$app->render('index.html');
});

$app->get('/contact', function() use($app) {
	$app->render('contact.html');
});

$app->run();