<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Addpacientecasa_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Addpacientecasa_view', array());
    }

}
