<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new \Silex\Application();

$app['em']          = function(){ return  new \App\Doctrine\EntityManager(); };
$app['factory']     = function(){ return  new \Faker\Factory(); };
$app['response']    = function(){ return  new \Symfony\Component\HttpFoundation\Response(); };

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../templates',
));

$app->register(new Silex\Provider\ServiceControllerServiceProvider());

$app['App\Controller\HomeController::home'] = function () use ($app)
{
    return (new \App\Controllers\HomeController())->home(new \Faker\Factory());
};

//$app['test.controller'] = function () use ($app)
//{
//    return (new \App\Controller\HomeController())->test($app);
//};

//$app['home.controller'] = function () use ($app)
//{
//    return (new \App\Controller\HomeController($app));
//};

require_once __DIR__.'/registerProvider.php';


//$app["contato.controller"] = function () use ($app) {
//    return new \App\Controller\ContatoController($app);
//};


