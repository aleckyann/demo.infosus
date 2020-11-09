<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Solicitacaotfd_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Solicitacaotfd_view', array());
    }

}
