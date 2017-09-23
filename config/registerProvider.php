<?php

$app->register(new \App\Providers\AppServiceProvider(), [
    'injector.interfaces' => [
        'em'            => \App\Service\EntityManagerInjectorInterface::class,
        'url_generator' => \App\Service\UrlGeneratorInjectorInterface::class,
        'twig'          => \App\Service\TwigInjectorInterface::class,
        'factory'       => \App\Service\FactoryInjectorInterface::class,
        'response'      => \App\Service\ResponseInjectorInterface::class
    ]
]);