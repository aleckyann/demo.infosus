<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Transportes_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Transportes_view', array());
    }

}