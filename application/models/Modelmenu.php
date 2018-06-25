<?php
class Modelmenu extends CI_Model{
	function __contruct(){
		parent::__contruct();
	}
	function view(){        
        return $this->db->select('*')
                 ->from('tb_menu')
                 ->get();
    } 
    function view_post(){        
        return $this->db->select('*')
                 ->from('post_view')
                 ->get();
    }
    function view_files(){        
        return $this->db->select('*')
                 ->from('tb_file')
                 ->get();
    } 
    function insert($data){
 		$this->db->insert('tb_menu', $data);
    }
    function get_posisi($posisi){
        $this->db->select('*'); 
        $this->db->from('tb_menu'); 
        $this->db->where('posisi', $posisi);
        $this->db->where('parent', '0');
        return $this->db->get();
    }
    function getWhere($data){
        return $this->db->get_where('tb_menu',$data); 
        //$data = $this->db->query("SELECT * FROM ".$table." WHERE ".$where);
        //return $this->db->get();
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