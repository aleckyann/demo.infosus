<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard_controller extends Sistema_Controller
{

    /**
    * GET: v2/
     */
    public function index(): void
    {
        $data['title'] = 'Dashboard';
        $this->view('regulacao/casa_de_apoio/Dashboard_view', $data);
    }
    
}
