<?php

$route['usuario/regulacao/json'] = "usuario/regulacao/Api_controller/index";

/**
 * ROTAS v2
 */

$route['v2/api/tabela_proced/select2']['post'] = 'v2/api/Tabela_proced_controller/select2';
$route['v2/api/municipios/select2']['post'] = 'v2/api/Municipios_controller/select2';
$route['v2/api/municipios/json']['post'] = 'v2/api/Municipios_controller/json';
$route['v2/api/viagens/json']['post'] = 'v2/api/Viagens_controller/json';
$route['v2/api/passageiros/json']['post'] = 'v2/api/Passageiros_controller/json';
$route['v2/api/veiculos/json']['post'] = 'v2/api/Veiculos_controller/json';
$route['v2/api/usuarios/json'][ 'post'] = 'v2/api/Usuarios_controller/json';
$route['v2/api/estabelecimentos-prestadores/json']['post'] = 'v2/api/Estabelecimentos_controller/prestadores';
$route['v2/api/estabelecimentos-solicitantes/json']['post'] = 'v2/api/Estabelecimentos_controller/solicitantes';
$route['v2/api/tfd/json']['post'] = 'v2/api/Tfd_controller/json';
$route['v2/api/cotas/json']['post'] = 'v2/api/Cotas_controller/json';
