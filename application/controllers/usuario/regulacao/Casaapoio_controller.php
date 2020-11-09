<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Casaapoio_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Casaapoio_view', array());
    }

}