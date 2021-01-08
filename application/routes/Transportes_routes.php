<?php

$route['v2/transportes/veiculos']['get'] = 'v2/transportes/Veiculos_controller/index';
$route['v2/transportes/veiculos/novo']['post'] = 'v2/transportes/Veiculos_controller/novo';
$route['v2/transportes/veiculos/editar']['post'] = 'v2/transportes/Veiculos_controller/editar';

$route['v2/transportes/viagens-agendadas']['get'] = 'v2/transportes/Viagens_controller/viagens_agendadas';
$route['v2/transportes/viagens-realizadas']['get'] = 'v2/transportes/Viagens_controller/viagens_realizadas';
$route['v2/transportes/viagens/novo']['post'] = 'v2/transportes/Viagens_controller/novo';
$route['v2/transportes/viagens/editar'][ 'post'] = 'v2/transportes/Viagens_controller/editar';

$route['v2/transportes/viagens/cancelar/(:num)']['get'] = 'v2/transportes/Viagens_controller/cancelar/$1';
$route['v2/transportes/viagens/finalizar/(:num)']['get'] = 'v2/transportes/Viagens_controller/finalizar/$1';
