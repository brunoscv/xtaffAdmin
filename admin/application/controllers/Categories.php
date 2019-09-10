<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct(){
        parent::__construct();
        check_login_user();
        $this->load->model('common_model');
        $this->load->model('categories_model');
    }

    
    public function index() {
        $data = array();
        $data['page_title'] = 'Categorias';
        $data['count'] = $this->common_model->get_user_total();
        $data['categories'] = $this->common_model->get_all_categories();
        $data['main_content'] = $this->load->view('categories/home', $data, TRUE);
        $this->load->view('admin/index', $data);
    }


    public function criar() {
        
        $data               = array();
        $data['page_title'] = 'Categorias';
        
        if($this->input->post('enviar')){
            //Preenche objeto com as informações do formulário		
            $category	= array();
            //$consulta['id'] 		= $this->input->post('id', TRUE);
            $category['descricao'] 	= $this->input->post('descricao', TRUE);
            $category['status']     = 1;
            $category['createdAt'] 	= date("Y-m-d H:i:s");

            $data = $this->security->xss_clean($category);
            
            $this->common_model->insert($category, 'categorias');
            $this->session->set_flashdata('msg', 'Categoria cadastrada com sucesso');
            redirect(base_url('admin/categories'));
        }

        $data['main_content'] = $this->load->view('categories/criar');
        $this->load->view('admin/index', $data);
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