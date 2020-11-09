<?php
defined('BASEPATH') or exit('No direct script access allowed');

$query_builder = TRUE;

/**
 * Método utilizado para automatizar novos clientes
 * os usuários e bancos de dados devem ser criados
 * com o máximo de caracteres da umbler (16)
 */
$active_group = substr($_SERVER['SERVER_NAME'],0,16);

/**
 * CRIAR BANCO DE DADOS COM MESMO NOME DO DOMÍNIO UTILIZADO
 * USERNAME: demo.infosus.com.br (max 16 caracteres)
 * DATABASE: demo.infosus.com.br (max 16 caracteres)
 */
$db[$active_group] = array(
	'dsn'	=> '',
	'hostname' => 'mysql741.umbler.com',
	'username' => $active_group,
	'password' => 'jf91500290',
	'database' => $active_group,
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