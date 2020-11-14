<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Url_controller extends Sistema_Controller
{

    public function index()
    {
        $this->usuario_view('Url_view', array());
    }
}
