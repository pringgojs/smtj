<?php
class Dashbord extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	    $this->method_call =& get_instance(); // untuk memanggil method dari view
	    $this->load->model('Modellogin'); 
	   	global $kode;
	    
	}
	#fungsi cek hak akses
  	function cek_hak_akses_user(){
        $kode_secure= 'x0010'; //  kode halaman user
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
		  	{	$kode = $_SESSION['kode']; }
			else
			{ 	$kode = $_COOKIE['kode']; }

			return $kode;
		}else{
			$url                = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
               redirect("login/?rel=".$url);
		}
	}
	
	function cek_setting($key=""){
		if($key==""){
			redirect('administrator');
		}else{
			$array = array('setting'=>$key);
			$data = $this->db->get_where('tb_setting',$array)->row();
			return $data->ind;

		}
	}
	function settingsave(){
		$t = $this->cekLogin();
		if(isset($_REQUEST['form-setting'])){
			$judul = trim($_POST['judul']);
			$tlp = trim($_POST['tlp']);
			$fax = trim($_POST['fax']);
			$email = trim($_POST['email']);
			$alamat = trim($_POST['alamat']);
			
			$djudul = array('ind'=>$judul);
			$dtlp = array('ind'=>$tlp);
			$dfax = array('ind'=>$fax);
			$demail = array('ind'=>$email);
			$dalamat = array('ind'=>$alamat);
			$data = array('judul_web', 'telepon', 'fax', 'email', 'alamat');
			$fill 	= array($djudul, $dtlp, $dfax, $demail, $dalamat);
			
			foreach ($data as $key => $value) {
				$this->db->where('setting', $value);
          		$this->db->update('tb_setting', $fill[$key]); 
			}
			redirect('administrator');
		}else{
			redirect('administrator');
		}
	}
	function updatepaging($pg="", $key=""){
		$t = $this->cekLogin();
		if(trim($pg) !="" || trim($key) !=""){
			$array=array('ind'=>$pg);
			$this->db->where('setting', $key);
      		$this->db->update('tb_setting', $array); 
      		echo "1";
		}else{
			echo "0";
		}
		
	}
	function index(){
		
			$t = $this->cekLogin(); // get kode login
			$this->cek_hak_akses_user();
			// cek data
			$data['user'] = $this->Modellogin->select_user($t)->result(); 
			$data['jumlah_post'] = $this->db->count_all('post_view');
			$data['jumlah_page'] = $this->db->count_all('pages_view');
			$data['research_view'] = $this->db->count_all('research_view');
			$data['Announcement'] = $this->db->count_all('announcement_view');
			$data['jumlah_contact'] = $this->db->count_all('tb_contact');
			$data['contact']=$this->db->select('*')->order_by('date','desc')->limit('3','0')->from('tb_contact')->get()->result();
			$data['aktifitas'] = $this->db->query("SELECT a.keterangan, a.tgl, u.nama FROM tb_aktifitas a, tb_user u WHERE a.id_user = u.id_user")->result();
			
			$this->load->view('admin/include/header', $data);
			$this->load->view('admin/include/header-profil', $data);
			$this->load->view('admin/include/navbar');
			$this->load->view('admin/dasboard/main');
			$this->load->view('admin/include/sidecontent');
			
			$this->load->view('admin/include/footer');
		
		

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
	
	
}