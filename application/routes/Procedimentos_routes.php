<?php

$route['v2/regulacao/procedimentos/fila']['get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/fila';
$route['v2/regulacao/procedimentos/agendados']['get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/agendados';
$route['v2/regulacao/procedimentos/realizados']['get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/realizados';
$route['v2/regulacao/procedimentos/reprimidos']['get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/reprimidos';

$route['v2/regulacao/']['get'] = 'v2/regulacao/';
