<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Agendar_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Agendar_view', array());
    }

}
