<?php

require __DIR__. '/vendor/autoload.php';

$po = new InovationZone\Crawlerbec\src\PageObject();

$result = $po->getPage('020101');

var_dump($result->getDataOrgao());