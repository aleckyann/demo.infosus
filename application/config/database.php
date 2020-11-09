<?php
defined('BASEPATH') or exit('No direct script access allowed');

$query_builder = TRUE;


$active_group = $_SERVER['SERVER_NAME'];


/**
 * CRIAR BANCO DE DADOS COM MESMO NOME DO DOMÍNIO UTILIZADO
 * USERNAME: demo.infosus.com.br
 * DATABASE: demo.infosus.com.br
 */
$db[$_SERVER['SERVER_NAME']] = array(
	'dsn'	=> '',
	'hostname' => 'mysql741.umbler.com',
	'username' => $_SERVER['SERVER_NAME'],
	'password' => 'jf91500290',
	'database' => $_SERVER['SERVER_NAME'],
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

if($_SERVER['SERVER_NAME'] == 'localhost'){
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