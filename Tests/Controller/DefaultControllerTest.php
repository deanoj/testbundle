<?php

namespace Deanoj\TestBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('h1:contains("Test Bundle")')->count() > 0);
    }

    public function testIndexPageTitle()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertTrue($crawler->filter('title:contains("Test Bundle Page Title")')->count() > 0);
    }
}
