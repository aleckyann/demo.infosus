<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Fila_controller extends Sistema_Controller
{

    /**
     * GET usuario/regulacao/fila
     */
    public function index(): void
    {
        $data['procedimentos'] = $this->Procedimentos->porPaciente(['realizado' => '']);
        $this->usuario_view('Fila_view', $data);
    }
}
