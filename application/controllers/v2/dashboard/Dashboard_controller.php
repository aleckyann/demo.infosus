<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard_controller extends Sistema_Controller
{

    /**
     * GET: v2/dashboard
     */
    public function index(): void
    {

        // $procedimentos_backup = $this->db->get('procedimentos_backup')->result_array();


        // foreach ($procedimentos_backup as $pb) {

        //     $pb['tabela_proced_id'] = $this->db->get_where('tabela_proced', ['nome' => $pb['nome_procedimento']])->row_array()['id'] ?? 999999;
        //     unset($pb['nome_procedimento']);

        //     $pb['especialidade'] = $this->db->get_where('especialidades', ['especialidade_nome' => $pb['especialidade']])->row_array()['especialidades_id'] ?? 999999;

        //     $pb['especialidade'] = $this->db->get_where('especialidades', ['especialidade_nome' => $pb['especialidade']])->row_array()['especialidades_id'] ?? 999999;

        //     $pb['cidade_prestador'] = $this->db->get_where('municipios_ibge', ['nome_municipio' => $pb['cidade_prestador']])->row_array()['municipio_id'] ?? 999999;

        //     if ($pb['data'] == '0000-00-00') {
        //         $pb['data'] = NULL;
        //     } else {
        //         $pb['data'] =  $pb['data'];
        //     }

        //     if ($pb['data_solicitacao'] == '0000-00-00') {
        //         $pb['data_solicitacao'] = '2021-03-01';
        //     } else {
        //         $pb['data_solicitacao'] =  $pb['data_solicitacao'];
        //     }

        //     $pb['profissional_solicitante'] = 999999;

        //     $pb['estabelecimento_solicitante'] = 999999;

        //     $pb['estabelecimento_prestador'] = 999999;


        //     // $this->db->insert(
        //     //     'procedimentos',
        //     //     $pb
        //     //     );

        // }



        $dados['title'] = 'Dashboard';

        $dados['procedimentos'] =
        [
            'fila' => $this->db->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' =>$this->db->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' =>$this->db->get_where('procedimentos', ['realizado'=> 'sim'])->num_rows(),
            'negados' =>$this->db->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];

        $dados['tfd'] =
        [
            'fila' => $this->db->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $dados['viagens'] =
        [
            'agendadas' => $this->db->get_where('viagens', ['viagem_realizada' => NULL, 'deleted_at' => NULL])->num_rows(),
            'realizadas' => $this->db->get_where('viagens', ['viagem_realizada !=' => NULL])->num_rows(),
            'canceladas' => $this->db->get_where('viagens', ['deleted_at !=' => NULL])->num_rows(),
        ];
        $this->view('dashboard/Dashboard_view', $dados);
    }
}
