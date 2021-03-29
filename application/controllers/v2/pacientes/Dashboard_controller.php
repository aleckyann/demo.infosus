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

        $data['pacientes'][1] = $this->db->like('created_at', $data['ano'] . '-01-')->count_all_results('pacientes');
        $data['pacientes'][2] = $this->db->like('created_at', $data['ano'] . '-02-')->count_all_results('pacientes');
        $data['pacientes'][3] = $this->db->like('created_at', $data['ano'] . '-03-')->count_all_results('pacientes');
        $data['pacientes'][4] = $this->db->like('created_at', $data['ano'] . '-04-')->count_all_results('pacientes');
        $data['pacientes'][5] = $this->db->like('created_at', $data['ano'] . '-05-')->count_all_results('pacientes');
        $data['pacientes'][6] = $this->db->like('created_at', $data['ano'] . '-06-')->count_all_results('pacientes');
        $data['pacientes'][7] = $this->db->like('created_at', $data['ano'] . '-07-')->count_all_results('pacientes');
        $data['pacientes'][8] = $this->db->like('created_at', $data['ano'] . '-08-')->count_all_results('pacientes');
        $data['pacientes'][9] = $this->db->like('created_at', $data['ano'] . '-09-')->count_all_results('pacientes');
        $data['pacientes'][10] = $this->db->like('created_at', $data['ano'] . '-10-')->count_all_results('pacientes');
        $data['pacientes'][11] = $this->db->like('created_at', $data['ano'] . '-11-')->count_all_results('pacientes');
        $data['pacientes'][12] = $this->db->like('created_at', $data['ano'] . '-12-')->count_all_results('pacientes');

        $this->view('pacientes/Dashboard_view', $data);
    }
    
}
