<?php
defined('BASEPATH') or exit('No direct script access allowed');

$query_builder = TRUE;
$active_group = 'INFOSUS';



//AMBIENTE LOCAL DE DESENVOLVIMENTO
if ($_SERVER['SERVER_NAME'] == 'localhost') {
	$active_group = 'desenvolvimento';
	$db['desenvolvimento'] = array(
		'dsn'	=> '',
		'hostname' => 'localhost',
		'username' => 'phpmyadmin',
		'password' => '106.312.266-05',
		'database' => 'infosus',
		'dbdriver' => 'mysqli',
		'dbprefix' => '',
		'pconnect' => FALSE,
		'db_debug' => (ENVIRONMENT !== 'production'),
		'cache_on' => FALSE,
		'cachedir' => '',
		'char_set' => 'utf8',
		'dbcollat' => 'utf8_general_ci',
		'swap_pre' => '',
		'encrypt' => FALSE,
		'compress' => FALSE,
		'stricton' => FALSE,
		'failover' => array(),
		'save_queries' => TRUE
	);
}

/**
 * Método utilizado para automatizar novos clientes
 * os usuários e bancos de dados devem ser criados
 * com o máximo de caracteres da umbler (16)
 */
if ($_SERVER['SERVER_NAME'] == 'homologacao.infosus.net.br') {
	$hostname = 'mysql741.umbler.com';
	$username = 'homologacao.info';
	$database = 'homologacao.info';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'vargemgrande.infosus.net.br') {
	$hostname = 'mysql742.umbler.com';
	$username = 'vargemgrande.inf';
	$database = 'vargemgrande.inf';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'serranopolismg.infosus.net.br') {
	$hostname = 'mysql742.umbler.com';
	$username = 'serranopolismg';
	$database = 'serranopolismg';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'localhost') {
	$hostname = 'localhost';
	$username = 'phpmyadmin';
	$database = 'infosus';
	$password = '106.312.266-05';
}

/**
 * CRIAR BANCO DE DADOS COM MESMO NOME DO DOMÍNIO UTILIZADO
 * USERNAME: demo.infosus.com.br (max 16 caracteres)
 * DATABASE: demo.infosus.com.br (max 16 caracteres)
 */
$db['INFOSUS'] = array(
	'dsn'	=> '',
	'hostname' => $hostname,
	'username' => $username,
	'password' => 'l33tsupah4x0r',
	'database' => $username,
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);



