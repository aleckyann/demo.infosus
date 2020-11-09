<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Viagem_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Viagem_view', array());
    }

}
