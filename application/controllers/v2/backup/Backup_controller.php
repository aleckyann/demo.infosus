<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Backup_controller extends CI_Controller
{

    public function index() {

        $this->load->dbutil();
        $this->load->helper('file');

        $config = array(
            'format'      => 'zip',
            'filename'    => $_SERVER['HTTP_HOST'].'_'.date('d_m_Y') . '.sql'
        );
        $backup = $this->dbutil->backup();
        
        if(write_file('private/backup/'.$config['filename'], $backup)){
            $this->whatsapp->enviar('38999538975', '
*BACKUP REALIZADO COM SUCESSO*

*Arquivo:* _'.base_url('private/backup/'.$config['filename']).'_
            ');
        } else {
            $this->whatsapp->enviar('38999538975', '
*⚠️FALHA AO REALIZAR BACKUP⚠️*

*Url:* _'.base_url().'_
            ');
        }

    }

}