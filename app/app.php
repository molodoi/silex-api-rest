<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\HttpFoundation\Request;

ErrorHandler::register();
ExceptionHandler::register();

$app->register(new Silex\Provider\DoctrineServiceProvider());

//dump($app);

$app['dao.user'] = function ($app) {
	return new SilexApi\Entity\UserDao($app['db']);
};
/*
// Register JSON data decoder for JSON requests
$app->before(function (Request $request) {
	if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
		$data = json_decode($request->getContent(), true);
		$request->request->replace(is_array($data) ? $data : array());
	}
});
*/
?>