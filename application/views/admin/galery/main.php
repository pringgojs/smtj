
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/gridGalery.css" type="text/css" />
        <section id="content">
          <section class="vbox">
            <header class="header bg-light lt b-b b-light">
              <p class="h4 font-thin pull-left m-r m-b-sm">Galery</p>
              <a class="btn btn-sm btn-info btn-rounded btn-icon" href="<?=base_url('administrator/galery/add');?>" ><i class="fa fa-plus"></i></a>
              
            </header>
            <section class="scrollable wrapper">
              <div class="row">
                <div class="col-md-3 col-md-push-9">
                  <div class="panel">
                    <div class="panel-heading b-b">Petunjuk</div>
                    <div class="panel-body">
                      <p>Untuk membuat sebuah album, kliklah tanda <b>Plus</b> pada judul Galery. Dalam halaman ini tidak ada fasilitas Edit galery, jika ada galery yang salah, silahkan galery tersebut dihapus dengan menekan tombol <b>Trash</b> pad tumbnail photo dan silahkan membuat lagi galery yang baru.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-9 col-md-pull-3">
                  <div class="row row-sm">
                    <div id="grid-gallery" class="grid-gallery ">
                    <section class="grid-wrap">
                      <ul class="grid" stylestrlen(="">
                        <li class="grid-sizer" style=""></li><!-- for Masonry column width -->
                        <?php
                          $i=1;
                          foreach ($galery as $key => $value) {
                            #menampilkan galery yang parent 
                            $galery_image = $value->galery_image;
                            $galery_title = $value->galery_title;
                            $id_galery  = $value->id_galery;
                            $galery_description = $value->galery_description;
                            if(strlen($galery_description) > 20){
                              $deskripsi = substr($galery_description, 0,20)."...";
                            }else{
                              $deskripsi = $galery_description;
                            }
                            echo '
                          <li>
                            <div style="position:absolute; margin-top:20px; margin-left:20px;z-index:1000; display:block;">
                            <a href="'.base_url('administrator/galery/hapus/'.$id_galery).'">
                              <button class="btn btn-sm btn-bg btn-primary"><i class="fa fa-trash-o"></i></button>
                            </a>
                            </div>
                            <figure>
                              <a href="'.base_url('administrator/galery/'.$id_galery).'">
                                <img src="'.$galery_image.'" alt="img0'.$i.'"/>
                              
                              <figcaption>
                              <h3>'.$galery_title.'</h3>
                                <p>
                                  '.$deskripsi.'
                                  
                                </p>
                              </figcaption>
                              </a>
                            </figure>

                          </li>';
                          $i++;
                          }
                        ?>
                        <div id="hasil-add-image"></div>
                      </ul>
                    </section>
                    <section class="slideshow">
                      <ul>
                      <?php 
                      /*

                            $i=1;
                            foreach ($galery as $key => $value) {
                            #menampilkan galery yang parent 
                            $galery_image = $value->galery_image;
                            $galery_title = $value->galery_title;
                            $id_galery  = $value->id_galery;
                            echo '
                            <li>
                              <figure>
                                <figcaption>
                                  <h3>'.$galery_title.'</h3>
                                </figcaption>
                                <img src="'.$galery_image.'" alt="img01"/>
                              </figure>
                            </li>';
                            $i++;
                            }
                            */
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