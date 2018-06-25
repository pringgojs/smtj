<?php
class Menu extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
	    $this->load->model('modelmenu'); 
     	$this->load->model('modellogin'); 
     	$this->load->library('pagination'); 
     	$this->load->library('form_validation');
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
        $kode_secure= 'x0018'; //  kode halaman user
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
		//$data['menu'] =  $this->modelmenu->view()->result();
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/menu/main',$data);
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	function add(){
		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();
		$data['user'] = $this->modellogin->select_user($t)->result(); 
		$data['parent'] = $this->modelmenu->pages_parent()->result(); 
		$data['news'] = $this->modelmenu->view_post()->result(); 
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil', $data);
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/menu/add');
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
	}
	function delete(){
		foreach(@$_POST['kode_cek'] as $n => $kode)
		{	
			#cek parent, hapus child dari perent
			$this->db->where('parent', $kode);
			$this->db->or_where('id_menu', $kode); 
    		$this->db->delete('tb_menu'); 
		}
		$kode = $this->cekLogin();
		 $this->insert_aktifitas($kode, "Menghapus menu ");
		redirect('administrator/menu');
	}
	function datamenu($posisi){
		if($posisi==1){
			$label = "Top Primary";
		}else if($posisi==2){
			$label = "Middle Position";
		}else{
			$label = "Bottom Position";
		}
		echo "<tr ><td colspan = '5'><b>".$label."</b></td></tr>";
		$data = array('posisi' => $posisi,'parent'=>'0',);
		$menu 	 =  $this->modelmenu->getWhere($data)->result();
		foreach ($menu as $key => $value) {
			# code...
			$id 	= $value->id_menu;
			$deskripsi = $value->deskripsi;
			$nama 	= $value->nama;
			$eng 	= $value->name_eng;
			$posisi = $value->posisi;
			$id_post= $value->id_post;
			$type   = $value->type;
			$urut 	= $value->urut;
			$link 	= $value->link;
			$parent = $value->parent; 
			

			#cek apakah link kustom ?
			if($type == "post"){
				# jika link dari post, cek id post
				if($id_post == "0"){
				#id post kosong, maka data tidak ditampilkan
					$link 	= "#";
				}else{
					$link 	= $this->cek_post($id_post);
				}
			}else if($type == "file"){
				# jika link dari post, cek id post
				if($id_post == "0"){
				#id post kosong, maka data tidak ditampilkan
					$link 	= "#";
				}else{
					$link 	= $this->cek_file($id_post);
				}
			}else{
				# dari external link
				$link = $link;
			}
			
			
			
			echo "<tr>
				<td><label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id."'><i></i></label></td>
				<td><b>".$nama." - ".$eng."</b></td>
				<td>".$deskripsi."</td>
				<td>".$link."</td>
				<td>".$urut."</td>
				<td>
					<a href='".base_url("administrator/menu/edit/$id")."' class='active'>
						<i class='fa fa-pencil text-success text-active'></i>
					</a>
                </td>
			</tr>";
			//if($parent==0){
				#jika menu adalah parent, cek child dari parent
				$arrayWhere = array('parent' => $id, );
				$dataChild 	=  $this->modelmenu->getWhere($arrayWhere)->result();
				foreach ($dataChild as $key => $isi) {
					# code...
					$id2 	= $isi->id_menu;
					$deskripsi2 = $isi->deskripsi;
					$nama2 	 = $isi->nama;
					$eng2 	= $isi->name_eng;
					$posisi2 = $isi->posisi;
					$id_post2= $isi->id_post;
					$type2   = $isi->type;
					$urut2 	 = $isi->urut;
					$link2 	 = $isi->link;
					$parent2 = $isi->parent; 
					

					#cek apakah link kustom ?
					if($type2 == "1"){
						# jika link dari post, cek id post
						if($id_post2 == "0"){
						#id post kosong, maka data tidak ditampilkan
						$link2 	= "#";
						}else{
							$link2 	= $this->cek_post($id_post2);
						}
					}else{
						# dari external link
						$link2 = $link2;
					}
					echo "<tr>
							<td><label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id2."'><i></i></label></td>
							<td><i class='fa  fa-chevron-right'></i> ".$nama2." - ".$eng2."</td>
							<td>".$deskripsi2."</td>
							<td>".$link2."</td>
							<td>".$urut2."</td>
							<td>
								<a href='".base_url("administrator/menu/edit/$id2")."' class='active' >
									<i class='fa fa-pencil text-success text-active'></i>
								</a>
			                </td>
						</tr>";
				}
			//}
		}
	}
	function posisi(){
		if(@$_GET['pos']!= '1'){
			$ps = @$_GET['pos'];
		}else{
			$ps = '1';
		}
	
		$menu 	 =  $this->modelmenu->get_posisi($ps)->result();
		echo "
		<div class='btn-group m-r'>
			<button data-toggle='dropdown' class='btn btn-sm btn-default dropdown-toggle'>
	            <span class='dropdown-label' data-placeholder='Please select'>Select Child</span> 
	            <span class='caret'></span>
          	</button>
          <ul class='dropdown-menu dropdown-select'>
          <li><a href='#'><input type='radio' id='cabang' name='cabang' value='0'>(Parent)</a></li>";
        foreach ($menu as $key => $data) {
        	$id = $data->id_menu;
        	$nama = $data->nama;
        	echo"<li><a href='#'><input type='radio' id='cabang' name='cabang' value='$id'>$nama</a></li>";
    	}
    	echo"</ul></div>";

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
	function save(){
		$t = $this->cekLogin();
		$this->cek_hak_akses_user();
		if(isset($_POST['formmenu'])){
			$nama 	= ltrim(@$_POST['nama']);
			$desk 	= @$_POST['desc'];
			$posisi = @$_POST['posisi'];
			$id_post= ltrim(@$_POST['id_post']);
			$urut 	=  ltrim(@$_POST['nomer_urut']);
			$key 	= @$_POST['key'];
			$link 	= ltrim(@$_POST['link']);
			$eng 	= ltrim(@$_POST['eng']);
			# cek cabang
			if(@$_POST['cabang']!=null){
				$cabang = @$_POST['cabang'];
			}else{
				$cabang = "0";
			}
			#cek URL
			if($id_post !="0"){
				
				$id_post = ltrim($_POST['id_post']);
				if($key == "post"){
					$link 	= $this->cek_post($id_post);
				}else if($key == "file"){
					$link 	= $this->cek_file($id_post);
				}else{
					$link 	= $link;
				}
				
			}
			if ($link == "") {
				# code...
				$link = "#";
			}
			if($nama != ""){
				$data = array(
					'deskripsi' => $desk,
					'nama' => $nama,
					'name_eng' => $eng,
					'posisi' => $posisi,
					'id_post' => $id_post,
					'parent'=>$cabang,
					'type' =>$key,
					'urut'=>$urut,
					'link' => $link,
					 );
				$insert = $this->modelmenu->insert($data);
				$user = $this->cekLogin();
		 		$this->insert_aktifitas($user, "Menambah menu ");

				redirect(base_url('administrator/menu'));
			}
		}else{
			redirect('administrator/menu');
		}
	}
	function call_child($kode){
           $data = array('parent' => $kode, );
           $cek_rows_child = $this->modelmenu->select_pages_child($data);
           // /$cekusername = $this->modellogin->cek_user($data);
           if($cek_rows_child != 0){
               $child      =  $this->modelmenu->show_pages_child($kode)->result();
               foreach ($child as $key => $value) {
               	$kode = $value->id_post;
                $name = $value->judul;
                  echo "<div style='margin-left:20px; margin-bottom:5px' />
                  			<label  onclick=\"addtomenulis('".$kode."','".$name."')\" class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='$kode'><i></i> ".$name."</label>
              	   		</div>";
                             
               }


          }
   	}
   	function call_child_table($kode){
           $data = array('parent' => $kode, );
           $cek_rows_child = $this->modelmenu->select_pages_child($data);
           // /$cekusername = $this->modellogin->cek_user($data);
           
           if($cek_rows_child != 0){
               $child      =  $this->modelmenu->show_pages_child($kode)->result();
               foreach ($child as $key => $value) {
               	  $kode = $value->id_post;
	              $name = $value->judul;
	              $link = $value->link_asli;
	              echo "<tr class='baris baris-halaman-$kode' onclick=\"selectRow('".$link."','".$kode."', 'post')\">
	            		<td></td>
	            		<td><i class='fa fa-angle-right'></i> ".$name."</td>
	            		<td>".$link."</td>
	            	</tr>";
                            
               }


          }
   	}
   	function view_tabel_files(){
   		echo '
   					<div class="table-responsive">
                        <table class="table b-t b-light">
                         <thead>
                          <tr>
                            <th valign="center"><i class ="fa fa-list"></i></th>
                            <th class="th-sortable" data-toggle="class">Name</th>
                            <th>Size</th>
                            <th>Link</th>
                            
                          </tr>
                        </thead>
                        <tbody> ';
                           $file      =  $this->modelmenu->view_files()->result();
                          $dir = base_url()."asset/images/tipe/";
                            foreach ($file as  $datafile) {
                              # code...
                              $iqui   = "kb";
                              $id     = $datafile->id_file;
                              $nama   = $datafile->nama;
                              $ukuran = $datafile->ukuran;
                              $tgl    = $datafile->tanggal;
                              $link   = base_url().$datafile->link;
                              $type   = $datafile->type;

                              $size   = ceil($ukuran / 1024); //ubah ke kb
                              if($size > 1024){//jika file lebih dari sekian ubah ke mb
                                  $ro   = $size / 1024;
                                  if($ro > 1024){
                                    $ukuran = round(($ro / 1024),2);
                                    $iqui ="gb";
                                  }else{
                                    $ukuran = round( $ro, 2);
                                    $iqui ="mb";
                                  }
                                
                              }else{
                                  $ukuran = $size;
                                  $iqui ="kb";
                              }


                              if(($type == "png")||($type == "jpeg")||($type == "jpg")||($type == "gif")||($type == "bmp")){
                                $icon = "img.png";
                              }elseif(($type == "docx")||($type == "doc")){
                                $icon = "word.png";
                              }elseif(($type == "xlsx")||($type == "xls")){
                                $icon = "excel.png";
                              }elseif(($type == "pptx")||($type == "ppt")){
                                $icon = "pp.png";
                              }elseif(($type == "txt")){
                                $icon = "notepad.png";
                              }elseif(($type == "exe")){
                                $icon = "app.png";
                              }elseif(($type == "pdf")){
                                $icon = "pdf.png";
                              }elseif(($type == "mp3")){
                                $icon = "musik.png";
                              }else{
                                $icon = "help.png";
                              }

                              echo "
                              <TR class='baris baris-halaman-$id' onclick=\"selectRow('".$link."','".$id."','file')\">
                                <td><img src='".$dir.$icon."' width='30' height='30'/></td>
                                <td>$nama</td>
                                <td>$ukuran $iqui</td>
                                
                                <td>$link</td>
                              </TR>
                              ";
                            }
                          echo "
                        </tbody>
                      </table>
                    </div>";
                    #end table responsive
   	}
   	function edit($kode){
   		$arrayWhere = array('id_menu' => $kode, );
		$isi 		=  $this->modelmenu->getWhere($arrayWhere)->num_rows();
		if($isi == 0){
			redirect('NotFound');
		}
		
		$isi 		=  $this->modelmenu->getWhere($arrayWhere)->row();
		$data['kode'] 	 	= $isi->id_menu;
		$data['deskripsi']  = $isi->deskripsi;
		$data['nama'] 	 	= $isi->nama;
		$data['posisi'] 	= $isi->posisi;
		$data['id_post']	= $isi->id_post;
		$id_post			= $isi->id_post;
		$data['link'] 	 	= $isi->link;
		$data['induk'] 		= $isi->parent; 
		$data['urut'] 		= $isi->urut; 
		$data['key'] 		= $isi->type;
		$data['name_eng'] 		= $isi->name_eng;
		$t = $this->cekLogin(); // get kode login
		$this->cek_hak_akses_user();
		$data['user'] = $this->modellogin->select_user($t)->result(); 
		$data['parent'] = $this->modelmenu->pages_parent()->result(); 
		$data['news'] = $this->modelmenu->view_post()->result(); 
		$this->load->view('admin/include/header', $data);
		$this->load->view('admin/include/header-profil');
		$this->load->view('admin/include/navbar');
		$this->load->view('admin/menu/edit');
		$this->load->view('admin/include/sidecontent');
		
		$this->load->view('admin/include/footer');
		

   	}
   	function pilih_posisi($posisi){
   		echo '<ul class="dropdown-menu dropdown-select">';
   		//$arrayName = array('Top' => '1','Middle' => '2', 'Bottom'=>'3', );
   		$pss 	= array('1','2','3');
   		$label 	= array('Top','Middle','Bottom');
   		for ($i=0; $i < count($pss); $i++) { 
   			# code...
   			if ($pss[$i] == $posisi ) {
   				# code...
   				echo '<li class="active"><a onclick="ambil_cabang('.$pss[$i].')">
   				<input type="radio" checked value="'.$pss[$i].'" name="posisi" id="posisi">'.$label[$i].'</a></li>';
   			}else{
   				echo '<li><a onclick="ambil_cabang('.$pss[$i].')">
   				<input type="radio" value="'.$pss[$i].'" name="posisi" id="posisi">'.$label[$i].'</a></li>';
   			}
   		}
	    echo '</ul>'; 
   	}
   	function child_menu_of_parent($posisi, $parent){
   		$menu 	 =  $this->modelmenu->get_posisi($posisi)->result();
		echo "
		<div class='btn-group m-r'>
			<button data-toggle='dropdown' class='btn btn-sm btn-default dropdown-toggle'>
	            <span class='dropdown-label' data-placeholder='Please select'>Select Child</span> 
	            <span class='caret'></span>
          	</button>
          <ul class='dropdown-menu dropdown-select'>";
           if($parent == 0){
        		echo "<li class='active'><a href='#'><input checked type='radio' id='cabang' name='cabang' value='0'>(Parent)</a></li>";
        	}else{
        		echo "<li ><a href='#'><input  type='radio' id='cabang' name='cabang' value='0'>(Parent)</a></li>";
        	}
        foreach ($menu as $key => $data) {
        	$id = $data->id_menu;
        	$nama = $data->nama;
        	if($id == $parent){
        		echo "<li class='active'><a href='#'><input type='radio' checked id='cabang' name='cabang' value='$id'>$nama</a></li>";
        	}else{
        		echo "<li ><a href='#'><input  type='radio' id='cabang' name='cabang' value='$id'>$nama</a></li>";
        	}
        	
    	}
    	echo"</ul></div>";
   	}
   	function update(){
   		$t = $this->cekLogin();
		
		if(isset($_POST['formmenu'])){
			$nama 	= ltrim($_POST['nama']);
			$desk 	= $_POST['desc'];
			$posisi = $_POST['posisi'];
			$link 	= ltrim($_POST['link']);
			$urut 	= ltrim($_POST['nomer_urut']);
			$kode 	= $_POST['id'];
			$key 	= @$_POST['key'];
			$id_post = ltrim($_POST['id_post']);
			$eng 	= ltrim($_POST['eng']);
			if(isset($_POST['cabang'])){
				$cabang = $_POST['cabang'];
			}else{
				$cabang = "0";
			}
			#cek URL
			if($id_post !="0"){
				
				
				if($key == "post"){
					$link 	= $this->cek_post($id_post);
				}else if($key == "file"){
					$link 	= $this->cek_file($id_post);
				}else{
					$link 	= $link;
				}
				
			}
			if ($link == "") {
				# code...
				$link = "#";
			}

			if($nama != ""){
				#update posisi CHILD dari PARENT Menu yg di EDIT
				$dataChild = array('posisi'=>$posisi);
				$this->db->where('parent', $kode);
         		$this->db->update('tb_menu', $dataChild); 
         		# update menu yg sedang di edit
				$data = array(
					'deskripsi' => $desk,
					'nama' => $nama,
					'posisi' => $posisi,
					'link' => $link,
					'parent'=>$cabang,
					'urut'=>$urut,
					'type' => $key,
					'id_post'=>$id_post,
					'name_eng'=>$eng,
					 );
				$this->db->where('id_menu', $kode);
         		$this->db->update('tb_menu', $data); 
				
				redirect(base_url('administrator/menu'));
			}
		}else{
			redirect('administrator/menu');
		}
   	}

   	function cek_post($kode=""){

   		$arrayName 	= array('id_post' => $kode, );
   		$data   	= $this->db->get_where('tb_post',$arrayName);
   		if($data->num_rows() > 0){
   		     $data 	= $data->row();
   			 $link  		= $data->link_asli;
   			}else{
   				$link 		= base_url();
   			}
       
        return $link;
   	}
   	function cek_file($kode=""){

   		$arrayName 	= array('id_file' => $kode, );
   		$data   	= $this->db->get_where('tb_file',$arrayName)->row();
        $link  		= $data->link;
        return base_url($link);
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