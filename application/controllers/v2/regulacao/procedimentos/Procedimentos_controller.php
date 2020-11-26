<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Procedimentos_controller extends Sistema_Controller
{


    public function fila(): void
    {
        $dados['title'] = 'Procedimentos na fila';
        $dados['proceidmentos'] = $this->Procedimentos->getAll();

        $this->view('regulacao/procedimentos_diversos/Fila_view', $dados);
    }
    

    public function agendados(): void
    {
        $dados['title'] = 'Procedimentos agendados';
        $dados['proceidmentos'] = $this->Procedimentos->getAll();

        $this->view('regulacao/procedimentos_diversos/Agendados_view', $dados);
    }
    

    public function realizados(): void
    {
        $dados['title'] = 'Procedimentos realizados';
        $dados['proceidmentos'] = $this->Procedimentos->getAll();

        $this->view('regulacao/procedimentos_diversos/Realizados_view', $dados);
    }
    

    public function reprimidos(): void
    {
        $dados['title'] = 'Procedimentos reprimidos';
        $dados['proceidmentos'] = $this->Procedimentos->getAll();

        $this->view('regulacao/procedimentos_diversos/Reprimidos_view', $dados);
    }
}
