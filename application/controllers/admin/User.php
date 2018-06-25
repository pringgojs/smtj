<?php
class User extends CI_Controller {

	public function __construct()    {
	    parent::__construct();
	    $this->load->model('modelcategory'); 
     	$this->load->model('modellogin'); 
     	
     	$this->load->library('pagination'); 
	    $this->method_call =& get_instance(); // untuk memanggil method dari view
	   
     	
	}
	function insert_aktifitas($user, $keterangan){
        	$data = array(
          	'id_user' => $user,
          	'keterangan'=> $keterangan,
          	'tgl'=>date('Y-m-d H:i:s'),
         	);
        	$this->db->insert('tb_aktifitas', $data);
     	}
	function index(){
		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();
		$data['user'] = $this->modellogin->select_user($t)->result(); 
		#CEK QUERY
          if(@$_GET['q']){
            $query = $_GET['q'];
            $where = "nama LIKE '%".$query."%' AND 	yg_menambahkan != 0";
          }else{
            $where = "yg_menambahkan != 0";
          }
		
		$config['base_url'] = base_url('administrator/user');
        $config['total_rows'] = $this->db->count_all('tb_user');
        $config['per_page'] = "10";
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination pagination-sm m-t-none m-b-none">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);
		$data['page'] 	= ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data['data'] = $this->modellogin->data_limit('tb_user',$where,'id_user', $config["per_page"],$data['page'])->result();
		$data['paging'] = $this->pagination->create_links();
		
		// end pagging
		$data['jumlah'] = $config['total_rows']; 
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/user/main',$data);
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	function add(){
		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();

		$data['user'] = $this->modellogin->select_user($t)->result(); 
		
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/user/add',$data);
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	function edit($kode=""){
		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();
         // $data['user'] = $this->Modellogin->select_user($t)->result(); 
          if(trim($kode) == ""){ redirect(base_url('administrator/user'));}
          $where = array('id_user' => $kode);
          $query = $this->db->get_where('tb_user', $where);
          if($query->num_rows() < 0){redirect(base_url('administrator/user'));}
         
          $hasil = $query->row();
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
		$this->load->view('admin/user/edit',$data);
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	function cekLogin(){
		if(isset($_SESSION['kode']) OR isset($_COOKIE['kode'])){
			if(isset($_SESSION['kode']))
		  	{	$kode = $_SESSION['kode']; }
			else
			{ 	$kode = $_COOKIE['kode']; }

			return $kode;
		}else{
			$url 			= "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
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
			$link 	= $value->id_modul;
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
	function save(){
		if(!isset($_POST['simpanberita'])){
			//echo"<script>alert(0)</script>";
			redirect('administrator/user');
		}
		$t = $this->cekLogin();
		$this->cek_hak_akses_user();
		$name 		= trim(@$_POST['name']);
		$jabatan 	= $_POST['jabatan'];
		$username 	= trim($_POST['username']);
		$password 	= md5('reset123');
		$hak_akses 	= @$_POST['hak_akses'];
		
		if($username == ""){
			redirect(base_url('administrator/user/add/?error=username'));
		}
		if($hak_akses==""){
			$hak ="1-2-3";
		}else{
			$hak 		= implode("-",$hak_akses);
		}
		$data = array(
			'nama' => $name,
			'username'=>$username,
			'password'=> $password,
			'jabatan'=> $jabatan,
			'status'=> "1",
			'hak_akses'=>$hak,
			'yg_menambahkan'=>$t );
		$this->db->insert('tb_user', $data);
		$this->insert_aktifitas($t, "Menambah user '".$name."' ");
		redirect(base_url('administrator/user'));

	}
	function update(){
		$t = $this->cekLogin();

		if(!isset($_POST['simpanberita'])){
			//echo"<script>alert(0)</script>";
			redirect('administrator/user');
		}
		$kode 		= $_POST['kode'];
		$name 		= trim(@$_POST['name']);
		$jabatan 	= $_POST['jabatan'];
		$username 	= trim($_POST['username']);
		$password 	= md5('reset123');
		$hak_akses 	= $_POST['hak_akses'];
		$hak 		= implode("-",$hak_akses);
		if($username == ""){
			redirect(base_url('administrator/user/add/?error=username'));
		}
		$data = array(
			'nama' => $name,
			'username'=>$username,
			'jabatan'=> $jabatan,
			'hak_akses'=>$hak, );
		$this->db->where('id_user', $kode);
		$this->db->update('tb_user', $data);
		$this->insert_aktifitas($t, "mengubah user '".$name."' ");

		redirect(base_url('administrator/user'));

	}
	function author($kode){
          $user     = $this->modellogin->select_user($kode)->result();
          foreach ($user as $key => $data) {
               return $nama = $data->nama;
          }
	

     }

 	function deleteAll(){
		foreach(@$_POST['kode_cek'] as $n => $kode)
		{	
			$this->db->where('id_user', $kode); 
     		$this->db->delete('tb_user'); 
		}
		redirect(base_url('administrator/user'));
	}
	function delete($kode=""){
		$t = $this->cekLogin();

		$this->db->where('id_user', $kode); 
 		$this->db->delete('tb_user'); 
		$this->insert_aktifitas($t, "Menghapus user '".$t."' ");
 		redirect(base_url('administrator/user'));
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
		$user 	= $this->db->get_where('tb_user', $where)->row();
		$hak 	= $user->hak_akses;
		$i=0;
		$kodeakses = "-0-".$hak."-";
		#cek modul hak akses

		$parentUtama = array(
			'posisi' => $kode,
			'perent' => "0", );
		$navmain 	= 0;
		$data 	= $this->db->get_where('tb_modul_manajemen', $parentUtama)->result();
		foreach ($data as $key => $value) {
			# code...
			$id_chile 	= $value->id_modul_manajemen;
			$label	= $value->label;
			$ikon 	= $value->ikon;
			$link 	= $this->cek_modul_id($value->id_modul);
			if($loop == 0){
				#jika loopingna ke Start
				if($navmain == 0){
					$active 	= "class='active'";
				}else{
					$active		= "";
				}
			}else{
				$active		= "";
			}
			

			if(trim($ikon)==""){
				$ikon 	= "i-home";
			}else{
				$ikon 	= $ikon;
			}
			$cek_jumlah_chile 	= $this->cek_jumlah_child_dari_parent($id_chile, $kode);
			if($cek_jumlah_chile > 1){
				$jumlah_chile 	= '
						<span class="pull-right text-muted">
                          <i class="i i-circle-sm-o text"></i>
                          <i class="i i-circle-sm text-active"></i>
                        </span>
                        <b class="badge bg-danger pull-right">'.$cek_jumlah_chile.'</b>';
                
            }else{
            	$jumlah_chile = "";
            	$element_Child 	= "";
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
		$navmain 	= 0;
		$data 	= $this->db->get_where('tb_modul_manajemen', $parentUtama)->num_rows();
		return $data;
	}
	function child_dari_parent($id_child="", $kode=""){
		# cek hak akses user
		$kode_user = $this->cekLogin();
		$where = array('id_user' => $kode_user, );
		$user 	= $this->db->get_where('tb_user', $where)->row();
		$hak 	= $user->hak_akses;
		$i=0;
		$kodeakses = "-0-".$hak."-";

		echo '<ul class="nav dk">';
		$parentUtama = array(
			'posisi' => $kode,
			'perent' => $id_child, );
		$navmain 	= 0;

		$data 	= $this->db->get_where('tb_modul_manajemen', $parentUtama)->result();
		foreach ($data as $key => $value) {
			# code...
			$id_chile 	= $value->id_modul_manajemen;
			$label	= $value->label;
			$ikon 	= $value->ikon;
			$link 	= $this->cek_modul_id($value->id_modul);
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
			$data 	= $this->db->get_where('tb_modul_admin', $where);
			if($data->num_rows()>0){
				$data 	= $data->row();
				$link 	= base_url().$data->link;
				return $link;
			}else{
				return "#";
			}
			

		}
		
	}

	#fungsi cek hak akses
	function cek_hak_akses_user(){
		$kode_secure= 'x0021'; //  kode halaman user
		$t = $this->cekLogin(); // get kode login
		$kodeakses  = array('id_modul' => $kode_secure, );
        $data     = $this->db->get_where('tb_modul_manajemen', $kodeakses)->row();
        $id_modul   = $data->id_modul_manajemen;

        $query    = $this->db->query("SELECT * FROM tb_user WHERE id_user = '".$t."' AND hak_akses LIKE '%".$id_modul."%'")->num_rows();
        if($query < 1){
          redirect(base_url('not_access'));
        }
	}

}