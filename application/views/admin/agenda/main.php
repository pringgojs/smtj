        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">Agenda</h3>
                  </div>

                <section class="panel panel-default">
                  <header class="panel-heading">
                    Agenda data <span class='badge bg-info'><?=$jumlah;?></span>
                  </header>
              <form method="POST" id="cek-form" name="action" action="<?=base_url('administrator/agenda/action');?>"> 
                <div class="row wrapper">
                  <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control input-s-sm inline v-middle" id='pilih' name='pilih'>
                      <option value="publish">Publish</option>
                      <option value="draf">Draf</option>
                      <option value="trash">Trash</option>
                      <option value="exp">Export</option>
                    </select>
                     <button type="submit" class="btn btn-sm btn-default" id='apply'  > Apply </button>
                     <a href="<?=base_url('administrator/agenda/add');?>" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i> Add Agenda</a>
                  </div>
                  <div class="col-sm-4 m-b-xs">
                    
                  </div>

                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" name="txtcari" id="txtcari" class="input-sm form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" onclick="cari('agenda')" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
               
                <div class="table-responsive">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                        <th width="20"><label class="checkbox m-n i-checks"><input  id="cek" onClick="cek_all()" value="All" type="checkbox"><i></i></label></th>
                        <th class="th-sortable" data-toggle="class">Title
                          <span class="th-sort">
                            <i class="fa fa-sort-down text"></i>
                            <i class="fa fa-sort-up text-active"></i>
                            <i class="fa fa-sort"></i>
                          </span>
                        </th>
                        <th align='center'>Author</th>
                        <th align='center'>Comment</th>
                        <th align='center'>View</th>
                        <th align='center'>Date</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $jabatan="";
                    $login  = $this->method_call->cekLogin();
                    foreach ($post as $key => $value) {
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
                      $jabatan     = $this->method_call->cek_user($login,"jabatan");
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
                      /* label */
                      if($label !=""){
                          $explode = explode(",", $label);
                          $r=0;
                          foreach ($explode as $key => $value) {
                            # code...
                            $labelname[$r] = $this->method_call->data_label_post($value);
                            $r++;
                          }
                          $labelOK = implode(",", $labelname);
                      }else{
                        $labelOK = "";
                      }
                     $kode_login = $this->method_call->cekLogin();

                      # code...
                    echo "
                    <tr>
                      <td >
                         <div class='col-sm-6' style='padding:0'>";
                          if($kode_login==$user  || $jabatan=="Administrator" ){
                            echo "<label class='checkbox m-n i-checks'>
                                <input type='checkbox' name='kode_cek[]' id='kode_cek' value ='$kode'><i></i>
                              </label> ";
                          };
                            echo" </div></td>
                      <td >
                      <span style='font-size:14px'><b>$judul</b></span>
                      <br>";
                      if($kode_login == $user || $jabatan=="Administrator" ){
                        echo "<small class='clear pull-left'><a href='".base_url('administrator/agenda/edit/'.$kode)."'><span class='text-primary'>edit</a></span> | <a href='".base_url('administrator/agenda/delete/'.$kode)."'><span class='text-danger'>delete</span></a>
                        | <a href='".base_url('administrator/announcement/eng_post/'.$kode.'/?k=agenda')."'><span class='text-warning'>english post</span></a></small>
                      ";
                      }
                      echo "
                      </td>
                      <td width='90' align='center'>$us</td>
                      <td width='20' align='center'> <i class='fa ".$komen."'></i></td>
                      <td width='20' align='center'> $view <i class='fa fa-eye text'></i></td>
                      <td width='150' align='center'>$date</td>
                    </tr>";
                    $call_child     = $this->method_call->call_child($kode);
                    }
                    ?>
                    </tbody>
                  </table>
                   
                </div>
                </form>
                <footer class="panel-footer">
                  <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 text-center">
                      <small class="text-muted inline m-t-sm m-b-sm">page 
                       <?php
                          if($this->uri->segment(4)==''){
                              echo "1";
                            }else{
                              echo $this->uri->segment(4);
                            }
                            ;?></small></small>
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">                
                       <?=$paging;?>
                    </div>
                  </div>
                </footer>
              </section>
              
             <div class="modal fade" id="modal-form">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body wrapper-lg">
                    <div class="row" id="hasil-modal">
                     
                      
                    </div>            
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>
  
           

                </section>
              </section>
            </section>