<?php
defined('BASEPATH') OR exit();
class Database extends CI_Controller{
    public function mydata($page='datapage'){
        if ( ! file_exists(APPPATH.'views/dataview/'.$page.'.php')){
            
            // Whoops, we don't have a page for that!
            show_404();
            }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        #$testquery = $this->Db_model->get_Data(1);//Erste Eintrag des Arrays der Datenbank
        #print_r($testquery);//Einfaches Printen, des kompletten Arrays
        $data['query'] = $this->Db_model->get_Data();
        
        
        $this->load->library('template');
        $this->template->set('title', ucfirst($page));
        $this->template->set('nav', 'navigation stuff');
        $this->template->set('adress', 'My Copyright');
        $this->template->set('tel', '007');
        $this->template->load('basic_template','Dataview/'.$page,$data);
        

    }
    function __construct(){
        parent::__construct(); // calls the super constructor
        $this->load->model('Db_model');

        #print_r($query);
        //hi
    }
    
    public function create(){
        $name = $this->input->post('name');
        $content = $this->input->post('content');
        $rating = $this->input->post('rating');
        print_r($rating);
        $id = $this->Db_model->create($name,$content,$rating);
        echo $id;
    }
    public function delete(){
        $id = $this->input->post('id');
        $this->Db_model->delete($id);
    }

    public function update(){
        $name = $this->input->post('name');
        $content = $this->input->post('content');
        $id=$this->input->post('id');
        $this->Db_model->update($id,$name,$content);
    }
    
}