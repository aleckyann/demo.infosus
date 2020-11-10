<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dadospaciente_controller extends Sistema_Controller {

    /**
     * GET: usuario/regulacao/dados-paciente/(:num)
     */
    public function index(int $paciente_id): void
    {
        $data['paciente'] = $this->Pacientes->getAll(['paciente_id'=>$paciente_id])[0];
        $this->usuario_view('Dadospaciente_view', $data);
    }

}
