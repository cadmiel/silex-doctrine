<?php

namespace App\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Faker\Factory;
/**
 * @author Cadmiel Jorge <cadmieljorge@hotmail.com>
 */
class HomeController extends AbstractDefaultController
{

    public function test()
    {
        return $this->getResponse()->create('chegou no HomeController::test');
    }

    public function home(Factory $factory)
    {

//       $faker = $factory->create('pt_PT');
//        foreach (range(1,10) as $index)
//        {
//            echo $faker->name;
//        }
        die('stop');
    }

    public function indexAction(Application $app, Request $request)
    {

        return $this->getTwig()->render('bem-vindo.twig', array(
            'content' => 'Hello World!'
        ));
    }
}