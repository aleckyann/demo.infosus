<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Index_controller extends CI_Controller
{


    public function index(): void
    {
        /**
         * GET cidade.infosus.net.br
         */
        redirect('auth');
    }

    /**
     * VIEW PARA ERROR 404
     */
    public function error_404()
    {
        $this->output->set_status_header(404);
        $this->load->view('error_404');
    }

    public function logs()
    {
        $logs = $this->db->get('logs')->result_array();
        pre($logs);
    }
}
