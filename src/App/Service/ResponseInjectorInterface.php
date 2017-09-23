<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Response;

interface ResponseInjectorInterface
{
    public function setResponseInjector(Response $response);
    public function getResponse();
}