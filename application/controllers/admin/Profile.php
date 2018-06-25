<?php
class Profile extends CI_Controller {

	public function __construct()    {
	    parent::__construct();
	    $this->load->model('modelcategory'); 
     	$this->load->model('modellogin'); 
     	$this->load->library('pagination'); 
	    $this->method_call =& get_instance(); // untuk memanggil method dari view
	   
    }
function aktifitas_terakhir(){
    $kode   = $this->cekLogin();
    $where  = array('id_user' => $kode, );
    $data   = $this->db->get_where('tb_aktifitas', $where);
    if($data->num_rows() > 0){
      $data   = $data->result();
      foreach ($data as $key => $value) {
        # code...
        $keterangan   = $value->keterangan;
        $tgl          = $value->tgl;
        echo "<li class='list-group-item'>
                <p>".$keterangan."</p>
                <small class='block text-muted'><i class='fa fa-clock-o'></i> ".$tgl."</small>
              </li>";
      }
    } 
}
	function index(){
		$t 		= $this->cekLogin(); // get kode login
      	
      	$where = array('id_user' => $t);
      	$query = $this->db->get_where('tb_user', $where);
		$hasil = $query->row();
		if($hasil->status == "1"){
			$status = "Active";
		}else if($hasil->status == "2"){
			$status = "Non Active";
		}else{
			$status = "Banned";
		}

      	$data = array(
      		'user' =>$this->modellogin->select_user($t)->result(),
      		'edit' => base_url('administrator/profile/edit/') ,
      		'nama' => $hasil->nama ,
      		'jabatan' => $hasil->jabatan ,
      		'status' => $status , 
	      	'last_login' => $hasil->last_login ,
	      	'yg_menambahkan' => $this->cek_user($hasil->yg_menambahkan),
	      	'jml_post' => $this->cek_jumlah_post($hasil->id_user, "news"),
	      	'jml_anno' => $this->cek_jumlah_post($hasil->id_user, "announcement"),
	      	'jml_agenda' => $this->cek_jumlah_post($hasil->id_user, "agenda"),
	      	'jml_pages' => $this->cek_jumlah_post($hasil->id_user, "pages"),
	      	);


	    $this->load->view('admin/include/header', $data);
      	$this->load->view('admin/include/header-profil');
      	$this->load->view('admin/include/navbar');
      	$this->load->view('admin/profile/main', $data);
      	$this->load->view('admin/include/sidecontent');
	    $this->load->view('admin/include/footer');
	}
	function cek_user($kode=""){
		$where = array('id_user' => $kode);
      	$query = $this->db->get_where('tb_user', $where);
      	if($query->num_rows() > 0){
      		return $query->row()->nama;
      	}else{
      		return "Sang Pemikir";
      	}
    }
    function cek_jumlah_post($user="", $key=""){
    	$where = array('type' => $key, 'id_user'=>$user, );
    	$data 	= $this->db->get_where('tb_post', $where)->num_rows();
    	return $data;

    }
    function edit(){
		$t = $this->cekLogin(); // get kode login
		
         // $data['user'] = $this->modellogin->select_user($t)->result(); 
          if(trim($t) == ""){ redirect(base_url('administrator/user'));}
          $where = array('id_user' => $t);
          $query = $this->db->get_where('tb_user', $where);
          if($query->num_rows() < 0){redirect(base_url('administrator/user'));}
         
          $hasil = $query->row();
      	if($hasil->yg_menambahkan == "0"){
			$view 	= "admin/profile/edit_admin";
		}else{
			$view 	= "admin/profile/edit_user";
		}
          $data = array(
          	'kode' => $hasil->id_user,
          	'username' => $hasil->username,
          	'nama' => $hasil->nama,
          	'hak_akses' => $hasil->hak_akses,
          	'jabatan' => $hasil->jabatan,
          	 );
     	$data['user'] = $this->modellogin->select_user($t)->result(); 
		
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view($view,$data);
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	function update(){
		$t 			= $this->cekLogin(); // get kode login
		$nama 		= @$_POST['name'];
		$username	= @$_POST['username'];
		$password 	= md5(@$_POST['password']);
		$hak_akses 	= @$_POST['hak_akses'];
		$hak 		= implode("-",@$hak_akses);
		$where = array('id_user' => $t);
      	$query = $this->db->get_where('tb_user', $where);
      	
      	$hasil = $query->row();
		if($hasil->yg_menambahkan == "0"){
			$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'hak_akses'=> $hak, );
		}else{
			$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password, );
		}
		$this->db->where('id_user', $t);
		$this->db->update('tb_user', $data);
		redirect(base_url('administrator/profile'));
	}
	#fungsi cek hak akses
  	function cek_hak_akses_user(){
      	$kode_secure= 'x0022'; //  kode halaman user
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
	      $url      = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	      redirect("login/?rel=".$url);
	  }
 	}
 	function module(){
		$data = $this->db->get('tb_modul_manajemen')->result();
		foreach ($data as $key => $value) {
			# code...
			$id 	= $value->id_modul_manajemen;
			$label 	= $value->label;
			$posisi = $value->posisi;
			$link 	= $value->link;
			$perent = $value->perent;
			echo '
			<div class="col-sm-6">
              <div class="checkbox i-checks"><label class="i-checks">
                <input type="checkbox" value="'.$id.'" id="hak_akses" name="hak_akses['.$id.']"><i></i>'.$label.'</label>
              </div>
            </div>
			';
		}
	}
	function cek_module($user=""){
		$where = array('id_user' => $user, );
		$user 	= $this->db->get_where('tb_user', $where)->row();
		$hak 	= $user->hak_akses;
		
		$data = $this->db->get('tb_modul_manajemen')->result();
		$i=0;
		$kode = "-0-".$hak."-";
		foreach ($data as $key => $value) {
			# code...
			$id 	= $value->id_modul_manajemen;
			$label 	= $value->label;
			$posisi = $value->posisi;
			$link 	= $this->cek_modul_id($value->id_modul);
			$perent = $value->perent;
			// if($hak == ""){
			// 	$check ="";
			// }else{
				
			// }
			if(strripos($kode, "-".$id."-") == true){$check="checked";}else{$check="";}
			echo '
			<div class="col-sm-6">
              <div class="checkbox i-checks"><label class="i-checks">
                <input type="checkbox" '.$check.' value="'.$id.'" id="hak_akses" name="hak_akses['.$id.']"><i></i>'.$label.'</label>
              </div>
            </div>
			';
			$i++;
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
}