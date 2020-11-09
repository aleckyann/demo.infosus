<?php
defined('BASEPATH') OR exit('No direct script access allowed');


#BÁSICO
$route['translate_uri_dashes']                                         = FALSE;
$route['404_override']                                                 = 'error_404';

#AUTENTICAÇÃO
$route['default_controller']                                           = 'Index_controller/index';
$route['action_login']['post']                                         = 'Login_controller/login';
$route['logout']['get']                                                = 'Login_controller/logout';
$route['recovery']['get']                                              = 'Login_controller/recovery';

#USUARIO
$route['usuario/aula/(:num)']                                 	= 'usuario/dashboard/Aula_controller/index';
$route['usuario/meus-treinamentos']                             = 'usuario/dashboard/Treinamentos_controller/index';
$route['usuario/cursos']                            			= 'usuario/dashboard/Cursos_controller/index';
$route['usuario/dados']                            				= 'usuario/dashboard/Dados_controller/index';
$route['usuario/curso/(:num)']                                  = 'usuario/dashboard/Curso_controller/index';
$route['usuario/fazer-matricula']                            	= 'usuario/dashboard/Matricula_controller/index';
$route['usuario/verificacao/(:num)']                            	= 'usuario/dashboard/Verificacao_controller/index';
$route['usuario/salva-comentario/(:num)']                         = 'usuario/dashboard/Salvacomentario_controller/index';



#site
$route['login']                                           = 'Login_controller/index';
$route['cursos']                                          = 'Cursos_controller/index';
$route['curso/(:num)']                                    = 'Curso_controller/index';

