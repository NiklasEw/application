<?php
defined('BASEPATH') OR exit();
class Pages extends CI_Controller{
    
    function __construct(){
        parent::__construct();
        $this->load->model('Search_model');
    }

    public function search_input($page="searchpage"){
        $search = $this->input->post('input');
        $this->Search_model->search($search);
        $data['search']=$this->Search_model->search($search);
        $this->load->library('template');
        $this->template->set('title', ucfirst($page));
        $this->template->load('basic_template',$page,$data);
    }

    }
}