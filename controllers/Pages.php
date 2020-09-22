<?php
defined('BASEPATH') OR exit();
class Pages extends CI_Controller{
    public function view($page='home'){
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
            
            // Whoops, we don't have a page for that!
            show_404();
            }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->library('template');
        $this->template->set('title', ucfirst($page));
        $this->template->set('nav', 'navigation stuff');
        $this->template->set('adress', 'My Copyright');
        $this->template->set('tel', '007');
        $this->template->load('basic_template','Pages/'.$page);

    }
}