<?php

class ACL {
    private $user_acl;


    #CADASTRAR ACTIONS BLOQUEADAS PARA usuario_acl == 'normal'
    public function __construct()
	{   //[usuario_acl][Controller::class][Controller:Method]
        $this->ACL['normal']['Api_controller']['get'] = true;
    }


    public function auth()
    {
        $CI =& get_instance();
        $class = $CI->router->fetch_class();
        $method = $CI->router->fetch_method();

        if(@$this->ACL[$CI->session->ACL][$class][$method]){
            die('Access Denied: ACL.');
        } else {
            return TRUE;
        }
    }
}
