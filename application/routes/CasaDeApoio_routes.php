<?php


$route['v2/regulacao/casa-de-apoio/agendados']['get'] = 'v2/regulacao/casa_de_apoio/Casa_de_apoio_controller/agendados';
$route['v2/regulacao/casa-de-apoio/historico']['get'] = 'v2/regulacao/casa_de_apoio/Casa_de_apoio_controller/historico';
$route['v2/regulacao/casa-de-apoio/novo']['post'] = 'v2/regulacao/casa_de_apoio/Casa_de_apoio_controller/novo';
$route['v2/regulacao/casa-de-apoio/editar-registro']['post'] = 'v2/regulacao/casa_de_apoio/Casa_de_apoio_controller/editar_registro';
$route['v2/regulacao/casa-de-apoio/update-status/(:num)']['get'] = 'v2/regulacao/casa_de_apoio/Casa_de_apoio_controller/update_status/$1';
$route['v2/regulacao/casa-de-apoio/json/(:num)']['post'] = 'v2/regulacao/casa_de_apoio/Casa_de_apoio_controller/jsonOne/$1';

$route['v2/regulacao/procedimentos/listagem']['get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/listagem';
$route['v2/regulacao/tfd/listagem']['get'] = 'v2/regulacao/tfd/TFD_controller/listagem';

$route['v2/regulacao/']['get'] = 'v2/regulacao/';
$route['v2/regulacao/']['get'] = 'v2/regulacao/';
