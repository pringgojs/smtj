<?php
class Modellogin extends CI_Model{
	function __contruct(){
		parent::__contruct();
	}
	function cek_user($data){        
    	$d = $this->db->get_where('tb_user',$data);	
		return $d->num_rows(); 
    }
    
    function select_user($kode){        
    	$this->db->select('*'); 
		$this->db->from('tb_user'); 
		$this->db->where('id_user', $kode);
		return $this->db->get();
    }  
    function data_limit($table, $where, $order, $limit, $start){
        return $this->db
                    ->order_by($order,'asc')
                    ->limit($limit, $start)
                    ->get_where($table, $where);
        
    }
}