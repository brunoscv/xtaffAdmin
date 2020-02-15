<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resumee extends CI_Controller {

	public function __construct(){
        parent::__construct();
        //check_login_user();
        $this->load->model('common_model');
    }
    
    public function index(){
        $data = array();
        
        //Campos relacionados
		//caso seja necessario adicione os relacionamento aqui
		// $qualifications = $this->common_model->select("qualification");
		// $data['listQualifications'] = array();
		// $data['listQualifications'][''] = "Selecione uma opção";
		// foreach ($qualifications as $qualification) {
		// 	$data['listQualifications'][$qualification->id] = $qualification->description;
		// }
        //fim Campos relacionados

        $data['page_title'] = 'Home';
        $data['count'] = $this->common_model->get_user_total();
        $data['msg_error'] = "";
        $data['main_content'] = $this->load->view('resumee/home', $data, TRUE);
        $this->load->view('resumee/index', $data);
    }

    public function criar() {
        
        if ($this->input->post('enviar')) {

            $data = array();
            $data['name']           = $this->input->post('name');
            $data['age']            = $this->input->post('age');
            $data['qualification']  = $this->input->post('qualification');
            $data['email']          = $this->input->post('email');
            $data['phone']          = $this->input->post('phone');
            $data['instagram']      = $this->input->post('instagram');
            $data['twitter']        = $this->input->post('twitter');
            $data['facebook']       = $this->input->post('facebook');
            $data['hobby']          = $this->input->post('hobby');
            $data['music_style']    = $this->input->post('music_style');
            $data['notes']          = $this->input->post('notes');
            $data['art_direction']  = ( isset( $_POST['art_direction'] ) ) ? 1 : 0;
            $data['editorial']      = ( isset( $_POST['editorial'] ) ) ? 1 : 0;
            $data['attendance']     = ( isset( $_POST['attendance'] ) ) ? 1 : 0;
            $data['ticket_office']  = ( isset( $_POST['ticket_office'] ) ) ? 1 : 0;
            $data['recepcionist']   = ( isset( $_POST['recepcionist'] ) ) ? 1 : 0;
            $data['cashier']        = ( isset( $_POST['cashier'] ) ) ? 1 : 0;
            $data['rounder_cashier']= ( isset( $_POST['rounder_cashier'] ) ) ? 1 : 0;
            $data['attendance_bar'] = ( isset( $_POST['attendance_bar'] ) ) ? 1 : 0;
            $data['status']         = 1;
            $data['createdAt' ]     = date("Y-m-d");
            
            if( $this->form_validation->run('Resumee') === FALSE || !empty($data['msg_error']) ){
				$data['msg_error'] = (!empty($data['msg_error'])) ? $data['msg_error'] : validation_errors("<p>","</p>");
                
                $this->session->set_flashdata("msg_error", $data['msg_error']);
                $data['main_content'] = $this->load->view('resumee/home', $data, TRUE);
                $this->load->view('resumee/index', $data); 
            } else {
                $this->db->insert('resumee', $data);
                $this->session->set_flashdata('msg_success', 'Currículo cadastrado com sucesso!');
                redirect('resumee/index');
            }
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