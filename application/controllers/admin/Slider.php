<?php
class Slider extends CI_Controller {
	public function __construct()    {
	    parent::__construct();
      $this->load->model('modellogin'); 
      $this->load->model('modelslider'); 

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
          $kode_secure= 'x0019'; //  kode halaman user
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
    function index(){
          $t = $this->cekLogin(); // get kode login
          $this->cek_hak_akses_user();
          $data['user'] = $this->modellogin->select_user($t)->result();
          //$data['layout'] =  $this->db->select('tb_post')->result();
          $this->load->view('admin/include/header', $data);
          $this->load->view('admin/include/header-profil');
          $this->load->view('admin/include/navbar');
          $this->load->view('admin/slider/main');
          $this->load->view('admin/include/sidecontent');
          
          $this->load->view('admin/include/footer');
    }
    function add(){
      $t = $this->cekLogin(); // get kode login
      $this->cek_hak_akses_user();
      $data['user'] = $this->modellogin->select_user($t)->result();
      $this->load->view('admin/include/header', $data);
      $this->load->view('admin/include/header-profil');
      $this->load->view('admin/include/navbar');
      $this->load->view('admin/slider/add');
      $this->load->view('admin/include/sidecontent');
      
      $this->load->view('admin/include/footer');
    }
    function edit($kode = ""){
      $t = $this->cekLogin(); // get kode login
      $this->cek_hak_akses_user();
      $data['user'] = $this->modellogin->select_user($t)->result();
      # slider
      $arrayName = array('id_slider' => $kode, );
      $data2 =  $this->db->get_where('tb_slider',$arrayName);
      if($data2->num_rows() < 1){
        redirect(base_url('administrator/slider'));
      }
      $value = $data2->row();
      $data['id_slider'] = $value->id_slider;
      $data['label'] = $value->label;
      $data['deskripsi'] = $value->deskripsi;
      $data['link'] = $value->link;
      $data['id_file'] = $value->id_file;
      $data['img']     = base_url().$this->cek_file($value->id_file);
      $this->load->view('admin/include/header', $data);
      $this->load->view('admin/include/header-profil');
      $this->load->view('admin/include/navbar');
      $this->load->view('admin/slider/edit', $data);
      $this->load->view('admin/include/sidecontent');
      
      $this->load->view('admin/include/footer');
    }
    function data(){
      $data = $this->db->get('tb_slider')->result();
      foreach ($data as $key => $value) {
        # code...
        $id        = $value->id_slider;
        $img       = base_url().$this->cek_file($value->id_file);
        $label     = $value->label;
        $link      = $value->link;
        $deskripsi = $value->deskripsi;
        echo '<tr>';
        echo "<td><label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id."'><i></i></label></td>
              <td>
                <div class='col-sm-3'><img src='".$img."' style='width:100%'></div>
                <div class='col-sm-9'>
                  <b><i class='fa fa-bookmark'></i> $label</b><br>
                  Link. <i>$link</i> <br>
                  Desc. $deskripsi <br>
                  <small class='clear pull-left'><a href='".base_url('administrator/slider/edit/'.$id)."'><span class='text-primary'>edit</a></span></a></small> |
                  <a href='".base_url('administrator/slider/delete/'.$id)."'><span class='text-danger'>delete</span></a></small>
                </div>
              </td>
              ";
        echo '</tr>';
       }
    }
    function cek_file($kode = ""){
      $arrayName = array('id_file' => $kode, );
      $data =  $this->db->get_where('tb_file',$arrayName)->row();
      return $data->link;
    }
    function save(){
      $kode = $this->cekLogin();
      $this->cek_hak_akses_user();
      if(@$_POST['formmenu'] != null){
        $label = $_POST['label'];
        $kode_file = $_POST['kode_file'];
        $desk   = $_POST['desc'];
        $link   = $_POST['link'];

        $data = array(
          'label' => $label,
          'id_file' => $kode_file,
          'link' => $link,
          'deskripsi' => $desk,
         );
        $this->db->insert('tb_slider', $data);
      }
	 $this->insert_aktifitas($kode, "Menambah Slider ");
      redirect('administrator/slider');
    }
    function update(){
      $kode = $this->cekLogin();
      $this->cek_hak_akses_user();
      if(@$_POST['formmenu'] != null){
        $label = $_POST['label'];
        $kode_file = $_POST['kode_file'];
        $desk   = $_POST['desc'];
        $link   = $_POST['link'];
        $id_slider = $_POST['id_slider'];
        $data = array(
          'label' => $label,
          'id_file' => $kode_file,
          'link' => $link,
          'deskripsi' => $desk,
         );
        $this->db->where('id_slider', $id_slider);
        $this->db->update('tb_slider', $data);
      }
	$this->insert_aktifitas($kode, "Mengubah Slider ");

      redirect('administrator/slider');
    }
    function delete($kode = ""){
	$this->cekLogin();

      $this->cek_hak_akses_user();
      if($kode > 0){
        $this->db->where('id_slider', $kode);
        $this->db->delete('tb_slider'); 
	$this->insert_aktifitas($kode, "Menghapus Slider ");
      }
	

      redirect('administrator/slider');
    }
     function max_file(){
      $max  = $this->modelslider->max_file()->result();
      foreach ($max as $key => $data) {
        $id = $data->last_id;
        return $id;
      }
    }
    function openPOPUP($key){
       if($key == "file"){
        #open file
         $this->load->view('admin/popupFiles');
       }else{
        #open Link
         $this->load->view('admin/popupLink');
       }
      // $data['news'] = $this->modelslider->view_file('post_view')->result(); 
     
    }
    function pages(){
      // echo $kode;
      $where = array('parent' => '0', );
      $no =1;
      $parent = $this->db->get_where('pages_view',$where)->result(); 
      foreach ($parent as $key => $value) {
          # code...
          $kode = $value->id_post;
          $name = $value->judul;
          $link = $value->link_asli;
          echo "<tr class='baris baris-halaman-$kode' onclick=\"selectRow('".$link."','".$kode."','post')\">
                <td><b>".$no."</b></td>
                <td><b>".$name."</b></td>
                <td><b>".$link."</b></td>
              </tr>";
          
          $this->child($kode);
        $no++;
        }
           
    }
    function child($kode){
      $data = array('parent' => $kode, );
           $cek_rows_child = $this->modelslider->select_pages_child($data);
           if($cek_rows_child != 0){
               $child      =  $this->modelslider->show_pages_child($kode)->result();
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
    function news(){
      $arrayName = array('status' => '1', );
      $no = 1;
      $news = $this->db->get_where('post_view',$arrayName)->result();
      foreach ($news as $key => $value) {
        # code...
        $kode = $value->id_post;
        $name = $value->judul;
        $link = $value->link_asli;
        echo "<tr class='baris baris-halaman-$kode' onclick=\"selectRow('".$link."','".$kode."','post')\">
              <td>".$no."</td>
              <td>".$name."</td>
              <td>".$link."</td>
            </tr>";
      $no++;
      }
    }
    function files(){
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
                           $file      =  $this->db->select('*')->from('tb_file')->get()->result();
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