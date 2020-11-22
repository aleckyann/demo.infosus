<?php



$route['usuario/cadastros/cadastrar-paciente'] = 'usuario/cadastros/Cadastrarpaciente_controller/index';
$route['usuario/cadastros/salva-paciente'] = 'usuario/cadastros/Salvapaciente_controller/index';
$route['usuario/cadastros/edita-paciente/(:num)'] = 'usuario/cadastros/Editapaciente_controller/index/$1';
$route['usuario/cadastros/editar-paciente/(:num)'] = 'usuario/cadastros/Editarpaciente_controller/index/$1';
$route['usuario/cadastros/excluir-paciente/(:num)']['get'] = 'usuario/cadastros/Excluirpaciente_controller/index/$1';

/**
 * ROTAS v2
 */

$route['v2/pacientes']['get'] = 'v2/pacientes/Pacientes_controller/index';
$route['v2/pacientes']['post'] = 'v2/pacientes/Pacientes_controller/new';
$route['v2/pacientes/(:num)']['post'] = 'v2/pacientes/Pacientes_controller/edit';
