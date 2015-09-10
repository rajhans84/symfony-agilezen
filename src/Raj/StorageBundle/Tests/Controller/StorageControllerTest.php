<?php

namespace Raj\StorageBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class StorageControllerTest extends WebTestCase
{
    public function testDirect()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/direct');
    }

    public function testStories()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/stories');
    }

    public function testPhases()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/phases');
    }

}
