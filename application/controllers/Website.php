<?php
class Website extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	    $this->load->model('modelwebsite'); 
	    $this->load->library('pagination'); 
		$this->method_call =& get_instance(); // untuk memanggil method dari view
    }
	function index(){
		if(@$_GET['q']){
			$this->cari($_GET['q']);
		}else{
			$this->load->view('front/index');
		}
		
		//$this->load->view('front/include/footer');
	}
	function contact(){
		$this->load->view('front/contact');
		//$this->load->view('front/include/footer');
	}
	function sitemap(){
		$this->load->view('front/sitemap');
	}
	function about(){
		$this->load->view('front/about');
	}
	function location(){
		$this->load->view('front/lokasi');
	}
	
	function prestasi($tahun=""){
		if($tahun == ""){
			$data['prestasi'] 	= $this->db->get('tb_prestasi')->result();
		}else{
			$where = array('tahun' => $tahun, );
			$data['prestasi'] 	= $this->db->get_where('tb_prestasi', $where)->result();
		}
		
		$this->load->view('front/prestasi', $data);
	}
	# FUNGSI TAMBAHAN #
	# contact
	function contact_save(){
		if(isset($_POST['form-contact'])){
			$first 	= trim($_POST['first']);
			$last 	= trim($_POST['last']);
			$email 	= trim($_POST['first']);
			$subject 	= trim($_POST['subject']);
			$msg 	= trim($_POST['msg']);
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			    $ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
			    $ip = $_SERVER['REMOTE_ADDR'];
			}
			if($first=="" || $last=="" ||$email=="" ||$subject=="" ||$msg=="" ){
				redirect('contact');
			}else{
				
				$data = array(
					'nama' => $first." ".$last,
					'email' => $email,
					'subject' => $subject,
					'pesan' => $msg,
					'ip' => $ip, );
				$this->db->insert('tb_contact', $data);
				redirect('contact/?s=true');
			}

		}else{
			redirect('contact');
		}
	}
	# RESEARCH #
	function research($link=""){
		if($link==""){
			$where = array('status' => '1', );
			$data['research'] = $this->modelwebsite->post_order_limit('research_view','diterbitkan','9','0',$where)->result();
			$this->load->view('front/penelitian', $data);
		}else{
			$this->research_page($link);
		}
		
	}
	function research_next($page){
		//echo $page;
		// data 1 -6 wes tampil
		// wayahe tampil data 7 - 13
		$page = $page;
		$perhalaman 	= 9;

		$where = array('status' => '1', );
		#query halaman ke-, jumlah yg akan ditampilkan
		$jumlah_baris = $this->db->count_all('research_view',$where); //12
		$choice = $jumlah_baris / $page; // 12 : 3 = 4 page
		//$halaman_selanjutanya	= ($page) ? $page: 0;

		
		$data = $this->modelwebsite->post_order_limit('research_view','diterbitkan',$perhalaman,$page,$where)->result();
		foreach ($data as $key => $value) {
			# code...

			$diterbitkan 	= $this->method_call->date($value->diterbitkan);
			$judul 	= strtoupper($value->judul);
			$bulan 	= strtoupper($this->method_call->tgl($value->diterbitkan));
			$tgl 	= substr($value->diterbitkan,8,2);
			$link 	= $value->link_asli;
			$deskripsi 	= $value->isi;
//asdasd			$kategori 	= $this->method_call->cek_kategori(explode('-', $value->kategori)['0']);
			#cek img 
			$desc_img 	= false;
			$img = $this->method_call->catch_that_image($value->isi);
			if($img == ""){
				$img = "";
				$desc_img 	= false;
				$jumlah_karakter 	= 320;
			}else{
				$img = "<div class='news-thumb'><img src='".$img."'></div>";
				$desc_img 	= true;
				$jumlah_karakter 	= 40;
			}
			
			#cek deskripsi
			if($deskripsi != ""){
				$deskripsi = htmlentities(strip_tags($deskripsi));
				if(strlen($deskripsi) > $jumlah_karakter ){
					$deskripsi = substr($deskripsi, 0, $jumlah_karakter)."...";
				}else{
					$deskripsi = $deskripsi;
				}
				
			}else{
				$deskripsi = $deskripsi;
			}
			echo '<div class="news-wrapper" style="border-top: #FB8113 solid 3px;">
					
					<div class="news">
					'.$img.'
						<div class="news-deskripsi">
							<h2>'.$judul.'</h2>
							<br>
							'.$deskripsi.'
						</div>
						<div class="news-date">
							'.$diterbitkan.'
						</div>
						<div class="readmore"><a href="'.$link.'">SELENGKAPNYA <i class="icon-chevron-right"></i></a></div>
					</div>
				</div>';
		}

		$halaman_selanjutanya 	= $page + $perhalaman;

	}
	function research_page($link){
		$link = base_url('research/'.$link);
		
		$where = array('link_asli' => $link,'status' => '1',);
			$data = $this->db->get_where('research_view',$where)->num_rows();
			if($data > 0){	
				$value = $this->modelwebsite->SelectData('research_view',$where)->row();
				$bulan = strtoupper($this->tgl($value->diterbitkan));
				$tgl = substr($value->diterbitkan,8,2);
				# cek margin
				if(strlen(trim($value->judul)) < 30){
						$margin_top 	= "style = 'margin-top:20px'";
				}else{ $margin_top 	= "";}

				if($value->alt_img ==""){
					$alt_img = $value->judul;
				}else{
					$alt_img = $value->alt_img;
				}
				if($value->deskripsi == ""){
					$deskripsi = htmlentities(strip_tags($value->isi));
					$deskripsi = explode('.',$deskripsi);
					$deskripsi = $deskripsi[0].".";
				}else{
					$deskripsi = $value->deskrips;
				}

				#cek img 
				$img = $this->catch_that_image($value->isi);
				if($value->fitur_img== ""){
					$fitur_img = $img;
				}else{
					$fitur_img = $value->fitur_img;
				}
				# code...
				$data = array(
					'kode' => $value->id_post,
					'judul' => $value->judul,
					'isi' => $value->isi,
					'diterbitkan' => $this->date($value->diterbitkan),
					'last_update' => $value->last_update,
					'jumlah_baca' => $value->jumlah_baca + 1,
					'id_user' => $this->cek_user($value->id_user),
					'komen' => $value->komen,
					'label' => $value->label,
					'jam' => $value->jam,
					'lokasi' => $value->lokasi ,
					'parent' => $value->parent,
					'fitur_img' => $value->fitur_img,
					'alt_img' => $value->alt_img,
					'deskripsi' => $value->deskripsi,
					'img' => $img,
					'bulan' => $bulan,
					'tgl' => $tgl,
					'margin_top' => $margin_top,
					'user' => $this->cek_user($value->id_user),
					 );

				
					#update view
					$arrayNameUpdate = array('jumlah_baca' => $data['jumlah_baca'], );
					$this->db->where('link_asli', $link);
					$this->db->update('tb_post', $arrayNameUpdate); 

					$this->load->view('front/news_single',$data);
			}
			
	}
	# END RESEARCH #
	function tgl($tanggal)
	{
		$tanggal  = date("Y-m-d",strtotime($tanggal));
		$tanggal  = explode("-",$tanggal);
		$hari		 = $tanggal[2];
		switch(trim($tanggal[1]))
		{
			// case "01";	$bulan = "Jan";		break;
			// case "02";	$bulan = "Feb";	break;
			// case "03";	$bulan = "Mar";			break;
			// case "04";	$bulan = "Apr";			break;
			// case "05";	$bulan = "Mei";			  break;
			// case "06";	$bulan = "Jun";			break;
			// case "07";	$bulan = "Jul";			break;
			// case "08";	$bulan = "Agu";		break;
			// case "09";	$bulan = "Sep";	break;
			// case "10";	$bulan = "Okt";		break;
			// case "11";	$bulan = "Nov";	break;
			// case "12";	$bulan = "Des";	break;
			case "01";	$bulan = "January";		break;
			case "02";	$bulan = "February";	break;
			case "03";	$bulan = "March";			break;
			case "04";	$bulan = "April";			break;
			case "05";	$bulan = "May";			  break;
			case "06";	$bulan = "June";			break;
			case "07";	$bulan = "July";			break;
			case "08";	$bulan = "Agustus";		break;
			case "09";	$bulan = "September";	break;
			case "10";	$bulan = "Oktober";		break;
			case "11";	$bulan = "November";	break;
			case "12";	$bulan = "December";	break;
		}
		$tahun = $tanggal[0];
		return $bulan;

	}
	function RelativeTime( $timestamp ){
		if( !is_numeric( $timestamp ) ){
			$timestamp = strtotime( $timestamp );
			if( !is_numeric( $timestamp ) ){
				return "";
			}
		}
	 
		$difference = time() - $timestamp;
	        // Customize in your own language.
		$periods = array( "sec", "min", "hour", "day", "week", "month", "years", "decade" );
		$lengths = array( "60","60","24","7","4.35","12","10");
	 
		if ($difference > 0) { // this was in the past
			$ending = "ago";
		}else { // this was in the future
			$difference = -$difference;
			$ending = "to go";
		}
		for( $j=0; $difference>=$lengths[$j] and $j < 7; $j++ )
			$difference /= $lengths[$j];
		$difference = round($difference);
		if( $difference != 1 ){
	                // Also change this if needed for an other language
			$periods[$j].= "s";
		}
		$text = "$difference $periods[$j] $ending";
		return $text;
	}
	#=====================#
	# TAMBAHAN SECRIPT AKN PONOROGO =========#

	function pengumuman_utama($key){
		
		#110 carakter
		if($key == '1'){
			#pengumuman ke 1
			$where 	= array('status'=>'1');
			$data 	= $this->db->order_by('diterbitkan', 'desc')->get_where('announcement_view', $where)->row();
			$diterbitkan 	= $this->RelativeTime($data->diterbitkan);
			$judul 	= strtoupper($data->judul);
			$deskripsi 	= $data->isi;
			$bulan = strtoupper($this->tgl($data->diterbitkan));
			$tgl = substr($data->diterbitkan,8,2);
			$link 	= $data->link_asli;
			if($deskripsi != ""){
				$deskripsi = htmlentities(strip_tags($deskripsi));
				// $deskripsi = explode('.',$deskripsi);
				// $data['deskripsi'] = $deskripsi[0].".";
				
				if(strlen($deskripsi) > 110 ){
					$deskripsi = substr($deskripsi, 0, 110)."...";
				}else{
					$deskripsi = $deskripsi;
				}
				
			}else{
				$deskripsi = $deskripsi;
			}
			echo '<div class="tanggal-pengumuman">
					<span style="font-size:23px">'.$tgl.'</span>
					<br>
					'.$bulan.'
				</div>
				<div class="berita-pengumuman-left">
					<a href="'.$link.'">'.$judul.'</a><br>
					<span class="title-info">'.$diterbitkan.'</span><br>
					'.$deskripsi.'
				</div>';
		}else{
			$where 	= array('status'=>'1');
			$data 	= $this->db->order_by('id_post', 'desc')->limit('2', '1')->get_where('announcement_view', $where)->result();
			foreach ($data as $key => $value) {
				# code...
				$diterbitkan 	= $this->RelativeTime($value->diterbitkan);
				$judul 	= strtoupper($value->judul);
				$bulan = strtoupper($this->tgl($value->diterbitkan));
				$tgl = substr($value->diterbitkan,8,2);
				$link 	= $value->link_asli;

				echo '<div class="pengumuman-right-wrapper" style="margin-bottom:20px;">
						<div class="tanggal-right">
							<span style="font-size:23px">'.$tgl.'</span>
							<br>
							'.$bulan.'
						</div>
						<div class="berita-pengumuman-right">
							<a href="'.$link.'">'.$judul.'</a><br>
							<span class="title-info">'.$diterbitkan.'</span>
						</div>
					</div>';
			}
			
		}
	}
	function agenda_utama(){
		$where 	= array('status'=>'1');
		$data 	= $this->db->order_by('id_post', 'desc')->limit('3', '0')->get_where('agenda_view', $where)->result();
		foreach ($data as $key => $value) {
			# code...
			$diterbitkan 	= $this->RelativeTime($value->diterbitkan);
			$judul 	= strtoupper($value->judul);
			$bulan 	= strtoupper($this->tgl($value->diterbitkan));
			$tgl 	= substr($value->diterbitkan,8,2);
			$link 	= $value->link_asli;
			$deskripsi 	= $value->isi;

			$eng_title = strtoupper($value->judul);
			$eng_post 	= $value->eng_post;
			#cek lang
			if(isset($_COOKIE['lang'])){
				$lang = $_COOKIE['lang'];
				if($lang=="id"){
					# lang indonesia
					$deskripsi 	= $deskripsi;
					$judul = $judul;
				}else if($lang=="eng"){
					# lang eng
					
					if($eng_title == "" || $eng_post == ""){
						$deskripsi 	= $value->isi;
						$judul 		= strtoupper($value->judul);
					}else{
						$deskripsi 	= $value->eng_post;
						$judul 		= strtoupper($value->eng_title);
					}
				}else{
					$deskripsi 	= $deskripsi;
					$judul = $judul;
				}
			}else{
				# default lang indonesia
				$deskripsi 	= $deskripsi;
				$judul = $judul;
			}
			if($deskripsi != ""){
				$deskripsi = htmlentities(strip_tags($deskripsi));
				// $deskripsi = explode('.',$deskripsi);
				// $data['deskripsi'] = $deskripsi[0].".";
				
				if(strlen($deskripsi) > 80 ){
					$deskripsi = substr($deskripsi, 0, 80)."...";
				}else{
					$deskripsi = $deskripsi;
				}
				
			}else{
				$deskripsi = $deskripsi;
			}
			echo '<div class="agenda">
						<div class="agenda-date">
							<div class="mounth">'.$bulan.'</div>
							<div class="date">'.$tgl.'</div>
						</div>
						<div class="agenda-desc">
							<a href="'.$link.'"><h3>'.$judul.'</h3></a>
							'.$deskripsi.'<br>
							
						</div>
					</div>';
			
		}
	}
	function product_sidebar(){
		$where 	= array('status'=>'1');
		$data 	= $this->db->order_by('id_produk', 'desc')->limit('3', '0')->get_where('tb_produk', $where)->result();
		foreach ($data as $key => $value) {
			# code...
			$diterbitkan 	= $this->RelativeTime($value->diterbitkan);
			$judul 	= strtoupper($value->judul);
			$bulan 	= strtoupper($this->tgl($value->diterbitkan));
			$tgl 	= substr($value->diterbitkan,8,2);
			$link 	= $value->link_asli;
			$deskripsi 	= $value->keterangan;
			$jurusan 	= $value->kategori;
			$images = $this->catch_that_image($deskripsi);
			$fitur_img = $value->fitur_img;
			if($fitur_img != ""){
				$fitur_img = '<img src="'.$fitur_img.'"/>';
			}else{
				if($images != ""){
					$fitur_img = '<img src="'.$images.'"/>';
				}else{
					$fitur_img = "";
					$IMG = FALSE;
				}
			}
			if($deskripsi != ""){
				$deskripsi = htmlentities(strip_tags($deskripsi));
				// $deskripsi = explode('.',$deskripsi);
				// $data['deskripsi'] = $deskripsi[0].".";
				
				if(strlen($deskripsi) > 80 ){
					$deskripsi = substr($deskripsi, 0, 80)."...";
				}else{
					$deskripsi = $deskripsi;
				}
				
			}else{
				$deskripsi = $deskripsi;
			}
			echo '<div class="popular-post">
					<div class="popular-img circle">
						'.$fitur_img.'
					</div>
					<div class="popular-desc">
						<b><a href="'.$link.'">'.$judul.'</a></b>
						<div class="popular-date">
							<i class="fa fa-tags"></i> '.$jurusan.'
						</div>
					</div>
				</div>';
			
			
		}
	}
	function berita_utama(){
		$where 	= array('status'=>'1');
		$data 	= $this->db->order_by('id_post', 'desc')->limit('6', '0')->get_where('post_view', $where)->result();
		foreach ($data as $key => $value) {
			# code...
			$diterbitkan 	= $this->date($value->diterbitkan);
			$judul 	= strtoupper($value->judul);
			$bulan 	= strtoupper($this->tgl($value->diterbitkan));
			$tgl 	= substr($value->diterbitkan,8,2);
			$link 	= $value->link_asli;
			$deskripsi 	= $value->isi;
			//$id_kategori = explode('-', $value->kategori)['0'];
			#cek bahasa
			$eng_post 	= $value->eng_post;
			$eng_title = $value->eng_title;
			if(isset($_COOKIE['lang'])){
				$lang = $_COOKIE['lang'];
				if($lang=="id"){
					# lang indonesia
					$isi 	= $value->isi;
					$judul = $value->judul;
				}else if($lang=="eng"){
					# lang eng
					if($eng_title == "" || $eng_post == ""){
						$isi 	= $value->isi;
						$judul = $value->judul;
					}else{
						$isi 	= $value->eng_post;
						$judul = $value->eng_title;
					}
					
				}else{
					$isi 	= $value->isi;
					$judul = $value->judul;
				}
			}else{
				# default lang indonesia
				$isi 	= $value->isi;
				$judul = $value->judul;
			}
			#

			$kategori 	= $this->cek_kategori('1');
			$video = $this->cek_post($value->id_post, "video");
			$desc_img 	= false;
			$img = $this->catch_that_image($isi);
			// if($img == ""){
			// 	$img = "";
			// 	$desc_img 	= false;
			// 	$jumlah_karakter 	= 600;
			// }else{
			// 	$img = "<img src='".$img."'>";
			// 	$desc_img 	= true;
			// 	$jumlah_karakter 	= 300;
			// }

			$thumbVideos = false;
	  		$thumbImages = false;
	  		if($video != ""){
	  			$video 	= $video;
	  			$thumbVideos = true;
	  		}else{
	  			$video 	= '';
	  			$thumbVideos = false;

	  		}
	  		if($img != ""){
	  			$img 	= '<img src="'.$img.'">';
	  			$thumbImages = true;
	  		}else{
	  			$img 	= '';
	  			$thumbImages = false;
	  		}
	  		if($thumbVideos ==  true && $thumbImages ==  true){
	  			$thumbnail = '<iframe width="375" height="360" src="https:'.$video.'" frameborder="0" allowfullscreen></iframe>';
	  		}else if($thumbVideos ==  true && $thumbImages ==  false){
				$thumbnail = '<iframe width="375" height="360" src="https:'.$video.'" frameborder="0" allowfullscreen></iframe>';
	  		}else if($thumbVideos ==  false && $thumbImages ==  true){
	  			$thumbnail = $img;
	  		}else if($thumbVideos ==  false && $thumbImages ==  false){
	  			$thumbnail = "";
	  		}

			
			
			#cek deskripsi
			// if($deskripsi != ""){
			// 	$deskripsi = htmlentities(strip_tags($deskripsi));
			// 	if(strlen($deskripsi) > $jumlah_karakter ){
			// 		$deskripsi = substr($deskripsi, 0, $jumlah_karakter)."...";
			// 	}else{
			// 		$deskripsi = $deskripsi;
			// 	}
				
			// }else{
			// 	$deskripsi = $deskripsi;
			// }
			echo '<div class="post">
					'.$thumbnail.'
					<div class="post-desc">
						<div class="readmore"><a href="'.$link.'"><i class="fa fa-plus"></i></a></div>
						<h2><a href="'.$link.'">'.$judul.'</a></h2>
						<div class="post-det">
							<i class="fa fa-calendar-o"></i> '.$diterbitkan.'<br/>
								<i class="fa fa-map-marker"></i> '.$kategori.'
						</div>
					</div>
				</div>';
			
		}
	}
	function produk_utama(){
		$where 	= array('status'=>'1');
		$data 	= $this->db->order_by('id_produk', 'desc')->limit('3', '0')->get_where('tb_produk', $where)->result();
		foreach ($data as $key => $value) {
			# code...
			$diterbitkan 	= $this->date($value->diterbitkan);
			$judul 	= strtoupper($value->judul);
			$pembuat 	= $value->pembuat;
			
			$link 	= $value->link_asli;
			$deskripsi 	= $value->keterangan;
			//$id_kategori = explode('-', $value->kategori)['0'];
			$kategori 	= $value->kategori;
			#cek img 
			$desc_img 	= false;
			$img = $this->catch_that_image($value->keterangan);
			if($img == ""){
				$img = "";
				$desc_img 	= false;
				$jumlah_karakter 	= 600;
			}else{
				$img = "<img src='".$img."' width='280'>";
				$desc_img 	= true;
				$jumlah_karakter 	= 300;
			}
			
			#cek deskripsi
			if($deskripsi != ""){
				$deskripsi = htmlentities(strip_tags($deskripsi));
				if(strlen($deskripsi) > $jumlah_karakter ){
					$deskripsi = substr($deskripsi, 0, $jumlah_karakter)."...";
				}else{
					$deskripsi = $deskripsi;
				}
				
			}else{
				$deskripsi = $deskripsi;
			}
			echo '<li>
					<div class="product">
						<div class="product-thumb">
							'.$img.'
						</div>
						<div class="product-title">
							<b>'.$kategori.' <i class="fa fa-chevron-right"></i></b><br>
							<h2>'.$judul.'</h2>
							<span style="color:#888">Dibuat oleh : '.$pembuat.'</span><br>
							<a href="'.$link.'"><span class="button small" style="float:left">VIEW DETAIL</span></a>
						</div>
						<div class="product-description">
							'.$deskripsi.'
						</div>
					</div>	
				</li>';
			
			
		}
	}
	function cek_kategori($kode=""){
		$where = array('id_kategori' => $kode );
		$kategori = $this->db->get_where('tb_kategori',$where)->row();
		return 	$kategori->nama;
	}
	function cari($cari){
		//$where4 = array('id_post' => $url,'status' => '1',);
		$where4 	= "judul LIKE '%".$cari."%' AND status = '1'";
			//$data['news'] = $this->db->get_where('post_view',$where4)->result();
			#pgging
			//pagination settings
	        
        	$jumlah = $this->db->select('*')->get_where('post_view',$where4)->num_rows();
	        if($jumlah < 1){
	        	$this->load->view('front/post-empty');
	        }else{
	        	$config['base_url'] = base_url('news/');
	        	$config['total_rows'] = $this->db->count_all('post_view',$where4);
	        	$config['per_page'] = "20";
		        $config["uri_segment"] = 2;
		        $choice = $config["total_rows"] / $config["per_page"];
		        //$config["num_links"] = floor($choice);

		        $config['full_tag_open'] = '<div class="pagination">';
		        $config['full_tag_close'] = '</div>';
		        $config['first_link'] = 'First';
		        $config['last_link'] = 'Last';
		        $config['first_tag_open'] = '';
		        $config['first_tag_close'] = '';
		        $config['prev_link'] = '<';
		        $config['prev_tag_open'] = '';
		        $config['prev_tag_close'] = '';
		        $config['next_link'] = '>';
		        $config['next_tag_open'] = '';
		        $config['next_tag_close'] = '';
		        $config['last_tag_open'] = '';
		        $config['last_tag_close'] = '';
		        $config['cur_tag_open'] = '<a style="background:#003366">';
		        $config['cur_tag_close'] = '</a>';
		        $config['num_tag_open'] = '';
		        $config['num_tag_close'] = '';

		        $this->pagination->initialize($config);
				$data['page'] 	= ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
				$data['post'] = $this->modelwebsite->post_order_limit('post_view','diterbitkan',$config["per_page"],$data['page'],$where4)->result();
				$data['paging'] = $this->pagination->create_links();
			

				$this->load->view('front/post',$data);
	        }
	        
	}
	#==============================
	#pengumuman dan agenda
	#==============================
	function announcement($url=""){
		
		if(trim($url) != ""){
			$url = base_url('announcement/'.$url);
			$where = array('link_asli' => $url,'status' => '1',);
			$pengumuman = $this->db->get_where('announcement_view',$where)->num_rows();
			
			if($pengumuman > 0){
				$value = $this->modelwebsite->SelectData('announcement_view',$where)->row();
				$bulan = strtoupper($this->tgl($value->diterbitkan));
				$tgl = substr($value->diterbitkan,8,2);
				# cek margin
				if(strlen(trim($value->judul)) < 30){
						$margin_top 	= "style = 'margin-top:20px'";
					}else{ $margin_top 	= "";}

				if($value->alt_img ==""){
					$alt_img = $value->judul;
				}else{
					$alt_img = $value->alt_img;
				}
				if($value->deskripsi == ""){
					$deskripsi = htmlentities(strip_tags($value->isi));
					$deskripsi = explode('.',$deskripsi);
					$deskripsi = $deskripsi[0].".";
				}else{
					$deskripsi = $value->deskrips;
				}

				#cek img 
				$img = $this->catch_that_image($value->isi);
				if($value->fitur_img== ""){
					$fitur_img = $img;
				}else{
					$fitur_img = $value->fitur_img;
				}
				# code...
				$data = array(
					'kode' => $value->id_post,
					'judul' => $value->judul,
					'isi' => $value->isi,
					'diterbitkan' => $this->date($value->diterbitkan),
					'last_update' => $value->last_update,
					'jumlah_baca' => $value->jumlah_baca + 1,
					'id_user' => $this->cek_user($value->id_user),
					'komen' => $value->komen,
					'label' => $value->label,
					'jam' => $value->jam,
					'lokasi' => $value->lokasi ,
					'parent' => $value->parent,
					'fitur_img' => $value->fitur_img,
					'alt_img' => $value->alt_img,
					'deskripsi' => $value->deskripsi,
					'img' => $img,
					'bulan' => $bulan,
					'tgl' => $tgl,
					'margin_top' => $margin_top );
					#update view
					$arrayNameUpdate = array('jumlah_baca' => $value->jumlah_baca + 1, );
					$this->db->where('id_post', $value->id_post);
					$this->db->update('tb_post', $arrayNameUpdate); 

					#cek child of pages
					$this->load->view('front/announcement_single',$data);
			}else{
					redirect('NotFound');
			}

		}else{
			$url = base_url('announcement');
			$where2 = array('status' => '1');
			$config['base_url'] = base_url('announcement/page/');
	        $config['total_rows'] = $this->db->count_all('announcement_view',$where2);
	        $config['per_page'] = "10";
	        $config["uri_segment"] = 3;
	        $choice = $config["total_rows"] / $config["per_page"];
	        //$config["num_links"] = floor($choice);

	        $config['full_tag_open'] = '<div class="pagination">';
	        $config['full_tag_close'] = '</div>';
	        $config['first_link'] = 'First';
	        $config['last_link'] = 'Last';
	        $config['first_tag_open'] = '';
	        $config['first_tag_close'] = '';
	        $config['prev_link'] = '<';
	        $config['prev_tag_open'] = '';
	        $config['prev_tag_close'] = '';
	        $config['next_link'] = '>';
	        $config['next_tag_open'] = '';
	        $config['next_tag_close'] = '';
	        $config['last_tag_open'] = '';
	        $config['last_tag_close'] = '';
	        $config['cur_tag_open'] = '<a style="background:#003366">';
	        $config['cur_tag_close'] = '</a>';
	        $config['num_tag_open'] = '';
	        $config['num_tag_close'] = '';
	        // post($table,$kode,$limit, $start, $where){
	        
	        $this->pagination->initialize($config);
			$data['page'] 	= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['announcement'] = $this->modelwebsite->post_order_limit('announcement_view','diterbitkan',$config["per_page"],$data['page'],$where2)->result();
			$data['paging'] = $this->pagination->create_links();
		

			$this->load->view('front/announcement',$data);
		}
   		
   	}
   	function agenda($url=""){
   		//if($url==""){ redirect('NotFound');}
   		if($url == ""){
   			$url = base_url('agenda');
			$where2 = array('status' => '1');
			$config['base_url'] = base_url('agenda/');
	        $config['total_rows'] = $this->db->count_all('agenda_view',$where2);
	        $config['per_page'] = "20";
	        $config["uri_segment"] = 2;
	        $choice = $config["total_rows"] / $config["per_page"];
	        
	        $config['full_tag_open'] = '<div class="pagination">';
	        $config['full_tag_close'] = '</div>';
	        $config['first_link'] = '';
	        $config['last_link'] = '';
	        $config['first_tag_open'] = '';
	        $config['first_tag_close'] = '';
	        $config['prev_link'] = '<input type="button" class="button-view" value="PREV PAGE" style="float:left; margin-top:20px;">';
	        $config['prev_tag_open'] = '';
	        $config['prev_tag_close'] = '';
	        $config['next_link'] = '<input type="button" class="button-view" value="NEXT PAGE" style="float:right; margin-top:20px;">';
	        $config['next_tag_open'] = '';
	        $config['next_tag_close'] = '';
	        $config['last_tag_open'] = '';
	        $config['last_tag_close'] = '';
	        $config['cur_tag_open'] = '';
	        $config['cur_tag_close'] = '';
	        $config['num_tag_open'] = '<div class="hiden">';
	        $config['num_tag_close'] = '</div>';
	        // post($table,$kode,$limit, $start, $where){
	        
	        $this->pagination->initialize($config);
			$data['page'] 	= ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
			$data['announcement'] = $this->modelwebsite->post_order_limit('agenda_view','id_post',$config["per_page"],$data['page'],$where2)->result();
			$data['paging'] = $this->pagination->create_links();
		

			$this->load->view('front/agenda',$data);
   		}else if($url>0) {
   			$url = base_url('agenda');
			$where2 = array('status' => '1');
			$config['base_url'] = base_url('agenda/');
	        $config['total_rows'] = $this->db->count_all('agenda_view',$where2);
	        $config['per_page'] = "20";
	        $config["uri_segment"] = 2;
	        $choice = $config["total_rows"] / $config["per_page"];
	        //$config["num_links"] = floor($choice);

	        $config['full_tag_open'] = '<div class="pagination">';
	        $config['full_tag_close'] = '</div>';
	        $config['first_link'] = '';
	        $config['last_link'] = '';
	        $config['first_tag_open'] = '';
	        $config['first_tag_close'] = '';
	        $config['prev_link'] = '<input type="button" class="button-view" value="PREV PAGE" style="float:left; margin-top:20px;">';
	        $config['prev_tag_open'] = '';
	        $config['prev_tag_close'] = '';
	        $config['next_link'] = '<input type="button" class="button-view" value="NEXT PAGE" style="float:right; margin-top:20px;">';
	        $config['next_tag_open'] = '';
	        $config['next_tag_close'] = '';
	        $config['last_tag_open'] = '';
	        $config['last_tag_close'] = '';
	        $config['cur_tag_open'] = '';
	        $config['cur_tag_close'] = '';
	        $config['num_tag_open'] = '<div class="hiden">';
	        $config['num_tag_close'] = '</div>';
	        // post($table,$kode,$limit, $start, $where){
	        
	        $this->pagination->initialize($config);
			$data['page'] 	= ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
			$data['announcement'] = $this->modelwebsite->post_order_limit('agenda_view','id_post',$config["per_page"],$data['page'],$where2)->result();
			$data['paging'] = $this->pagination->create_links();
		

			$this->load->view('front/agenda',$data);
		}else{
			if(trim($url) != ""){
				$url = base_url('agenda/'.$url);
				$where = array('link_asli' => $url,'status' => '1',);
				$pengumuman = $this->db->get_where('agenda_view',$where)->num_rows();
				
				if($pengumuman > 0){
					$value = $this->modelwebsite->SelectData('agenda_view',$where)->row();
					$bulan = strtoupper($this->tgl($value->diterbitkan));
					$tgl = substr($value->diterbitkan,8,2);
					$tahun = substr($value->diterbitkan,0,4);
					$isi 	= $value->isi;
					$judul 	= $value->judul;
					# cek margin
					if(strlen(trim($value->judul)) < 30){
							$margin_top 	= "style = 'margin-top:20px'";
					}else{ $margin_top 	= "";}

					if($value->alt_img ==""){
						$alt_img = $value->judul;
					}else{
						$alt_img = $value->alt_img;
					}
					#cek bahasa
					$eng_post 	= $value->eng_post;
					$eng_title = $value->eng_title;
					if(isset($_COOKIE['lang'])){
						$lang = $_COOKIE['lang'];
						if($lang=="id"){
							# lang indonesia
							$isi 	= $value->isi;
							$judul = $value->judul;
						}else if($lang=="eng"){
							# lang eng
							if($eng_title == "" || $eng_post == ""){
								$isi 	= $value->isi;
								$judul = $value->judul;
							}else{
								$isi 	= $value->eng_post;
								$judul = $value->eng_title;
							}
							
						}else{
							$isi 	= $value->isi;
							$judul = $value->judul;
						}
					}else{
						# default lang indonesia
						$isi 	= $value->isi;
						$judul = $value->judul;
					}
					#
					if($value->deskripsi == ""){
						$deskripsi = htmlentities(strip_tags($isi));
						$deskripsi = explode('.',$deskripsi);
						$deskripsi = $deskripsi[0].".";
					}else{
						$deskripsi = $value->deskrips;
					}

					#cek img 
					$img = $this->catch_that_image($isi);
					if($value->fitur_img== ""){
						$fitur_img = $img;
					}else{
						$fitur_img = $value->fitur_img;
					}

					# code...
					$data = array(
						'kode' => $value->id_post,
						'judul' => $judul,
						'isi' => $isi,
						'diterbitkan' => $this->date($value->diterbitkan),
						'last_update' => $value->last_update,
						'jumlah_baca' => $value->jumlah_baca + 1,
						'id_user' => $this->cek_user($value->id_user),
						'komen' => $value->komen,
						'label' => $value->label,
						'jam' => $value->jam,
						'lokasi' => $value->lokasi ,
						'parent' => $value->parent,
						'fitur_img' => $value->fitur_img,
						'alt_img' => $value->alt_img,
						'deskripsi' => $value->deskripsi,
						'img' => $img,
						'bulan' => $bulan,
						'tgl' => $tgl,
						'tahun' => $tahun,
						'margin_top' => $margin_top );
						#update view
						$arrayNameUpdate = array('jumlah_baca' => $value->jumlah_baca + 1, );
						$this->db->where('id_post', $value->id_post);
						$this->db->update('tb_post', $arrayNameUpdate); 

						#cek child of pages
						$this->load->view('front/agenda-single',$data);
	   			}else{
	   				redirect('NotFound');
	   			}
   			}else{
   				redirect('NotFound');
   			}
		}
	}
   	function page($i=""){
   		$url = base_url('agenda');
			$where2 = array('status' => '1');
			$config['base_url'] = base_url('agenda/page/');
	        $config['total_rows'] = $this->db->count_all('agenda_view',$where2);
	        $config['per_page'] = "1";
	        $config["uri_segment"] = 3;
	        $choice = $config["total_rows"] / $config["per_page"];
	        //$config["num_links"] = floor($choice);

	        $config['full_tag_open'] = '<div class="pagination">';
	        $config['full_tag_close'] = '</div>';
	        $config['first_link'] = '';
	        $config['last_link'] = '';
	        $config['first_tag_open'] = '';
	        $config['first_tag_close'] = '';
	        $config['prev_link'] = '<input type="button" class="button-view" value="PREV PAGE" style="float:left; margin-top:20px;">';
	        $config['prev_tag_open'] = '';
	        $config['prev_tag_close'] = '';
	        $config['next_link'] = '<input type="button" class="button-view" value="NEXT PAGE" style="float:right; margin-top:20px;">';
	        $config['next_tag_open'] = '';
	        $config['next_tag_close'] = '';
	        $config['last_tag_open'] = '';
	        $config['last_tag_close'] = '';
	        $config['cur_tag_open'] = '';
	        $config['cur_tag_close'] = '';
	        $config['num_tag_open'] = '<div class="hiden">';
	        $config['num_tag_close'] = '</div>';
	        // post($table,$kode,$limit, $start, $where){
	        
	        $this->pagination->initialize($config);
			$data['page'] 	= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['announcement'] = $this->modelwebsite->post_order_limit('agenda_view','id_post',$config["per_page"],$data['page'],$where2)->result();
			$data['paging'] = $this->pagination->create_links();
		

			$this->load->view('front/agenda',$data);
   	}
  	function corner(){
  		# ============= CORNER =============   #
  		# ==================================   #
		$data = $this->db->order_by('id_corner', 'DESC')->get_where('tb_corner')->row();
  		$judul 	= $this->cek_post($data->id_post, "judul");
  		$link 	= $this->cek_post($data->id_post, "link");
  		$img = $this->cek_post($data->id_post, "img");
  		if($img != ""){
  			$img 	= '<img src="'.$img.'">';
  		}else{
  			$img 	= '';
  		}
  		$judul 	= strtoupper($judul);
  		$date = $this->date($this->cek_post($data->id_post, "diterbitkan"));
  		if($img != ""){
  			
  			echo '<div class="corner-left" style="width:100%; margin-top:15px;margin-bottom:0px;">
					'.$img.'<br>
					<b>'.$judul.'</b><br>
					<span class="title-info">'.$date.'</span><br>
					<a href="'.$link.'"><span class="button red corner-btn" style="bottom:0px;">SELENGKAPNYA <i class="icon-chevron-right"></i></a></span></a>
				</div>';
  		}
  		# BERITA POPULER   #
  		# ==================================   #
  		$wherePopuler 	= array('status' => '1');
  		$beritaPopuler 	= $this->modelwebsite->post_order_limit('post_view','jumlah_baca','3','0',$wherePopuler)->result();
		foreach ($beritaPopuler as $key => $value) {
			# code...
			$diterbitkan 	= $this->RelativeTime($value->diterbitkan);
			$judul 	= strtoupper($value->judul);
			$deskripsi 	= $value->isi;
			$bulan = strtoupper($this->tgl($value->diterbitkan));
			$tgl = substr($value->diterbitkan,8,2);
			$link 	= $value->link_asli;
			$kategori 	= $value->kategori;
			if($deskripsi != ""){
				$deskripsi = htmlentities(strip_tags($deskripsi));
				// $deskripsi = explode('.',$deskripsi);
				// $data['deskripsi'] = $deskripsi[0].".";
				
				if(strlen($deskripsi) > 80 ){
					$deskripsi = substr($deskripsi, 0, 80)."...";
				}else{
					$deskripsi = $deskripsi;
				}
				
			}else{
				$deskripsi = $deskripsi;
			}

		# cek kategori
			if($kategori !=""){
              	$explode = explode("-", $kategori);
              	$r=0;
              	foreach ($explode as $key => $value) {
	                # code...
	                $kategori_name[$r] = $this->cek_kategori($value);
			$kategori = $this->cek_kategori($value);
	                //echo '<a href="'.base_url('tag/'.$labelname).'">'.$labelname.'</a>';
	                $r++;
              	}
			
		
              //$labelOK = implode(",", $labelname);
	          }else{
	            $labelOK = "";
			$kategori = "Uncategories";
	          }
  		echo '<div class="berita">
				<div class="berita-tanggal">
					<span style="font-size:21px">'.$tgl.'</span>
					<br>
					'.$bulan.'
				</div>
				<div class="berita-deskripsi">
					<b>'.$judul.'</b><br>
					<span style="font-size:10px; color:#888;">#'.$kategori.'</span><br>
					'.$deskripsi.'<br>
					<div class="view-detail"><a href="'.$link.'">Selengkapnya <i class="icon-chevron-right"></i></a></div>
				</div>
			</div>';
		}

  	}
  	
  	function pengumuman_selanjutnya($kode_pengumuman_tampil, $key){
  		if($key == "agenda"){
  			$tabel 	= 'agenda_view';
  			$label 	= "AGENDA";
  		}else if($key == "pengumuman"){
  			$label 	= "PENGUMUMMAN";
  			$tabel 	= "announcement_view";
  		}else if($key == 'post'){
  			$label 	= "BERITA";
  			$tabel 	= "post_view";
  		}
  		$query	= $this->db->query('SELECT * FROM '.$tabel.' WHERE id_post != '.$kode_pengumuman_tampil.' AND status = "1" ORDER BY id_post DESC LIMIT 0,1')->row();
  		$judul 	= $query->judul;
  		$link 	= $query->link_asli;
  		$date 	= $this->date($query->diterbitkan);
  		echo '<div class="next-news">
				
				<div class="next-descript">
					<b style="color:#888">'.$label.' SELANJUTNYA <i class="icon-chevron-right"></i></b><br><br>
					<h3>'.$judul.'</h3>
					<span class="title-info">'.$date.'</span><br><br>
					<a href="'.$link.'"><span class="button red next-btn">SELENGKAPNYA <i class="icon-chevron-right"></i></a></span></a>
				</div>
			</div>';
  	}
	# =============================================================
	#================================================================
	function sitemap_page(){
		$where = array('parent' => '0','status' => '1', );
		$page_perent = $this->db->get_where('page_parent_view',$where)->result();

		foreach ($page_perent as $key => $value) {
			$id = $value->id_post;
			$link = $value->link_asli;
			$judul = $value->judul;
			echo '<li style="margin-left:-5px"> <a href="'.$link.'"> <i class="fa fa-caret-right"></i> '.$judul.' </a> </li>';
			
			$where2 = array('parent' => $id,'status' => '1', );
			$page = $this->db->get_where('pages_view',$where2)->result();
			echo '<ul style=" border-left:1px solid #EEE">';
			foreach ($page as $key => $isi) {
				$link1 	= $isi->link_asli;
				$judul1 	= $isi->judul;
				echo '<a href="'.$link1.'"><li>'.$judul1.'</li></a>';
			}
			echo "</ul>";
		}
	}
	function sitemap_post(){
		$where = array('status' => '1', );
		$page_perent = $this->db->get_where('post_view',$where)->result();

		foreach ($page_perent as $key => $value) {
			$id = $value->id_post;
			$link = $value->link_asli;
			$judul = $value->judul;
			echo '<a href="'.$link.'"><li style="margin-left:-5px"><i class="fa fa-caret-right"></i> '.$judul.' </li></a>';
			
		}
	}
	function menu($posisi){
		$where = array('posisi' => $posisi,'parent' => '0', );
		$menu_parent = $this->modelwebsite->selectMenu('tb_menu',$where)->result();

		foreach ($menu_parent as $key => $value) {
			# code...
			$id 	= $value->id_menu;
			$nama 	= $value->nama;
			$link 	= $value->link;
			$key 	= $value->type;
			$id_post= $value->id_post;
			#cek URL
			if($key == "post"){
					$link 	= $this->cek_post($id_post,'link');
			}else if($key == "file"){
				$link 	= $this->cek_file($id_post);
			}else{
				$link 	= $link;
			}
			#cek lang
			if(isset($_COOKIE['lang'])){
				$lang = $_COOKIE['lang'];
				if($lang=="id"){
					# lang indonesia
					$nama 	= $value->nama;
				}else if($lang=="eng"){
					# lang eng
					$nama 	= $value->name_eng;
				}else{
					$nama 	= $value->nama;
				}
			}else{
				# default lang indonesia
				$nama 	= $value->nama;
			}

			echo '<li><a href="'.$link.'">'.$nama.'</a>';
			$this->view_child_menu($id);
			echo '</li>';
		}
	}
	function cek_post($kode="",$key=""){
		$return = null;
		$key 	= $key;
   		$arrayName 	= array('id_post' => $kode, );
   		$data   	= $this->db->get_where('tb_post',$arrayName);
   		if($data->num_rows() > 0){
   			$data 	= $data->row();
   			if($key == "link"){
   			 $return  		= $data->link_asli;
	   		}else if($key == "judul"){
	   			$return  		= $data->judul;
	   		}else if($key == "img"){
	   			$return 	= $this->catch_that_image($data->isi);
	   		}else if($key == "diterbitkan"){
	   			$return 	= $data->diterbitkan;
	   		}else if($key == "video"){
	   			$return 	= $this->extractVideoID($data->isi);
	   		}else{
	   			$return 	= $data->$key;
	   		}
   		}else{
   			$return 	= "#";
   		}
   		
        
        return $return;
   	}
   	function cek_file($kode=""){

   		$arrayName 	= array('id_file' => $kode, );
   		$data   	= $this->db->get_where('tb_file',$arrayName)->row();
        $link  		= $data->link;
        return $link;
    }
	function view_child_menu($parent){
		$where = array('posisi' => '2','parent' => $parent,);
		$data = $this->db->get_where('tb_menu',$where)->num_rows();
		if($data > 0){
			#jika data ada child
			$data = $this->modelwebsite->SelectData('tb_menu',$where)->result();
			echo "<ul>";
			
			foreach ($data as $key => $value) {
				# code...
				$id 	= $value->id_menu;
				$nama 	= $value->nama;
				$link 	= $value->link;
				if(isset($_COOKIE['lang'])){
					$lang = $_COOKIE['lang'];
					if($lang=="id"){
						# lang indonesia
						$nama 	= $value->nama;
					}else if($lang=="eng"){
						# lang eng
						$nama 	= $value->name_eng;
					}else{
						$nama 	= $value->nama;
					}
				}else{
					# default lang indonesia
					$nama 	= $value->nama;
				}
				echo '<li><a href="'.$link.'">'.$nama.'</a></li>';
				
			}
			echo '</ul>';
		}
		
	}
	# PAGES  #
	# ====== #
	function pages($parentUrl="", $childUrl=""){
		
		
		# cek URL
		$url = null;
		if($childUrl != ""){
			$url = base_url($parentUrl."/".$childUrl);
		}else{
			$url = base_url($parentUrl);
		}
   		//echo $url;
   		
   		$where = array('link_asli' => $url,'status' => '1',);
		$data = $this->db->get_where('pages_view',$where)->num_rows();
		if($data > 0){
			//$data = $this->modelwebsite->SelectData('pages_view',$where)->result();
			$value = $this->modelwebsite->SelectData('pages_view',$where)->row();
				$bulan = $this->tgl($value->diterbitkan);
				$tgl = substr($value->diterbitkan,8,2);
				$tahun = substr($value->diterbitkan,0,4);
				#cek bahasa
				$eng_post 	= $value->eng_post;
				$eng_title = $value->eng_title;
				if(isset($_COOKIE['lang'])){
					$lang = $_COOKIE['lang'];
					if($lang=="id"){
						# lang indonesia
						$isi 	= $value->isi;
						$judul = $value->judul;
					}else if($lang=="eng"){
						# lang eng
						if($eng_title == "" || $eng_post == ""){
							$isi 	= $value->isi;
							$judul = $value->judul;
						}else{
							$isi 	= $value->eng_post;
							$judul = $value->eng_title;
						}
						
					}else{
						$isi 	= $value->isi;
						$judul = $value->judul;
					}
				}else{
					# default lang indonesia
					$isi 	= $value->isi;
					$judul = $value->judul;
				}
				#============================================
				# cek margin
				if(strlen(trim($value->judul)) < 30){
						$margin_top 	= "style = 'margin-top:20px'";
					}else{ $margin_top 	= "";}

				if($value->alt_img ==""){
					$alt_img = $value->judul;
				}else{
					$alt_img = $value->alt_img;
				}
				if($value->deskripsi == ""){
					$deskripsi = htmlentities(strip_tags($isi));
					$deskripsi = explode('.',$deskripsi);
					$deskripsi = $deskripsi[0].".";
				}else{
					$deskripsi = $value->deskrips;
				}

				#cek img 
				$img = $this->catch_that_image($isi);
				if($value->fitur_img== ""){
					$fitur_img = $img;
				}else{
					$fitur_img = $value->fitur_img;
				}
				# code...
				$data = array(
					'kode' => $value->id_post,
					'judul' => $judul,
					'isi' => $isi,
					'diterbitkan' => $this->date($value->diterbitkan),
					'last_update' => $value->last_update,
					'jumlah_baca' => $value->jumlah_baca + 1,
					'user' => $this->cek_user($value->id_user),
					'komen' => $value->komen,
					'label' => $value->label,
					'jam' => $value->jam,
					'lokasi' => $value->lokasi ,
					'parent' => $value->parent,
					'fitur_img' => $value->fitur_img,
					'alt_img' => $value->alt_img,
					'deskripsi' => $value->deskripsi,
					'img' => $img,
					'bulan' => $bulan,
					'tgl' => $tgl,
					'tahun' => $tahun,
					'margin_top' => $margin_top );
					#update view
					$arrayNameUpdate = array('jumlah_baca' => $value->jumlah_baca + 1, );
					$this->db->where('id_post', $value->id_post);
					$this->db->update('tb_post', $arrayNameUpdate); 
					$this->load->view('front/page',$data);
					#cek child of pages
			

		}else{
			redirect('NotFound');
		}
		
   	}
   	function catch_that_image($post){
   		$img = null;
   		$out 	= preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post, $matches);
   		$a 		= @$matches[1][0];
   		return $a;	
   	}
   	function extractVideoID($post){
   		$out 	= preg_match_all('/<iframe.+?src="(.+?)".+?<\/iframe>/', $post, $matches);
   		$a 		= @$matches[1][0];
   		return $a;	
	}
   	function cek_user($kode){
   		$where = array('id_user' => $kode,);
		$data = $this->db->get_where('tb_user',$where);
		if($data->num_rows() > 0){
			$data = $data->row();
			$user = $data->nama;
		}else{
			$user = "AKN Ponorogo";
		}
		
		return $user;
   	}

	function date($tanggal){
		$tanggal  = date("Y-m-d",strtotime($tanggal));
		$tanggal  = explode("-",$tanggal);
		$hari		 = $tanggal[2];
		switch(trim($tanggal[1]))
			{
				case "01";	$bulan = "Jan";		break;
				case "02";	$bulan = "Feb";	break;
				case "03";	$bulan = "Mar";			break;
				case "04";	$bulan = "Apr";			break;
				case "05";	$bulan = "Mei";			  break;
				case "06";	$bulan = "Jun";			break;
				case "07";	$bulan = "Jul";			break;
				case "08";	$bulan = "Agu";		break;
				case "09";	$bulan = "Sep";	break;
				case "10";	$bulan = "Okt";		break;
				case "11";	$bulan = "Nov";	break;
				case "12";	$bulan = "Des";	break;
			}
		$tahun = $tanggal[0];
		return $bulan." ".$hari.", ".$tahun;
	}

	function news($kode="",$url=""){
		if($kode == "" OR $url ==""){
			
			//$data['news'] = $this->db->get_where('post_view',$where4)->result();
			#pgging
			//pagination settings
		$where4 = array('status' => '1',);
	        $config['base_url'] = base_url('news/page/');
	        $config['total_rows'] = $this->db->count_all('post_view',$where4);
	        $config['per_page'] = "20";
	        $config["uri_segment"] = 3;
	        $choice = $config["total_rows"] / $config["per_page"];
	        //$config["num_links"] = floor($choice);

	        $config['full_tag_open'] = '<div class="pagination">';
	        $config['full_tag_close'] = '</div>';
	        $config['first_link'] = '';
	        $config['last_link'] = '';
	        $config['first_tag_open'] = '';
	        $config['first_tag_close'] = '';
	        $config['prev_link'] = '<input type="button" class="button-view" value="PREV PAGE" style="float:left; margin-top:20px;">';
	        $config['prev_tag_open'] = '';
	        $config['prev_tag_close'] = '';
	        $config['next_link'] = '<input type="button" class="button-view" value="NEXT PAGE" style="float:right; margin-top:20px;">';
	        $config['next_tag_open'] = '';
	        $config['next_tag_close'] = '';
	        $config['last_tag_open'] = '';
	        $config['last_tag_close'] = '';
	        $config['cur_tag_open'] = '';
	        $config['cur_tag_close'] = '';
	        $config['num_tag_open'] = '<div class="hiden">';
	        $config['num_tag_close'] = '</div>';


	        $this->pagination->initialize($config);
			$data['page'] 	= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['post'] = $this->modelwebsite->post_order_limit('post_view','diterbitkan',$config["per_page"],$data['page'],$where4)->result();
			$data['paging'] = $this->pagination->create_links();
		

			$this->load->view('front/post',$data);
		}else{
			$where = array('id_post' => $kode,'status' => '1',);
			$data = $this->db->get_where('post_view',$where)->num_rows();
			if($data > 0){
				$value = $this->modelwebsite->SelectData('post_view',$where)->row();
				$bulan = $this->tgl($value->diterbitkan);
				$tgl = substr($value->diterbitkan,8,2);
				$tahun = substr($value->diterbitkan,0,4);
				# cek margin
				if(strlen(trim($value->judul)) < 30){
						$margin_top 	= "style = 'margin-top:20px'";
				}else{ $margin_top 	= "";}

				if($value->alt_img ==""){
					$alt_img = $value->judul;
				}else{
					$alt_img = $value->alt_img;
				}
				#cek bahasa
				$eng_post 	= $value->eng_post;
				$eng_title = $value->eng_title;
				if(isset($_COOKIE['lang'])){
					$lang = $_COOKIE['lang'];
					if($lang=="id"){
						# lang indonesia
						$isi 	= $value->isi;
						$judul = $value->judul;
					}else if($lang=="eng"){
						# lang eng
						if($eng_title == "" || $eng_post == ""){
							$isi 	= $value->isi;
							$judul = $value->judul;
						}else{
							$isi 	= $value->eng_post;
							$judul = $value->eng_title;
						}
						
					}else{
						$isi 	= $value->isi;
						$judul = $value->judul;
					}
				}else{
					# default lang indonesia
					$isi 	= $value->isi;
					$judul = $value->judul;
				}
				#
				if($value->deskripsi == ""){
					$deskripsi = htmlentities(strip_tags($value->isi));
					$deskripsi = explode('.',$deskripsi);
					$deskripsi = $deskripsi[0].".";
				}else{
					$deskripsi = $value->deskrips;
				}

				#cek img 
				$img = $this->catch_that_image($value->isi);
				if($value->fitur_img== ""){
					$fitur_img = $img;
				}else{
					$fitur_img = $value->fitur_img;
				}
				# code...
				$data = array(
					'kode' => $value->id_post,
					'judul' => $judul,
					'isi' => $isi,
					'diterbitkan' => $this->date($value->diterbitkan),
					'last_update' => $value->last_update,
					'jumlah_baca' => $value->jumlah_baca + 1,
					'id_user' => $this->cek_user($value->id_user),
					'komen' => $value->komen,
					'label' => $value->label,
					'jam' => $value->jam,
					'lokasi' => $value->lokasi ,
					'parent' => $value->parent,
					'fitur_img' => $value->fitur_img,
					'alt_img' => $value->alt_img,
					'deskripsi' => $value->deskripsi,
					'img' => $img,
					'bulan' => $bulan,
					'tgl' => $tgl,
					'tahun' => $tahun,
					'margin_top' => $margin_top,
					'user' => $this->cek_user($value->id_user),
					 );

				
					#update view
					$arrayNameUpdate = array('jumlah_baca' => $data['jumlah_baca'], );
					$this->db->where('id_post', $kode);
					$this->db->update('tb_post', $arrayNameUpdate); 

					$this->load->view('front/post_single',$data);
					#cek child of pages
					
					
					
				
			}else{
				redirect('NotFound');
			}
		}
		
	}
	function data_label_post($id){
		$data2 = array(
			'id_label'=>$id,
		);
 		$ceklabel 	= $this->db->get_where('tb_label',$data2)->row();  // lihat data user berdasar username dan pasas
		return $kodelabel 	= @$ceklabel->nama; 

	}
	function tag($tag=""){
		$data = array('nama'=>$tag,);
		$cekTag 	= $this->db->get_where('tb_label',$data)->num_rows();
		if($cekTag > 0){
			$namaLabel  = $this->uri->segment(2);
			$datatag 	= $this->db->get_where('tb_label',$data)->row();
			$kode 		= $datatag->id_label;
			
			//$where4 = array('id_post' => $url,'status' => '1',);
			$jumlah_data 	= $this->db->query('SELECT * FROM post_view WHERE label LIKE "%'.$kode.'%" AND status = 1')->num_rows();
			//pagination settings
	        $config['base_url'] = base_url('tag/'.$namaLabel);
	        $config['total_rows'] = $jumlah_data;
	        $config['per_page'] = "20";
	        $config["uri_segment"] = 3;
	        $choice = $config["total_rows"] / $config["per_page"];
	        //$config["num_links"] = floor($choice);

	        $config['full_tag_open'] = '<div class="pagination">';
	        $config['full_tag_close'] = '</div>';
	        $config['first_link'] = 'First';
	        $config['last_link'] = 'Last ';
	        $config['first_tag_open'] = '';
	        $config['first_tag_close'] = '';
	        $config['prev_link'] = '<';
	        $config['prev_tag_open'] = '';
	        $config['prev_tag_close'] = '';
	        $config['next_link'] = '>';
	        $config['next_tag_open'] = '';
	        $config['next_tag_close'] = '';
	        $config['last_tag_open'] = '';
	        $config['last_tag_close'] = '';
	        $config['cur_tag_open'] = '<a style="background:#003366">';
	        $config['cur_tag_close'] = '</a>';
	        $config['num_tag_open'] = '';
	        $config['num_tag_close'] = '';

	        //$WhereIn = array('label' => $kode,'status' => "1" );
	        $this->pagination->initialize($config);
			$page 	= ($this->uri->segment(3)) ? $this->uri->segment(3) : 0; // LIMIT ".$config['per_page'].",".$config['page']
			//$data['post_tag'] 	= $this->db->query("SELECT * FROM post_view WHERE label LIKE'%".$kode."%' AND status = 1 LIMIT ".$pages.",".$config['per_page']." ")->result();
			$data["post"] = $this->modelwebsite->tag_news($config["per_page"], $page, $kode);
        	$data['paging'] = $this->pagination->create_links();
			if($jumlah_data > 0){
				
				$this->load->view('front/post',$data);
			}else{
				#data kosong
				$this->load->view('front/tag_empty',$data);
			}
			#pgging
			
		}else{
			# pages
			
			$this->load->view('front/tag_empty',$data);
		}
	}
	 #index FRONT
     function layout_position($posisi=""){
     	$arrayName = array('posisi' => $posisi, );
        $data = $this->db->get_where('tb_setting_layout',$arrayName)->row();
        $label = strtoupper($data->label);
        #cek POST
       	$id_post = $data->id_post;
       	$where = array('id_post' => $id_post);
		$data = $this->db->get_where('tb_post',$where)->num_rows();
		if($data > 0){
			$data = $this->modelwebsite->SelectData('tb_post',$where)->result();
			foreach ($data as $key => $value) {
				# code...
				$kode 	= $value->id_post;
				$data['judul'] = $value->judul;
				$data['isi'] = $value->isi;
				$data['diterbitkan'] = $this->date($value->diterbitkan);
				$data['last_update'] = $value->last_update;
				$data['jumlah_baca'] = $value->jumlah_baca;
				$data['id_user'] = $this->cek_user($value->id_user);
				$data['komen'] = $value->komen;
				$data['label'] = $value->label;
				$data['jam'] = $value->jam;
				$data['lokasi'] = $value->lokasi;
				$data['parent'] = $value->parent;
				$data['fitur_img'] = $value->fitur_img;
				$data['alt_img'] = $value->alt_img;
				$data['deskripsi'] = $value->deskripsi;
				$data['link_asli'] = $value->link_asli;
				if($data['alt_img']==""){
					$data['alt_img'] = $data['judul'];
				}else{
					$data['alt_img']= $data['alt_img'];
				}
				if($data['isi'] != ""){
					$deskripsi = htmlentities(strip_tags($data['isi']));
					// $deskripsi = explode('.',$deskripsi);
					// $data['deskripsi'] = $deskripsi[0].".";
					
					if(strlen($deskripsi) > 950 ){
						$data['isi'] = substr($deskripsi, 0, 900)."...";
					}else{
						$data['isi'] = $deskripsi;
					}
					
				}else{
					$data['isi'] = $data['isi'];
				}

				#cek img 
				$data['images'] = $this->catch_that_image($value->isi);
				if($data['fitur_img'] != ""){
					$IMG = TRUE;
					$thumbnail = '<div class="profile-video"><img src="'.$data['fitur_img'].'" width="100%"></div>';
				}else{
					if($data['images'] != ""){
						
						$IMG = TRUE;
						$thumbnail = '<div class="profile-video"><img src="'.$data['images'].'" width="100%"></div>';
					}else{
						$thumbnail = "";
						$IMG = FALSE;
					}
				}
				if ($IMG == FALSE) {
					# code...
					$style = 'style="float:left; width:100%"';
				}else{
					$style ="";
				}
			}

			echo '
	     	<h3>'.$label.'</h3>
			'.$thumbnail.'
			<div class="profile-desc" '.$style.'>
				<h3>'.$data['judul'].'</h3>
				<p>'.$data['isi'].'</p>
				<a href="'.$data['link_asli'].'"><button class="button">Read More <i class="fa fa-chevron-right"></i></button></a> 
			</div>';
		}else{
			redirect('NotFound');
		}
     	

        
     }
     function layout_position_2(){
     	$arrayName = array('posisi' => '2', );
        $data = $this->db->get_where('tb_setting_layout',$arrayName)->row();
        $label = strtoupper($data->label);
        #cek POST
       	$id_post = $data->id_post;
       	$where = array('id_post' => $id_post);
		$data = $this->db->get_where('tb_post',$where)->num_rows();
		if($data > 0){
			$data = $this->modelwebsite->SelectData('tb_post',$where)->result();
			foreach ($data as $key => $value) {
				# code...
				$kode 	= $value->id_post;
				$data['judul'] = strtoupper($value->judul);
				$data['isi'] = $value->isi;
				$data['diterbitkan'] = $this->date($value->diterbitkan);
				$data['last_update'] = $value->last_update;
				$data['jumlah_baca'] = $value->jumlah_baca;
				$data['id_user'] = $this->cek_user($value->id_user);
				$data['komen'] = $value->komen;
				$data['label'] = $value->label;
				$data['jam'] = $value->jam;
				$data['lokasi'] = $value->lokasi;
				$data['parent'] = $value->parent;
				$data['fitur_img'] = $value->fitur_img;
				$data['alt_img'] = $value->alt_img;
				$data['deskripsi'] = $value->deskripsi;
				$data['link_asli'] = $value->link_asli;
				if($data['alt_img']==""){
					$data['alt_img'] = $data['judul'];
				}else{
					$data['alt_img']= $data['alt_img'];
				}
				if($data['isi'] != ""){
					$deskripsi = htmlentities(strip_tags($data['isi']));
					// $deskripsi = explode('.',$deskripsi);
					// $data['deskripsi'] = $deskripsi[0].".";
					
					if(strlen($deskripsi) > 300 ){
						$data['isi'] = substr($deskripsi, 0, 300)."...";
					}else{
						$data['isi'] = $deskripsi;
					}
					
				}else{
					$data['isi'] = $data['isi'];
				}

				#cek img 
				$data['images'] = $this->catch_that_image($value->isi);
				$IMG = TRUE;
				if($data['fitur_img'] != ""){
					$thumbnail = '<div class="client-thumb"><img src="'.$data['fitur_img'].'"></div>';
				}else{
					if($data['images'] != ""){
						$thumbnail = '<div class="client-thumb"><img src="'.$data['images'].'"></div>';
					}else{
						$thumbnail = "";
						$IMG = FALSE;
					}
				}
				if($IMG == FALSE){
					$style = 'style="width:380px;margin-left:0px"';
				}else{
					$style ="";
				}


			}
			echo '
		 	<h3>'.$label.'</h3>
			<div class="client">
				'.$thumbnail.'
				<div class="client-title" '.$style.'>
					<h2>'.$data['judul'].'</h2>
					<a href="'.$data['link_asli'].'"><span class="button small" style="float:left">VIEW DETAIL</span></a>
				</div>
				<div class="client-description">
					'.$data['isi'].'<a href="'.$data['link_asli'].'">Read More <i class="fa fa-plus"></i></a>
				</div>
			</div>	';

			
		}else{
			redirect('NotFound');
		}
     	
     }
     function layout_position_3(){
     	$arrayName = array('posisi' => '3', );
        $data = $this->db->get_where('tb_setting_layout',$arrayName)->row();
        $label = strtoupper($data->label);
        #cek POST
       	$id_post = $data->id_post;
       	$where = array('id_post' => $id_post);
		$data = $this->db->get_where('tb_post',$where)->num_rows();
		if($data > 0){
			$data = $this->modelwebsite->SelectData('tb_post',$where)->result();
			foreach ($data as $key => $value) {
				# code...
				$kode 	= $value->id_post;
				$data['judul'] = $value->judul;
				$data['isi'] = $value->isi;
				$data['diterbitkan'] = $this->date($value->diterbitkan);
				$data['last_update'] = $value->last_update;
				$data['jumlah_baca'] = $value->jumlah_baca;
				$data['id_user'] = $this->cek_user($value->id_user);
				$data['komen'] = $value->komen;
				$data['label'] = $value->label;
				$data['jam'] = $value->jam;
				$data['lokasi'] = $value->lokasi;
				$data['parent'] = $value->parent;
				$data['fitur_img'] = $value->fitur_img;
				$data['alt_img'] = $value->alt_img;
				$data['deskripsi'] = $value->deskripsi;
				$data['link_asli'] = $value->link_asli;
				if($data['alt_img']==""){
					$data['alt_img'] = $data['judul'];
				}else{
					$data['alt_img']= $data['alt_img'];
				}
				if($data['isi'] != ""){
					$deskripsi = htmlentities(strip_tags($data['isi']));
					// $deskripsi = explode('.',$deskripsi);
					// $data['deskripsi'] = $deskripsi[0].".";
					
					if(strlen($deskripsi) > 550 ){
						$data['isi'] = substr($deskripsi, 0, 200)."...";
					}else{
						$data['isi'] = $deskripsi;
					}
					
				}else{
					$data['isi'] = $data['isi'];
				}

				#cek img 
				$data['images'] = $this->catch_that_image($value->isi);
				if($data['fitur_img'] != ""){
					$data['fitur_img'] = '<img src="'.$data['fitur_img'].'"/>';
				}else{
					if($data['images'] != ""){
						$data['fitur_img'] = '<img src="'.$data['images'].'"/>';
					}else{
						$data['fitur_img'] = "";
						$IMG = FALSE;
					}
				}

				
			}

			echo '
	     	<h3>'.$label.'</h3>
			<div class="services-text">
				'.$data['fitur_img'].'
				<p>'.$data['isi'].'<a href="'.$data['link_asli'].'">Read More <i class="fa fa-plus"></i></a></p>
			</div>';
		}else{
			redirect('NotFound');
		}
     	
	}
	function layout_news(){
		#cek POST
       
       	$where = array('status' => '1');
		$data = $this->modelwebsite->selectNewsUpdate('tb_post',$where)->num_rows();
		if($data > 0){
			$value = $this->modelwebsite->selectNewsUpdate('tb_post',$where)->row();
			
			# code...
			$kode 	= $value->id_post;
			$judul = $value->judul;
			$isi = $value->isi;
			$diterbitkan = $this->date($value->diterbitkan);
			$last_update = $value->last_update;
			$jumlah_baca = $value->jumlah_baca;
			$id_user = $this->cek_user($value->id_user);
			$komen = $value->komen;
			$label = $value->label;
			$jam = $value->jam;
			$lokasi = $value->lokasi;
			$parent = $value->parent;
			$fitur_img = $value->fitur_img;
			$alt_img = $value->alt_img;
			$deskripsi = $value->deskripsi;
			$link_asli = $value->link_asli;
			if($alt_img==""){
				$alt_img = $judul;
			}else{
				$alt_img= $alt_img;
			}
			if($isi != ""){
				$isi = htmlentities(strip_tags($isi));
				// $deskripsi = explode('.',$deskripsi);
				// $data['deskripsi'] = $deskripsi[0].".";
				
				if(strlen($isi) > 450 ){
					$isi = substr($isi, 0, 450)."...";
				}else{
					$isi = $isi;
				}
				
			}else{
				$isi = $isi;
			}

			#cek img 
			$images = $this->catch_that_image($value->isi);
			if($fitur_img != ""){
				$fitur_img = '<img src="'.$fitur_img.'"/>';
			}else{
				if($images != ""){
					$fitur_img = '<img src="'.$images.'"/>';
				}else{
					$fitur_img = "";
					$IMG = FALSE;
				}
			}

				
			

			echo '
	     	<div class="news-wp">
				<div class="news-wp-text">
					'.$fitur_img.'
					<h2>'.$judul.'</h2>
					<div class="post-det-home">
						<i class="fa fa-calendar-o"></i> '.$diterbitkan.'
					</div>
					<p>'.$isi.'<a href="'.$link_asli.'">Read More <i class="fa fa-plus"></i></a></p>
				</div>
			</div>';
		}else{
			redirect('NotFound');
		}
	}
	# SLIDER
	function slider(){
		$data = $this->db->get('tb_slider')->result();
		foreach ($data as $key => $value) {
			# code...
			$img_slider = base_url().$this->cek_link_file($value->id_file);
			$link 	= $value->link;
			$label 	= $value->label;
			$deskripsi = $value->deskripsi;

			echo '
			<li>
            	<div class="fleximage">
					<img src="'.$img_slider.'">
            	</div>
            	
                <div class="flexidet">
                <div class="overlay-det"></div>
                	<div class="flexdes">
                      	<h3>'.$label.'</h3>
                        '.$deskripsi.' <a href="'.$link.'">Readmore</a>
                   	</div>
                   	
                </div>
                
                   	
            </li>';
			

		}
	}
	function cek_link_file($kode = ""){
		$arrayName = array('id_file' => $kode, );
		$data = $this->db->get_where('files_img', $arrayName)->row();
		return $data->link;
	}
	# END SLIDER
	function link_luar(){
		$perent = array('perent' => 0, );
		$dataperent 	= $this->db->order_by('no_urut', 'DESC')->get_where('tb_link_luar', $perent)->result();
		
		foreach ($dataperent as $key => $value) {
			# code...
			$labelperent 	= $value->nama;
			$link 	= $value->link;
			$kode 	= $value->id_link;
			echo '<div class="foot-link">
					<h3>'.$labelperent.'</h3>
					<ul>';
					$this->cek_child_link_luar($kode);
					
			echo '
					</ul>
				</div>';
		}
		
	}
	function cek_child_link_luar($kode=""){
		$perent = array('perent'=>$kode);
		$dataperent 	= $this->db->order_by('no_urut', 'DESC')->get_where('tb_link_luar', $perent)->result();
		foreach ($dataperent as $key => $value) {
			# code...
			$labelperent 	= $value->nama;
			$link 	= $value->link;
			$kode 	= $value->id_link;
			echo '
				<li><a target="blank" href="'.$link.'">'.$labelperent.'</a></li>
			';
		}
		
	}

	# SMKN 1 JENP0
	function galery_utama(){
		$array = array('galery_parent' => 0, );
		$data = $this->db->order_by('id_galery', 'desc')->limit('8','0')->get_where('tb_galery', $array)->result();
        foreach ($data as $key => $value) {
      		# code...
    		$images = $value->galery_image;
    		$title 	= $value->galery_title;
    		$kode 	= $value->id_galery;
    		echo '
    		<a href="'.base_url("gallery/".$kode).'" title="'.$title.'">
    		<div class="gallery-image">
				<img src="'.$images.'">

			</div>
			</a>';
      	}  	
	}
	function head_line(){
		$isi = null;
		$data = $this->db->order_by('id_corner', 'DESC')->get_where('tb_corner')->row();
  		$judul 	= $this->cek_post($data->id_post, "judul");
  		$link 	= $this->cek_post($data->id_post, "link");
  		$img = $this->cek_post($data->id_post, "img");
  		$video = $this->cek_post($data->id_post, "video");
  		$isi 	= $this->cek_post($data->id_post, "isi");
  		#cek bahasa
		$eng_post 	= $this->cek_post($data->id_post, "eng_post");
		$eng_title = $this->cek_post($data->id_post, "eng_title");
		if(isset($_COOKIE['lang'])){
			$lang = $_COOKIE['lang'];
			if($lang=="id"){
				# lang indonesia
				$isi 	= $isi;
				$judul = $judul;
			}else if($lang=="eng"){
				# lang eng
				if($eng_title == "" || $eng_post == ""){
					$isi 	= $isi;
					$judul = $judul;
				}else{
					$isi 	= $eng_post;
					$judul = $eng_title;
				}
				
			}else{
				$isi 	= $isi;
				$judul = $judul;
			}
		}else{
			# default lang indonesia
			$isi 	= $isi;
			$judul = $judul;
		}
		#
  		$isi = htmlentities(strip_tags($isi));
		if(strlen($isi) > 325 ){
			$isi = substr($isi, 0, 325)."...";
		}else{
			$isi = $isi;
		}

  		$thumbVideos = false;
  		$thumbImages = false;
  		if($video != ""){
  			$video 	= $video;
  			$thumbVideos = true;
  		}else{
  			$video 	= '';
  			$thumbVideos = false;

  		}
  		if($img != ""){
  			$img 	= '<img src="'.$img.'">';
  			$thumbImages = true;
  		}else{
  			$img 	= '';
  			$thumbImages = false;
  		}
  		if($thumbVideos ==  true && $thumbImages ==  true){
  			$thumbnail = '<iframe width="400" height="300" src="https:'.$video.'" frameborder="0" allowfullscreen></iframe>';
  		}else if($thumbVideos ==  true && $thumbImages ==  false){
			$thumbnail = '<iframe width="400" height="300" src="https:'.$video.'" frameborder="0" allowfullscreen></iframe>';
  		}else if($thumbVideos ==  false && $thumbImages ==  true){
  			$thumbnail = $img;
  		}else if($thumbVideos ==  false && $thumbImages ==  false){
  			$thumbnail = "";
  		}
  		$judul 	= strtoupper($judul);
  		
  		echo '
  		<h2>Welcome to SMKN 1 Jenangan Ponorogo</h2>
		<div class="profile-video">
			'.$thumbnail.'
		</div>
		<div class="profile-desc">
			<h3>'.$judul.'</h3>
			<p>'.$isi.'</p>
			<a href="'.$link.'"><button class="button">Read More <i class="fa fa-chevron-right"></i></button> </a>
		</div>';
	}
	function popular_post(){
		$wherePopuler 	= array('status' => '1');
  		$beritaPopuler 	= $this->modelwebsite->post_order_limit('post_view','jumlah_baca','3','0',$wherePopuler)->result();
		foreach ($beritaPopuler as $key => $value) {
			# code...
			$diterbitkan 	= $this->RelativeTime($value->diterbitkan);
			$judul 	= strtoupper($value->judul);
			$deskripsi 	= $value->isi;
			$bulan = strtoupper($this->tgl($value->diterbitkan));
			$tgl = substr($value->diterbitkan,8,2);
			$tahun = substr($value->diterbitkan,0,4);
			$link 	= $value->link_asli;
			$kategori 	= $value->kategori;
			$images = $this->cek_post($value->id_post, "img");
			$fitur_img = $value->fitur_img;
			#cek lang
			$eng_post 	= $value->eng_post;
			$eng_title = $value->eng_title;
			
			if(isset($_COOKIE['lang'])){
				$lang = $_COOKIE['lang'];
				if($lang=="id"){
					# lang indonesia
					$deskripsi 	= $value->isi;
					$judul = $value->judul;
				}else if($lang=="eng"){
					# lang eng
					if($eng_title == "" || $eng_post == ""){
						$deskripsi 	= $value->isi;
						$judul 		= strtoupper($value->judul);
					}else{
						$deskripsi 	= $value->eng_post;
						$judul		= strtoupper($value->eng_title);
					}
				}else{
					$deskripsi	= $value->isi;
					$judul = $value->judul;
				}
			}else{
				# default lang indonesia
				$deskripsi	= $value->isi;
				$judul = $value->judul;
			}
			#===================================================#
			if($fitur_img != ""){
				$fitur_img = '<img src="'.$fitur_img.'"/>';
			}else{
				if($images != ""){
					$fitur_img = '<img src="'.$images.'"/>';
				}else{
					$fitur_img = "";
					$IMG = FALSE;
				}
			}
			if($deskripsi != ""){
				$deskripsi = htmlentities(strip_tags($deskripsi));
				// $deskripsi = explode('.',$deskripsi);
				// $data['deskripsi'] = $deskripsi[0].".";
				
				if(strlen($deskripsi) > 80 ){
					$deskripsi = substr($deskripsi, 0, 80)."...";
				}else{
					$deskripsi = $deskripsi;
				}
				
			}else{
				$deskripsi = $deskripsi;
			}

		# cek kategori
			if($kategori !=""){
              	$explode = explode("-", $kategori);
              	$r=0;
              	foreach ($explode as $key => $value) {
	                # code...
	                $kategori_name[$r] = $this->cek_kategori($value);
			$kategori = $this->cek_kategori($value);
	                //echo '<a href="'.base_url('tag/'.$labelname).'">'.$labelname.'</a>';
	                $r++;
              	}
			
		
              //$labelOK = implode(",", $labelname);
	          }else{
	            $labelOK = "";
			$kategori = "Uncategories";
	          }
  		
			echo '<div class="popular-post">
					<div class="popular-img">
						'.$fitur_img.'
					</div>
					<div class="popular-desc">
						<b><a href="'.$link.'">'.$judul.'</a></b>
						<div class="popular-date">
							<i class="fa fa-calendar-o"></i> '.$tgl.' '.$bulan.' '.$tahun.'
						</div>
					</div>
				</div>';
		}
	}
	function product($url=""){
   		//if($url==""){ redirect('NotFound');}
   		if($url == ""){
   			$url = base_url('product');
			$where2 = array('status' => '1');
			$config['base_url'] = base_url('product/');
	        $config['total_rows'] = $this->db->count_all('tb_produk',$where2);
	        $config['per_page'] = "20";
	        $config["uri_segment"] = 2;
	        $choice = $config["total_rows"] / $config["per_page"];
	        
	        $config['full_tag_open'] = '<div class="pagination">';
	        $config['full_tag_close'] = '</div>';
	        $config['first_link'] = '';
	        $config['last_link'] = '';
	        $config['first_tag_open'] = '';
	        $config['first_tag_close'] = '';
	        $config['prev_link'] = '<input type="button" class="button-view" value="PREV PAGE" style="float:left; margin-top:20px;">';
	        $config['prev_tag_open'] = '';
	        $config['prev_tag_close'] = '';
	        $config['next_link'] = '<input type="button" class="button-view" value="NEXT PAGE" style="float:right; margin-top:20px;">';
	        $config['next_tag_open'] = '';
	        $config['next_tag_close'] = '';
	        $config['last_tag_open'] = '';
	        $config['last_tag_close'] = '';
	        $config['cur_tag_open'] = '';
	        $config['cur_tag_close'] = '';
	        $config['num_tag_open'] = '<div class="hiden">';
	        $config['num_tag_close'] = '</div>';
	        // post($table,$kode,$limit, $start, $where){
	        
	        $this->pagination->initialize($config);
			$data['page'] 	= ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
			$data['announcement'] = $this->modelwebsite->post_order_limit('tb_produk','id_produk',$config["per_page"],$data['page'],$where2)->result();
			$data['paging'] = $this->pagination->create_links();
		

			$this->load->view('front/product',$data);
   		}else if($url>0) {
   			$url = base_url('product');
			$where2 = array('status' => '1');
			$config['base_url'] = base_url('product/');
	        $config['total_rows'] = $this->db->count_all('tb_produk',$where2);
	        $config['per_page'] = "20";
	        $config["uri_segment"] = 2;
	        $choice = $config["total_rows"] / $config["per_page"];
	        //$config["num_links"] = floor($choice);

	        $config['full_tag_open'] = '<div class="pagination">';
	        $config['full_tag_close'] = '</div>';
	        $config['first_link'] = '';
	        $config['last_link'] = '';
	        $config['first_tag_open'] = '';
	        $config['first_tag_close'] = '';
	        $config['prev_link'] = '<input type="button" class="button-view" value="PREV PAGE" style="float:left; margin-top:20px;">';
	        $config['prev_tag_open'] = '';
	        $config['prev_tag_close'] = '';
	        $config['next_link'] = '<input type="button" class="button-view" value="NEXT PAGE" style="float:right; margin-top:20px;">';
	        $config['next_tag_open'] = '';
	        $config['next_tag_close'] = '';
	        $config['last_tag_open'] = '';
	        $config['last_tag_close'] = '';
	        $config['cur_tag_open'] = '';
	        $config['cur_tag_close'] = '';
	        $config['num_tag_open'] = '<div class="hiden">';
	        $config['num_tag_close'] = '</div>';
	        // post($table,$kode,$limit, $start, $where){
	        
	        $this->pagination->initialize($config);
			$data['page'] 	= ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
			$data['announcement'] = $this->modelwebsite->post_order_limit('tb_produk','id_produk',$config["per_page"],$data['page'],$where2)->result();
			$data['paging'] = $this->pagination->create_links();
		

			$this->load->view('front/product',$data);
		}else{
			if(trim($url) != ""){
				$url = base_url('product/'.$url);
				$where = array('link_asli' => $url,'status' => '1',);
				$pengumuman = $this->db->get_where('tb_produk',$where)->num_rows();
				
				if($pengumuman > 0){
					$value = $this->modelwebsite->SelectData('tb_produk',$where)->row();
					$bulan = strtoupper($this->tgl($value->diterbitkan));
					$tgl = substr($value->diterbitkan,8,2);
					$tahun = substr($value->diterbitkan,0,4);
					
					# cek margin
					if(strlen(trim($value->judul)) < 30){
							$margin_top 	= "style = 'margin-top:20px'";
					}else{ $margin_top 	= "";}

					if($value->alt_img ==""){
						$alt_img = $value->judul;
					}else{
						$alt_img = $value->alt_img;
					}
					if($value->deskripsi == ""){
						$deskripsi = htmlentities(strip_tags($value->keterangan));
						$deskripsi = explode('.',$deskripsi);
						$deskripsi = $deskripsi[0].".";
					}else{
						$deskripsi = $value->deskrips;
					}

					#cek img 
					$img = $this->catch_that_image($value->keterangan);
					if($value->fitur_img== ""){
						$fitur_img = $img;
					}else{
						$fitur_img = $value->fitur_img;
					}
					# code...
					$data = array(
						'kode' => $value->id_produk,
						'judul' => $value->judul,
						'kategori' => $value->kategori,
						'pembuat' => $value->pembuat,
						'keterangan' => $value->keterangan,
						'diterbitkan' => $this->RelativeTime($value->diterbitkan),
						'jumlah_baca' => $value->jumlah_baca + 1,
						'id_user' => $this->cek_user($value->id_user),
						'status' => $value->status,
						'fitur_img' => $value->fitur_img,
						'alt_img' => $value->alt_img,
						'deskripsi' => $value->deskripsi ,
						'link_asli' => $value->link_asli,
						);
						#update view
						$arrayNameUpdate = array('jumlah_baca' => $value->jumlah_baca + 1, );
						$this->db->where('id_produk', $value->id_produk);
						$this->db->update('tb_produk', $arrayNameUpdate); 

						#cek child of pages
						$this->load->view('front/product-single',$data);
	   			}else{
	   				redirect('NotFound');
	   			}
   			}else{
   				redirect('NotFound');
   			}
		}
	}

	function products_sidebar(){
		$where 	= array('status'=>'1');
		$data 	= $this->db->order_by('id_produk', 'desc')->limit('3', '0')->get_where('tb_produk', $where)->result();
		foreach ($data as $key => $value) {
			# code...
			$diterbitkan 	= $this->RelativeTime($value->diterbitkan);
			$judul 	= strtoupper($value->judul);
			$bulan 	= strtoupper($this->tgl($value->diterbitkan));
			$tgl 	= substr($value->diterbitkan,8,2);
			$link 	= $value->link_asli;
			$deskripsi 	= $value->keterangan;
			if($deskripsi != ""){
				$deskripsi = htmlentities(strip_tags($deskripsi));
				// $deskripsi = explode('.',$deskripsi);
				// $data['deskripsi'] = $deskripsi[0].".";
				
				if(strlen($deskripsi) > 80 ){
					$deskripsi = substr($deskripsi, 0, 80)."...";
				}else{
					$deskripsi = $deskripsi;
				}
				
			}else{
				$deskripsi = $deskripsi;
			}
			echo '<div class="agenda">
						<div class="agenda-date">
							<div class="mounth">'.$bulan.'</div>
							<div class="date">'.$tgl.'</div>
						</div>
						<div class="agenda-desc">
							<a href="'.$link.'"><h3>'.$judul.'</h3></a>
							'.$deskripsi.'<br>
							
						</div>
					</div>';
			
		}
	}
	function gallery($id=""){
		if($id ==""){
			$this->load->view('front/gallery'); 
		}else{
			$array2 = array('galery_parent' => $id, );
	      	$array3 = array('id_galery'=> $id, );
	      	$row = $this->db->get_where('tb_galery', $array3)->num_rows();
	      	if($row < 1){
	      		redirect('gallery');
	      	}
	      	$data['parent'] = $this->db->get_where('tb_galery', $array3)->row();
	      	$data['galery'] = $this->db->order_by('id_galery', 'desc')->get_where('tb_galery', $array2)->result();
          	
	      	$this->load->view('front/gallery-preview', $data);
		}
			
	}
	function page_gallery($url=""){
		
		$array = array('galery_parent' => 0, );
		$data = $this->db->order_by('id_galery', 'desc')->limit('9','0')->get_where('tb_galery', $array)->result();
        foreach ($data as $key => $value) {
      		# code...
    		$images = "<img src='".$value->galery_image."'>";
    		$title 	= $value->galery_title;
    		$kode 	= $value->id_galery;
    		$bulan = $this->tgl($value->galery_date_create);
			$tgl = substr($value->galery_date_create,8,2);
			$tahun = substr($value->galery_date_create,0,4);
    		echo '
    		<div class="post photo">
				<div class="open"><i class="fa fa-search-plus"></i></div>
				'.$images.'
				<div class="post-desc">
					<h2><a href="'.base_url('gallery/'.$kode).'">'.$title.'</a></h2>
					<div class="post-det">
						<i class="fa fa-calendar-o"></i> '.$bulan.' '.$tgl.', '.$tahun.'
					</div>
				</div>
			</div>';
      	} 
      	
	      
		
	}
	function identitas($key){
		$where = array('setting' => $key, );
		$data = $this->db->get_where('tb_setting', $where)->row();
		return $data->ind;
	}
	function lang(){
		$value = "";
		if(isset($_COOKIE['lang'])){
			$lang = $_COOKIE['lang'];
			if($lang=="id"){
				# lang indonesia
				$value = "eng";
			}else{
				# lang eng
				$value = "id";
			}
		}else{
			# default lang indonesia
			$value = "id";
		}
		$datacookie= array(
	      	'name'   => 'lang',
			'value'  => $value,
	       	'expire' => time()+7*24*3600,
	  	);
		$this->input->set_cookie($datacookie);
		$this->input->post('refer_from');
		
		$newURL = $_SERVER['HTTP_REFERER'];
		if(isset($newURL)){
			header('Location: '.$newURL);
		}else{
			$newURL =  'javascript:window.history.go(-1);';
			header('Location: '.$newURL);
		}
		
		

	}
	function flag(){
		if(isset($_COOKIE['lang'])){
			$lang = $_COOKIE['lang'];
			if($lang=="id"){
				# lang indonesia
				$value = "asset/images/inggris.jpg";
			}else{
				# lang eng
				$value = "asset/images/indo.png";
			}
		}else{
			# default lang indonesia
			$value = "asset/images/indo.png";
		}
		echo '
		<a href="'.base_url("lang").'">
		<li>
			<img style="margin-top:8px" width="25px" height="20px" src="'.base_url($value).'">
		</li></a>';
	}

	function send_email(){
		$ci = get_instance();
		$ci->load->library('email');
		$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.gmail.com";
		$config['smtp_port'] = "465";
		$config['smtp_user'] = "odyinggo@gmail.com"; 
		$config['smtp_pass'] = "SHterate1922";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";

		$ci->email->initialize($config);

		$ci->email->from('odyinggo@gmail.com', 'PJS');
		$list = array('pringgo.juni@gmail.com');
		$ci->email->to($list);
		$this->email->reply_to('odyinggo@gmail.com', 'Explendid Videos');
		$ci->email->subject('This is an email test');
		$ci->email->message('It is working. Great!');
		$ci->email->send();
		
	}
}
