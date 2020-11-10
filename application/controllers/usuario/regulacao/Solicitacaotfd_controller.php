<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Solicitacaotfd_controller extends Sistema_Controller {

    /**
     * GET 
     */
    public function index(int $paciente_id): void
    {
        $data['paciente'] = $this->Pacientes->getAll(['paciente_id'=>$paciente_id])[0];
        $this->usuario_view('Solicitacaotfd_view', $data);
    }

}
