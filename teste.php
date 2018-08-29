<?php

    require __DIR__. '/vendor/autoload.php';
    $po = new Forseti\Crawlerbec\src\PageObject();

    $result = $po->get('020101');

    var_dump($result->getDadosOrgao());