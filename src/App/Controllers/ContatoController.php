<?php

namespace App\Controllers;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
/**
 * @author Cadmiel Jorge <cadmieljorge@diegobrocanelli.com.br>
 */
class ContatoController extends AbstractDefaultController
{
    /**
     * Render welcome view.
     *
     * @param  Application $app Silex\Application
     * @return Twig_Environment
     */

    public function __construct($cad)
    {
        //die('construtor contato');
    }

    public function test(Application $app)
    {
        //dump($this->getEntityManager());
        die('chegou no test contato');
    }



    public function indexAction(Application $app, Request $request)
    {
        die('pagina de contato');
    }
}