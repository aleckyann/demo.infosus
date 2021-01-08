<?php

$route['usuario/regulacao/json'] = "usuario/regulacao/Api_controller/index";

/**
 * ROTAS v2
 */

$route['v2/api/tabela_proced/select2']['post'] = 'v2/api/Tabela_proced_controller/select2';
$route['v2/api/municipios/select2']['post'] = 'v2/api/Municipios_controller/select2';
$route['v2/api/viagens/json']['post'] = 'v2/api/Viagens_controller/json';
$route['v2/api/passageiros/json']['post'] = 'v2/api/Passageiros_controller/json';
