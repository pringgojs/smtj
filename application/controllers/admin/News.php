<?php
class News extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	    $this->load->model('modelnews'); 
     	$this->load->model('modellogin'); 
     	$this->load->library('pagination'); 
     	// $this->load->library('Googlemaps');
     	$this->method_call =& get_instance(); // untuk memanggil method dari view
     	global $kode;
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
        $kode_secure= 'x0011'; //  kode halaman user
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
		#CEK QUERY
          if(@$_GET['q']){
            $query = str_replace("'","", trim($_GET['q']));
            $where = "judul LIKE '%".$query."%'";

          }else{
            $where = "0";
          }

          if(@$_GET['v']){
          	if($_GET['v']=="all"){
	            $tabel = "post_view";
          	}else if($_GET['v']=="draf"){
	        	$tabel = "post_draf_view";
          	}else if($_GET['v']=="pending"){
	            $tabel = "post_pending_view";
	        }else if($_GET['v']=="trash"){
	         	$tabel = "post_trash_view";
	        }else if($_GET['v']=="your_post"){
	        	$tabel = "post_view";
	        	if(@$_GET['q']){
	        		$where = "id_user = ".$t." AND judul LIKE '%".$query."%'";
	        	}else{
	        		$where = "id_user = ".$t;
	        	}
	        	
	        }else{
	        	$tabel = "post_view";
	        }
          }else{
          	$tabel = "post_view";
          }
		//$data['kategori'] = $this->ModelCategory->view()->result(); 
		//pagination settings
        $config['base_url'] = base_url('administrator/news/page');
        $config['total_rows'] = $this->db->count_all($tabel);
        $config['per_page'] = "10";
        $config["uri_segment"] = 4;
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
		$data['post'] = $this->modelnews->data_limit($tabel,$where,'id_post', $config["per_page"],$data['page'])->result();
		$data['paging'] = $this->pagination->create_links();
		
		// end pagging
		$data['jumlah'] = $config['total_rows'];
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/news/main',$data);
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	function add(){
		# maps google
		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = 'auto';

		$this->googlemaps->initialize($config);
		$data['map'] = $this->googlemaps->create_map();
		# end maps

		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();
		$data['user'] = $this->modellogin->select_user($t)->result(); 
		//$data['kategori'] = $this->ModelCategory->view()->result(); 
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/news/add', $data);
		$this->load->view('admin/include/sidecontent');
		$this->load->view('admin/include/footer');
	}
	function edit(){
		# maps google
		$config['center'] = '37.4419, -122.1419';
		$config['zoom'] = 'auto';

		$this->googlemaps->initialize($config);
		$data['map'] = $this->googlemaps->create_map();
		# end maps
		$kode 	= $this->uri->segment(4);
		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();
		$data['user'] = $this->modellogin->select_user($t)->result(); 
		
		$data['post'] = $this->modelnews->post_id($kode)->result(); 
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/news/edit',$data);
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
	function viewKategori(){
		$kategori =  $this->modelnews->view_kategori()->result();
		foreach ($kategori as $key => $data) {
			$id 		  	= $data->id_kategori;
	        $datakategori   = $data->nama;
	        echo "<label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id."'><i></i> ".$datakategori."</label>";
		}  
	}
	function save(){
		if(!isset($_POST['simpanberita'])){
			//echo"<script>alert(0)</script>";
			redirect('administrator/news');
		}
		$kode 		= $this->cekLogin();
		$this->cek_hak_akses_user();
		$id 		= @$_POST['kode'];
		$judul 		= $_POST['judul'];
		$konten 	= $_POST['berita'];
		
		$label 		= trim(@$_POST['label']);
		$id_label 	= $_POST['id_label'];
		$tanggal 	= $_POST['tanggal'];
		$komentar 	= @$_POST['komentar'];
		$parent_link= base_url()."news/".$id;
		$nama_link 	= strtolower(@$_POST['link']);
		
		$status_post = $this->cek_jabatan_user($kode);
		$lokasi 	= @$_POST['lokasi'];
		$old 	= false;
		$new 	= false;

		/* =================================
		   25 januari 2016
		   CEK LABEL
		 =================================== */
		//$implode = implode(glue, pieces)
		if($label!=""){
			// explode label
			$r=0;$t=0;
			 $explode =  explode(",",$label); // array nama label
			 for ($i=0; $i < count($explode); $i++) { 
			 	# code...
			 	$nama 	= trim($explode[$i]);
			 	$data 	= array('nama' => $nama, );
			 	//echo $nama;
			 	$row_label = $this->modelnews->select_label($data);
			 	if($row_label == '1'){
			 		// label sudah ada di db
			 		$data2 = array(
						'nama'=>$nama,
						
					);
			 		$ceklabel 	= $this->db->get_where ('tb_label',$data2)->row();  // lihat data user berdasar username dan pasas
					$kodelabel 	= $ceklabel->id_label; 
			 		$idLama[$t] = $kodelabel;
			 		$old = true;
			 		$t++;
			 		// echo "<br>";
			 		continue;
			 	}else{

			 		if($nama != "" && $nama != ' '){
			 			// insert label
			 			$nama = trim($nama);
			 			$datalabel = array('nama' => $nama, );
			 			$last_id = $this->modelnews->insert_label($datalabel); // insert db label
			 			$last[$r]=$last_id; // create array last_id
			 			$new = true;
			 			$r++;
			 		}else{
			 			$new = false;
			 		}
			 		
			 	}
			 }
			 // extract array last_id
			 // cek id label lama
			 if($old == true){
		 	 	$oldID 	= implode(",", $idLama);
		 		
			 }else{
			 	$oldID = '';
			 }
			 // cek id label baru
			 if($new == true){
		 	 	$lasty 	= implode(",", $last);
		 		$labelOK = $oldID.",".$lasty;
			 }else{
			 	$labelOK = $oldID;
			 }
		}
		/* ===================
		KATEGORI 
		====================== */
		$kategori = implode("-", $_POST['kode_cek']);
		
		$data = array(
			'kategori' => $kategori,
			'judul' => $judul,
			'isi' => $konten,
			'diterbitkan' => $tanggal,
			'last_update' => date('Y-m-d H:i:s'),
			
			'link' 	=> $parent_link,
			'nama_link' 	=> $nama_link,
			'link_asli' 	=> $parent_link."/".$nama_link,
			'id_user' => $kode,
			'status' => $status_post, // published
			'komen' => $komentar,
			'label' => $labelOK,
			'jam' => date('H:i:s'),
			'lokasi' => $lokasi,
			'type' => 'news',
			 );
		$this->db->where('id_post', $id);
		$this->db->update('tb_post', $data); 
		$this->insert_aktifitas($kode, "Menambah Berita '".$judul."' ");
		redirect('administrator/news');

	}
	function savetodraf(){

		$kode 		= $this->cekLogin();
		$this->cek_hak_akses_user();
		$judul 		= @$_POST['judul'];
		$konten 	= @$_POST['konten'];
		$id 		= @$_POST['kode'];
		
		$id_label 	= @$_POST['id_label'];
		$tanggal 	= @$_POST['tanggal'];
		$komentar 	= @$_POST['komentar'];
		$parent_link= base_url()."news/".$id;
		$nama_link 	= strtolower(@$_POST['link']);
		$lokasi 	= @$_POST['lokasi'];
		$label 		= trim(@$_POST['label']);
		$old 		= false;
		$new 		= false;

		# CEK STATUS
		$data2 		= array('id_post' => $id, );
		$cekStatus  = $this->db->get_where('tb_post',$data2)->row();  // lihat data user berdasar username dan pasas
		$status 	= $cekStatus->status; 

		

		/* =================================
		   25 januari 2016
		   CEK LABEL
		 =================================== */
		if($label!=""){
			$label 		= $label;
		}else{
			$label 		= "";
		}
		if($label!=""){
			// explode label
			$r=0;$t=0;
			 $explode = explode(",", $label); // array nama label hapus spasi
			 for ($i=0; $i < count($explode); $i++) { 
			 	# code...
			 	$nama 	= trim($explode[$i]);
			 	$data 	= array('nama' => $nama, );
			 	//echo $nama;
			 	$row_label = $this->modelnews->select_label($data);
			 	if($row_label == '1'){
			 		// label sudah ada di db
			 		$data2 = array(
						'nama'=>$nama,
						
					);
			 		$ceklabel 	= $this->db->get_where ('tb_label',$data2)->row();  // lihat data user berdasar username dan pasas
					$kodelabel 	= $ceklabel->id_label; 
			 		$idLama[$t] = $kodelabel;
			 		$old = true;
			 		$t++;
			 		// echo "<br>";
			 		continue;
			 	}else{

			 		if($nama != "" && $nama != ' '){
			 			// insert label
			 			$nama = trim($nama);
			 			$datalabel = array('nama' => $nama, );
			 			$last_id = $this->modelnews->insert_label($datalabel); // insert db label
			 			$last[$r]=$last_id; // create array last_id
			 			$new = true;
			 			$r++;
			 		}else{
			 			$new = false;
			 		}
			 		
			 	}
			 }
			 // extract array last_id
			 // cek id label lama
			 if($old == true){
		 	 	$oldID 	= implode(",", $idLama);
		 		
			 }else{
			 	$oldID = '';
			 }
			 // cek id label baru
			 if($new == true){
		 	 	$lasty 	= implode(",", $last);
		 		$labelOK = $oldID.",".$lasty;
			 }else{
			 	$labelOK = $oldID;
			 }
		}else{
			$labelOK = "";
		}
		/* ===================
		KATEGORI 
		====================== */
		if(@$_POST['kode_cek']!=""){
			$kategori = implode("-", @$_POST['kode_cek']);
		}else{
			$kategori = "0";
		}
		
		$data = array(
			'kategori' => $kategori,
			'judul' => $judul,
			'isi' => $konten,
			'diterbitkan' => $tanggal,
			'last_update' => '0000-00-00 00:00:00',
			'jumlah_baca' => '0',
			'link' 	=> $parent_link,
			'nama_link' 	=> $nama_link,
			'link_asli' 	=> $parent_link."/".$nama_link,
			'id_user' => $kode,
			'status' => $status, // published
			'komen' => $komentar,
			'label' => $labelOK,
			'jam' => date('H:i:s'),
			'lokasi' => $lokasi,
			'type' => 'news',
			 );
		$this->db->where('id_post', $id);
		$this->db->update('tb_post', $data); 
		//$this->modelnews->insert($data);
		return $nama_link;

	}
	function author($kode){
		$user 	= $this->modellogin->select_user($kode)->result();
		foreach ($user as $key => $data) {
			return $nama = $data->nama;
		}
	}
	function max_file(){
		$max 	= $this->modelnews->max_file()->result();
		foreach ($max as $key => $data) {
			$id = $data->last_id;
			return $id;
		}
	}
	function purify($r)
	{
		return preg_replace("/[^a-zA-Z0-9]+/","-",$r);
	}
	function label(){
		$label 	= $this->modelnews->view_label()->result();
		foreach ($label as $key => $data) {
			 $id 	= $data->id_label;
			 $nama 	= $data->nama;
			 echo "<a href='#' style='color:blue' onclick=\"addlabel('".$nama."','".$id."')\">$nama, </a>";
			 echo " ";//echo ",";
		}
	}
	function data_label_post($id){
		$data2 = array(
			'id_label'=>$id,
		);
 		$ceklabel 	= $this->db->get_where('tb_label',$data2)->row();  // lihat data user berdasar username dan pasas
		return $kodelabel 	= @$ceklabel->nama; 

	}
	function action(){
		
		if(isset($_POST['action'])){
			redirect('administrator/news');
		}

		$pilih 	= $_POST['pilih'];
		$data 	= array();
		if($pilih == 'publish'){
			#code ..
			$data = array('status' => '1', );
			$this->update($data);
		}elseif ($pilih == 'draf') {
			# code...
			$data = array('status' => '2', );
			$this->update($data);
		}elseif ($pilih == "trash") {
			# code...
			$data = array('status' => '3', );
			$this->update($data);
		}elseif ($pilih == "pending") {
			$data = array('status' => '4', );
			$this->update($data);
		}else{
			redirect('administrator/news');
		}
		
		
	}
	function delete(){
		$kode 	= $this->uri->segment(4);
		$this->db->where('id_post', $kode); 
    	$this->db->delete('tb_post'); 
    	$where = array('id_post', $kode );
    	$data 	= $this->db->get_where('tb_corner', $where);
    	if($data->num_rows() > 0){
    		$this->db->where('id_post', $kode); 
    		$this->db->delete('tb_corner'); 
    	}
		$user 	= $this->cekLogin();
    	$this->insert_aktifitas($user, "Menghapus berita ");
    	redirect('administrator/news');
	}
	# UBAH STATUS DRAF/PUBLISH/TRASH
	function update($data){
		foreach($_POST['kode_cek'] as $n => $kode)
		{	
			$this->db->where('id_post', $kode); 
			$this->db->update('tb_post', $data);  
		}
		$user 	= $this->cekLogin();
    		$this->insert_aktifitas($user, "Mengubah Status berita ");

		redirect('administrator/news');
	}

	function upload(){
		$upload_dir = 'upload/';
		if (!empty($_FILES)) 
		{ 
			$last_id 	= $this->max_file();
			$tempFile 	= $_FILES['file']['tmp_name'];//this is temporary server location
			$file     	= $_FILES['file']['name'];
			$size 	 	= $_FILES['file']['size'];
		 	$file_part	= pathinfo($file);
		   	$extension	= $file_part['extension'];
		   	$id 		= $last_id + 1;
		   	$url 		= $upload_dir.$id."-". $_FILES['file']['name'];
			move_uploaded_file($tempFile,$url);
			$data = array(
		   		'nama' => $id."-".$file,
		   		'ukuran' => $size,
		   		'tanggal' => date('Y-m-d H:i:s'),
		   		'link' => $url,
		   		'type' => $extension,
		   		'trash' => '0',
		   		 );
			$this->modelnews->insert_files($data);
			// if($size < 2500){
			// }else{
			// 	echo "<script>alert('Sorry, valid size is 2 MB ');</script>";
			// }
		   	

		}else{
			echo "0";
		}

	}
	function files(){
		$kodeTipe = '0';
		$type =  $this->uri->segment(4);

		if($type == "Images"){
			$datafiles 	= $this->modelnews->view_file('files_img')->result();
			$kodeTipe = 'Images';
			$this->extract_data($datafiles,$kodeTipe);
		}elseif ($type == "Audios") {
			# code...
			$kodeTipe = 'Audios';
			$datafiles 	= $this->modelnews->view_file('files_audio')->result();
			$this->extract_data($datafiles,$kodeTipe);
		}elseif ($type == "Videos") {
			# code...
			$kodeTipe = 'Videos';
			$datafiles 	= $this->modelnews->view_file('files_video')->result();
			$this->extract_data($datafiles,$kodeTipe);
		}elseif ($type == "Attachment") {
			# code...
			$kodeTipe = 'Attachment';
			$datafiles 	= $this->modelnews->view_file('files_attachement')->result();
			$this->extract_data($datafiles,$kodeTipe);
		}
		

	}
	function extract_data($datafiles,$kodeTipe){
		foreach ($datafiles as $key => $data) {
			$id 	= $data->id_file;
			$link 	= $data->link;
			$type 	= $data->type;
			$nama 	= $data->nama;
			if($kodeTipe == 'Images'){
				echo "<img id='tumb-img' class='img-".$id."' onclick=\"select_file('".base_url().$link."','".$id."','".$nama."','".$kodeTipe."')\" src='".base_url().$link."' style='width: 132px; margin-right:5px; height: 120px; top: 5px; left: 5px;' />";
			}else if ($kodeTipe == 'Audios') {
				# code...
				echo "<img id='tumb-img' class='img-".$id."' onclick=\"select_file('".base_url().$link."', '".$id."','".$nama."','".$kodeTipe."')\" src='".base_url()."asset/images/tipe/musik.png' style='width: 132px; margin-right:5px; height: 120px; top: 5px; left: 5px;' />";
			}else if ($kodeTipe == 'Videos') {
				# code...
				echo "<img id='tumb-img' class='img-".$id."' onclick=\"select_file('".base_url().$link."', '".$id."','".$nama."','".$kodeTipe."')\" src='".base_url()."asset/images/tipe/musik.png' style='width: 132px; margin-right:5px; height: 120px; top: 5px; left: 5px;' />";
			}else if ($kodeTipe == 'Attachment') {
				# code...
				echo "<img id='tumb-img' class='img-".$id."' onclick=\"select_file('".base_url().$link."', '".$id."','".$nama."','".$kodeTipe."')\" src='".base_url()."asset/images/tipe/attachement.png' style='width: 132px; margin-right:5px; height: 120px; top: 5px; left: 5px;' />";
			}
			
		}
	}

	function deletefile(){
		$nama = $_POST['nama']; 
		
		$url = base_url().'asset/images/'.$nama; 
		if(!unlink($url)){ // foto dihapus
	        	echo "<script> alert('Terjadi kegagalan dalam hapus file !')</script>";
	      }else{
      		$this->db->where('nama', $nama); 
    		$this->db->delete('tb_file'); 
    		echo "1";
	      }
	}
	function addkategori(){

		$nama 	= $this->uri->segment(4);
		$nama 	= trim(str_replace("-", " ", $nama));
		if($nama ==""){
			$this->viewKategori(); // return list kategori
		}else{
			$data 	= array('nama' => $nama, );
			$cek 	= $this->modelnews->kategori_nama($data);
			if($cek != 1){ // apakah kategori sudah ada apa belum
				$this->db->insert('tb_kategori', $data);
			}
			$this->viewKategori(); // return list kategori
		}
		
	}
	function autosave(){
		$judul = trim(@$_POST['judul']);
		if($judul!=""){
			if(@$_POST['kode']==""){
				#jika kode masih kosong, generad kode
				$data = array('status' => '2', 'type' => 'news', );
				$this->db->insert('tb_post', $data);
        		$last_id    = $this->db->insert_id();
        		echo "ID|".$last_id;
        	}else{
				#save to draf update
				$return = $this->savetodraf();
				echo $return;
			}
		}else{
			echo "0";
		}
	}
	function cek_kategori($kode){
		//$explode 	= explode(",", $kode);

		$kode = "-0-".$kode."-";
		$kategori 	=  $this->modelnews->view_kategori()->result();
		foreach ($kategori as $key => $data) {
			$id 		  	= $data->id_kategori;
        	$datakategori   = $data->nama;

			if(strripos($kode, "-".$id."-") == true){
        		echo "<label class='checkbox m-n i-checks'><input checked type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id."'><i></i> ".$datakategori."</label>";
	        }else{
	        	echo "<label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id."'><i></i> ".$datakategori."</label>";
	        }
	        
        }
	    
	}

	#CORNER
	function cek_corner($kode=""){
		if($kode != "" || $kode != "0"){
			# cek tabel corner
			$cek_post = array('id_post' => $kode, );
			$cek 	= $this->db->get_where('tb_corner', $cek_post)->num_rows();
			if($cek > 0){
				return "1"; // jika ada di tb corner
			}else{
				return "0";
			}
			
		}
	}
	function create_corner($kode=""){
		if($kode != "" || $kode != "0"){
			# insert tabel corner
			$cek_post = array('id_post' => $kode, );
			$cek 	= $this->db->get_where('tb_post', $cek_post)->num_rows();
			if($cek > 0){
				$cek_corner	= $this->db->get_where('tb_corner', $cek_post)->num_rows();
				if($cek_corner < 1) {
					# insert data
					$data = array('id_post' => $kode );
					$this->db->insert('tb_corner', $data);
					echo "1";
				}else{
					echo "0";
				}
				
			}else{
				echo "0";
			}
			
		}
	}
	function delete_corner($kode=""){
		$cek_post = array('id_post' => $kode, );
		$cek 	= $this->db->get_where('tb_corner', $cek_post)->num_rows();
		
		if($cek > 0){
			$this->db->where('id_post', $kode); 
    		$this->db->delete('tb_corner');
			echo "1";
		}else{
			echo "0";
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

	#25 Nop 2016
	
	function cek_jabatan_user($kode=""){
		$user 	= $this->modellogin->select_user($kode)->result();
		foreach ($user as $key => $data) {
			$jabatan = $data->jabatan;
			if($jabatan == "Operator"){
				$status_post = "4";
			}else{
				$status_post = "1";
			}
			return $status_post;
		}
	}
	function cek_jabatan($kode=""){
		$user 	= $this->modellogin->select_user($kode)->result();
		foreach ($user as $key => $data) {
			$jabatan = $data->jabatan;
			
			return $jabatan;
		}
	}
	function update_pending($kode_post=""){
		$user 	= $this->cekLogin();
		if(trim($kode_post)==""){
			redirect('administrator/news');
		}

		$data = array('status' => 1, );

		$this->db->where('id_post', $kode_post); 
		$this->db->update('tb_post', $data);  
		
		$this->insert_aktifitas($user, "Menerbitkan sebuah berita");

		redirect('administrator/news');
	}

}