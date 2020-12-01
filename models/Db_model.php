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
    public function create($name, $content,$rating){
        $this->db->set('name', $name);
        $this->db->set('content', $content);
        echo "rating".$rating;
        $this->db->set('rating',(int)$rating);
        $this->db->insert('mytable');
        return $this->db->insert_id();
    }
    public function delete($id){
        $this->db->where('id', intval($id));
        $this->db->delete('mytable');
        }
}
