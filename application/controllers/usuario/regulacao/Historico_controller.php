<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Historico_controller extends Sistema_Controller
{

    /**
     * GET usuario/regulacao/historico-paciente/(:num)
     */
    public function index(int $paciente_id): void
    {
        $data['paciente'] = $this->Pacientes->getAll(['paciente_id' => $paciente_id]);
        $data['procedimentos_i'] = $this->Procedimentos->getAll(['paciente_id' => $paciente_id]);
        $data['tfd_i'] = $this->Tfd->getAll(['paciente_id' => $paciente_id]);

        $this->usuario_view('Historico_view', $data);
    }
}
