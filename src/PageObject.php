<?php
namespace Forseti\Crawlerbec\src;

use GuzzleHttp\Client;

Class PageObject {

    private $http;

    public function __construct()
    {
        $this->http = new Client();
    }

     function get($codigo) {
        $content = $this->http->get("https://www.bec.sp.gov.br/BECSP/UGE/UGEResultado.aspx", [
            'query' => [
                'chave' => '',
                'CdUge' => $codigo
            ]
        ]);

        return new Parser($content->getBody()->getContents());
    }

    function getHtml($codigo) {
        $content = $this->http->get("https://www.bec.sp.gov.br/BECSP/UGE/UGEResultado.aspx", [
            'query' => [
                'chave' => '',
                'CdUge' => $codigo
            ]
        ]);

        return $content->getBody()->getContents();
    }

}


?>