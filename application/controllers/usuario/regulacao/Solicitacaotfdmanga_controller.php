<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Solicitacaotfdmanga_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Solicitacaotfdmanga_view', array());
    }

}
