<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Atencaoprimaria_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Atencaoprimaria_view', array());
    }

}