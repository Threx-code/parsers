<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ServiceTestCase extends WebTestCase
{
    protected  function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->container = static::createClient()->getContainer();
    }

}