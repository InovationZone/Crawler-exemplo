<?php
/**
 * Created by PhpStorm.
 * User: joao-silva
 * Date: 29/08/18
 * Time: 13:21
 */

namespace Forseti\Crawlerbec\tests;
use Symfony\Component\DomCrawler\Crawler;


abstract class ParserTest extends \PHPUnit_Framework_TestCase
{
    protected $dom;

    protected function setUp() {
        $this->dom = new Crawler();
    }

    abstract public function testParser();



}