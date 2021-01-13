<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Usuarios_controller extends Sistema_Controller
{

    /**
     * POST: v2/api/usuarios/json
     */
    public function json(): void
    {
        $veiculo_id = $this->input->post('usuario_id');
        
        $resultado = $this->db
        ->get_where('usuarios', ['usuario_id'=>$veiculo_id])->row_array();
        $this->output
            ->set_content_type('application/json')
            ->set_output(
                json_encode(
                    $resultado
                )
            );
    }
}
