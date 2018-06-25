<?php
include 'include/header.php';
?>
<link rel="stylesheet" href="<?php echo base_url() ?>asset/css/gridGalery.css" type="text/css" />


<section id="main">
	<div class="main-shadow"></div>
	<div class="main">
		<div id="gallery-photo">
			<div class="headline-article" style="text-align:center">
				<b><?=$parent->galery_title;?></b><br/>
				GALLERY PHOTOS
			</div>
			<div class="post-wrap" style="width:100%">
				<div id="grid-gallery" class="grid-gallery ">
                    <section class="grid-wrap">
                      <ul class="grid" style="">
                        <li class="grid-sizer" style=""></li><!-- for Masonry column width -->
                        <?php
                          echo '
                          <li >
                            <figure>
                              <img src="'.$parent->galery_image.'" alt="img01"/>
                              <figcaption></figcaption>
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
                            <figure>
                              <img src="'.$galery_image.'" alt="img0'.$i.'"/>
                              <figcaption></figcaption>
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
                            echo '
                            <li>
                              <figure>
                                <figcaption>
                                  
                                </figcaption>
                                <img src="'.$parent->galery_image.'" alt="img01"/>
                              </figure>
                            </li>';
                            
                            $x=2;
                            foreach ($galery as $key => $value) {
                            #menampilkan galery yang parent 
                            $galery_image = $value->galery_image;
                            $galery_title = $value->galery_title;
                            $id_galery  = $value->id_galery;
                            echo '
                            <li>
                              <figure>
                                <figcaption>
                                  
                                </figcaption>
                                <img src="'.$galery_image.'" alt="img0'.$x.'"/>
                              </figure>
                            </li>';
                            $x++;
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
			<div style="clear:both"></div>
			
		</div>
	</div>
</section>

<?php
include 'include/footer.php';
?>
