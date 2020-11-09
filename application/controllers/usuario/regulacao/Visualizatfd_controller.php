<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Visualizatfd_controller extends Sistema_Controller {

    public function index()
    {
        $this->usuario_view('Visualizatfd_view', array());
    }

}
