<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();


$autoload['libraries'] = array('session', 'email', 'database', 'upload', 'user_agent', 'ui');


$autoload['drivers'] = array();


$autoload['helper'] = array('url', 'help', 'string', 'download', 'cookie', 'time', 'uri', 'help');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array(
                            'Login_model',
                            'usuario/dashboard/Dashboard_model'
);
