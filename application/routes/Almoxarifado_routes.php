<?php

$route['v2/almoxarifado/dashboard']['get'] = 'v2/almoxarifado/Dashboard_controller/index';

$route['v2/almoxarifado/estoque/novo']['post'] = 'v2/almoxarifado/Estoques_controller/novo_estoque';
$route['v2/almoxarifado/estoque/(:num)']['get'] = 'v2/almoxarifado/Estoques_controller/index/$1';

$route['v2/almoxarifado/historico']['get'] = 'v2/almoxarifado/Historico_controller/index';

///
$route['v2/almoxarifado/produtos']['get'] = 'v2/almoxarifado/Produtos_controller/index';
$route['v2/almoxarifado/produtos/novo']['post'] = 'v2/almoxarifado/Produtos_controller/novo';
$route['v2/almoxarifado/produtos/retirar']['post'] = 'v2/almoxarifado/Produtos_controller/retirar';
$route['v2/almoxarifado/produtos/repor']['post'] = 'v2/almoxarifado/Produtos_controller/repor';
