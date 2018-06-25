        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">SLIDER</h3>
                    <small>In this page you can add the new slider for your website.</small>
                   
                  </div>
                  <!-- start row -->
                  <form id="formmenu" name="formmenu" action="<?=base_url('administrator/slider/update/');?>" method="post" class="form-horizontal" >
                  <div class="row">
                    <div class="col-lg-12">
                      <section class="panel panel-default" id="box-1">
                        <div class="panel-body">
                          <div class="col-lg-5">
                             <div class="h3 m-t-xs m-b-xs" >
                              <div id="label-1">Choose Image</div>
                            </div> 
                            <div id="thum">
                              <img id="img" onclick="notif('slider')" style="max-width:100%; height:auto; width:auto" src="<?=$img;?>">
                              
                            </div>                          
                          </div>
                          <div class="col-lg-7">
                          <div class="h3 m-t-xs m-b-xs" id="judul-1">Attribute Slider</div>
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Label</label>
                               <div class="col-sm-10">
                                  <input class="form-control" value="<?=$label;?>" required type="text" name ="label" id="label"  >
                                  <input class="form-control" value="<?=$id_file;?>" required type="hidden" name ="kode_file" id="kode_file"  >
                                  <input type="hidden" name="id_slider" id="id_slider" value="<?=$id_slider;?>">
                               </div>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Description</label>
                               <div class="col-sm-10">
                                <textarea class="form-control" rows="5" type="text" name="desc" id="desc" ><?=$deskripsi;?></textarea>
                               </div>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <div class="form-group">
                              <label class="col-sm-2 control-label">Link</label>
                               <div class="col-sm-10">
                                  <input class="form-control" required type="text" value="<?=$link;?>" name ="link" id="link"  >
                               </div>
                            </div>
                          
                            <div class="form-group">
                              <label class="col-sm-2 control-label"></label>
                               <div class="col-sm-10">
                                  <input type="submit" name="formmenu" class="btn btn-primary" id="simpan"  value="Save Slider">
                    
                               </div>
                            </div>
                          </div>

                        </div>
                      </section>
                    </div>
                  </div>
                  </form>
                  </section>
                  <!-- end row -->
                  
                  <!--lightbox-->
                <div class='blackout2'></div>
                <div class='blackflash2'>
                <script type="text/javascript">
                  Dropzone.options.formFile = {
                        dictDefaultMessage: "<div class='btn btn-default btn-large'><i class='fa fa-upload'></i> Drop images file here to upload</i></div><i>",
                        acceptedFiles: ".jpeg, .jpg, .png, .gif",
                        maxFilesize: 2,
                          success: function(file) {
                            if (file.previewElement) {
                              var bulusan = $("#max_file").val();
                              var numplus = parseInt(bulusan)+1;
                              $("#max_file").val(numplus);
                              $('#type_file').val("Images");
                              //alert(bulusan);
                              function tambahclass()
                              {
                                file.previewElement.classList.add("dz-success");
                                file.previewElement.classList.add("bulusan"+numplus);
                                file.previewElement.setAttribute('onclick','pilihImgPascaUpload(\''+numplus+'-'+file.name+'\',\''+numplus+'\')');
                              }
                              return tambahclass();
                            }
                          },
                    };
                

                  </script>
                    <div class='canvasshow2' style="margin-top:-210px;">
                        <div class="canvasmain2" style="width:1000px; overflow:hidden; margin:0 auto; padding:10px 0px 20px;">
                        <div class="title">Select a Image</div>
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
                              <input type="hidden" class="form-control" id="id_file"/>
                              <input type="hidden" name="key" id="key">
                              <input type="hidden" name="max_file" id="max_file" value="<?=$id;?>">
                              <button class="btn btn-primary" onclick="selectUrlSlider()">Select Image</button>
                              <button class="btn btn-default" onclick="notif()">Cancel</button>
                            </div>
                          </section>
                        </div>
                    </div>
                </div>
                </div>
                <!-- LIGHBOX--> 
                </section>
              </section>
            </section>