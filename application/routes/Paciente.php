<?php



$route['usuario/cadastros/cadastrar-paciente'] = 'usuario/cadastros/Cadastrarpaciente_controller/index';
$route['usuario/cadastros/salva-paciente'] = 'usuario/cadastros/Salvapaciente_controller/index';
$route['usuario/cadastros/edita-paciente/(:num)'] = 'usuario/cadastros/Editapaciente_controller/index/$1';
$route['usuario/cadastros/editar-paciente/(:num)'] = 'usuario/cadastros/Editarpaciente_controller/index/$1';
$route['usuario/cadastros/excluir-paciente/(:num)']['get'] = 'usuario/cadastros/Excluirpaciente_controller/index/$1';

/**
 * ROTAS v2
 */