<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Curso_controller extends Sistema_Controller {



    public function index()
    {	
        $this->usuario_view('Curso_view', array());
    }

}
