<?php
/**
 * Created by PhpStorm.
 * User: joao-silva
 * Date: 29/08/18
 * Time: 09:20
 */
namespace InovationZone\Crawlerbec\src;

use Symfony\Component\DomCrawler\Crawler;

class Parser
{
    private $content;

    public function __construct($html)
    {
        $this->content = new Crawler();
        $this->content->addHtmlContent($html);
    }

    public function getHtml()
    {
        return $this->content->html();
    }

    public function getDataOrgao()
    {
        $data = array();

        $data['uge'] = $this->content
            ->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetUge"])')
            ->attr('value');

        $data['orgao'] = $this->content
            ->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetOrgao"])')
            ->attr('value');

        $data['gestao']  = $this->content
            ->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetGestao"])')
            ->attr('value');

        $data['nome']  = $this->content
            ->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetNome"])')
            ->attr('value');

        $data['$endereco']  = $this->content
            ->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetEndereco"])')
            ->attr('value');

        $data['municipio']  = $this->content
            ->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetMunicipio"])')
            ->attr('value');

        $data['cep']  = $this->content
            ->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetCEP"])')
            ->attr('value');

        $data['email']  = $this->content
            ->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetEMail"])')
            ->attr('value');

        $data['pritelefone']  = $this->content
            ->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetPriTelefone"])')
            ->attr('value');

        $data['segtelefone']  = $this->content
            ->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetSegTelefone"])')
            ->attr('value');

        $data['fax']  = $this->content->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetFax"])')
            ->attr('value');

        $data['cnpj']  = $this->content->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetCNPJ"])')
            ->attr('value');

        return $data;
    }
}
