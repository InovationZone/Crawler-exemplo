<?php
namespace InovationZone\Crawlerbec\src;

use GuzzleHttp\Client;

class PageObject
{
    private $http;

    public function __construct()
    {
        $this->http = new Client();
    }

    public function getPage($codigo)
    {
        $content = $this->http->get("https://www.bec.sp.gov.br/BECSP/UGE/UGEResultado.aspx", [
            'query' => [
                'chave' => '',
                'CdUge' => $codigo
            ]
        ]);

        return new Parser($content->getBody()->getContents());
    }

    public function getHtml($codigo)
    {
        $content = $this->http->get("https://www.bec.sp.gov.br/BECSP/UGE/UGEResultado.aspx", [
            'query' => [
                'chave' => '',
                'CdUge' => $codigo
            ]
        ]);

        return $content->getBody()->getContents();
    }
}
