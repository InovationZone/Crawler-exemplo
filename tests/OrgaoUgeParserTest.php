<?php
/**
 * Created by PhpStorm.
 * User: joao-silva
 * Date: 29/08/18
 * Time: 13:17
 */

namespace Forseti\Crawlerbec\tests;
use Forseti\Crawlerbec\src\Parser;


class OrgaoUgeParserTest extends ParserTest
{
    private $parser;

    protected function setUp()
    {
        $html = file_get_contents(__DIR__ . '/resources/teste.html');
        $this->parser = new Parser($html);

    }

    public function testParser()
    {
        $this->assertNotEmpty($this->parser->getHtml());

    }




}