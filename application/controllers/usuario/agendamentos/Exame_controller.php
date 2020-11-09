<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Exame_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Exame_view', array());
    }

}
