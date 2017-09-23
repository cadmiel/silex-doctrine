<?php

namespace App\Controllers;

use App\Doctrine\EntityManager;
use App\Service\EntityManagerInjectorInterface;
use App\Service\DoctrineDbalInjectorInterface;
use App\Service\FactoryInjectorInterface;
use App\Service\ResponseInjectorInterface;
use App\Service\TwigInjectorInterface;
use App\Service\UrlGeneratorInjectorInterface;
use Faker\Factory;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGenerator;

class AbstractDefaultController implements
    EntityManagerInjectorInterface, TwigInjectorInterface,
    UrlGeneratorInjectorInterface, FactoryInjectorInterface,
    ResponseInjectorInterface
{

    /**
     * @var \App\Doctrine\EntityManager $entityManager
     */
    private $entityManager;

    /**
     * @var \Twig_Environment $twig
     */
    private $twig;

    /**
     * @var Factory $factory
     */
    private $factory;

    /**
     * @var UrlGenerator
     */
    private $urlGenerator;

    /**
     * @var Response $response
     */
    private $response;

    public function setEntityManagerInjector(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getEntityManager()
    {
        return $this->entityManager->data();
    }

    public function setFactoryInjector(Factory $factory)
    {
        $this->factory  =   $factory;
    }

    public function getFactory()
    {
        return $this->factory;
    }

    public function setResponseInjector(Response $response)
    {
        $this->response =   $response;
    }
    public function getResponse()
    {
        return $this->response;
    }

    public function setTwigInjector(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function getTwig()
    {
        return $this->twig;
    }

    public function setUrlGeneratorInjector(UrlGenerator $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function getUrlGenerator()
    {
        return $this->urlGenerator;
    }
}