<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Demandareprimida_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Demandareprimida_view', array());
    }

}