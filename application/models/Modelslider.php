<?php
class Modelslider extends CI_Model{
	function __contruct(){
		parent::__contruct();
	}
	# FILE 
    function view_file($table){
        return $this->db->select('*')
                 ->from($table)
                 ->get();
    }

    function max_file(){
        return $this->db->select('*')
                 ->from('max_file')
                 ->get();
    }

    function select_table($table){
    	return $this->db->select('*')
                 ->from($table)
                 ->get();
    }
    # MENU NEW
    function pages_parent(){
        return $this->db
                    ->select('*')
                    ->from('page_parent_view')
                    ->get();
    }
    function select_pages_child($data){        
        $d = $this->db->get_where('tb_post',$data); 
        return $d->num_rows(); 

    }
    function show_pages_child($kode){  
        $this->db->select('*'); 
        $this->db->from('pages_view'); 
        $this->db->where('parent', $kode);      
        return $this->db->get();

    }
}