<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Agendados_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Agendados_view', array());
    }

}
