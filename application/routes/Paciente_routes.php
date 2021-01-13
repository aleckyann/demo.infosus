<?php

$route['v2/pacientes/listagem']['get'] = 'v2/pacientes/Pacientes_controller/listagem';
$route['v2/pacientes/historicos/(:num)']['get'] = 'v2/pacientes/Pacientes_controller/historicos/$1';
$route['v2/pacientes/new']['post'] = 'v2/pacientes/Pacientes_controller/new';
$route['v2/pacientes/edit']['post'] = 'v2/pacientes/Pacientes_controller/edit';
$route['v2/pacientes/json']['post'] = 'v2/pacientes/Pacientes_controller/jsonAll';
$route['v2/pacientes/json/select2']['post'] = 'v2/pacientes/Pacientes_controller/select2';
$route['v2/pacientes/jsonOne']['post'] = 'v2/pacientes/Pacientes_controller/jsonOne';
