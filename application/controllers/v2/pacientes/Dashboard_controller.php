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
        $this->view('pacientes/Dashboard_view', $data);
    }
    
}
