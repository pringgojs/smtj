
<?php
class Modelcategory extends CI_Model{
    
	function __contruct(){
		parent::__contruct();
       
	}
	function view(){        
    	return $this->db->select('*')
    			 ->from('tb_kategori')
                 ->where('id_kategori != 0')
    			 ->get();
    } 
    function insert($data){
 		$this->db->insert('tb_kategori', $data);
    }
}