<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Demandareprimidatfd_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Demandareprimidatfd_view', array());
    }

}