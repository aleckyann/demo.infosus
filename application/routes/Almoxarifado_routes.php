<?php

$route['v2/almoxarifado']['get'] = 'v2/almoxarifado/Almoxarifado_controller/index';
$route['v2/almoxarifado/novo']['post'] = 'v2/almoxarifado/Almoxarifado_controller/novo';
$route['v2/almoxarifado/novo']['post'] = 'v2/almoxarifado/Almoxarifado_controller/novo';

$route['v2/almoxarifado/(:num)/estoques']['get'] = 'v2/almoxarifado/Estoques_controller/index/$1';
$route['v2/almoxarifado/(:num)/estoques']['post'] = 'v2/almoxarifado/Estoques_controller/novo/$1';

$route['v2/almoxarifado/produtos']['get'] = 'v2/almoxarifado/Produtos_controller/index';
$route['v2/almoxarifado/produtos/novo']['post'] = 'v2/almoxarifado/Produtos_controller/novo';