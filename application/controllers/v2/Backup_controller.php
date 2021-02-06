<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Backup_controller extends CI_Controller
{

    /**
     * GET: v2/backup/l33tsupah4x0r
     */
    public function index(): void
    {
        $this->load->dbutil();

        $prefs = array(
                'format'      => 'zip',
                'filename'    => date('d_m_Y_H_i_s').'.sql'
            );


        $backup = &$this->dbutil->backup($prefs);

        $db_name = 'backup-on-' . date("Y-m-d-H-i-s") . '.zip';
        $save = 'pathtobkfolder/' . $db_name;

        $this->load->helper('file');
        write_file($save, $backup);


        $this->load->helper('download');
        force_download($db_name, $backup);
    }

}
