<?php



$route['usuario/cadastros/cadastrar-paciente'] = 'usuario/cadastros/Cadastrarpaciente_controller/index';
$route['usuario/cadastros/salva-paciente'] = 'usuario/cadastros/Salvapaciente_controller/index';
$route['usuario/cadastros/edita-paciente/(:num)'] = 'usuario/cadastros/Editapaciente_controller/index/$1';
$route['usuario/cadastros/editar-paciente/(:num)'] = 'usuario/cadastros/Editarpaciente_controller/index/$1';
$route['usuario/cadastros/excluir-paciente/(:num)']['get'] = 'usuario/cadastros/Excluirpaciente_controller/index/$1';

/**
 * ROTAS v2
 */

$route['v2/pacientes/listagem']['get'] = 'v2/pacientes/Pacientes_controller/listagem';
$route['v2/pacientes/new']['post'] = 'v2/pacientes/Pacientes_controller/new';
$route['v2/pacientes/edit']['post'] = 'v2/pacientes/Pacientes_controller/edit';
$route['v2/pacientes/json']['post'] = 'v2/pacientes/Pacientes_controller/jsonAll';
$route['v2/pacientes/jsonDatatable']['post'] = 'v2/pacientes/Pacientes_controller/jsonDatatable';
$route['v2/pacientes/json/(:num)']['post'] = 'v2/pacientes/Pacientes_controller/jsonOne/$1';
