<?php

$route['v2/almoxarifado/estoques']['get'] = 'v2/almoxarifado/Estoques_controller/index';
$route['v2/almoxarifado/estoques/novo']['post'] = 'v2/almoxarifado/Estoques_controller/novo';

$route['v2/almoxarifado/produtos']['get'] = 'v2/almoxarifado/Produtos_controller/index';
$route['v2/almoxarifado/produtos/novo']['post'] = 'v2/almoxarifado/Produtos_controller/novo';
