<?php
defined('BASEPATH') OR exit();
class Database extends CI_Controller{
    public function mydata($page='datapage'){
        if ( ! file_exists(APPPATH.'views/dataview/'.$page.'.php')){
            
            // Whoops, we don't have a page for that!
            show_404();
            }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->library('template');
        $this->template->set('title', ucfirst($page));
        $this->template->set('nav', 'navigation stuff');
        $this->template->set('adress', 'My Copyright');
        $this->template->set('tel', '007');
        $this->template->load('basic_template','Dataview/'.$page);

    }
    function __construct(){
        parent::__construct(); // calls the super constructor
        $this->load->model('Db_model');
        $query = $this->Db_model->get_Data();

        #print_r($query);
        
        }
}