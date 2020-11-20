<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Tfd_controller extends Sistema_Controller
{

    public function index()
    {
        $this->usuario_view('Tfd_view', array());
    }
}
