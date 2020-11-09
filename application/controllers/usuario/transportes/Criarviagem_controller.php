<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Criarviagem_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Criarviagem_view', array());
    }

}