<?php
/**
 * Created by PhpStorm.
 * User: joao-silva
 * Date: 29/08/18
 * Time: 09:20
 */

namespace Forseti\Crawlerbec\src;
use Symfony\Component\DomCrawler\Crawler;


class Parser
{
    private $conteudo;


    public function __construct($html)
    {
        $this->conteudo = new Crawler();
        $this->conteudo->addHtmlContent($html);
    }


   /* public function pegaParametrosPost() {
        $text = $this->conteudo->html();

         preg_match('#(<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="(.*?)")#',
            $text,$matchesViewSate);

         preg_match('#(<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="(.*?)">)#',
            $text,$matchesGenerator);

        preg_match('#(<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="(.*?)">)#',
            $text,$matchesValidation);

        return new PesquisaUge($matchesViewSate[2],$matchesGenerator[2],$matchesValidation[2]);
    }*/

    public function getHtml(){
        return $this->conteudo->html();
    }

    public function getDadosOrgao() {

        $dados = array();

        $dados['uge'] = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetUge"])')->
            attr('value');

        $dados['orgao'] = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetOrgao"])')->
            attr('value');

        $dados['gestao']  = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetGestao"])')->
            attr('value');

        $dados['nome']  = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetNome"])')->
            attr('value');

        $dados['$endereco']  = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetEndereco"])')->
        attr('value');

        $dados['municipio']  = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetMunicipio"])')->
        attr('value');

        $dados['cep']  = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetCEP"])')->
        attr('value');

        $dados['email']  = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetEMail"])')->
        attr('value');

        $dados['pritelefone']  = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetPriTelefone"])')->
        attr('value');

        $dados['segtelefone']  = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetSegTelefone"])')->
        attr('value');

        $dados['fax']  = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetFax"])')->
        attr('value');

        $dados['cnpj']  = $this->conteudo->FilterXPath('(//input[@id="ctl00_ContentPlaceHolder1_txtRetCNPJ"])')->
        attr('value');

        return $dados;
    }

}

