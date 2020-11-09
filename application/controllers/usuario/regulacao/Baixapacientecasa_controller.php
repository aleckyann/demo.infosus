<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Baixapacientecasa_controller extends Sistema_Controller {

    public function index(){
        $this->Dashboard_model->baixa_casa_de_apoio();

        redirect('usuario/regulacao/casa-de-apoio');
    }
}