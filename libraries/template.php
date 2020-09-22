<?php
class Template {
var $template_data = array();

function load($template, $view, $view_data = array()){
    $this-> CI =& get_instance();
    $this->set('content', $this->CI->load->view($view, $view_data, TRUE));
    return $this->CI->load->view($template, $this->template_data);
    }

/*
* Stores everything in template_data
*
* @param String $key key of an associative array
* @param mixed $value value associated to the key
*/
function set($key, $value){
    $this -> template_data[$key] = $value;
    }

function get($key){
    return $template_data[$key];
}
}
?>