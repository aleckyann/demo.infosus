<?php

#USUARIO
$route['usuario/dashboard']['get'] = 'usuario/dashboard/Dashboard_controller/index';

$route['usuario/transportes/inicial'] = 'usuario/transportes/Transportes_controller/index';
$route['usuario/transportes/veiculos'] = 'usuario/transportes/Veiculos_controller/index';
$route['usuario/transportes/criar-viagem/(:num)']['get'] = 'usuario/transportes/Criarviagem_controller/index/$1';
$route['usuario/transportes/criar-viagem']['post'] = 'usuario/transportes/Criarviagem_controller/criar';
$route['usuario/transportes/viagens'] = 'usuario/transportes/Viagens_controller/index';
$route['usuario/transportes/passageiros/(:num)'] = 'usuario/transportes/Passageiros_controller/index/$1';
$route['usuario/transportes/finalizar-viagem/(:num)'] = 'usuario/transportes/Finalizarviagem_controller/index/$1';



//atenção primária

$route['usuario/atencao-primaria'] = 'usuario/atencao-primaria/Atencaoprimaria_controller/index';


$route['usuario/cadastros/cadastrar-paciente'] = 'usuario/cadastros/Cadastrarpaciente_controller/index';
$route['usuario/cadastros/salva-paciente'] = 'usuario/cadastros/Salvapaciente_controller/index';
$route['usuario/cadastros/edita-paciente/(:num)'] = 'usuario/cadastros/Editapaciente_controller/index/$1';
$route['usuario/cadastros/editar-paciente/(:num)'] = 'usuario/cadastros/Editarpaciente_controller/index/$1';
$route['usuario/cadastros/excluir-paciente/(:num)']['get'] = 'usuario/cadastros/Excluirpaciente_controller/index/$1';
$route['usuario/cadastros/cadastrar-veiculo'] = 'usuario/cadastros/Cadastrarveiculo_controller/index';
$route['usuario/cadastros/cadastrar-veiculo-save'] = 'usuario/cadastros/Cadastrarveiculosave_controller/index';
$route['usuario/cadastros/atualizar-veiculo-save/(:num)'] = 'usuario/cadastros/Atualizarveiculosave_controller/index/$1';
$route['usuario/cadastros/editar-veiculo/(:num)'] = 'usuario/cadastros/Atualizarveiculo_controller/index/$1';
