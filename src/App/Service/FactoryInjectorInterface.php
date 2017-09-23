<?php

namespace App\Service;

use Faker\Factory;

interface FactoryInjectorInterface
{
    public function setFactoryInjector(Factory $factory);
    public function getFactory();
}