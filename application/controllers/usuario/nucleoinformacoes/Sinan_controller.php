<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Sinan_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Sinan_view', array());
    }

}
