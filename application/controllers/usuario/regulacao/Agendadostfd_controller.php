<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Agendadostfd_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Agendadostfd_view', array());
    }

}
