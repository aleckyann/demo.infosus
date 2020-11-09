<?php
defined('BASEPATH') OR die('404. That’s an error.');

foreach(glob("application/routes/*.php") as $filename)
{
    require_once($filename);
}

$route['usuario/url']                          	= 'usuario/Url_controller/index';
$route['usuario/atualiza-url']                  = 'usuario/atualizaurl_controller/index';

#USUARIO
$route['usuario/dashboard']['get']                            	= 'usuario/dashboard/Dashboard_controller/index';

$route['usuario/agendamentos/consulta/(:num)']                	= 'usuario/agendamentos/Consulta_controller/index';
$route['usuario/agendamentos/viagem/(:num)']                  	= 'usuario/agendamentos/Viagem_controller/index';
$route['usuario/agendamentos/exame/(:num)']                   	= 'usuario/agendamentos/Exame_controller/index';


$route['usuario/agendados/consulta']                          	= 'usuario/agendados/Consulta_controller/index';
$route['usuario/agendados/viagem']                            	= 'usuario/agendados/Viagem_controller/index';
$route['usuario/agendados/exame']                             	= 'usuario/agendados/Exame_controller/index';

$route['usuario/pacientes']                                   	= 'usuario/pacientes/Pacientes_controller/index';

//REGULAÇÃO

$route['usuario/regulacao']                                   	= 'usuario/regulacao/Regulacao_controller/index';

$route['usuario/regulacao/lista-pacientes']                   	= 'usuario/regulacao/Pacientes_controller/index';

$route['usuario/regulacao/dados-paciente/(:num)']             	= 'usuario/regulacao/Dadospaciente_controller/index';

$route['usuario/regulacao/salva-procedimento']                	= 'usuario/regulacao/Salvaprocedimento_controller/index';

$route['usuario/regulacao/fila']                			  	= 'usuario/regulacao/Fila_controller/index';

$route['usuario/regulacao/historico-paciente/(:num)']         	= 'usuario/regulacao/Historico_controller/index';

$route['usuario/regulacao/agendar-paciente/(:num)']          	= 'usuario/regulacao/Agendar_controller/index';

$route['usuario/regulacao/add-paciente-casa-save/(:num)']       = 'usuario/regulacao/Addpacientecasasave_controller/index';

$route['usuario/regulacao/add-paciente-casa/(:num)']          	= 'usuario/regulacao/Addpacientecasa_controller/index';

$route['usuario/regulacao/baixa-paciente-casa/(:num)']          = 'usuario/regulacao/Baixapacientecasa_controller/index';

$route['usuario/regulacao/atualizar-datas-casa/(:num)/(:num)']  = 'usuario/regulacao/Atualizardatascasa_controller/index';

$route['usuario/regulacao/atualizar-datas-casa-save/(:num)']    = 'usuario/regulacao/Atualizardatascasasave_controller/index';





$route['usuario/regulacao/atualiza-procedimento']          		= 'usuario/regulacao/Incluiestabelecimento_controller/index';

$route['usuario/cadastros/cadastrar-paciente']                	= 'usuario/cadastros/Cadastrarpaciente_controller/index';

$route['usuario/cadastros/salva-paciente']                		= 'usuario/cadastros/Salvapaciente_controller/index';

$route['usuario/cadastros/edita-paciente/(:num)']               = 'usuario/cadastros/Editapaciente_controller/index';

$route['usuario/cadastros/editar-paciente/(:num)']              = 'usuario/cadastros/Editarpaciente_controller/index';


$route['usuario/excluir-paciente']                				= 'usuario/Excluirpaciente_controller/index';

$route['usuario/regulacao/indicadores']          				= 'usuario/regulacao/Indicadoresregulacao_controller/index';

$route['usuario/regulacao/agendados']          					= 'usuario/regulacao/Agendados_controller/index';

$route['usuario/regulacao/agendados-tfd']          				= 'usuario/regulacao/Agendadostfd_controller/index';

$route['usuario/regulacao/concluir-paciente/(:num)']            = 'usuario/regulacao/Baixapaciente_controller/index';

$route['usuario/regulacao/lista-demanda-reprimida']          	= 'usuario/regulacao/Demandareprimida_controller/index';

$route['usuario/regulacao/lista-demanda-reprimida-tfd']         = 'usuario/regulacao/Demandareprimidatfd_controller/index';

$route['usuario/regulacao/procedimentos-diversos']          	= 'usuario/regulacao/Procedimentosdiversos_controller/index';

$route['usuario/regulacao/tfd']          						= 'usuario/regulacao/Tfd_controller/index';

$route['usuario/regulacao/solicitacao-tfd/(:num)']             	= 'usuario/regulacao/Solicitacaotfd_controller/index';

$route['usuario/regulacao/solicitacao-tfd-manga/(:num)']        = 'usuario/regulacao/Solicitacaotfdmanga_controller/index';


$route['usuario/regulacao/cadastra-tfd']                		= 'usuario/regulacao/Cadastratfd_controller/index';

$route['usuario/regulacao/cadastra-tfd-manga']                	= 'usuario/regulacao/Cadastratfdmanga_controller/index';


$route['usuario/regulacao/fila-tfd']                			= 'usuario/regulacao/Filatfd_controller/index';

$route['usuario/regulacao/visualiza-tfd/(:num)']                = 'usuario/regulacao/Visualizatfd_controller/index';

$route['usuario/regulacao/concluir-paciente-tfd/(:num)']        = 'usuario/regulacao/Baixapacientetfd_controller/index';

$route['usuario/regulacao/concluir-paciente-tfd-manga/(:num)']  = 'usuario/regulacao/Baixapacientetfdmanga_controller/index';


$route['usuario/regulacao/casa-de-apoio']                		= 'usuario/regulacao/Casaapoio_controller/index';

$route['usuario/transportes/inicial']                			= 'usuario/transportes/Transportes_controller/index';

$route['usuario/transportes/veiculos']                			= 'usuario/transportes/Veiculos_controller/index';

$route['usuario/transportes/criar-viagem/(:num)']               = 'usuario/transportes/Criarviagem_controller/index';

$route['usuario/transportes/add-paciente-casa-save']            = 'usuario/transportes/Criarviagemsave_controller/index';

$route['usuario/transportes/viagens']                           = 'usuario/transportes/Viagens_controller/index';

$route['usuario/transportes/passageiros/(:num)']                = 'usuario/transportes/Passageiros_controller/index';

$route['usuario/transportes/finalizar-viagem/(:num)']           = 'usuario/transportes/Finalizarviagem_controller/index';




$route['usuario/cadastros/cadastrar-veiculo']                   = 'usuario/cadastros/Cadastrarveiculo_controller/index';

$route['usuario/cadastros/cadastrar-veiculo-save']              = 'usuario/cadastros/Cadastrarveiculosave_controller/index';

$route['usuario/cadastros/atualizar-veiculo-save/(:num)']       = 'usuario/cadastros/Atualizarveiculosave_controller/index';

$route['usuario/cadastros/editar-veiculo/(:num)']               = 'usuario/cadastros/Atualizarveiculo_controller/index';


//atenção primária

$route['usuario/atencao-primaria']                              = 'usuario/atencao-primaria/Atencaoprimaria_controller/index';

$route['usuario/regulacao/json'] 								= "usuario/regulacao/Api_controller/index";

// nucleo de informações

$route['usuario/nucleo-informacoes']                            = 'usuario/nucleoinformacoes/Nucleo_controller/index';

$route['usuario/nucleo-informacoes/siasus']                     = 'usuario/nucleoinformacoes/Siasus_controller/index';

$route['usuario/nucleo-informacoes/sihsus']                     = 'usuario/nucleoinformacoes/Sihsus_controller/index';

$route['usuario/nucleo-informacoes/cnes']                       = 'usuario/nucleoinformacoes/Cnes_controller/index';

$route['usuario/nucleo-informacoes/sinan']                      = 'usuario/nucleoinformacoes/Sinan_controller/index';

