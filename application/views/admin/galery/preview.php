
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/gridGalery.css" type="text/css" />
        <section id="content">
          <section class="vbox">
            <header class="header bg-light lt b-b b-light">
              <p class="h4 font-thin pull-left m-r m-b-sm"><?=$parent->galery_title;?></p>
              <a href="<?=base_url('administrator/galery');?>" class="btn btn-sm btn-primary btn-rounded btn-icon " title="back"><i class="i i-back"></i></a>
              <a class="btn btn-sm btn-info btn-rounded btn-icon" onclick="notif('galery')" title="add image" ><i class="fa fa-plus"></i></a>
              
            </header>
            <section class="scrollable wrapper">
              <div class="row">
                <div class="col-md-3 col-md-push-9">
                  <div class="panel">
                    <div class="panel-heading b-b">Description</div>
                    <div class="panel-body">
                      <p><?=$parent->galery_description;?> </p>
                      <div class="line line-dashed b-b line-lg"></div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-md-9 col-md-pull-3">
                  <div class="row row-sm">
                    <div id="grid-gallery" class="grid-gallery ">
                    <section class="grid-wrap">
                      <ul class="grid" style="">
                        <li class="grid-sizer" style=""></li><!-- for Masonry column width -->
                        <?php
                          echo '
                          <li >
                          <div style="position:absolute; margin-top:20px; margin-left:20px;z-index:200; display:block;">
                            <a href="'.base_url('administrator/galery/hapus/'.$parent->id_galery).'">
                              <button class="btn btn-sm btn-bg btn-primary"><i class="fa fa-trash-o"></i></button>
                            </a>
                            </div>
                            <figure>
                              <img src="'.$parent->galery_image.'" alt="img0'.$parent->galery_image.'"/>
                              
                            </figure>
                          </li>';
                          $i=2;
                          foreach ($galery as $key => $value) {
                          #menampilkan galery yang parent 
                          $galery_image = $value->galery_image;
                          $galery_title = $value->galery_title;
                          $id_galery  = $value->id_galery;
                          echo '
                          <li >
                            <div style="position:absolute; margin-top:20px; margin-left:20px;z-index:100; display:block;">
                              <a href="'.base_url('administrator/galery/hapus/'.$id_galery).'">
                                <button class="btn btn-sm btn-bg btn-primary"><i class="fa fa-trash-o"></i></button>
                              </a>
                            </div>
                            <figure>
                              <img src="'.$galery_image.'" alt="img0'.$id_galery.'"/>
                              
                            </figure>
                          </li>';
                          $i++;
                          }
                        ?>
                        <li id="hasil-add-image"></li>
                       
                      </ul>
                    </section>
                    <section class="slideshow">
                      <ul>
                      <?php
                            echo '
                            <li>
                              <figure>
                                <img src="'.$parent->galery_image.'" alt="img0'.$parent->id_galery.'"/>
                              </figure>
                            </li>';
                            
                            $i=2;
                            foreach ($galery as $key => $value) {
                            #menampilkan galery yang parent 
                            $galery_image = $value->galery_image;
                            $galery_title = $value->galery_title;
                            $id_galery  = $value->id_galery;
                            echo '
                            <li>
                              <figure>
                                <img src="'.$galery_image.'" alt="img0"'.$id_galery.'/>
                              </figure>
                            </li>';
                            $i++;
                            }
                          ?>
                        
                      </ul>
                      <nav>
                        <span class="i nav-prev"></span>
                        <span class="i nav-next"></span>
                        <span class="i nav-close"></span>
                      </nav>
                      <div class="info-keys icon">Navigate with arrow keys</div>
                    </section>
                    
                  </div>
                 
                </div>
              </div>
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
                              <input type="text" id="id_albume" value="<?=$this->uri->segment(3);?>">
                              <input type="hidden" class="form-control" id="url_file"/>
                              <input type="hidden" class="form-control" id="nama_file"/>
                              <input type="hidden" class="form-control" id="type_file"/>
                              <input type="hidden" class="form-control" id="id_file"/>
                              <input type="hidden" name="key" id="key">
                              <input type="hidden" name="max_file" id="max_file" value="<?=$id;?>">
                              <button class="btn btn-primary" onclick="addImageAlbum()">Select Image</button>
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
        <script src="<?php echo base_url() ?>asset/js/gridGalery/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/gridGalery/masonry.pkgd.min.js"></script>
        <script src="<?php echo base_url() ?>asset/js/gridGalery/classie.js"></script>
        <script src="<?php echo base_url() ?>asset/js/gridGalery/cbpGridGallery.js"></script>
        <script>
        new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
      </script>