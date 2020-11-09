<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cursos_controller extends Sistema_Controller {



    public function index()
    {	
        $this->usuario_view('Cursos_view', array());
    }

}
