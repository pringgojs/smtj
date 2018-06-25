<?php
class Dashbord extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	    $this->method_call =& get_instance(); // untuk memanggil method dari view
	    $this->load->model('modellogin'); 
	   	global $kode;
	    
	}
	#fungsi cek hak akses
  	function cek_hak_akses_user(){
        $kode_secure= 'x0010'; //  kode halaman user
        $t = $this->cekLogin(); // get kode login

        $kodeakses  = array('kodeakses' => $kode_secure, );
        $data     = $this->db->get_where('tb_modul_admin', $kodeakses)->row();
        $id_modul   = $data->id_modul_admin;

        $query    = $this->db->query("SELECT * FROM tb_user WHERE id_user = '".$t."' AND hak_akses LIKE '%".$id_modul."%'")->num_rows();
        if($query < 1){
          redirect(base_url('not_access'));
        }
  	}
	function cekLogin(){
		if(isset($_SESSION['kode']) OR isset($_COOKIE['kode'])){
			if(isset($_SESSION['kode']))
		  	{	$kode = $_SESSION['kode']; }
			else
			{ 	$kode = $_COOKIE['kode']; }

			return $kode;
		}else{
			redirect("login");
		}
	}
	
	function index(){
		
			$t = $this->cekLogin(); // get kode login
			$this->cek_hak_akses_user();
			// cek data
			$data['user'] = $this->modellogin->select_user($t)->result(); 
			
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/header-profil', $data);
			$this->load->view('admin/include/navbar');
			$this->load->view('admin/dasboard/main');
			$this->load->view('admin/include/sidecontent');
			
			$this->load->view('admin/include/footer');
		
		

	}
	# MODUL USER #
	function cek_modul_0_0(){
		$parentUtama = array(
			'posisi' => "0",
			'perent' => "0", );
		$data 	= $this->db->get_where('tb_modul_manajemen', $parentUtama)->result();
		$navmain 	= 0;
		foreach ($data as $key => $value) {
			# code...
			$kode 	= $value->id_modul_manajemen;
			$label	= $value->label;

			$loop 	= $navmain;
			echo '
			<div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">'.$label.'</div>';
			if($navmain == 0){
				$nav_class 	= "nav nav-main";
				$data_ride 	= "data-ride= 'collapse'";
				$hiden_nav 	= '<div class="line dk hidden-nav-xs"></div>';
				# nav pertama
			}else{
				$nav_class 	= "nav";
				$data_ride 	= "";
				$hiden_nav 	= "";
				#nav ke dua
			}
				echo '<ul class="'.$nav_class.'" '.$data_ride.'>';
					#kontent
					$this->cek_modul_0_1($kode, $loop);
				echo '</ul>';
				echo $hiden_nav;
			
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
	
	
}