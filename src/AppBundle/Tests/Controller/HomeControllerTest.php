<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    public function testHome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/home');
    }

    public function testCampingsite()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/campingSite');
    }

    public function testApartment()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/apartment');
    }

    public function testPrices()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/prices');
    }

    public function testJoris()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/joris');
    }

}
