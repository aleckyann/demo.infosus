<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cnes_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Cnes_view', array());
    }

}
