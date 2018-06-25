<script type="text/javascript">
      Dropzone.options.mydz = {
            dictDefaultMessage: "<div style='margin:auto'><div class='btn btn-default btn-large'><i class='fa fa-upload'></i> Drop file here to upload</i></div></div>",
            acceptedFiles: null,
            maxFilesize: 2,
              success: function(file, response){
                  loadfile('grid');
                  $("#mydz").html("<div class='btn btn-default btn-large'><i class='fa fa-upload'></i> Drop file here to upload</i></div><i>");
                  $("#FormuploadFile").hide(0);
                  window.location= homepage+"administrator/files";
            }
        };


</script>
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                     <h3 class="m-b-none">Files</h3>
                  </div>
                  
                    <!-- notif -->
                    <?php
                      if(@$_GET['ntf']=='false'){?>
                        <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ban-circle"></i><strong>Oh snap!</strong> <a href="#" class="alert-link">Pilih sebuah file</a> dan coba lagi.
                      </div>
                      <?php }?>
                    <!-- End -->
                    <section class="panel panel-default">
                      <div class="row wrapper">
                        <!--<form class="form-inline" id="save" method="post" action="<?php echo base_url();?>administrator/files/save" enctype='multipart/form-data'> -->
                          <input type = "file" name="file" id="file" style="display:none"/>
                          <div class="col-sm-5 m-b-xs">
                          <input type="hidden" id="key_load_file" value="table">
                            <button class="btn btn-sm btn-default" onclick="loadfile('table',document.getElementById('pilih').value,document.getElementById('order').value)"><i class="fa fa-th-list text-primary"></i></button>
                            <button class="btn btn-sm btn-default " onclick="loadfile('grid',document.getElementById('pilih').value,document.getElementById('order').value)"><i class="fa fa-th-large"></i></button>
                            <select class="input-sm form-control input-s-sm inline v-middle" onchange="loadfile(document.getElementById('key_load_file').value,this.value,document.getElementById('order').value)" id='pilih' name='pilih'>
                              <option value="All">All</option>
                              <option value="Images">Images</option>
                              <option value="Audios">Audios</option>
                              <option value="Videos">Videos</option>
                              <option value="Attachment">Attachment</option>
                            </select>
                            <button class="btn btn-sm btn-default" id='apply'  > Apply </button>
                            <button class="btn btn-sm btn-primary" id='apply' onclick="showF('FormuploadFile')"  > Add New </button>
                            
                          </div>
                          <div class="col-sm-4 m-b-xs">
                            <div class="form-group">
                              
                              <div style="clear:both;"></div>
                              <label>Select order</label>
                              <div class="btn-group m-r">
                                <select class="input-sm form-control input-s-sm inline v-middle" onchange="loadfile(document.getElementById('key_load_file').value,document.getElementById('pilih').value,this.value)" id='order' name='order'>
                                  <option selected value="nama_up">Name (up)</option>
                                  <option  value="nama_down">Name (down)</option>
                                  <option value="ukuran_up">Size (up)</option>
                                  <option value="ukuran_down">Size (down)</option>
                                  <option value="type_up">Type (up)</option>
                                  <option value="type_down">Type (down)</option>
                                  <option value="tanggal_up">Date (up)</option>
                                  <option value="tanggal_down">Date (down)</option>
                                </select>
                              </div>
                            </div>  
                          </div>
                          <div class="col-sm-3">
                            <?=$paging;?>
                          </div>
                      </div>
                    </section>

                    <div class="m-b-md" id="FormuploadFile">
                      <form action="<?php echo base_url() ?>administrator/news/upload" id="mydz" class="dropzone">
                        <div class="fallback">
                        <input name="file" type="file" multiple />
                        </div>
                      </form>
                    </div>
                    

                    <section class="panel panel-default">
                      <div id="hasil">
                        <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                         <thead>
                          <tr>
                            <th valign="center"><i class ="fa fa-list"></i></th>
                            <th class="th-sortable" data-toggle="class">Name</th>
                            <th>Size</th>
                            <th>Date Upload</th>
                           <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $dir = base_url()."asset/images/tipe/";
                            foreach ($files as  $datafile) {
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
                              <TR id='data-$id'>
                                <td><img src='".$dir.$icon."' class='img'/></td>
                                <td>$nama</td>
                                <td>$ukuran $iqui</td>
                                <td>$tgl</td>
                                
                                <td align=center><a href='#' onclick = hapus_file('$id')><i class='fa fa-times text-danger text'></i></a></td>
                              </TR>
                              ";
                            }
                          ?>
                        </tbody>
                      </table>
                      </div>
                      
                    </div>
                    <!-- end table responsive-->
                    <!--FOOTER -->
                    <footer class="panel-footer">
                      <div class="row">
                        <div class="col-sm-4 hidden-xs">
                        </div>
                        <div class="col-sm-4 text-center">
                          <small class="text-muted inline m-t-sm m-b-sm">
                         
                          <?php
                          /*
                          if($this->uri->segment(3)==''){
                              echo "1";
                            }else{
                              echo $this->uri->segment(3);
                            }
                            ;
                            */?></small>
                        </div>
                        <div class="col-sm-4 text-right text-center-xs">                
                          
                          
                              
                          
                        </div>
                      </div>
                    </footer>
                    </section>



                </section>
              </section>
            </section>
<style type="text/css">
.img-type-prev{
	height: 33px;
	width: 34px;
  padding:10px; 
 }
.img{
  border: none;
  height: 33px;
  width: 34px;
}
.nx{
  padding: 0;
}
</style>

  <script type="text/javascript">

  
  function showF(divId) {
    $("#"+divId).toggle();
  }
function load(key,input){

  $("#"+input).change(function() {
    var dir = 'http://localhost/consultan/asset/images/tipe/';
      $(".notifkuning").css("display","none");     
      var preview = document.querySelector('#'+key);
      var file    = document.querySelector('#'+input).files[0];
      var reader  = new FileReader();
      // Kondisi cek valid format
      var imagefile = file.type;
      var nama    = file.name;
      var size    = file.size;
      var match= ["image/jpeg","image/png","image/jpg","image/PNG"]; 
      var pdf  = ["application/pdf"];
      var xcel = ["application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"];
      var word = ["application/vnd.openxmlformats-officedocument.wordprocessingml.document"];
      var pp   = ["application/vnd.openxmlformats-officedocument.presentationml.presentation"];
      var text = "text/plain";
      var mp3  = "audio/mp3";
      var exe  = "application/x-msdownload";
      //alert(size);
      //cek ukuran poto 
      // var width = img.clientWidth;
      // var height = img.clientHeight;
      $("#addon").addClass("nx");
      $('#img').css("display","block");
      $("#inputan").val(nama);
      $("#mata").hide();
      if(((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])|| (imagefile==match[3])))
      {
        $('#'+key).attr('src',dir+'img.png');
      }else if(imagefile==pdf[0]){
        $('#'+key).attr('src',dir+'pdf.png');
      }else if(imagefile==xcel[0]){
        $('#'+key).attr('src',dir+'excel.png');
      }else if(imagefile==word[0]){
        $('#'+key).attr('src',dir+'word.png');
      }else if(imagefile==pp[0]){
        $('#'+key).attr('src',dir+'pp.png');
      }else if(imagefile==text){
        $('#'+key).attr('src',dir+'notepad.png');
      }else if(imagefile==mp3){
        $('#'+key).attr('src',dir+'musik.png');
      }else if(imagefile==exe){
        $('#'+key).attr('src',dir+'app.png');
      }else{
        $('#'+key).attr('src',dir+'help.png');
      }


      
  }); 
}

// Dropzone.options.myAwesomeDropzone = {
//   paramName: "filemain", // The name that will be used to transfer the file
//   acceptedFiles:".jpeg, .jpg, .png, .gif",
//   maxFilesize: 2, // MB

//   accept: function(file, done) {
//     alert(file);
    
//   }
// };
  </script>

