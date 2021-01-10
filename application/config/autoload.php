<?php
defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages'] = array();


$autoload['libraries'] = array(
    'session',
    'email',
    'database',
    'upload',
    'user_agent',
    'ui',
    'upload',
    'sms',
    'whatsapp'
);


$autoload['drivers'] = array();


$autoload['helper'] = array(
    'url', 
    'help', 
    'string', 
    'download', 
    'cookie', 
    'time', 
    'uri', 
    'help'
);


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array(
    'Especialidades_model' => 'Especialidades',
    'Auth_model' => 'Auth',
    'CasaDeApoio_model' => 'Casa_de_apoio',
    'Dashboard_model' => 'Dashboard',
    'Pacientes_model' => 'Pacientes',
    'Procedimentos_model' => 'Procedimentos',
    'TabelaProced_model' => 'Tabela_proced',
    'Tfd_model' => 'Tfd',
    'Usuarios_model' => 'Usuarios',
    'Veiculos_model' => 'Veiculos',
    'Viagens_model' => 'Viagens',
    'Estabelecimentos_model' => 'Estabelecimentos',
    'Municipios_model' => 'Municipios',
    'Passageiros_model' => 'Passageiros'
);
