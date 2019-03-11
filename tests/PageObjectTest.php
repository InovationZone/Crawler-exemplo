<?php

namespace InovationZone\Crawlerbec\tests;

use GuzzleHttp\Client;

abstract class PageObjectTest extends \PHPUnit_Framework_TestCase
{
    protected $guzzle;
    protected $pageObject;

    protected function setUp()
    {
        $this->guzzle = new Client();
    }

    abstract public function testStatus200Ok();
}
