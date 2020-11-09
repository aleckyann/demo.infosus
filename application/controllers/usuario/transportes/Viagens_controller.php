<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Viagens_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Viagens_view', array());
    }

}