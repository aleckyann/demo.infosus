<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Siasus_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Siasus_view', array());
    }

}
