<?php
class Modelnews extends CI_Model{
	function __contruct(){
		parent::__contruct();
	}
	function view_kategori(){
        return $this->db->select('*')
                 ->from('tb_kategori')
                 ->order_by('id_kategori','DESC')
                 ->get();
    }
    function view_label(){
        return $this->db->select('*')
                 ->from('tb_label')
                 ->get();
    }
    function view_news(){
        return $this->db->select('*')
                 ->from('tb_post')
                 ->get();
    }
    function kategori_id($kode){
        $this->db->select('*'); 
        $this->db->from('tb_kategori'); 
        $this->db->where('id_kategori', $kode);
        return $this->db->get();
    }
    function kategori_nama($data){        
        $d = $this->db->get_where('tb_kategori',$data); 
        return $d->num_rows(); 
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

    #POST
    function insert($data){
        $this->db->insert('tb_post', $data);
    }
    function insert_files($data){
        $this->db->insert('tb_file', $data);
    }
    function insert_label($data){
        $this->db->insert('tb_label', $data);
        $last_id    = $this->db->insert_id();
        return $last_id;
    }
    
    
    function post($limit, $start){
        return $this->db
                    ->order_by('id_post','asc')
                    ->limit($limit, $start)
                    ->get_where('post_view');
    }
      
    function select_label($data){        
        $d = $this->db->get_where('tb_label',$data); 
        return $d->num_rows(); 
    }
    function label_id($label){
        $this->db->select('*'); 
        $this->db->from('tb_label'); 
        $this->db->where('nama', $label);
        return $this->db->get();
    }
    function post_id($kode){
        $this->db->select('*'); 
        $this->db->from('tb_post'); 
        $this->db->where('id_post', $kode);
        return $this->db->get();
    }
    // OR SQL
    //--------------
    //  function post($limit, $start){
    //     return $this->db
    //                 ->order_by('id_post','asc')
    //                 ->limit($limit, $start)
    //                 ->where('status','1')
    //                 ->or_where('status','2')
    //                 ->get_where('tb_post');
    // }

    # PAGES MODEL
    function pages($limit, $start){
        return $this->db
                    ->order_by('id_post','asc')
                    ->limit($limit, $start)
                    ->get_where('page_parent_view');
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
    function pages_parent(){
        return $this->db
                    ->select('*')
                    ->from('page_parent_view')
                    ->get();
    }


    # AKN PONOROGO #
    # PAGES MODEL
    function data_limit($table, $where, $order, $limit, $start){
        if($where != "0"){
            return $this->db
                    ->order_by($order,'asc')
                    ->limit($limit, $start)
                    ->get_where($table, $where);
        }else{
            return $this->db
                    ->order_by($order,'asc')
                    ->limit($limit, $start)
                    ->get_where($table);
        }
        
    }
    
}