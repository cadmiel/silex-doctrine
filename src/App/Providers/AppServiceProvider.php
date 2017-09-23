<?php

namespace App\Providers;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class AppServiceProvider implements ServiceProviderInterface
{

    /**
     * Registers services on the given container.
     *
     * This method should only be used to configure services and parameters.
     * It should not get services.
     *
     * @param Container $pimple A container instance
     */
    public function register(Container $pimple)
    {
        $pimple['injector'] = function() use($pimple){
            $injector = new \App\Service\InjectorController($pimple);
            foreach ($pimple['injector.interfaces'] as $service => $interface){
                $injector->addInterface($service,$interface);
            }
            return $injector;
        };

        $pimple['getControllerName'] = getControllerName();
        $name = (string)$pimple['getControllerName']['alias'];
        $pimple[$name] = function() use($pimple)
        {
            $controller = new $pimple['getControllerName']['name']($pimple);
            $pimple['injector']->inject($controller);
            return $controller;
        };
    }

    public function registerServices($pimple){

    }

    public function registerControllers($pimple){

    }
}