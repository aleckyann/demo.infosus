<?php

$route['v2/regulacao/procedimentos/novo']['post'] = 'v2/regulacao/procedimentos/Procedimentos_controller/novo';
$route['v2/regulacao/procedimentos/reprimir']['post'] = 'v2/regulacao/procedimentos/Procedimentos_controller/reprimir';
$route['v2/regulacao/procedimentos/editar'][ 'post'] = 'v2/regulacao/procedimentos/Procedimentos_controller/editar';
$route['v2/regulacao/procedimentos/concluir/(:num)'][ 'get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/concluir/$1';
$route['v2/regulacao/procedimentos/agendar']['post'] = 'v2/regulacao/procedimentos/Procedimentos_controller/agendar';

$route['v2/regulacao/procedimentos/fila'][ 'get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/fila';
$route['v2/regulacao/procedimentos/agendados']['get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/agendados';
$route['v2/regulacao/procedimentos/realizados']['get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/realizados';
$route['v2/regulacao/procedimentos/reprimidos']['get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/reprimidos';

$route['v2/regulacao/procedimentos/json/(:num)']['post'] = 'v2/regulacao/procedimentos/Procedimentos_controller/jsonOne/$1';
