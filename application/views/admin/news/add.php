
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

</style>
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                <div class="loader">Saving data ...</div>
                  <div class="m-b-md">
                   <h3 class="m-b-none">News and Event</h3>
                  </div>
                  <form method="post" name="simpanberita" id="simpanberita" action="<?=base_url('administrator/news/save');?>">
                      <section class="hbox stretch">
                                  <!-- .aside -->
                          <aside class="aside-lg bg-white b-r" id="aside" >
                            <section class="vbox">
                              <section class="scrollable">
                                <div class="wrapper">
                                   <div class="col-sm-6">
                                      <h3 class="m-b-xs text-black">News </h3>
                                   </div>
                                   <div class="col-sm-6 text-right text-left-xs m-t-md" style="padding-left:0px">
                                   <div class="btn-toolbar" style="padding:0px;width:160px">
                                      <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                                          <span class="dropdown-label">Show</span> 
                                          <span class="caret"></span>
                                        </button>
                                        
                                      </div>
                                      <div class="btn-group">
                                        <a class="btn btn-sm btn-bg btn-default" href="<?=base_url('news');?>" >
                                          <i class="fa  fa-mail-reply"></i>
                                        </a>
                                      </div>
                                    </div>
                                    </div>
                                   
                                   <div style="clear:both;margin-bottom:20px"></div>
                                   <div class="main-agenda"></div>
                                   <div class="form-agenda">
                                      <div class="form-group">
                                        <label>Category</label>
                                        <div class="panel panel-default">

                                           <div class="panel-body">
                                              <div id="list-category" class="list-category" style="height:100px; overflow-y:scroll">
                                               <?php 
                                                  $this->method_call->viewKategori();
                                                 ?>
                                              </div>
                                             <br>
                                              <a href="#" onclick="showF('form-kategori')">+ Add New Category</a>
                                              <div class="input-group m-b" id="form-kategori">
                                                  <input type="text" name="txtkategori" id="txtkategori" class="form-control"/>
                                                  <span class="input-group-addon btn-default" onclick="addkategori()">Add</span>
                                              </div>
                                           </div>
                                           
                                          </div>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label>Label</label> <br>
                                          <textarea class="input-sm form-control" id="label" name="label"></textarea>
                                          <input type="hidden" name="id_label" id="id_label">
                                          *Separate labels by commas 
                                          <br>
                                            <?php
                                              $this->method_call->label();
                                              ?>
                                          
                                        </div>
                                        <div class="form-group">
                                          <label>Date</label>
                                          <input type="text" placeholder="Tanggal agenda" required name="tanggal" id="tanggal" value="<?php echo $date = date('Y-m-d H:i:s') ?>" class="datepicker input-sm form-control">
                                        </div>
                                        <div class="form-group">
                                          <label>Location</label>
                                           <div class="panel panel-default">
                                             <input id="pac-input" class="form-control" type="text" name="lokasi" placeholder="Search Location">
                                             <div id="map_canvas" style="width:100%; height:150px;">
                                                <?php echo $map['html']; ?>
                                              </div> 
                                           </div>
                                           <input type="hidden" id="langitude" name="langitude" style="display:block">
                                            <input type="hidden" id="longitude" name="longitude" style="display:block">
                                        </div>
                                       
                                        <div class="form-group">
                                          <label>Other settings</label>
                                                                
                                            <div class="checkbox i-checks"><label class="i-checks">
                                              <input type="checkbox" value="1" id="komentar" name="komentar"><i></i>Allow comments</label>
                                            </div>
                                        </div>
                                        <div class="m-t-lg">
                                          <input type="submit" name="simpanberita" id="simpanberita" class="btn btn-sm btn-primary" Value="Publish News"/>
                                          <input type="button" onclick="saveDraf('news')" id="savetoDraf" class="btn btn-sm btn-default" Value="Save to Draf"/>
                                          
                                        </div>
                                     
                                    </div>
                                </div>
                              </section>
                            </section>
                            
                          </aside>
                      <!-- form --> 
                    <aside>
                      <section class="panel panel-default">
                        <header class="panel-heading font-bold">Add News & Event</header> 
                        <div class="panel-body"> 
                          <div class="form-group">
                          <label class="control-label">Title</label>
                            <input type="text"  name="judul" id="judul" class="form-control">  
                             <input type="hidden"  name="link" id="link" class="form-control">  
                            <input type="hidden"  name="kode" id="kode" class="form-control"> 
                            
                           <div id="load_link" style="margin:5px 0"></div>
                           <br>
                          </div>
                         <div class="form-group">
                            <textarea id="berita" name="berita" ></textarea>
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
                        acceptedFiles: ".jpeg, .jpg, .png, .gif",
                          success: function(file) {
                            if (file.previewElement) {
                              var bulusan = $(".bulusan").val();
                              var numplus = parseInt(bulusan)+1;
                              $(".bulusan").val(numplus);
                              $('#type_file').val("Images");
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
                              <input type="hidden" name="key" id="key">
                              <input type="hidden" class="bulusan" value="<?=$id;?>">
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
   $("#load_link").html("<b>Permalink : </b> "+homepage+"news/"+kode+"/<input type='text' id='link_custom' value='"+link+"'/> <span class='btn btn-xs btn-bg btn-default' onclick=\"okLink()\">Ok</span> / <a onclick=\"batalLink()\"><small>Cancel</span></a>");
   $("#link_custom").focus();
}
function okLink(){
   link_custom   = $("#link_custom").val();
   link_custom   = link_custom.trim();
   link_custom   = link_custom.replace(/\s/g, '-').toLowerCase();
   $("#link").val(link_custom);
   $("#load_link").html("");
   $("#load_link").html("<b>Permalink : </b> " +homepage+"news/"+kode+"/"+link_custom+" <span class='btn btn-xs btn-bg btn-default' onclick=\"editLink()\">edit</span>");
}
function batalLink(){
  //editCustomLine = false;
   judul   = $("#judul").val();
   judul   = judul.trim(); 
   judul   = judul.replace(/\s/g, '-').toLowerCase();
   link    = $("#link").val(judul);
   $("#load_link").html("");
   $("#load_link").html("<b>Permalink : </b> " +homepage+"news/"+kode+"/"+judul+" <span class='btn btn-xs btn-bg btn-default' onclick=\"editLink()\">edit</span>");

}
    // generad LINK AUTO
    var auto = setInterval(
      function(){
       judul   = $("#judul").val();
       judul   = judul.trim();
       judul   = judul.replace(/\s/g, '-');
       kontent = tinyMCE.get('berita').getContent()
       kode    = $("#kode").val();
       data    = $("#simpanberita").serialize();

       newslink   = judul;
       $("#savetoDraf").val("Saving data ...");
       $(".loader").fadeIn();
       $.ajax({
        url:homepage+"administrator/news/autosave",
        data:{
          autosave: 'autosave',
          newslink: newslink,
          konten: kontent,
          kode: kode,
          judul: judul,
          data,
        },
        type: 'post',
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
                  $("#load_link").html("<b>Permalink : </b> "+homepage+"news/"+kode+"/"+ newslink+" <span onclick=\"editLink()\" class='btn btn-xs btn-bg btn-default'>edit</span>");
                }
              }
          }else{
            $(".loader").fadeOut();
            $("#savetoDraf").val("Save to Draf");
          }
        }
       });
     
  
      },10000);

    </script>