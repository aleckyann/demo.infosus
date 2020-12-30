<?php

$route['v2/configuracoes/estabelecimentos']['get'] = 'v2/configuracoes/Estabelecimentos_controller/index';
$route['v2/configuracoes/estabelecimentos/novo']['post'] = 'v2/configuracoes/Estabelecimentos_controller/novo';

$route['v2/configuracoes/procedimentos']['get'] = 'v2/configuracoes/Procedimentos_controller/index';
$route['v2/configuracoes/procedimentos/novo']['post'] = 'v2/configuracoes/Procedimentos_controller/novo';

$route['v2/configuracoes/municipios']['get'] = 'v2/configuracoes/Municipios_controller/index';
$route['v2/configuracoes/municipios/novo']['post'] = 'v2/configuracoes/Municipios_controller/novo';

$route['v2/configuracoes/especialidades']['get'] = 'v2/configuracoes/Especialidades_controller/index';
$route['v2/configuracoes/especialidades/novo']['post'] = 'v2/configuracoes/Especialidades_controller/novo';