<?php
class Layout extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	     $this->load->model('modellogin'); 
      $this->load->model('modelmenu'); 
     	$this->method_call =& get_instance(); // untuk memanggil method dari view
     	global $kode;
     }
     function cekLogin(){
      if(isset($_SESSION['kode']) OR isset($_COOKIE['kode'])){
           if(isset($_SESSION['kode']))
           {    $kode = $_SESSION['kode']; }
           else
           {    $kode = $_COOKIE['kode']; }

           return $kode;
      }else{
          $url      = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
          redirect("login/?rel=".$url);
      }
     }
     function index(){
          $t = $this->cekLogin(); // get kode login
          $data['user'] = $this->modellogin->select_user($t)->result();
          $data['parent'] = $this->modelmenu->pages_parent()->result(); 
          $data['news'] = $this->modelmenu->view_post()->result();  
          //$data['layout'] =  $this->db->select('tb_post')->result();
          $this->load->view('admin/include/header', $data);
          $this->load->view('admin/include/header-profil');
          $this->load->view('admin/include/navbar');
          $this->load->view('admin/layout/main');
          $this->load->view('admin/include/sidecontent');
          
          $this->load->view('admin/include/footer');
     }
     function catch_that_image($post){
          $img = null;
          $out      = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post, $matches);
          $a        = @$matches[1][0];
          return $a;     
     }
     function call_child_table($kode){
           $data = array('parent' => $kode, );
           $cek_rows_child = $this->modelmenu->select_pages_child($data);
           // /$cekusername = $this->modellogin->cek_user($data);
           
           if($cek_rows_child != 0){
               $child      =  $this->modelmenu->show_pages_child($kode)->result();
               foreach ($child as $key => $value) {
                    $kode = $value->id_post;
                   $name = $value->judul;
                   $link = $value->link_asli;
                   $isi  = $value->isi;
                   $fitur_img = $value->fitur_img;
                   #cek img 
                   $images = $this->catch_that_image($value->isi);
                   $IMG = TRUE;
                    if($fitur_img != ""){
                         $thumbnail = $fitur_img;
                    }else{
                         if($images != ""){
                              $thumbnail = $images;
                         }else{
                              $thumbnail = base_url('asset/images/not-img.png');
                              $IMG = FALSE;
                         }
                    }
                    $deskripsi = htmlentities(strip_tags($isi));
                    if(strlen($deskripsi) > 220 ){
                      $deskripsi = substr($deskripsi, 0, 220)."...";
                      //$deskripsi2 = substr(htmlentities(strip_tags($data['isi'])), 0, 400)."...";
                    }else{
                       $deskripsi = $deskripsi;
                    }
                  echo "<tr class='baris baris-halaman-$kode' onclick=\"selectPage('".$kode."','".$kode."','0','".$thumbnail."','".$name."')\">
                        <td></td>
                         <td><i class='fa fa-angle-right'></i> ".$name."</td>
                         <td>".$link."</td>
                    </tr>";
                            
               }


          }
     }
     function save(){
          
          $kode     = $this->cekLogin();

          $id1      = $_GET['id1'];
          $label1   = $_GET['label1'];
          $link1    = $_GET['link1'];
          $posisi1  = $_GET['key1'];

          $id2      = $_GET['id2'];
          $label2   = $_GET['label2'];
          $link2    = $_GET['link2'];
          $posisi2  = $_GET['key2'];

          $id3      = $_GET['id3'];
          $label3   = $_GET['label3'];
          $link3    = $_GET['link3'];
          $posisi3  = $_GET['key3'];

          $id4      = $_GET['id4'];
          $label4   = $_GET['label4'];
          $link4    = $_GET['link4'];
          $posisi4  = $_GET['key4'];

          #-------------------#
          # KONDISI 1         #
          #-------------------#
          if($label1==""){
               $label1 = 'Label Default';
          }else{
               $label1 = $label1;
          }
          if($label2==""){
               $label2 = 'Label Default';
          }else{
               $label2 = $label2;
          }
          if($label3==""){
               $label3 = 'Label Default';
          }else{
               $label3 = $label3;
          }
          if($label4==""){
               $label4 = 'Label Default';
          }else{
               $label4 = $label4;
          }
          #----- 1 --------#
          $arrayName = array(
               'posisi' => $posisi1,
               'id_post' =>$link1,
               'label' => $label1,
                );
          if($id1!='0'){
               $this->db->where('id', $id1);
               $this->db->update('tb_setting_layout', $arrayName); 
               
          }else{
               $insert = $this->db->insert('tb_setting_layout',$arrayName);
          }
          #----- 2 --------#
          $arrayName = array(
               'posisi' => $posisi2,
               'id_post' =>$link2,
               'label' => $label2,
                );
          if($id2!='0'){
               $this->db->where('id', $id2);
               $this->db->update('tb_setting_layout', $arrayName); 
               
          }else{
               $insert = $this->db->insert('tb_setting_layout',$arrayName);
          }
          #----- 3 --------#
          $arrayName = array(
               'posisi' => $posisi3,
               'id_post' =>$link3,
               'label' => $label3,
                );
          if($id3!='0'){
               $this->db->where('id', $id3);
               $this->db->update('tb_setting_layout', $arrayName); 
               
          }else{
               $insert = $this->db->insert('tb_setting_layout',$arrayName);
          }
          #----- 4 --------#
          $arrayName = array(
               'posisi' => $posisi4,
               'id_post' =>$link4,
               'label' => $label4,
                );
         if($id4!='0'){
               $this->db->where('id', $id4);
               $this->db->update('tb_setting_layout', $arrayName); 
               
          }else{
               $insert = $this->db->insert('tb_setting_layout',$arrayName);
          }

          echo "1";
          #-------------------#
     }
     function cek_post($kode="",$key){
         // echo $kode;

          $arrayName= array('id_post' => $kode, );
          $data     = $this->db->get_where('tb_post',$arrayName)->row();
          $isi      = $data->isi;
          $deskripsi = htmlentities(strip_tags($isi));
          if(strlen($deskripsi) > 220 ){
            $deskripsi = substr($deskripsi, 0, 220)."...";
            //$deskripsi2 = substr(htmlentities(strip_tags($data['isi'])), 0, 400)."...";
          }else{
             $deskripsi = $deskripsi;
          }
          if($key == "echo"){
               echo $deskripsi;
          }else{
               return $deskripsi;
          }
          
     }

     function cek_url($posisi=""){
          if($posisi!=""){
               $arrayName= array('posisi' => $posisi, );
               $data     = $this->db->get_where('tb_setting_layout',$arrayName)->num_rows();
               if($data > 0){
                    $data     = $this->db->get_where('tb_setting_layout',$arrayName)->row();
                    return $label = $data->id_post;
               }else{
                    return "0";
               }

               
          }else{
               return "0";
          }
     }
     function cek_label($posisi=""){
          if($posisi!=""){
               $arrayName= array('posisi' => $posisi, );
               $data     = $this->db->get_where('tb_setting_layout',$arrayName)->num_rows();
               if($data > 0){
                    $data     = $this->db->get_where('tb_setting_layout',$arrayName)->row();
                    return $label = $data->label;
               }else{
                    return "Default";
               }

               
          }else{
               return "Default";
          }
         
     }
     function cek_deskripsi($posisi=""){
          if($posisi!=""){
               $arrayName= array('posisi' => $posisi, );
               $data     = $this->db->get_where('tb_setting_layout',$arrayName)->num_rows();
               if($data > 0){
                    $data     = $this->db->get_where('tb_setting_layout',$arrayName)->row();
                    $idpost = $data->id_post;
                    $post = $this->cek_post($idpost,"return");
                    return $post;
               }else{
                    return "0";
               }

               
          }else{
               return "0";
          }
         
     }
     function cek_judul($posisi=""){
          if($posisi!=""){
               $arrayName= array('posisi' => $posisi, );
               $data     = $this->db->get_where('tb_setting_layout',$arrayName)->num_rows();
               if($data > 0){
                    $data     = $this->db->get_where('tb_setting_layout',$arrayName)->row();
                    $idpost = $data->id_post;
                    // cek judul
                    $arrayNam = array('id_post' => $idpost, );
                    $data     = $this->db->get_where('tb_post',$arrayNam)->row();
                    $isi      = $data->judul;
                    return $isi;
               }else{
                    return "Title Default";
               }

               
          }else{
               return "Title Default";
          }
     }

     function cek_img($posisi=""){
          if($posisi!=""){
               $arrayName= array('posisi' => $posisi, );
               $data     = $this->db->get_where('tb_setting_layout',$arrayName)->num_rows();
               if($data > 0){
                    $data     = $this->db->get_where('tb_setting_layout',$arrayName)->row();
                    $idpost = $data->id_post;
                    // cek judul
                    $arrayNam = array('id_post' => $idpost, );
                    $value    = $this->db->get_where('tb_post',$arrayNam)->row();
                    $name     = $value->judul;
                        $link = $value->link_asli;
                        $isi  = $value->isi;
                        $fitur_img = $value->fitur_img;
                        #cek img 
                        $images = $this->catch_that_image($value->isi);
                        $IMG = TRUE;
                         if($fitur_img != ""){
                              $thumbnail = $fitur_img;
                         }else{
                              if($images != ""){
                                   $thumbnail = $images;
                              }else{
                                   $thumbnail = base_url('asset/images/not-img.png');
                                   $IMG = FALSE;
                              }
                         }

                    return $thumbnail;
               }else{
                    $thumbnailx = base_url('asset/images/not-img.png');
                    return $thumbnailx;
               }

               
          }else{
               $thumbnailx = base_url('asset/images/not-img.png');
               return $thumbnailx;
          }
     }
     function create_paragraf($jum){
          for ($i=0; $i < $jum ; $i++) { 
               # code...
               echo '<div class="progress progress-xs m-t-sm"></div>';
          }
     }

     function cek_id($posisi=""){
          if($posisi!=""){
               $arrayName= array('posisi' => $posisi, );
               $data     = $this->db->get_where('tb_setting_layout',$arrayName)->num_rows();
               if($data > 0){
                    $data     = $this->db->get_where('tb_setting_layout',$arrayName)->row();
                    $id_seting= $data->id;
                    
                    return $id_seting;
               }else{
                    return "0";
               }

               
          }else{
               return "0";
          }
     }

    

}