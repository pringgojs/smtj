<?php
class Product extends CI_Controller {
     public function __construct()    {
         parent::__construct();
         $this->load->model('modelnews'); 
          $this->load->model('modellogin'); 
          $this->load->library('pagination'); 
          // $this->load->library('Googlemaps');
          $this->method_call =& get_instance(); // untuk memanggil method dari view
          global $kode;
          
      
     }
     #fungsi cek hak akses
      function cek_hak_akses_user(){
          $kode_secure= 'x0013'; //  kode halaman user
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
            $query = $_GET['q'];
            $where = "judul LIKE '%".$query."%'";
          }else{
            $where = "0";
          }
          //$data['kategori'] = $this->ModelCategory->view()->result(); 
          //pagination settings
        $config['base_url'] = base_url('administrator/produk/');
        $config['total_rows'] = $this->db->count_all('tb_produk');
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
          $data['page']  = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
          $data['post'] = $this->modelnews->data_limit("tb_produk",$where,'id_produk',$config["per_page"],$data['page'])->result();
          $data['paging'] = $this->pagination->create_links();
          
          // end pagging
          $data['jumlah'] = $config['total_rows'];
          $this->load->view('admin/include/header', $data);
          $this->load->view('admin/include/header-profil', $data);
          $this->load->view('admin/include/navbar');
          $this->load->view('admin/produk/main',$data);
          $this->load->view('admin/include/sidecontent');
          
          $this->load->view('admin/include/footer');
     }
     function add(){
          $t = $this->cekLogin(); // get kode login
          $this->cek_hak_akses_user();
          $data['user'] = $this->modellogin->select_user($t)->result(); 
          //$data['kategori'] = $this->ModelCategory->view()->result(); 
          $this->load->view('admin/include/header', $data);
          $this->load->view('admin/include/header-profil', $data);
          $this->load->view('admin/include/navbar');
          $this->load->view('admin/produk/add', $data);
          $this->load->view('admin/include/sidecontent');
          $this->load->view('admin/include/footer');
     }
     function edit($kode = ""){
          $t = $this->cekLogin(); // get kode login
          $this->cek_hak_akses_user();
         // $data['user'] = $this->modellogin->select_user($t)->result(); 
          if(trim($kode) == ""){ redirect(base_url('administrator/product'));}
          $where = array('id_produk' => $kode);
          $query = $this->db->get_where('tb_produk', $where);
          if($query->num_rows() < 0){redirect(base_url('administrator/product'));}
          
          $hasil = $query->row();
          $data = array(
               'user' =>$this->modellogin->select_user($t)->result(),
               'kode' => $kode,
               'kategori' => $hasil->kategori,
               'pembuat' => $hasil->pembuat,
               'keterangan' => $hasil->keterangan,
               'diterbitkan' => $hasil->diterbitkan,
               'link'    => $hasil->link,
               'nama_link' => $hasil->nama_link,
               'link_asli' => $hasil->link_asli,
                'judul' =>$hasil->judul,
               'urlfiturImages' => $hasil->fitur_img,
               'alt_img' => $hasil->alt_img,
               'deskripsi'=>$hasil->deskripsi,
          );
          //$data['post'] = $this->modelnews->post_id($kode)->result(); 
          $this->load->view('admin/include/header',$data);
          $this->load->view('admin/include/header-profil');
          $this->load->view('admin/include/navbar');
          $this->load->view('admin/produk/edit');
          $this->load->view('admin/include/sidecontent');
          $this->load->view('admin/include/footer');
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
     function viewKategori(){
          $kategori =  $this->modelnews->view_kategori()->result();
          foreach ($kategori as $key => $data) {
               $id            = $data->id_kategori;
             $datakategori   = $data->nama;
             echo "<label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id."'><i></i> ".$datakategori."</label>";
          }  
     }
     function save(){
          if(!isset($_POST['simpanberita'])){
               //echo"<script>alert(0)</script>";
               redirect('administrator/product');
          }
          $kode     = $this->cekLogin();
          $this->cek_hak_akses_user();
          $id       = @$_POST['kode'];
          $judul    = $_POST['judul'];
          $kategori = $_POST['bidang'];
          $konten   = $_POST['berita'];
          $pembuat  = $_POST['creator'];

          $linkImgFe= @$_POST['urlfiturImages'];
          $link     = $_POST['link'];
          $alt      = @$_POST['alt'];
          $deskripsi= @$_POST['deskripsi'];
          $parentLink     = base_url()."product/";
          // INSERT INTO `tb_produk`(`id_produk`, `judul`, `kategori`, `pembuat`,
          //  `keterangan`, `diterbitkan`, `id_user`, `status`, `jumlah_baca`,
          //   `fitur_img`, `alt_img`, `deskripsi`)
          $data = array(
               'judul' => $judul,
               'kategori' => $kategori,
               'pembuat' => $pembuat,
               'keterangan' => $konten,
               'diterbitkan' => date('Y-m-d H:i:s'),
               'link'    => $parentLink,
               'nama_link' => $link,
               'link_asli' => $parentLink.$link,
               'id_user' => $kode,
               'status' => '1', // published
               'fitur_img' => $linkImgFe,
               'alt_img' => $alt,
               'deskripsi'=>$deskripsi,
                );
          $this->db->where('id_produk', $id);
          $this->db->update('tb_produk', $data); 
          redirect('administrator/product');

     }
     function savetodraf(){
          $kode     = $this->cekLogin();
          $this->cek_hak_akses_user();
          $id       = @$_GET['kode'];
          $judul    = $_GET['judul'];
          $kategori = $_GET['bidang'];
          $konten   = $_GET['konten'];
          $pembuat  = $_GET['creator'];

          $linkImgFe= @$_GET['urlfiturImages'];
          $link     = $_GET['link'];
          $alt      = @$_GET['alt'];
          $deskripsi= @$_GET['deskripsi'];
          $parentLink     = base_url()."product/";
          $autosave = $_GET['autosave']; #cek dari mana save drave/ edit apa autosave
          
          
          # CEK AUTO SAVE
          if($autosave == "edit"){
            $data3         = array('id_produk' => $id, );
            $cekStatus     = $this->db->get_where('tb_produk',$data3)->row();  // lihat data user berdasar username dan pasas
            $status        = $cekStatus->status; 
          }else{
            $status        = "2";
          }
          

          $data = array(
               'judul' => $judul,
               'kategori' => $kategori,
               'pembuat' => $pembuat,
               'keterangan' => $konten,
               'diterbitkan' => date('Y-m-d H:i:s'),
               'link'    => $parentLink,
               'nama_link' => $link,
               'link_asli' => $parentLink.$link,
               'id_user' => $kode,
               'status' => '1', // published
               'fitur_img' => $linkImgFe,
               'alt_img' => $alt,
               'deskripsi'=>$deskripsi,
                );
          $this->db->where('id_produk', $id);
          $this->db->update('tb_produk', $data); 
          //$this->modelnews->insert($data);
          return $link;

     }
     function author($kode){
          $user     = $this->modellogin->select_user($kode)->result();
          foreach ($user as $key => $data) {
               return $nama = $data->nama;
          }
     }
     function max_file(){
          $max      = $this->modelnews->max_file()->result();
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
          $label    = $this->modelnews->view_label()->result();
          foreach ($label as $key => $data) {
                $id      = $data->id_label;
                $nama    = $data->nama;
                echo "<a href='#' style='color:blue' onclick=\"addlabel('".$nama."','".$id."')\">$nama, </a>";
                echo " ";//echo ",";
          }
     }
     function data_label_post($id){
          $data2 = array(
               'id_label'=>$id,
          );
          $ceklabel      = $this->db->get_where('tb_label',$data2)->row();  // lihat data user berdasar username dan pasas
          return $kodelabel   = @$ceklabel->nama; 

     }
     function action(){
          
          if(isset($_POST['action'])){
               redirect('administrator/product');
          }

          $pilih    = $_POST['pilih'];
          $data     = array();
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
          }elseif ($pilih == "exp") {
               # code...
          }else{
               redirect('administrator/product');
          }
          
          
     }
     # UBAH STATUS DRAF/PUBLISH/TRASH
     function update($data){
          foreach($_POST['kode_cek'] as $n => $kode)
          {    
               $this->db->where('id_produk', $kode); 
               $this->db->update('tb_produk', $data);  
          }
          redirect('administrator/product');
     }

     function upload(){
          $upload_dir = 'upload/';
          if (!empty($_FILES)) 
          { 
               $last_id  = $this->max_file();
               $tempFile      = $_FILES['file']['tmp_name'];//this is temporary server location
               $file          = $_FILES['file']['name'];
               $size          = $_FILES['file']['size'];
               $file_part     = pathinfo($file);
               $extension     = $file_part['extension'];
               $id       = $last_id + 1;
               $url           = $upload_dir.$id."-". $_FILES['file']['name'];
               
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

                // using DIRECTORY_SEPARATOR constant is a good practice, it makes your code portable.
                //$uploadPath = dirname( __FILE__ ) . DIRECTORY_SEPARATOR . $upload_dir . DIRECTORY_SEPARATOR;
                
                // Adding timestamp with image's name so that files with same name can be uploaded easily.
                
                
               
          }else{
               echo "0";
          }

     }
     function files(){
          $files    = $this->modelnews->view_file_img()->result();
          foreach ($files as $key => $data) {
               $id  = $data->id_file;
               $link     = $data->link;
               echo "<img id='tumb-img' class='img-".$id."' onclick=\"addimg('".base_url().$link."', '".$id."')\" src='".base_url().$link."' style='width: 132px; margin-right:5px; height: 120px; top: 5px; left: 5px;' />";
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

          $nama     = $this->uri->segment(4);
          $nama     = str_replace("-", " ", $nama);
          $data     = array('nama' => $nama, );
          $cek      = $this->modelnews->kategori_nama($data);
          if($cek != 1){ // apakah kategori sudah ada apa belum
               $this->db->insert('tb_kategori', $data);
          }
          $this->viewKategori(); // return list kategori
     }
     function autosave(){
          $judul = trim(@$_GET['judul']);
          if($judul!=""){
               if(@$_GET['kode']==""){
                    #jika kode masih kosong, generad kode
                    $data = array('status' => '2' );
                    $this->db->insert('tb_produk', $data);
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
          //$explode     = explode(",", $kode);

          $kode = "-0-".$kode."-";
          $kategori      =  $this->modelnews->view_kategori()->result();
          foreach ($kategori as $key => $data) {
               $id            = $data->id_kategori;
          $datakategori   = $data->nama;

               if(strripos($kode, "-".$id."-") == true){
               echo "<label class='checkbox m-n i-checks'><input checked type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id."'><i></i> ".$datakategori."</label>";
             }else{
               echo "<label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='".$id."'><i></i> ".$datakategori."</label>";
             }
             
        }
         
     }

     #===============================#
     #             MAIN PAGES        #
     #===============================#
     public function delete(){
      
      $kode   = $this->uri->segment(4);
      $this->db->where('id_produk', $kode); 
        $this->db->delete('tb_produk'); 
        redirect('administrator/product');
    }
     # untuk menampilkan chile dari parent $kode
     function call_child($kode){
           $data = array('parent' => $kode, );
           $cek_rows_child = $this->modelnews->select_pages_child($data);
           // /$cekusername = $this->modellogin->cek_user($data);
           if($cek_rows_child != 0){
               $child      =  $this->modelnews->show_pages_child($kode)->result();
               foreach ($child as $key => $value) {
                    # code...
                    $kode   = $value->id_post;
                      $judul  = $value->judul;
                      $isi    = $value->isi;
                      $date   = $value->diterbitkan;
                      $last   = $value->last_update;
                      $view   = $value->jumlah_baca;
                      $link   = $value->link;
                      $user   = $value->id_user;
                      $status = $value->status;
                      $komen  = $value->komen; // cek status komen
                      $label  = $value->label;

                      $us     = $this->method_call->author($user);
                      /* status :
                          1. published
                          2. draf
                          3. trash
                      */
                      if($status == "2"){
                          $status = 'Draf'; // publis
                      }else{
                        $status = '';
                      }
                      /* CEK KOMEN */
                      if($komen == "1"){
                           $komen = "fa-check text-success";
                      }else{
                        $komen = "fa-times text-warning";
                      }

                      echo "
                    <tr>
                      <td ><label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='$kode'><i></i></label> </td>
                      <td >
                           <span style='font-size:14px'>|— $judul<span>
                           <br>
                           <div id='atribut-page-".$kode."' style='margin-left:26px'>
                           <small class='clear pull-left'><a href='".base_url('administrator/pages/edit/'.$kode)."'><span class='text-primary'>edit</a></span> | <a href='".base_url('administrator/pages/delete/'.$kode)."'><span class='text-danger'>delete</span></a></small>
                             <small class='text-warning clear pull-right'>$status</small>
                           </div>
                      </td>
                      <td width='90' align='center'>$us</td>
                      <td width='20' align='center'> <i class='fa ".$komen."'></i></td>
                      <td width='20' align='center'> $view <i class='fa fa-eye text'></i></td>
                      <td width='150' align='center'>$date</td>
                    </tr>";
               }
          }else{

          }
          
          
     }
     function pages_parent_view($key, $parent){
          # $key == edit || add
          # $kode == kode post
      //echo $key.$kode;
          if($key == 'add'){
            echo '<li class="active" >
            <a href =""><input type="radio" checked value="0" name="parent" id="parent">(No Parent)</a></li>';
          }else{
            if($parent == 0){
            echo "<li class='active'><a href='#'><input checked type='radio' id='parent' name='parent' value='0'>(Parent)</a></li>";
            }else{
              echo "<li ><a href='#'><input  type='radio' id='parent' name='parent' value='0'>(Parent)</a></li>";
            }
          
          }
          
          $pages    = $this->modelnews->pages_parent()->result();
          foreach ($pages as $key => $data) {
               $id  = $data->id_post;
               $title = $data->judul;
               
                if($id == $parent){
                  # jika dipanggil dari halaman edit
                  echo'
                 <li class="active"><a href =""><input type="radio" checked value="'.$id.'" name="parent" id="parent">'.$title.'</a></li>';
                }else{
                  echo'
                 <li ><a href =""><input type="radio" value="'.$id.'" name="parent" id="parent">'.$title.'</a></li>';
                }
             
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