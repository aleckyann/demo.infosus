<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Api_controller extends Sistema_controller
{


    /**
     * GET: usuario/regulacao/json
     */
    public function index()
    {
        header('Content-Type: application/json');
        $pacientes = $this->Pacientes->getAll();
        echo '{"data":' . (json_encode($pacientes)) . '}';
    }
}
