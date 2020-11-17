<?php
class Db_model extends CI_Model {
 public function __construct(){
 $this->load->database();
 }
 public function get_data($id=null){
    $query = $this->db->get('mytable');
    if($id==null){
        return $query->result_array();
    } else{
        return $query->result_array()[0];
    }
 }
}
