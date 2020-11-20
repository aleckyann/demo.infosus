<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard_controller extends Sistema_Controller
{

    /**
     * GET: usuario/dashboard
     */
    public function index(): void
    {
        $this->usuario_view('Dashboard_view', []);
    }
}
