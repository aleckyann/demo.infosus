<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$project = '/infosus.net.br';

if($_SERVER['SERVER_NAME'] == 'localhost'){
    $config['base_url'] = 'http://'.$_SERVER['SERVER_NAME'].$project;
} else {
    $config['base_url'] = $_SERVER['SERVER_NAME'];;
}


$config['index_page'] = '';


$config['uri_protocol']	= 'REQUEST_URI';


$config['url_suffix'] = '';


$config['language']	= 'portuguese-brazilian';


$config['charset'] = 'UTF-8';


$config['enable_hooks'] = TRUE;


$config['subclass_prefix'] = 'Sistema_';


$config['composer_autoload'] = FCPATH . 'vendor/autoload.php';


$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-';


$config['enable_query_strings'] = FALSE;
$config['controller_trigger'] = 'c';
$config['function_trigger'] = 'm';
$config['directory_trigger'] = 'd';


$config['allow_get_array'] = TRUE;


$config['log_threshold'] = 0;


$config['log_path'] = '';


$config['log_file_extension'] = '';


$config['log_file_permissions'] = 0644;


$config['log_date_format'] = 'd/m/Y H:i:s';


$config['error_views_path'] = '';


$config['cache_path'] = '';


$config['cache_query_string'] = FALSE;


$config['encryption_key'] = hash('whirlpool', $project);


$config['sess_driver'] = 'files';
$config['sess_cookie_name'] = 'session';
$config['sess_expiration'] = 7200;
$config['sess_save_path'] = NULL;
$config['sess_match_ip'] = FALSE;
$config['sess_time_to_update'] = 300;
$config['sess_regenerate_destroy'] = FALSE;


$config['cookie_prefix']	= '';
$config['cookie_domain']	= '';
$config['cookie_path']		= '/';
$config['cookie_secure']	= TRUE;
$config['cookie_httponly'] 	= TRUE;


$config['standardize_newlines'] = FALSE;


$config['global_xss_filtering'] = TRUE;


$config['csrf_protection'] = FALSE;
$config['csrf_token_name'] = "csrf";
$config['csrf_cookie_name'] = "csrf";
$config['csrf_expire'] = 7200;
$config['csrf_regenerate'] = FALSE;
$config['csrf_exclude_uris'] = array();


$config['compress_output'] = FALSE;


$config['time_reference'] = 'local';


$config['rewrite_short_tags'] = FALSE;


$config['proxy_ips'] = '';