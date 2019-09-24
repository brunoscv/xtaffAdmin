<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resumee extends CI_Controller {

	public function __construct(){
        parent::__construct();
        //check_login_user();
        $this->load->model('common_model');
    }

    
    public function index(){
        $data = array();
        $data['page_title'] = 'Home';
        $data['count'] = $this->common_model->get_user_total();
        $data['main_content'] = $this->load->view('resumee/home', $data, TRUE);
        $this->load->view('resumee/index', $data);
    }

    public function criar() {

        if ($this->input->post('enviar')) {
            
            $resumee = array();
            $resumee['nome']            = $this->input->post('nome');
            $resumee['idade']           = $this->input->post('idade');
            $resumee['grau_instrucao']  = $this->input->post('grau_instrucao');
            $resumee['email']           = $this->input->post('email');
            $resumee['telefone']        = $this->input->post('telefone');
            $resumee['instagram']       = $this->input->post('instagram');
            $resumee['twitter']         = $this->input->post('twitter');
            $resumee['facebook']        = $this->input->post('facebook');
            $resumee['hobby']           = $this->input->post('hobby');
            $resumee['estilo_musica']   = $this->input->post('estilo_musica');
            $resumee['observacoes']     = $this->input->post('observacoes');
            $resumee['status']          = 1;
            $resumee['createdAt' ]      = date("Y-m-d");

            //arShow($resumee); exit;
            
            $this->db->insert('resumee', $resumee);
            $this->session->set_flashdata('msg', 'Usuário cadastrado com sucesso!');
            redirect(base_url());
        }
    }

    public function backup($fileName='db_backup.zip'){
        $this->load->dbutil();
        $backup =& $this->dbutil->backup();
        $this->load->helper('file');
        write_file(FCPATH.'/downloads/'.$fileName, $backup);
        $this->load->helper('download');
        force_download($fileName, $backup);
    }

}