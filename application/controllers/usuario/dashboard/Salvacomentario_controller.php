<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Salvacomentario_controller extends Sistema_Controller {

    public function index()
    {
		$dados = $this->input->post();
	    $this->Dashboard_model->inclui_comentario($dados);
        redirect("usuario/aula/{$dados['video_id']}/#comentario");
    }

}
