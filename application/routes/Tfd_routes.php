<?php

$route['v2/regulacao/tfd/novo']['post'] = 'v2/regulacao/tfd/Tfd_controller/novo';
$route['v2/regulacao/tfd/negar']['post'] = 'v2/regulacao/tfd/Tfd_controller/negar';
$route['v2/regulacao/tfd/editar'][ 'post'] = 'v2/regulacao/tfd/Tfd_controller/editar';
$route['v2/regulacao/tfd/concluir/(:num)'][ 'get'] = 'v2/regulacao/tfd/Tfd_controller/concluir/$1';
$route['v2/regulacao/tfd/agendar']['post'] = 'v2/regulacao/tfd/Tfd_controller/agendar';
$route['v2/regulacao/tfd/reagendar']['post'] = 'v2/regulacao/tfd/Tfd_controller/reagendar';

$route['v2/regulacao/tfd/fila'][ 'get'] = 'v2/regulacao/tfd/Tfd_controller/fila';
$route['v2/regulacao/tfd/agendados']['get'] = 'v2/regulacao/tfd/Tfd_controller/agendados';
$route['v2/regulacao/tfd/realizados']['get'] = 'v2/regulacao/tfd/Tfd_controller/realizados';
$route['v2/regulacao/tfd/negados']['get'] = 'v2/regulacao/tfd/Tfd_controller/negados';

$route['v2/regulacao/tfd/json/(:num)']['post'] = 'v2/regulacao/tfd/Tfd_controller/jsonOne/$1';