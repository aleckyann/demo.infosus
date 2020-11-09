<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Passageiros_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Passageiros_view', array());
    }

}