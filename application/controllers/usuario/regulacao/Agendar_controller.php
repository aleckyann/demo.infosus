<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Agendar_controller extends Sistema_Controller
{

    /**
     * GET: /usuario/regulacao/agendar-paciente/(:num)
     */
    public function index(int $procedimento_id): void
    {
        $data['procedimentos_agenda'] = $this->Procedimentos->agenda(['procedimentos_id' => $procedimento_id])[0];
        $this->usuario_view('Agendar_view', $data);
    }
}
