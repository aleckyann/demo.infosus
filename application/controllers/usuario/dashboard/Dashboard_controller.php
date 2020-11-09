<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Dashboard_view', array());
    }

}
