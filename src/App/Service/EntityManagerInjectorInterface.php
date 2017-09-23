<?php

namespace App\Service;

use App\Doctrine\EntityManager;

interface EntityManagerInjectorInterface
{
    public function setEntityManagerInjector(EntityManager $entityManager);
    public function getEntityManager();
}