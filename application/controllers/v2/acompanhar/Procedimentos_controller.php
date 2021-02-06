<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Procedimentos_controller extends CI_Controller
{
    /**
     * GET: 
     */
    public function index(): void
    {
        $this->load->view('v2/acompanhar/Procedimentos_view');
    }
}
