<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');
        $this->load->model('dashboard_model');
    }

    
    public function index() {
        $data = array();
        $data['page_title'] = 'Dashboard';
        $data['count'] = $this->common_model->get_user_total();
        $data['resumees'] = $this->dashboard_model->get_all_resumee();
        $data['main_content'] = $this->load->view('dashboard/home', $data, TRUE);
        $this->load->view('dashboard/index', $data);
    }

    public function ver() {
        $id = $this->uri->segment(3);

        $data['resumee'] = $this->common_model->select_option($id, "resumee");

		if(!$data['resumee']){
			$data["msg_error"] = $this->session->set_flashdata("msg_error", "Registro não encontrado!");
			redirect('dashboard/index', $data["msg_error"]);
		} else {
            $data = array();
            $data['page_title'] = 'Ver Curriculo';
            $data['resumees'] = $this->common_model->select_option($id, "resumee");
            $data['main_content'] = $this->load->view('dashboard/ver', $data, TRUE);
            $this->load->view('dashboard/index', $data);
        }	
    }

    public function backup($fileName='db_backup.zip') {
        $this->load->dbutil();
        $backup =& $this->dbutil->backup();
        $this->load->helper('file');
        write_file(FCPATH.'/downloads/'.$fileName, $backup);
        $this->load->helper('download');
        force_download($fileName, $backup);
    }

}