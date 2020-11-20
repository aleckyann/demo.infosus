<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Cadastrarveiculo_controller extends Sistema_Controller
{

    public function index()
    {
        $this->usuario_view('Cadastrarveiculo_view');
    }
}
