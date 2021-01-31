<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Estoques_controller extends Sistema_Controller
{


    public function index(int $almoxarifado_id): void
    {
        $data['title'] = 'Estoques';
        $data['almoxarifado'] = $this->Almoxarifados->getAll(['almoxarifado_id' => $almoxarifado_id])[0];
        $data['estoques'] = $this->Estoques->getAll(['estoque_almoxarifado_id' => $almoxarifado_id]);
        $this->view('almoxarifado/Estoques_view', $data);
    }

}
