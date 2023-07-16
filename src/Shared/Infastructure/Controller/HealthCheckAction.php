<?php

namespace App\Shared\Infastructure\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/health-check', name: 'health-check', methods: ['GET'])]
class HealthCheckAction
{
    public function __invoke(): JsonResponse
    {
       return new JsonResponse(['status'=> 'ok']);
    }
}