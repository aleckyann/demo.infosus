<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Atualizardatascasa_controller extends Sistema_Controller
{
    /**
     * GET: usuario/regulacao/atualizar-datas-casa/(:num)/(:num)
     */
    public function index(int $paciente_id): void
    {
        $data['paciente'] = $this->Pacientes->getAll(['paciente_id'=>$paciente_id])[0];
        $this->usuario_view('Atualizardatascasa_view', $data);
    }
}
