<?php

$route['usuario/url'] = 'usuario/Url_controller/index';
$route['usuario/atualiza-url'] = 'usuario/atualizaurl_controller/index';

#USUARIO
$route['usuario/dashboard']['get'] = 'usuario/dashboard/Dashboard_controller/index';

$route['usuario/agendamentos/consulta/(:num)'] = 'usuario/agendamentos/Consulta_controller/index/$1';
$route['usuario/agendamentos/viagem/(:num)'] = 'usuario/agendamentos/Viagem_controller/index/$1';
$route['usuario/agendamentos/exame/(:num)'] = 'usuario/agendamentos/Exame_controller/index/$1';


$route['usuario/agendados/consulta'] = 'usuario/agendados/Consulta_controller/index';
$route['usuario/agendados/viagem'] = 'usuario/agendados/Viagem_controller/index';
$route['usuario/agendados/exame'] = 'usuario/agendados/Exame_controller/index';

$route['usuario/pacientes'] = 'usuario/pacientes/Pacientes_controller/index';


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
$route['usuario/excluir-paciente/(:num)']['get'] = 'usuario/Excluirpaciente_controller/index/$1';
$route['usuario/cadastros/cadastrar-veiculo'] = 'usuario/cadastros/Cadastrarveiculo_controller/index';
$route['usuario/cadastros/cadastrar-veiculo-save'] = 'usuario/cadastros/Cadastrarveiculosave_controller/index';
$route['usuario/cadastros/atualizar-veiculo-save/(:num)'] = 'usuario/cadastros/Atualizarveiculosave_controller/index/$1';
$route['usuario/cadastros/editar-veiculo/(:num)'] = 'usuario/cadastros/Atualizarveiculo_controller/index/$1';
