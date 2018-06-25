
<style type="text/css">
  #map_canvas{
    height: 200px
  }
  .loader{
    display: none;
    border: 1px solid #BCBEBF;
    position:absolute;
    margin:20px 40% 20px 40%;
    padding: 10px 10px 10px 40px;
    background: url("<?=base_url('asset/images/712.gif');?>") no-repeat #E5E5E5 5px 10px;
  }
  #map_canvas{
    display: none;
  }
  #fiturImages img{
    max-width: 100%;
    height: auto;
    width: auto;
  }
  .hide_link{
    display: none;
  }
  .show_link{
    display: block;
  }

</style>
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                <div class="loader">Saving data ...</div>
                  <div class="m-b-md">
                   <h3 class="m-b-none">Product</h3>
                  </div>
                  <form method="post" name="simpanberita" id="simpanberita" action="<?=base_url('administrator/product/save');?>">
                      <section class="hbox stretch">
                                  <!-- .aside -->
                          <aside class="aside-lg bg-white b-r" id="aside" >
                            <div class="wrapper">
                              
                               
                               <div style="clear:both;margin-bottom:20px"></div>
                               <div class="main-agenda"></div>
                               <div class="form-agenda">
                                  
                                    <div class="form-group">
                                      <label><a  onclick="notif('fiturImages')">+ Add Fitur Image</a></label>
                                        <div id="fiturImages">
                                          <?php if($urlfiturImages !=""){
                                              echo "<img src='".$urlfiturImages."'/>";
                                              echo '<a href="#" onclick="removeImg()">Remove Fitur Images</a>';
                                          }?>
                                          
                                          </div>   
                                        <input type="hidden" value="<?=$urlfiturImages;?>" name="urlfiturImages" id="urlfiturImages">                 

                                    </div>
                                    <div class="form-group">
                                      <label>Category</label>
                                      <div class="col-sm-10">            
                                         <div class="btn-group m-r">
                                            <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                                              <span class="dropdown-label" data-placeholder="Please select">Pilih bidang produk</span> 
                                              <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-select">
                                            <?php
                                            if($kategori == "Rekayasa Perangkat Lunak"){$rpl = 'checked'; $crpl = 'class="active"';}else{ $crpl=""; $rpl = '';}
                                            if($kategori == "Konstruksi Kayu"){$kky = 'checked';$ckky = 'class="active"';}else{ $ckky=""; $kky = '';}
                                            if($kategori == "Teknik Las"){$las = 'checked';$clas = 'class="active"';}else{$clas=""; $las = '';}
                                            if($kategori == "Gambar Bangunan"){$gb = 'checked';$cgb = 'class="active"';}else{ $cgb="";$gb = '';}
                                            if($kategori == "Teknik Pemesinan"){$tpm = 'checked';$ctpm = 'class="active"';}else{ $ctpm=""; $tpm = '';}
                                            if($kategori == "Teknik Sepeda Motor"){$tsm = 'checked';$ctsm = 'class="active"';}else{ $ctsm="";$tsm = '';}
                                            if($kategori == "Otomasi Industri"){$oi = 'checked';$coi = 'class="active"';}else{ $coi="";$oi = '';}
                                            if($kategori == "Elektronika Industri"){$ei = 'checked';$cei = 'class="active"';}else{ $cei=""; $ei = '';}
                                            ?>
                                            
                                              <li <?=$crpl;?>><a href='#'><input type='radio' <?=$rpl;?> name='bidang' id='bidang' value='Rekayasa Perangkat Lunak'>Rekayasa Perangkat Lunak</a></li>
                                              <li <?=$ckky;?>><a href='#'><input type='radio' <?=$kky;?> name='bidang' id='bidang' value='Konstruksi Kayu'>Konstruksi Kayu</a></li>
                                              <li <?=$clas;?>><a href='#'><input type='radio' <?=$las;?> name='bidang' id='bidang' value='Teknik Las'>Teknik Las</a></li>
                                              <li <?=$cgb;?>><a href='#'><input type='radio' <?=$gb;?> name='bidang' id='bidang' value='Gambar Bangunan'>Gambar Bangunan</a></li>
                                              <li <?=$ctpm;?>><a href='#'><input type='radio' <?=$tpm;?> name='bidang' id='bidang' value='Teknik Pemesinan'>Teknik Pemesinan</a></li>
                                              <li <?=$ctsm;?>><a href='#'><input type='radio' <?=$tsm;?> name='bidang' id='bidang' value='Teknik Sepeda Motor'>Teknik Sepeda Motor</a></li>
                                              <li <?=$coi;?>><a href='#'><input type='radio' <?=$oi;?> name='bidang' id='bidang' value='Otomasi Industri'>Otomasi Industri</a></li>
                                              <li <?=$cei;?>><a href='#'><input type='radio' <?=$ei;?> name='bidang' id='bidang' value='Elektronika Industri'>Elektronika Industri</a></li>
                                            </ul>
                                         </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label>Creator</label>
                                      <input type="text" name="creator" id="creator" value="<?=$pembuat;?>" class="form-control">
                                    </div>
                                    <div class="m-t-lg">
                                      <input type="submit" name="simpanberita" id="simpanberita" class="btn btn-sm btn-primary" Value="Publish News"/>
                                      <input type="button" onclick = "saveDraf('product')" id="savetoDraf" class="btn btn-sm btn-default" Value="Save to Draf"/>
                                      
                                    </div>
                                 
                                </div>
                              </div>
                          </aside>
                      <!-- form --> 
                    <aside>
                      <section class="panel panel-default">
                        <header class="panel-heading font-bold">Add New Product</header> 
                        <div class="panel-body"> 
                          <div class="form-group">
                          <label class="control-label">Title</label>
                            <input type="text" value="<?=$judul;?>"  name="judul" id="judul" class="form-control">  
                             <input type="hidden" value="<?=$nama_link;?>"  name="link" id="link" class="form-control">  
                            <input type="hidden" value="<?=$kode;?>"  name="kode" id="kode" class="form-control"> 
                            <input type="hidden" value="<?=$nama_link;?>"  name="link_tmp" id="link_tmp" class="form-control"> 
                           <div id="load_link" style="margin:5px 0">
                             <b>Permalink : </b> <?=$link.$nama_link;?> <span class='btn btn-xs btn-bg btn-default' onclick="editLink()">edit</span>
                           </div>
                           <br>
                          </div>
                         <div class="form-group">
                            <textarea id="berita" name="berita" ><?=$keterangan;?></textarea>
                          </div>
                        </div>
                    </section>
                    </aside>
                      <!-- end form -->          
                  </section>
                   </form>
                </section>
              
            
                <script type="text/javascript">
                  Dropzone.options.formFile = {
                        dictDefaultMessage: "<div class='btn btn-default btn-large'><i class='fa fa-upload'></i> Drop images file here to upload</i></div><i>",
                        acceptedFiles: null, //".jpeg, .jpg, .png, .gif"
                        maxFilesize: 2, //MB
                          success: function(file) {
                            if (file.previewElement) {
                              var bulusan = $(".bulusan").val();
                              var numplus = parseInt(bulusan)+1;
                              $(".bulusan").val(numplus);
                              //alert(bulusan);
                              function tambahclass()
                              {
                                file.previewElement.classList.add("dz-success");
                                file.previewElement.classList.add("bulusan"+numplus);
                                file.previewElement.setAttribute('onclick','bulusan(\''+numplus+'-'+file.name+'\',\''+numplus+'\')');
                              }
                              return tambahclass();
                            }
                          },
                    };
                

                  </script>

                   <!--lightbox-->
                <div class='blackout2'></div>
                <div class='blackflash2'>
                    <div class='canvasshow2' style="margin-top:-210px;">
                        <div class="canvasmain2" style="width:1000px; overflow:hidden; margin:0 auto; padding:10px 0px 20px;">
                        <div class="title">Add New File</div>
                        <div class="cols-6">
                          <section class="panel panel-default">
                            <header class="panel-heading text-right bg-light">
                              <ul class="nav nav-tabs pull-left">
                                <li class="active"><a href="#upload" data-toggle="tab"><i class="fa fa-upload text-muted"></i> Upload</a></li>
                                <li class="" onclick="loadFilePopup('Images')"><a href="#files" data-toggle="tab"><i class="fa fa-folder-open text-muted"></i> From your files</a></li>
                                
                              </ul>
                              <span class="hidden-sm">
                                <i onclick="notif(false)" class="i i-cross2"></i>
                              </span>
                            </header>
                            <div class="panel-body" style="height:300px; overflow-y:scroll; color:#000">
                              <div class="tab-content">              
                                <div class="tab-pane fade active in" id="upload">

                                    <form action="<?php echo base_url() ?>administrator/news/upload" id="formFile" class="dropzone">
                                      <div class="fallback">
                                      <input name="file" type="file" multiple />
                                      </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="files">
                                <div class="cols-12"> 
                                    Type 
                                            <select class="input-sm form-control input-s-sm inline v-middle" name="type" onchange="loadFilePopup(this.value)">
                                              <option value="All">All</option>
                                              <option value="Images">Images</option>
                                              <option value="Audios">Audios</option>
                                              <option value="Videos">Videos</option>
                                              <option value="Attachment">Attachment</option>
                                            </select>
                                        </div>
                                        <br>
                                  <div id="hasil-file"></div>
                                </div>
                                
                              </div>
                            </div>

                            <div class="panel-heading b-b">
                            <?php 
                                $id = $this->method_call->max_file();
                            ?>
                              <input type="hidden" class="form-control" id="url_file"/>
                              <input type="hidden" class="form-control" id="nama_file"/>
                              <input type="hidden" class="form-control" id="type_file"/>
                              <input type="hidden" class="form-control" id="url"/>
                              <input type="text" name="key" id="key">
                              <input type="text" class="bulusan" value="<?=$id;?>">
                              <button class="btn btn-primary" onclick="addTinyMCE()">Select File</button>
                              <button class="btn btn-default" onclick="notif(false)" >Cancel</button>
                            </div>
                          </section>

                        </div>
                        
                          <div class="contentshow">
                         
                          </div>
                        </div>
                    </div>
                <!--/.lightbox-->
                </div>
        </section>
        
    <script>
     /* JS FOR ADD PAGES & EDIT PAGES
================================ */

var editCustomLine = false;
function showF(divId) {
    $("#"+divId).toggle();
    $("#txtkategori").focus();
  }
function editLink(){
   editCustomLine = true;
   link = $("#link").val();

   $("#load_link").html("");
   $("#load_link").html("<b>Permalink : </b> " +homepage+"<input type='text' id='link_custom' value='"+link+"'/> <span class='btn btn-xs btn-bg btn-default' onclick=\"okLink()\">Ok</span> / <a onclick=\"batalLink()\"><small>Cancel</span></a>");
   $("#link_custom").focus();
}
function okLink(){
   link_custom   = $("#link_custom").val();
   link_custom   = link_custom.trim();
   link_custom   = link_custom.replace(/\s/g, '-').toLowerCase();
   $("#link").val(link_custom);
   $("#load_link").html("");
   $("#load_link").html("<b>Permalink : </b> " +homepage+"product/"+link_custom+" <span class='btn btn-xs btn-bg btn-default' onclick=\"editLink()\">edit</span>");
}
function batalLink(){
  //editCustomLine = false;
   judul   = $("#judul").val();
   judul   = judul.trim(); 
   judul   = judul.replace(/\s/g, '-').toLowerCase();
   link    = $("#link").val(judul);
   $("#load_link").html("");
   $("#load_link").html("<b>Permalink : </b> " +homepage+"product/"+judul+" <span class='btn btn-xs btn-bg btn-default' onclick=\"editLink()\">edit</span>");

}

    // generad LINK AUTO
    var auto = setInterval(
      function(){
       judul   = $("#judul").val();
       judul   = judul.trim();
       judul   = judul.replace(/\s/g, '-').toLowerCase();
       kontent = tinyMCE.get('berita').getContent();
       kode    = $("#kode").val();
       type    = $("#type-page").val();
       data    = $("#simpanberita").serialize();
       newslink= judul;

       kategori = $("#bidang:checked").val();
       $("#savetoDraf").val("Saving data ...");
       $(".loader").fadeIn();
       $.ajax({
        url:homepage+"administrator/product/autosave/?autosave=autosave&kategori="+kategori+"&newslink="+newslink+"&konten="+kontent+"&kode="+kode+"&"+data,
        success:function(result){
          
          if(result != "0"){
             var hasil = result.split("|");
              kunci     = hasil[0];
              if(kunci  =="ID"){
                lastId = hasil[1];
                $("#kode").val(lastId);
                $(".loader").fadeOut();

              }else{
                $(".loader").fadeOut();
                $("#savetoDraf").val("Save to Draf");
               
                if(editCustomLine == false){
                    $("#link").val(newslink);
                    $("#load_link").html("");
                    $("#load_link").html("<b>Permalink : </b> " +homepage+"product/"+ newslink+" <span class='btn btn-xs btn-bg btn-default' onclick=\"editLink()\">edit</span>");
                }else{

                }
               
              }
          }else{
            $(".loader").fadeOut();
            $("#savetoDraf").val("Save to Draf");
          }
        }

       });
     
  
      },20000);

    </script>