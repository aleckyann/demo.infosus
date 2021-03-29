<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard_controller extends Sistema_Controller
{

    /**
    * GET: v2/
     */
    public function index(): void
    {
        $data['title'] = 'Dashboard';
        $data['ano'] = $this->input->get('ano') ?? date('Y');

        $data['procedimentos'][1] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-01-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-01-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-01-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-01-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][2] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-02-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-02-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-02-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-02-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][2] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-02-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-02-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-02-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-02-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][3] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-03-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-03-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-03-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-03-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][4] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-04-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-04-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-04-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-04-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][5] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-05-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-05-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-05-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-05-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][6] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-06-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-06-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-06-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-06-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][7] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-07-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-07-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-07-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-07-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][8] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-08-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-08-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-08-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-08-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][9] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-09-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-09-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-09-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-09-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][10] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-10-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-10-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-10-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-10-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][11] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-11-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-11-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-11-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-11-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
        $data['procedimentos'][12] =
        [
            'fila' => $this->db->like('data_solicitacao', $data['ano'] . '-12-')->get_where('procedimentos', ['realizado' => '', 'data' => NULL, 'negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('data_solicitacao', $data['ano'] . '-12-')->get_where('procedimentos', ['realizado' => '', 'data !=' => NULL, 'negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('data_solicitacao', $data['ano'] . '-12-')->get_where('procedimentos', ['realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('data_solicitacao', $data['ano'] . '-12-')->get_where('procedimentos', ['negado_por !=' => NULL])->num_rows()
        ];
       


        $this->view('regulacao/procedimentos/Dashboard_view', $data);
    }
    
}
