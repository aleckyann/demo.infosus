<?php

$route['usuario/regulacao'] = 'usuario/regulacao/Regulacao_controller/index';

$route['usuario/regulacao/add-paciente-casa-save/add-paciente-casa']['post'] = 'usuario/regulacao/Addpacientecasa_controller/save';
$route['usuario/regulacao/add-paciente-casa-save/(:num)'] = 'usuario/regulacao/Addpacientecasasave_controller/index/$1';
$route['usuario/regulacao/atualizar-datas-casa-save/(:num)']['post'] = 'usuario/regulacao/Atualizardatascasa_controller/update/$1';
$route['usuario/regulacao/baixa-paciente-casa/(:num)'] = 'usuario/regulacao/Baixapacientecasa_controller/index/$1';

$route['usuario/regulacao/lista-pacientes'] = 'usuario/regulacao/Pacientes_controller/index';
$route['usuario/regulacao/dados-paciente/(:num)']['get'] = 'usuario/regulacao/Dadospaciente_controller/index/$1';
$route['usuario/regulacao/solicitar-procedimento/(:num)']['get'] = 'usuario/regulacao/SolicitarProcedimento_controller/index/$1';
$route['usuario/regulacao/salva-procedimento'] = 'usuario/regulacao/SolicitarProcedimento_controller/salvar';


$route['usuario/regulacao/fila'] = 'usuario/regulacao/Fila_controller/index';
$route['usuario/regulacao/historico-paciente/(:num)']['get'] = 'usuario/regulacao/Historico_controller/index/$1';
$route['usuario/regulacao/agendar-paciente/(:num)']['get'] = 'usuario/regulacao/Agendar_controller/index/$1';
$route['usuario/regulacao/add-paciente-casa/(:num)'] = 'usuario/regulacao/Addpacientecasa_controller/index/$1';
$route['usuario/regulacao/atualizar-datas-casa/(:num)/(:num)'] = 'usuario/regulacao/Atualizardatascasa_controller/index/$1/$2';
$route['usuario/regulacao/atualiza-procedimento'] = 'usuario/regulacao/Incluiestabelecimento_controller/index';
$route['usuario/regulacao/indicadores'] = 'usuario/regulacao/Indicadoresregulacao_controller/index';
$route['usuario/regulacao/agendados'] = 'usuario/regulacao/Agendados_controller/index';
$route['usuario/regulacao/agendados-tfd'] = 'usuario/regulacao/Agendadostfd_controller/index';
$route['usuario/regulacao/concluir-paciente/(:num)'] = 'usuario/regulacao/Baixapaciente_controller/index/$1';
$route['usuario/regulacao/lista-demanda-reprimida'] = 'usuario/regulacao/Demandareprimida_controller/index';
$route['usuario/regulacao/lista-demanda-reprimida-tfd'] = 'usuario/regulacao/Demandareprimidatfd_controller/index';
$route['usuario/regulacao/procedimentos-diversos'] = 'usuario/regulacao/Procedimentosdiversos_controller/index';
$route['usuario/regulacao/tfd'] = 'usuario/regulacao/Tfd_controller/index';

$route['usuario/regulacao/solicitacao-tfd/(:num)']['get'] = 'usuario/regulacao/Solicitacaotfd_controller/index/$1';

$route['usuario/regulacao/cadastra-tfd'] = 'usuario/regulacao/Cadastratfd_controller/index';
$route['usuario/regulacao/fila-tfd'] = 'usuario/regulacao/Filatfd_controller/index';
$route['usuario/regulacao/visualiza-tfd/(:num)'] = 'usuario/regulacao/Visualizatfd_controller/index/$1';
$route['usuario/regulacao/concluir-paciente-tfd/(:num)'] = 'usuario/regulacao/Baixapacientetfd_controller/index/$1';
$route['usuario/regulacao/casa-de-apoio'] = 'usuario/regulacao/Casaapoio_controller/index';


//manga
$route['usuario/regulacao/concluir-paciente-tfd-manga/(:num)'] = 'usuario/regulacao/Baixapacientetfdmanga_controller/index/$1';
$route['usuario/regulacao/cadastra-tfd-manga'] = 'usuario/regulacao/Cadastratfdmanga_controller/index';
$route['usuario/regulacao/solicitacao-tfd-manga/(:num)'] = 'usuario/regulacao/Solicitacaotfdmanga_controller/index';


/**
 * ROTAS v2
 */


$route['v2/regulacao/casa-de-apoio/listagem']['get'] = 'v2/regulacao/casa_de_apoio/Casa_de_apoio_controller/listagem';
$route['v2/regulacao/casa-de-apoio/new']['post'] = 'v2/regulacao/casa_de_apoio/Casa_de_apoio_controller/new';

$route['v2/regulacao/procedimentos/listagem']['get'] = 'v2/regulacao/procedimentos/Procedimentos_controller/listagem';
$route['v2/regulacao/tfd/listagem']['get'] = 'v2/regulacao/tfd/TFD_controller/listagem';

$route['v2/regulacao/']['get'] = 'v2/regulacao/';
$route['v2/regulacao/']['get'] = 'v2/regulacao/';
