<?php

$route['usuario/transportes/inicial'] = 'usuario/transportes/Transportes_controller/index';
$route['usuario/transportes/veiculos'] = 'usuario/transportes/Veiculos_controller/index';
$route['usuario/transportes/criar-viagem/(:num)']['get'] = 'usuario/transportes/Criarviagem_controller/index/$1';
$route['usuario/transportes/criar-viagem']['post'] = 'usuario/transportes/Criarviagem_controller/criar';
$route['usuario/transportes/viagens'] = 'usuario/transportes/Viagens_controller/index';
$route['usuario/transportes/passageiros/(:num)'] = 'usuario/transportes/Passageiros_controller/index/$1';
$route['usuario/transportes/finalizar-viagem/(:num)'] = 'usuario/transportes/Finalizarviagem_controller/index/$1';

$route['usuario/cadastros/cadastrar-veiculo'] = 'usuario/cadastros/Cadastrarveiculo_controller/index';
$route['usuario/cadastros/cadastrar-veiculo-save'] = 'usuario/cadastros/Cadastrarveiculosave_controller/index';
$route['usuario/cadastros/atualizar-veiculo-save/(:num)'] = 'usuario/cadastros/Atualizarveiculosave_controller/index/$1';
$route['usuario/cadastros/editar-veiculo/(:num)'] = 'usuario/cadastros/Atualizarveiculo_controller/index/$1';


/**
 * ROTAS v2
 */

 $route['v2/transportes/veiculos'] = 'v2/transportes/';
 $route['v2/transportes/viagens'] = 'v2/transportes/';
 $route['v2/transportes/nova-viagem  '] = 'v2/transportes/';