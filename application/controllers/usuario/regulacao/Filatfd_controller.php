<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Filatfd_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Filatfd_view', array());
    }

}
