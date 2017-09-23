<?php

namespace App\Service;

interface TwigInjectorInterface
{
    public function setTwigInjector(\Twig_Environment $twig);
    public function getTwig();
}