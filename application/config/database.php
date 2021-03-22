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
if ($_SERVER['SERVER_NAME'] == 'demo.infosus.net.br') {
	$hostname = 'mysql743.umbler.com';
	$username = 'demo-infosus';
	$database = 'demo-infosus';
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
} elseif ($_SERVER['SERVER_NAME'] == 'graomogol.infosus.net.br') {
	$hostname = 'mysql742.umbler.com';
	$username = 'graomogol';
	$database = 'graomogol';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'botumirim.infosus.net.br') {
	$hostname = 'mysql742.umbler.com';
	$username = 'botumirim';
	$database = 'botumirim';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'gameleiras.infosus.net.br') {
	$hostname = 'mysql743.umbler.com';
	$username = 'gameleiras';
	$database = 'gameleiras';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'montalvania.infosus.net.br') {
	$hostname = 'mysql743.umbler.com';
	$username = 'montalvania';
	$database = 'montalvania';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'juvenilia.infosus.net.br') {
	$hostname = 'mysql743.umbler.com';
	$username = 'juvenilia';
	$database = 'juvenilia';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'matias.infosus.net.br') {
	$hostname = 'mysql743.umbler.com';
	$username = 'matiascardoso';
	$database = 'matiascardoso';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'miravania.infosus.net.br') {
	$hostname = 'mysql743.umbler.com';
	$username = 'miravania';
	$database = 'miravania';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'monteazul.infosus.net.br') {
	$hostname = 'mysql743.umbler.com';
	$username = 'monteazul';
	$database = 'monteazul';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'riachodosmachados.infosus.net.br') {
	$hostname = 'mysql743.umbler.com';
	$username = 'riacho';
	$database = 'riacho';
	$password = 'l33tsupah4x0r';
} elseif ($_SERVER['SERVER_NAME'] == 'localhost') {
	$hostname = 'localhost';
	$username = 'phpmyadmin';
	$database = 'infosus_matias';
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
	'password' => $password,
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



