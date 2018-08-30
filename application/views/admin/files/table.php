                    <section class="panel panel-default">
                      <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                         <thead>
                          <tr>
                            <th valign="center"><i class ="fa fa-list"></i></th>
                            <th class="th-sortable" data-toggle="class">Nama</th>
                            <th>Ukuran</th>
                            <th>Tgl Unggah</th>
                            <th>Link</th>
                            <th>Hapus</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
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
                              }else{
                                $icon = "help.png";
                              }

                              echo "
                              <TR id='data-$id'>
                                <td><img src='".$dir.$icon."' class='img'/></td>
                                <td>$nama</td>
                                <td>$ukuran $iqui</td>
                                <td>$tgl</td>
                                <td>$link</td>
                                <td align=center><a href='#' onclick=hapus_file('$id')><i class='fa fa-times text-danger text'></i></a></td>
                              </TR>
                              ";
                            }
                          ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- end table responsive-->
                    <!--FOOTER -->
                    <footer class="panel-footer">
                      <div class="row">
                        <div class="col-sm-4 hidden-xs">
                        </div>
                        <div class="col-sm-4 text-center">
                          <small class="text-muted inline m-t-sm m-b-sm">
                          page 
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