<?php

namespace App\Tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Request;

class HealthCheckActionTest extends WebTestCase
{
    protected function setUp() : void {
        error_reporting(0);
    }

    public function test_request_responded_success(): void
    {
        $client = static::createClient();
        $client->request(Request::METHOD_GET, '/health-check');

        $this->assertResponseIsSuccessful();
        $jsonResponse = json_decode($client->getResponse()->getContent(), true);
        $this->assertEquals($jsonResponse['status'], 'ok');
    }
}
