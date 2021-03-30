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

        $data['geral'] = [
            'fila' => $this->db->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][1] =
        [
            'fila' => $this->db->like('created_at', $data['ano'].'-01-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'].'-01-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'].'-01-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'].'-01-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][2] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-02-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-02-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-02-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-02-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][3] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-03-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-03-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-03-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-03-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][4] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-04-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-04-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-04-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-04-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][5] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-05-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-05-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-05-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-05-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][6] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-06-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-06-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-06-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-06-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][7] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-07-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-07-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-07-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-07-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][8] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-08-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-08-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-08-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-08-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][9] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-09-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-09-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-09-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-09-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][10] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-10-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-10-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-10-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-10-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][11] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-11-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-11-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-11-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-11-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        $data['tfd'][12] =
        [
            'fila' => $this->db->like('created_at', $data['ano'] . '-12-')->get_where('tfd', ['tfd_data_atendimento' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'agendados' => $this->db->like('created_at', $data['ano'] . '-12-')->get_where('tfd', ['tfd_data_atendimento !=' => NULL, 'tfd_realizado' => NULL, 'tfd_negado_por' => NULL])->num_rows(),
            'realizados' => $this->db->like('created_at', $data['ano'] . '-12-')->get_where('tfd', ['tfd_realizado' => 'sim'])->num_rows(),
            'negados' => $this->db->like('created_at', $data['ano'] . '-12-')->get_where('tfd', ['tfd_negado_por' => 'sim'])->num_rows()
        ];

        


        $this->view('regulacao/tfd/Dashboard_view', $data);
        
    }
    
}
