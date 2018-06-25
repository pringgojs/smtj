<?php
class Galery extends CI_Controller {
 	public function __construct()    {
         parent::__construct();
         $this->load->model('modelnews'); 
          $this->load->model('modellogin'); 
          $this->load->library('pagination'); 
          $this->load->model('modelslider'); 
          $this->method_call =& get_instance(); // untuk memanggil method dari view
          global $kode;
 	}

 	function cek_hak_akses_user(){
      $kode_secure= 'x0025'; //  kode halaman user
      $t = $this->cekLogin(); // get kode login
      $kodeakses  = array('id_modul' => $kode_secure, );
      $data     = $this->db->get_where('tb_modul_manajemen', $kodeakses)->row();
      $id_modul   = $data->id_modul_manajemen;

      $query    = $this->db->query("SELECT * FROM tb_user WHERE id_user = '".$t."' AND hak_akses LIKE '%".$id_modul."%'")->num_rows();
      if($query < 1){
        redirect(base_url('not_access'));
      }
    }
 	function cekLogin(){
          if(isset($_SESSION['kode']) OR isset($_COOKIE['kode'])){
               if(isset($_SESSION['kode']))
               {    $kode = $_SESSION['kode']; }
               else
               {    $kode = $_COOKIE['kode']; }

               return $kode;
          }else{
               $url                = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
               redirect("login/?rel=".$url);
               
          }
     }
     
     # MODUL USER #
	function cek_modul_0_0(){
    # cek hak akses user
    $kode_user = $this->cekLogin();
    $where = array('id_user' => $kode_user, );
    $user   = $this->db->get_where('tb_user', $where)->row();
    $hak  = $user->hak_akses;
    $i=0;
    $kodeakses = "-0-".$hak."-";
    #cek modul hak akses

    $parentUtama = array(
      'posisi' => "0",
      'perent' => "0", );
    $data   = $this->db->get_where('tb_modul_manajemen', $parentUtama)->result();
    $navmain  = 0;
    foreach ($data as $key => $value) {
      # code...
      $kode   = $value->id_modul_manajemen;
      $label  = $value->label;

      $loop   = $navmain;
      if($navmain == 0){
        $nav_class  = "nav nav-main";
        $data_ride  = "data-ride= 'collapse'";
        $hiden_nav  = '<div class="line dk hidden-nav-xs"></div>';
        # nav pertama
      }else{
        $nav_class  = "nav";
        $data_ride  = "";
        $hiden_nav  = "";
        #nav ke dua
      }
      #cek hak akses user di database
      if(strripos($kodeakses, "-".$kode."-") == true){$check= TRUE;}else{$check=FALSE;}
      if($check == TRUE ){
          echo '
          <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">'.$label.'</div>
          <ul class="'.$nav_class.'" '.$data_ride.'>';
          #kontent
          $this->cek_modul_0_1($kode, $loop);
          echo '</ul>';
          echo $hiden_nav;
      }
      $navmain++;
    }
  }
	  function cek_modul_0_1($kode="", $loop=""){
	    # cek hak akses user
	    $kode_user = $this->cekLogin();
	    $where = array('id_user' => $kode_user, );
	    $user   = $this->db->get_where('tb_user', $where)->row();
	    $hak  = $user->hak_akses;
	    $i=0;
	    $kodeakses = "-0-".$hak."-";
	    #cek modul hak akses

	    $parentUtama = array(
	      'posisi' => $kode,
	      'perent' => "0", );
	    $navmain  = 0;
	    $data   = $this->db->get_where('tb_modul_manajemen', $parentUtama)->result();
	    foreach ($data as $key => $value) {
	      # code...
	      $id_chile   = $value->id_modul_manajemen;
	      $label  = $value->label;
	      $ikon   = $value->ikon;
	      $link   = $this->cek_modul_id($value->id_modul);
	      if($loop == 0){
	        #jika loopingna ke Start
	        if($navmain == 0){
	          $active   = "class='active'";
	        }else{
	          $active   = "";
	        }
	      }else{
	        $active   = "";
	      }
	      

	      if(trim($ikon)==""){
	        $ikon   = "i-home";
	      }else{
	        $ikon   = $ikon;
	      }
	      $cek_jumlah_chile   = $this->cek_jumlah_child_dari_parent($id_chile, $kode);
	      if($cek_jumlah_chile > 1){
	        $jumlah_chile   = '
	            <span class="pull-right text-muted">
	                          <i class="i i-circle-sm-o text"></i>
	                          <i class="i i-circle-sm text-active"></i>
	                        </span>
	                        <b class="badge bg-danger pull-right">'.$cek_jumlah_chile.'</b>';
	                
	            }else{
	              $jumlah_chile = "";
	              $element_Child  = "";
	            }
	      
	            #cek hak akses user di database
	            if(strripos($kodeakses, "-".$id_chile."-") == true){$check= TRUE;}else{$check=FALSE;}
	            if($check == TRUE){
	              echo '<li  '.$active.'>
	                      <a href="'.$link.'" class="auto">
	                        '.$jumlah_chile.'
	                        <i class="i '.$ikon.' icon">
	                        </i>
	                        <span class="font-bold">'.$label.'</span>
	                      </a>';
	                      if($cek_jumlah_chile > 0){
	                        $this->child_dari_parent($id_chile, $kode);
	                      }else{
	                        #
	                      }
	              echo '</li>';
	            }
	      
	      $navmain++;
	    }
	  }
	  function cek_jumlah_child_dari_parent($id_child="", $kode=""){
	    $parentUtama = array(
	      'posisi' => $kode,
	      'perent' => $id_child, );
	    $navmain  = 0;
	    $data   = $this->db->get_where('tb_modul_manajemen', $parentUtama)->num_rows();
	    return $data;
	  }
	  function child_dari_parent($id_child="", $kode=""){
	    # cek hak akses user
	    $kode_user = $this->cekLogin();
	    $where = array('id_user' => $kode_user, );
	    $user   = $this->db->get_where('tb_user', $where)->row();
	    $hak  = $user->hak_akses;
	    $i=0;
	    $kodeakses = "-0-".$hak."-";

	    echo '<ul class="nav dk">';
	    $parentUtama = array(
	      'posisi' => $kode,
	      'perent' => $id_child, );
	    $navmain  = 0;

	    $data   = $this->db->get_where('tb_modul_manajemen', $parentUtama)->result();
	    foreach ($data as $key => $value) {
	      # code...
	      $id_chile   = $value->id_modul_manajemen;
	      $label  = $value->label;
	      $ikon   = $value->ikon;
	      $link   = $this->cek_modul_id($value->id_modul);
	      if(strripos($kodeakses, "-".$id_chile."-") == true){$check= TRUE;}else{$check=FALSE;}
	            if($check == TRUE){
	              echo '<li >
	                    <a href="'.$link.'" class="auto">                                                        
	                      <i class="i i-dot"></i>

	                      <span>'.$label.'</span>
	                    </a>
	                  </li>';
	            }
	      
	    }
	    echo '</ul>';
	  }
	  function cek_modul_id($kode=""){

	    if(@$kode==""){
	      return "#";
	    }else{
	      $where = array('id_modul_admin' => $kode, );
	      $data   = $this->db->get_where('tb_modul_admin', $where);
	      if($data->num_rows()>0){
	        $data   = $data->row();
	        $link   = base_url().$data->link;
	        return $link;
	      }else{
	        return "#";
	      }
	      

	    }
	    
	  }
 	function index($id=""){
          $t = $this->cekLogin(); // get kode login
          $this->cek_hak_akses_user();
          $data['user'] = $this->modellogin->select_user($t)->result(); 
          $array = array('galery_parent' => 0, );
          $this->load->view('admin/include/header', $data);
          $this->load->view('admin/include/header-profil', $data);
          $this->load->view('admin/include/navbar');
          if($id == ""){ 
          	$data['galery'] = $this->db->order_by('id_galery', 'desc')->limit('20','0')->get_where('tb_galery', $array)->result();
          	$this->load->view('admin/galery/main', $data);
          
          	
	      }else{

	      	$array2 = array('galery_parent' => $id, );
	      	$array3 = array('id_galery'=> $id, );
	      	$row = $this->db->get_where('tb_galery', $array3)->num_rows();
	      	if($row < 1){
	      		redirect('administrator/galery');
	      	}
	      	$data['parent'] = $this->db->get_where('tb_galery', $array3)->row();
	      	$data['galery'] = $this->db->order_by('id_galery', 'desc')->get_where('tb_galery', $array2)->result();
          	
	      	$this->load->view('admin/galery/preview', $data);
	      }
	      $this->load->view('admin/include/footer');
 	}
 	function add(){
 		  $t = $this->cekLogin(); // get kode login
	      $this->cek_hak_akses_user();
	      $data['user'] = $this->modellogin->select_user($t)->result();
	      $this->load->view('admin/include/header', $data);
	      $this->load->view('admin/include/header-profil');
	      $this->load->view('admin/include/navbar');
	      $this->load->view('admin/galery/add');
	      $this->load->view('admin/include/sidecontent');
	      
	      $this->load->view('admin/include/footer');
 	}
 	function save(){
      	$t = $kode = $this->cekLogin();
      	$this->cek_hak_akses_user();
      	if(@$_POST['formmenu'] != null){
	        $label = $_POST['label'];
	        $kode_file = trim($_POST['linkImg']);
	        $desk   = $_POST['desc'];
	        if($kode_file==""){
	        	redirect('administrator/galery');
	        }

	        $data = array(
	          'galery_title' => $label,
	          'galery_status_cover' => 1,
	          'galery_description' => $desk,
	          'galery_parent' => 0,
	          'galery_image' => $kode_file,
			  'galery_date_create'=> date('Y-m-d H:i:s'),
	          'id_user'=>$t,
         	);
	        $this->db->insert('tb_galery', $data);
	        $this->insert_aktifitas($kode, "Menambah galery ");
      	}
	 	
      	redirect('administrator/galery');
    }
    function max_file(){
      $max  = $this->modelslider->max_file()->result();
      foreach ($max as $key => $data) {
        $id = $data->last_id;
        return $id;
      }
    }
    function insert_aktifitas($user, $keterangan){
        	$data = array(
          	'id_user' => $user,
          	'keterangan'=> $keterangan,
          	'tgl'=>date('Y-m-d H:i:s'),
         	);
        	$this->db->insert('tb_aktifitas', $data);
    }
    function add_image_to_albume($id_album="", $idFIle=""){
    	$t = $kode = $this->cekLogin();
      	$this->cek_hak_akses_user();
      	if($id_album == "" || $idFIle == ""){
      		redirect('administrator/galery');
      	}
      	$cek 	= $this->db->select('*')->where('id_file', $idFIle)->from('tb_file')->get()->row();
      	$url = base_url().$cek->link;
      	$data = array(
	          'galery_parent' => $id_album,
	          'galery_image' => $url,
			  'galery_date_create'=> date('Y-m-d H:i:s'),
	          'id_user'=>$t,
         	);
        $this->db->insert('tb_galery', $data);
        $insert_id = $this->db->insert_id();
        $this->insert_aktifitas($kode, "Menambah galery ");
        echo $insert_id;
    }
    function hapus($kode=""){
    	$t = $this->cekLogin();
      	$this->cek_hak_akses_user();
      	if($kode==""){ redirect('administrator/galery');}
      	$array = array('id_galery' => $kode, );
      	$cek = $this->db->select('*')->get_where('tb_galery', $array);
      	if($cek->num_rows() < 1 ){redirect('administrator/galery'); }
      	if($cek->row()->galery_parent == 0){
      		$perentId= $cek->row()->id_galery;
      		$this->db->where('galery_parent', $perentId); 
       		$this->db->delete('tb_galery'); 

      	}
		$this->db->where('id_galery', $kode); 
   		$this->db->delete('tb_galery');
       	$newURL = $_SERVER['HTTP_REFERER'];
       	redirect($newURL);
    }
}