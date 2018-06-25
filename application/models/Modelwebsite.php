<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Modelwebsite extends CI_Model{
    
	function __contruct(){
		parent::__contruct();

	}
	function SelectData($tabel, $where){        
    	return $this->db->get_where($tabel,$where);
    			 
    }
    function selectMenu($tabel, $where){        
        return $this->db
                    ->order_by('urut','ASC')
                    ->get_where($tabel,$where);
                 
    }
    function post_order_limit($table,$kode,$limit, $start, $where){
        return $this->db
                    ->order_by($kode,'DESC')
                    ->limit($limit, $start)
                    ->get_where($table, $where);
                   
    }
    function tag_news($limit, $start, $label){
        $this->db->limit($limit, $start);
        $query = $this->db->get_where("post_view",'label LIKE "%'.$label.'%" AND status = 1');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
        
    }
    function selectNewsUpdate($tabel, $where){        
        return $this->db
                    ->order_by('id_post','desc')
                    ->get_where($tabel,$where);
                 
    }
    
}