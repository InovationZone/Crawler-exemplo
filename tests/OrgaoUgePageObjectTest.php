<?php
use InovationZone\Crawlerbec\src\PageObject;

/**
 * Created by PhpStorm.
 * User: joao-silva
 * Date: 29/08/18
 * Time: 12:40
 */
namespace InovationZone\Crawlerbec\tests;

class OrgaoUgePageObjectTest extends PageObjectTest
{
    public function testStatus200Ok()
    {
        $content = $this->guzzle->get("https://www.bec.sp.gov.br/BECSP/UGE/UGEResultado.aspx", [
            'query' => [
                'chave' => '',
                'CdUge' => '020101'
            ]
        ]);
        $this->assertEquals(200, $content->getStatusCode());
    }
}
