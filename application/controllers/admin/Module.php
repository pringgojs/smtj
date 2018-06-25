<?php
class Module extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	    $this->load->model('modelcategory'); 
     	$this->load->model('modellogin'); 
     	$this->load->library('pagination'); 
	    $this->method_call =& get_instance(); // untuk memanggil method dari view
     	
	}
	#fungsi cek hak akses
  	function cek_hak_akses_user(){
        $kode_secure= 'x0020'; //  kode halaman user
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
		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();
		$data['user'] = $this->modellogin->select_user($t)->result(); 
		$data['kategori'] = $this->modelcategory->view()->result(); 
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/module/main',$data);
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	function data(){
		$whereposisi = array('posisi' => '0', 'perent' => '0' );
		$data 	= $this->db->get_where('tb_modul_manajemen', $whereposisi)->result();

		foreach ($data as $key => $value) {
			# code...
			$idparent = $value->id_modul_manajemen;
			$label 	  = $value->label;
			echo "<tr>
                  <td>
                  	<label class='checkbox m-n i-checks'>
                  	<input type='checkbox' name='kode_cek[]' id='kode_cek'
                  	 value ='$idparent'><i></i></label> 
              	  </td>
                  <td  colspan='4'><b class='text-primary'>$label</b></td>
                </tr>";
            $this->cek_modul_perent($idparent);
		}
	}
	function cek_modul_perent($kode=""){

		$whereposisi = array('posisi' => $kode, 'perent' => '0' );
		$data 	= $this->db->get_where('tb_modul_manajemen', $whereposisi)->result();
		foreach ($data as $key => $value) {
			# code...
			$idparent = $value->id_modul_manajemen;
			$label 	  = $value->label;
			$link 	=  $this->cek_modul_id(trim($value->id_modul));
			$urut 	=  $value->urut;
			echo "<tr>
                  <td>
                  	<label class='checkbox m-n i-checks'>
                  	<input type='checkbox' name='kode_cek[]' id='kode_cek'
                  	 value ='$idparent'><i></i></label> 
              	  </td>
                  <td ><b>|— $label</b></td>
                  <td >$link</td>
                  <td >$urut</td>
                  <td ><a href='".base_url('administrator/module/edit/'.$idparent)."'>
                  	<i class='fa fa-edit'></i>
                  </td>
                </tr>";
            $this->cek_modul_child($kode,$idparent);
		}
	}
	function cek_modul_child($kode,$idparent){

		$whereposisi = array('posisi' => $kode, 'perent' => $idparent );
		$data 	= $this->db->get_where('tb_modul_manajemen', $whereposisi)->result();
		foreach ($data as $key => $value) {
			# code...
			$id 	= $value->id_modul_manajemen;
			$label 	= $value->label;
			$link 	=  $this->cek_modul_id($value->id_modul);
			$urut 	=  $value->urut;
			echo "<tr>
                  <td>
                  	<label class='checkbox m-n i-checks'>
                  	<input type='checkbox' name='kode_cek[]' id='kode_cek'
                  	 value ='$id'><i></i></label> 
              	  </td>
                  <td ><span style='margin-left:23px'>
                  	<i class='i i-circle-sm-o text-muted'></i> $label</span>
                  </td>
                  <td >$link</td>
                  <td >$urut</td>
                  <td ><a href='".base_url('administrator/module/edit/'.$id)."'>
                  	<i class='fa fa-edit'></i>
                  </td>
                </tr>";
            
		}
	}
	function add(){
		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();
		$data['user'] = $this->modellogin->select_user($t)->result(); 
		$data['kategori'] = $this->modelcategory->view()->result(); 
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/module/add',$data);
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	function edit($kode=""){
		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();
		if(trim($kode) == ""){ redirect(base_url('administrator/module'));}
		
		$whereposisi = array('id_modul_manajemen' => $kode );
		$query 	= $this->db->get_where('tb_modul_manajemen', $whereposisi);
        if($query->num_rows() < 0){redirect(base_url('administrator/module'));}
          
        $hasil = $query->row();
        $data = array(
               'user' =>$this->modellogin->select_user($t)->result(),
               'kode' => $kode,
               'label' => $hasil->label,
               'posisi' => $hasil->posisi,
               'perent' => $hasil->perent,
               'link' => $this->cek_modul_id($hasil->id_modul),
               'ikon' => $hasil->ikon,
               
               'urut' => $hasil->urut,
               'id_modul' => $hasil->id_modul,

               
          );
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/module/edit',$data);
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	function save(){
		if(!isset($_POST['simpanberita'])){
			//echo"<script>alert(0)</script>";
			redirect('administrator/module');
		}
		$kode 		= $this->cekLogin();
		$this->cek_hak_akses_user();
		$label 		= trim($_POST['label']);
		$posisi 	= $_POST['posisi'];
		$parent 	= @$_POST['parent'];
		
		$link 		= trim($_POST['id_module']);
		$icon 		= trim($_POST['icon']);
		$order 		= $_POST['nomer_urut'];
		//`id_modul_manajemen`, `label`, `posisi`, `perent`, `link`, `ikon`, `urut`
		if($parent == ""){
			$parent = 0;
		}else{
			$parent = $parent;
		}
		$data = array(
			'label' => $label,
			'posisi' => $posisi,
			'perent' => $parent,
			'id_modul' => $link,
			'ikon' => $icon,
			'urut' => $order, );
		$this->db->insert('tb_modul_manajemen', $data); 
		redirect('administrator/module');
		
	}
	function update(){
		if(!isset($_POST['simpanberita'])){
			//echo"<script>alert(0)</script>";
			redirect('administrator/module');
		}
		$kode 		= $this->cekLogin();
		$this->cek_hak_akses_user();
		$id 		= $_POST['kode'];
		$label 		= trim($_POST['label']);
		$posisi 	= $_POST['posisi'];
		$parent 	= @$_POST['parent'];
		
		$link 		= trim($_POST['id_module']);
		$icon 		= trim($_POST['icon']);
		$order 		= $_POST['nomer_urut'];
		//`id_modul_manajemen`, `label`, `posisi`, `perent`, `link`, `ikon`, `urut`
		if($parent == ""){
			$parent = 0;
		}else{
			$parent = $parent;
		}
		$data = array(
			'label' => $label,
			'posisi' => $posisi,
			'perent' => $parent,
			'id_modul' => $link,
			'ikon' => $icon,
			'urut' => $order, );
		$this->db->where('id_modul_manajemen', $id);
		$this->db->update('tb_modul_manajemen', $data); 
		redirect('administrator/module');
		
	}
	function delete(){
		$this->cek_hak_akses_user();
		foreach(@$_POST['kode_cek'] as $n => $kode)
		{	
			$this->db->where('id_modul_manajemen', $kode); 
     		$this->db->delete('tb_modul_manajemen'); 
		}
		redirect(base_url('administrator/module'));
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
	function parent1(){
		$where = array('posisi' => 0, 'perent' => 0, );
		$data 	= $this->db->get_where('tb_modul_manajemen', $where)->result();
		foreach ($data as $key => $value) {
			# code...
			$kode = $value->id_modul_manajemen;
			echo "<li onclick='cek_cabang($kode)'>
			<a href='#'><input type='radio' name='posisi' id='posisi' 
			value='".$value->id_modul_manajemen."'>
			".$value->label."</a></li>";
		}
		
	}
	function ambil_cabang($kode =""){
		$where 	= array('posisi' => $kode, 'perent' => 0, );
		$data 	= $this->db->get_where('tb_modul_manajemen', $where)->result();
		echo "<li><a href='#'><input type='radio' name='parent' id='parent' value='0'>Induk Modul</a></li>";
		foreach ($data as $key => $value) {
			echo "<li><a href='#'><input type='radio' name='parent' id='parent' 
			value='".$value->id_modul_manajemen."'>".$value->label."</a></li>";
      	}
      	

	} 

	function cek_parent1($id=""){
		$where = array('posisi' => 0, 'perent' => 0, );
		$data 	= $this->db->get_where('tb_modul_manajemen', $where)->result();
		foreach ($data as $key => $value) {
			# code...

			$kode = $value->id_modul_manajemen;
			if($id ==  $kode){
				echo "<li class='active' onclick='cek_cabang($kode)'>
				<a href='#'><input checked type='radio' name='posisi' id='posisi' 
				value='".$value->id_modul_manajemen."'>
				".$value->label."</a></li>";
			}else{
				echo "<li onclick='cek_cabang($kode)'>
			<a href='#'><input type='radio' name='posisi' id='posisi' 
			value='".$value->id_modul_manajemen."'>
			".$value->label."</a></li>";
			}
			
		}
		
	}
	function cek_root($kode, $perent){
		$where 	= array('posisi' => $kode, 'perent' => 0, );
		$data 	= $this->db->get_where('tb_modul_manajemen', $where)->result();
		echo "<li><a href='#'><input type='radio' name='parent' id='parent' value='0'>Induk Modul</a></li>";
		foreach ($data as $key => $value) {
			$id = $value->id_modul_manajemen;
			if($perent == $id){
				echo "<li class='active'><a href='#'><input type='radio' checked name='parent' id='parent' 
			value='".$value->id_modul_manajemen."'>".$value->label."</a></li>";
			}else{
				echo "<li><a href='#'><input type='radio' name='parent' id='parent' 
				value='".$value->id_modul_manajemen."'>".$value->label."</a></li>";
			}
		}
	}
	function data_modul_admin(){
		$data = $this->db->get('tb_modul_admin')->result();
		$no = 1;
		echo '<div class="table-responsive">
              <table class="table b-t b-light">
                <thead>
                <tr>
	                <th>No.</th>
	                <th>Label</th>
	                <th>Link</th>
	                </tr>
                </thead>
                <tbody>';
		foreach ($data as $key => $value) {
			# code...
			$link = base_url().$value->link;
			$label 	= $value->label;
			$id 	= trim($value->id_modul_admin);
			echo '
				<tr class="baris baris-'.$id.'" 
				onclick="select_link_modul(\''.$link.'\',\''.$id.'\')">
                	<td>'.$no.'</td>
                	<td>'.$label.'</td>
                	<td >'.$link.'</td></tr>';
                
        	$no++;
		}
		echo '</tbody>
              </table>
        	</div>';
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

		if(@trim($kode)==""){
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