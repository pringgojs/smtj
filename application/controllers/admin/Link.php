<?php
class Link extends CI_Controller {
	public function __construct()    {
	     parent::__construct();
	     $this->method_call =& get_instance();
	     $this->load->model('modellogin');
	}
	function index(){
		
		$t = $this->cekLogin(); // get kode login
      	$this->cek_hak_akses_user();
      	
      	$data['user'] = $this->modellogin->select_user($t)->result(); 
		$this->load->view('admin/include/header', $data);
      	$this->load->view('admin/include/header-profil', $data);
      	$this->load->view('admin/include/navbar');
      	$this->load->view('admin/link/main',$data);
      	$this->load->view('admin/include/sidecontent');
      
      	$this->load->view('admin/include/footer');
	}
	function insert_aktifitas($user, $keterangan){
        $data = array(
          'id_user' => $user,
          'keterangan'=> $keterangan,
          'tgl'=>date('Y-m-d H:i:s'),
         );
        $this->db->insert('tb_aktifitas', $data);
     }
	function save(){
		$t = $this->cekLogin();
		$this->cek_hak_akses_user();
		if(isset($_POST['formmenu'])){
			$nama 	= ltrim(@$_POST['nama']);
			$link 	= ltrim(@$_POST['link']);
			$posisi = @$_POST['root'];
			$urut 	=  ltrim(@$_POST['nomer_urut']);
			
			if ($link == "") {
				$link = "#";
			}else{
				$link = $link;
			}
			if($nama != ""){
				$data = array(
					'nama' => $nama,
					'perent' => $posisi,
					'link' => $link,
					'no_urut' => $urut,
					
					 );
				$insert = $this->db->insert('tb_link_luar',$data);
				$this->insert_aktifitas($t, "Menambah link luar ");
			}
			redirect(base_url('administrator/link'));
		}else{
			redirect('administrator/link');
		}
	}
	function update(){
		$t = $this->cekLogin();
		$this->cek_hak_akses_user();
		if(isset($_POST['formmenu'])){
			$nama 	= ltrim(@$_POST['nama']);
			$link 	= ltrim(@$_POST['link']);
			$posisi = @$_POST['root'];
			$urut 	=  ltrim(@$_POST['nomer_urut']);
			$id 	= $_POST['id'];
			if ($link == "") {
				$link = "#";
			}else{
				$link = $link;
			}
			if($nama != ""){
				$data = array(
					'nama' => $nama,
					'perent' => $posisi,
					'link' => $link,
					'no_urut' => $urut,
					
					 );
				 $this->db->where('id_link',$id);
				 $this->db->update('tb_link_luar',$data);

				$this->insert_aktifitas($t, "Mengubah link luar ");
			}
			redirect(base_url('administrator/link'));
		}else{
			redirect('administrator/link');
		}
	}
	function delete(){
		$t = $this->cekLogin();
		$this->cek_hak_akses_user();
		foreach(@$_POST['kode_cek'] as $n => $kode)
		{	
			#cek parent, hapus child dari perent
			$this->db->where('perent', $kode);
			$this->db->or_where('id_link', $kode); 
    		$this->db->delete('tb_link_luar'); 
		}
		
		 $this->insert_aktifitas($t, "Menghapus link ");
		redirect('administrator/link');
	}
	function datamenu(){
		$array = array('perent' => 0 , );
		$data = $this->db->get_where("tb_link_luar", $array)->result();
		foreach ($data as $key => $value) {
  			$id = $value->id_link;
  			$label = $value->nama;
  			echo "<tr >
  			<td><label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id."'><i></i></label></td>
  			<td colspan = '3'><b>".$label."</b></td>
  			<td>
				<a href='".base_url("administrator/link/edit/$id")."' class='active'>
					<i class='fa fa-pencil text-success text-active'></i>
				</a>
	        </td></tr>";
  			$arrayParent = array('perent'=>$id);
  			$data2 = $this->db->get_where("tb_link_luar", $arrayParent)->result();
			foreach ($data2 as $key => $value2) {
				$id2 = $value2->id_link;
  				$label2 = $value2->nama;
  				$link2 = $value2->link;
  				$order2 = $value2->no_urut;
				echo "<tr>
				<td><label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id2."'><i></i></label></td>
				<td><i class='fa  fa-chevron-right'></i> ".$label2."</td>
				<td>".$link2."</td>
				<td>".$order2."</td>
				
				<td>
					<a href='".base_url("administrator/link/edit/$id2")."' class='active'>
						<i class='fa fa-pencil text-success text-active'></i>
					</a>
                </td>
			</tr>";
			}
  		}
		
	}
	function edit($kode=""){
		$t = $this->cekLogin(); // get kode login
      	$this->cek_hak_akses_user();

		if(trim($kode)==""){ redirect('administrator/link');}
		$jumlah = $this->db->where('id_link', $kode)->from('tb_link_luar')->get();
		if($jumlah->num_rows() < 1){ redirect('administrator/link');}
		$value = $jumlah->row();
		$data = array(
          'id_link' => $value->id_link,
          'nama'=> $value->nama,
          'perent'=>$value->perent,
          'link'=> $value->link,
          'no_urut'=>$value->no_urut,
         );

      	
      	$data['user'] = $this->modellogin->select_user($t)->result(); 
		$this->load->view('admin/include/header', $data);
      	$this->load->view('admin/include/header-profil', $data);
      	$this->load->view('admin/include/navbar');
      	$this->load->view('admin/link/edit',$data);
      	$this->load->view('admin/include/sidecontent');
      
      	$this->load->view('admin/include/footer');
	}
	function get_perent(){
		$array = array('perent' => 0 , );
		$data = $this->db->get_where("tb_link_luar", $array)->result();
		foreach ($data as $key => $value) {
  			$id = $value->id_link;
  			$label = $value->nama;
  			echo '<li ><a href="#"><input type="radio" value="'.$id.'" name="root" id="root">'.$label.'</a></li>';
  		}
	}
	function cek_perent($kode){
		$array = array('perent' => 0 , );
		$data = $this->db->get_where("tb_link_luar", $array)->result();
		foreach ($data as $key => $value) {
  			$id = $value->id_link;
  			$label = $value->nama;
  			if($id == $kode)
  				echo '<li class="active" ><a href="#"><input type="radio" checked="checked" value="'.$id.'" name="root" id="root">'.$label.'</a></li>';
  			else
  				echo '<li ><a href="#"><input type="radio"  value="'.$id.'" name="root" id="root">'.$label.'</a></li>';
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
 	#fungsi cek hak akses
    function cek_hak_akses_user(){
	      $kode_secure= 'x0024'; //  kode halaman user
    		$t = $this->cekLogin(); // get kode login
	      $kodeakses  = array('id_modul' => $kode_secure, );
	      $data     = $this->db->get_where('tb_modul_manajemen', $kodeakses)->row();
	      $id_modul   = $data->id_modul_manajemen;

	      $query    = $this->db->query("SELECT * FROM tb_user WHERE id_user = '".$t."' AND hak_akses LIKE '%".$id_modul."%'")->num_rows();
	      if($query < 1){
	        redirect(base_url('not_access'));
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