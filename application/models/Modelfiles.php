
<?php
class Modelfiles extends CI_Model{
	function __contruct(){
		parent::__contruct();
	}
	
    function view(){        
        return $this->db->select('*')
                 ->from('tb_file')
                 ->get();
    }
    function view_file($table, $order){
        $xplode = explode("_", $order);
        if($xplode[1]=="up"){
            $by = "ASC";
        }else{
            $by = "DESC";
        }
        return $this->db->select('*')
                 ->from($table)
                 ->order_by($xplode[0],$by)
                 ->get();
    } 
    function view_by_id($kode){        
        return $this->db->select('*')
                 ->from('tb_file')
                 ->where('id_file',$kode)
                 ->get();
    } 
    function insert($data){
        $this->db->insert('tb_file', $data);
    }

    // membuat apgging
    function files($limit, $start){
    	return $this->db
    				->order_by('id_file','asc')
    				->limit($limit, $start)
    				->get_where('tb_file');
    }
    function files_rows(){
    	return $this->db
    				->get('tb_file')
    				->num_rows();
    }  
    
}