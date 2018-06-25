<?php
class Files extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	    $this->load->model('modelfiles'); 
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
	#fungsi cek hak akses
    function cek_hak_akses_user(){
        $kode_secure= 'x0017'; //  kode halaman user
        $t = $this->cekLogin(); // get kode login

        $kodeakses  = array('id_modul' => $kode_secure, );
        $data     = $this->db->get_where('tb_modul_manajemen', $kodeakses)->row();
        $id_modul   = $data->id_modul_manajemen;

        $query    = $this->db->query("SELECT * FROM tb_user WHERE id_user = '".$t."' AND hak_akses LIKE '%".$id_modul."%'")->num_rows();
        if($query < 1){
          redirect(base_url('not_access'));
        }
    }
	function index(){
		$this->page();
	}
	function page(){
		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();
		$data['files'] = $this->modelfiles->view()->result();
		$data['user'] = $this->modellogin->select_user($t)->result(); 
		
		//pagination settings
        $config['base_url'] = base_url('administrator/files/page');
        $config['total_rows'] = $this->db->count_all('tb_file');
        $config['per_page'] = "10";
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        

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
		$data['data'] = $this->modelfiles->files($config["per_page"],$data['page'])->result();
		$data['paging'] = $this->pagination->create_links();
		


		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/files/main',$data);
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	// function grid(){
	// 	$data['file'] = $this->modelfiles->view()->result();
	// 	$this->load->view('admin/files/grid',$data);
		
	// }
	// function table(){
	// 	$data['file'] = $this->modelfiles->view()->result();
	// 	$this->load->view('admin/files/table',$data);
	// }
	function load($key="", $type="", $order=""){
		$t = $this->cekLogin();
		if(trim($key)=="" || trim($type)==""){
			redirect('files');
		}
		# $key : table | grid, $type : img | video | document
		if($key!="0" && $type !="0"){
			if($type == "Images"){
				$data['file'] 	= $this->modelfiles->view_file('files_img',$order)->result();
				$this->load->view('admin/files/'.$key,$data);
			}elseif ($type == "Audios") {
				# code...
				$kodeTipe = 'Audios';
				$data['file'] 	= $this->modelfiles->view_file('files_audio',$order)->result();
				$this->load->view('admin/files/'.$key,$data);
			}elseif ($type == "Videos") {
				# code...
				$kodeTipe = 'Videos';
				$data['file'] 	= $this->modelfiles->view_file('files_video',$order)->result();
				$this->load->view('admin/files/'.$key,$data);
			}elseif ($type == "Attachment") {
				# code...
				$kodeTipe = 'Attachment';
				$data['file'] 	= $this->modelfiles->view_file('files_attachement',$order)->result();
				$this->load->view('admin/files/'.$key,$data);
			}else{
				$data['file'] 	= $this->modelfiles->view_file('tb_file',$order)->result();
				$this->load->view('admin/files/'.$key,$data);
			}
		}
	}
	function load_file(){
		$files 	= $this->modelfiles->view()->result();
		foreach ($files as $key => $data) {
			$id 	= $data->id_file;
			$link 	= $data->link;
			$type 	= $data->type;

			echo "<img id='tumb-img' class='img-".$id."' onclick=\"addimg('".base_url().$link."', '".$id."')\" src='".base_url().$link."' style='width: 132px; margin-right:5px; height: 120px; top: 5px; left: 5px;' />";
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
	function save(){
		$this->cek_hak_akses_user();
		$file     	= $_FILES['file']['name'];
		$filetmp   	= $_FILES['file']['tmp_name'];
	 	$size 	 	= $_FILES['file']['size'];
	 	$file_part	= pathinfo($file);
	 	$extension	= $file_part['extension'];
		if($file =='' || $filetmp == ''){
			redirect('administrator/files/?ntf=false');
		}else{
			$url 		= $this->do_upload('file');
		}
			$data = array(
	   		'nama' => $file,
	   		'ukuran' => $size,
	   		'tanggal' => date('Y-m-d H:i:s'),
	   		'link' => $url,
	   		'type' => $extension,
	   		'trash' => '0',
	   		
	   		 );
	   	$this->modelfiles->insert($data);
		$user 	= $this->cekLogin();
 		$this->insert_aktifitas($user, "Menambah File ");
	   	redirect('administrator/files');
	}
	private function do_upload($input){

		$type = explode('.',$_FILES[$input]['name']);
		$type = $type[count($type)-1];
		$url = "upload/".uniqid(rand()).'.'.$type;
		//if(in_array($type, array("jpg","jpeg","gif","png")))
			if(is_uploaded_file($_FILES[$input]["tmp_name"]))
				if(move_uploaded_file($_FILES[$input]["tmp_name"], $url))
					return $url;
			return "";
		//return "";
	}
	function delete($kode = ""){
		$this->cek_hak_akses_user();
		$query	= $this->db->get_where('tb_file',array('id_file'=>$kode)); 
		$datafile = $query->row();
	  	$url = $datafile->link;
	  	
	  	if($url!=""){
	  		unlink(FCPATH . $url);
      		$this->db->where('id_file', $kode); 
    		$this->db->delete('tb_file'); 
		$user 	= $this->cekLogin();
 		$this->insert_aktifitas($user, "Menhapus File ");

    		echo "1";
		  
		}else{
			echo "<script> alert('Terjadi kegagalan dalam hapus file!')</script>";
		}
		
	}
	function getDetail(){
		$kode =  $this->uri->segment(4);
		$query= $this->modelfiles->view_by_id($kode)->result();
		$type = $query->type;
		echo $type;
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