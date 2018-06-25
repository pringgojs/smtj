        <style type="text/css">
        .wrong { border: 1px solid red;}
        </style>

        <section id="content">
          <section class="hbox stretch">
            <section>

            <form name="save" method="post" id="save" action="#>"></form>
              <input type="hidden" name="id1" id="id1" value="<?php echo $this->method_call->cek_id('1');?>">
              <input type="hidden" name="id2" id="id2" value="<?php echo $this->method_call->cek_id('2');?>">
              <input type="hidden" name="id3" id="id3" value="<?php echo $this->method_call->cek_id('3');?>">
              <input type="hidden" name="id4" id="id4" value="<?php echo $this->method_call->cek_id('4');?>">

              <input value="<?php echo $label1 = $this->method_call->cek_label('1');?>" type="hidden" name="edit-txtLabel-1" id="edit-txtLabel-1" >
              <input value="<?php echo $label1 = $this->method_call->cek_label('2');?>" type="hidden" name="edit-txtLabel-2" id="edit-txtLabel-2" >
              <input value="<?php echo $label1 = $this->method_call->cek_label('3');?>" type="hidden" name="edit-txtLabel-3" id="edit-txtLabel-3" >
              <input value="<?php echo $label1 = $this->method_call->cek_label('4');?>" type="hidden" name="edit-txtLabel-4" id="edit-txtLabel-4" >
              
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">SETTING LAYOUT FRONT</h3>
                   <small>In this page you can setting layout of front website what you want.</small>
                   <button name="saveLayout" class="btn btn-primary pull-right" onclick="svLayout()"> Save Layout</button>
                  </div>
                  <!-- start row -->
                  <div class="row">

                    <div class="col-lg-12">
                      <section class="panel panel-default" id="box-1">
                        <div class="panel-body">
                          <div class="col-lg-5">
                             <div class="h3 m-t-xs m-b-xs" >
                              <div id="label-1"><?php echo $label1 = $this->method_call->cek_label('1');?>
                                <button onclick="ubahLabel('1')" class="btn btn-default btn-xs">edit</button>

                              </div>
                            </div> 
                            <div id="thum-1">
                            <?php 
                              $img = $this->method_call->cek_img('1'); ?>
                              <img id="img-1" onclick="notif('1')" style="max-width:100%; height:auto; width:auto" src="<?=$img;?>">
                            </div>                          
                            
                          </div>

                          <div class="col-lg-7">
                            <div class="h3 m-t-xs m-b-xs" id="judul-1"><?php echo $this->method_call->cek_judul('1');?></div>  
                            <div id="content-1">
                            <?php  
                              $desc = $this->method_call->cek_deskripsi('1');
                              if($desc != "0"){
                                echo $desc;
                              }else{
                                $this->method_call->create_paragraf('10');
                              }

                            ?>
                              
                            </div>
                            <!-- input -->
                           
                            <input type="hidden" id="key-1" class="form-control" value="1" name="key-1">
                            <input id="isi-1" type="hidden">
                            <input type="hidden" id="link-1" name="link-1" value="<?php echo $url1 = $this->method_call->cek_url('1');?>" class="form-control">

                          </div>
                        </div>
                      </section>
                    </div>

                    <div class="col-lg-4">
                      <section class="panel panel-default" id="box-2">
                        <div class="panel-body">
                          <div id="label-2"><?php echo $label1 = $this->method_call->cek_label('2');?>
                                <button onclick="ubahLabel('2')" class="btn btn-default btn-xs">edit</button>
                          </div>
                          <div id="thum-2">
                          <?php 
                              $img = $this->method_call->cek_img('2'); ?>
                              <img id="img-2" onclick="notif('2')" style="max-width:100%; height:auto; width:auto" src="<?=$img;?>">
                          </div>
                          <div id="content-2">   
                            <?php  
                              $desc = $this->method_call->cek_deskripsi('2');
                              if($desc != "0"){
                                echo $desc;
                              }else{
                                $this->method_call->create_paragraf('4');
                              }

                            ?>
                          </div>
                          <!-- input -->
                            <input type="hidden" id="key-2" class="form-control" value="2" name="key-1">
                            <input id="isi-2" type="hidden">
                            <input value="<?php echo $url1 = $this->method_call->cek_url('2');?>" type="hidden" id="link-2" name="link-2" class="form-control">
                        </div>
                      </section>
                    </div>

                    <div class="col-lg-4">
                      <section class="panel panel-default" id="box-3">
                        <div class="panel-body">
                          <div id="label-3"><?php echo $label1 = $this->method_call->cek_label('3');?>
                                <button onclick="ubahLabel('3')" class="btn btn-default btn-xs">edit</button>
                          </div>
                          <div id="thum-3">
                              <?php 
                              $img = $this->method_call->cek_img('3'); ?>
                              <img id="img-3" onclick="notif('3')" style="max-width:100%; height:auto; width:auto" src="<?=$img;?>">
                          </div>   
                          <div id="content-3"> 
                             <?php  
                              $desc = $this->method_call->cek_deskripsi('3');
                              if($desc != "0"){
                                echo $desc;
                              }else{
                                $this->method_call->create_paragraf('4');
                              }

                            ?>
                          </div>
                          <!-- input -->
                            <input type="hidden" id="key-3" class="form-control" value="3" name="key-1">
                            <input id="isi-3" type="hidden">
                            <input value="<?php echo $url1 = $this->method_call->cek_url('3');?>" type="hidden" id="link-3" name="link-3" class="form-control">

                        </div>
                      </section>
                    </div>

                    <div class="col-lg-4">
                      <section class="panel panel-default" id="box-4">
                        <div class="panel-body">
                          <div id="label-4"><?php echo $label1 = $this->method_call->cek_label('4');?>
                                <button onclick="ubahLabel('4')" class="btn btn-default btn-xs">edit</button>
                          </div>
                          <div id="thum-4">
                              <?php 
                              $img = $this->method_call->cek_img('4'); ?>
                              <img id="img-1" onclick="notif('4')" style="max-width:100%; height:auto; width:auto" src="<?=$img;?>">
                          </div>  
                          <div id="content-4">  
                             <?php  
                              $desc = $this->method_call->cek_deskripsi('4');
                              if($desc != "0"){
                                echo $desc;
                              }else{
                                $this->method_call->create_paragraf('4');
                              }

                            ?>
                          </div>
                          <!-- input -->
                            <input type="hidden" id="key-4" class="form-control" value="4" name="key-4">
                            <input id="isi-4" type="hidden">
                            <input value="<?php echo $url1 = $this->method_call->cek_url('4');?>" type="hidden" id="link-4" name="link-4" class="form-control">
                        </div>
                      </section>
                    </div>

                  </div>
                  <!-- end row -->
                  </form>
                  <!--lightbox-->
                <div class='blackout2'></div>
                <div class='blackflash2'>
                    <div class='canvasshow2' style="margin-top:-210px;">
                        <div class="canvasmain2" style="width:1000px; overflow:hidden; margin:0 auto; padding:10px 0px 20px;">
                        <div class="title">Select a Page </div>
                        <div class="cols-6">
                          <section class="panel panel-default">
                            <header class="panel-heading text-right bg-light">
                              <ul class="nav nav-tabs pull-left">
                                <li class="active"><a href="#page" data-toggle="tab"> Pages</a></li>
                                <li class=""><a href="#news" data-toggle="tab"> Event and News</a></li>
                                
                              </ul>
                              <span class="hidden-sm">
                                <i onclick="notif(false)" class="i i-cross2"></i>
                              </span>
                            </header>
                            <div class="panel-body" style="height:300px; overflow-y:scroll; color:#000">
                              <div class="tab-content">              
                                <div class="tab-pane fade active in" id="page">
                                  <div class="table-responsive">
                                    <table class="table  b-t b-light">
                                      <thead>
                                        <tr>
                                          <th width="20">No.</th>
                                          <th>Title Page</th>
                                          <th>Link</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                     $no = 1;
                                    foreach ($parent as $key => $value) {
                                      # code...
                                      $kode = $value->id_post;
                                      $name = $value->judul;
                                      $link = $value->link_asli;
                                      $isi  = $value->isi;
                                      $fitur_img = $value->fitur_img;
                                      #cek img 
                                       $images = $this->method_call->catch_that_image($value->isi);
                                       $IMG = TRUE;
                                        if($fitur_img != ""){
                                             $thumbnail = $fitur_img;
                                        }else{
                                             if($images != ""){
                                                  $thumbnail = $images;
                                             }else{
                                                  $thumbnail = base_url('asset/images/not-img.png');
                                                  $IMG = FALSE;
                                             }
                                        }
                                      $deskripsi = htmlentities(strip_tags($isi));
                                        if(strlen($deskripsi) > 220 ){
                                          $deskripsi = substr($deskripsi, 0, 220)."...";
                                          //$deskripsi2 = substr(htmlentities(strip_tags($data['isi'])), 0, 400)."...";
                                        }else{
                                           $deskripsi = $deskripsi;
                                        }
                                      echo "<tr class='baris baris-halaman-$kode' onclick=\"selectPage('".$kode."','".$kode."','0','".$thumbnail."','".$name."')\">
                                            <td><b>".$no."</b></td>
                                            <td><b>".$name."</b></td>
                                            <td><b>".$link."</b></td>
                                          </tr>";
                                      
                                      $this->method_call->call_child_table($kode);
                                    $no++;
                                    }
                                  ?>
                                        
                                      </tbody>
                                    </table>
                                  </div>
                                   
                                </div>
                                <div class="tab-pane fade" id="news">
                                  <div class="table-responsive">
                                    <table class="table  b-t b-light">
                                      <thead>
                                        <tr>
                                          <th width="20">No.</th>
                                          <th>Title News</th>
                                          <th>Link</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                     $no = 1;
                                    foreach ($news as $key => $value) {
                                      # code...
                                      $kode = $value->id_post;
                                      $name = $value->judul;
                                      $link = $value->link_asli;
                                      $isi  = $value->isi;
                                      $fitur_img = $value->fitur_img;
                                      #cek img 
                                       $images = $this->method_call->catch_that_image($value->isi);
                                       $IMG = TRUE;
                                        if($fitur_img != ""){
                                             $thumbnail = $fitur_img;
                                        }else{
                                             if($images != ""){
                                                  $thumbnail = $images;
                                             }else{
                                                  $thumbnail = base_url('asset/images/not-img.png');
                                                  $IMG = FALSE;
                                             }
                                        }
                                      $deskripsi = htmlentities(strip_tags($isi));
                                        if(strlen($deskripsi) > 220 ){
                                          $deskripsi = substr($deskripsi, 0, 220)."...";
                                          //$deskripsi2 = substr(htmlentities(strip_tags($data['isi'])), 0, 400)."...";
                                        }else{
                                           $deskripsi = $ $deskripsi;
                                        }
                                      echo "<tr class='baris baris-halaman-$kode' onclick=\"selectPage('".$kode."','".$kode."','0','".$thumbnail."','".$name."')\">
                                            <td>".$no."</td>
                                            <td>".$name."</td>
                                            <td>".$link."</td>
                                          </tr>";
                                      
                                      //$this->method_call->call_child_table($kode);
                                    $no++;
                                    }
                                  ?>
                                        
                                          </tbody>
                                        </table>
                                      </div>
                                    </div>
                                    
                                  </div>

                                </div>
                                <div class="panel-heading b-b">
                                  <input type="hidden" id="key" class="form-control" name="key">
                                  <textarea style="display:none" id="isi"></textarea>
                                  <input type="hidden" id="link" class="form-control">
                                  <input type="hidden" id="img" class="form-control">
                                  <input type="hidden" id="judul" class="form-control">
                                  <input type="hidden" id="kode" class="form-control">
                                  <button class="btn btn-primary" onclick="selectPageLayout()">Select</button>
                                  <button class="btn btn-default" onclick="notif(false)" >Cancel</button>
                                </div>
                              </section>
                            </div>
                        </div>
                    </div>
                <!-- LIGHBOX--> 
                </section>
              </section>
            </section>