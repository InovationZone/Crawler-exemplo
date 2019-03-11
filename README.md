# crawler-info-orgao

Crawler que recebe um uge e captura as informações do orgão no [portal Bolsa Eletrônica de Compras](https://www.bec.sp.gov.br/)

## Instalação

### Instalar os requerimentos das bibliotecas

### Instalar as bibliotecas

```
composer install
```

### Exemplo de uso


```php
<?php

require __DIR__. '/vendor/autoload.php';

$po = new InovationZone\Crawlerbec\src\PageObject();

$result = $po->getPage('020101');

var_dump($result->getDataOrgao());
```
