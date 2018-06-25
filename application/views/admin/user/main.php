        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">User</h3>
                  </div>

                <section class="panel panel-default">
                  <header class="panel-heading">
                    User data <span class='badge bg-info'><?=$jumlah;?></span>
                  </header>
              <form method="POST" id="cek-form" name="action" action="<?=base_url('administrator/user/deleteAll');?>"> 
                <div class="row wrapper">
                   <div class="col-sm-5 m-b-xs">
                     <button type="submit" class="btn btn-sm btn-default" id='apply'  > <i class="i i-trashcan"></i> </button>
                     <a href="<?=base_url('administrator/user/add');?>" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i> Add User</a>
                  </div>
                  <div class="col-sm-4 m-b-xs">
                    
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" id="txtcari" class="input-sm form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" onclick="cari('user')" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
               
                <div class="table-responsive">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                        <th width="1%"><label class="checkbox m-n i-checks"><input  id="cek" onClick="cek_all()" value="All" type="checkbox"><i></i></label></th>
                        <th width="220" class="th-sortable" data-toggle="class">Name
                          <span class="th-sort">
                            <i class="fa fa-sort-down text"></i>
                            <i class="fa fa-sort-up text-active"></i>
                            <i class="fa fa-sort"></i>
                          </span>
                        </th>
                        <th align='center'>Username</th>
                        <th align='center'>Author</th>
                        <th align='center'>Access Code</th>
                        <th align='center'>Last Login</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    
                    foreach ($data as $key => $value) {
                      $kode   = $value->id_user;
                      $nama  = $value->nama;
                      $username    = $value->username;
                      $jabatan   = $value->jabatan;
                      $status   = $value->status;
                      $hak_akses   = $value->hak_akses;
                      $last   = $value->last_login;
                      $yg_menambahkan = $this->method_call->author($value->yg_menambahkan);
                      if($status == "1"){
                        $status = "Active";
                        $bg   = "info";
                      }else if($status=="2"){
                        $status = "Non-active";
                        $bg   = "warning";
                      }else if($status=="3"){
                        $status = "Account Banned";
                         $bg   = "danger";
                      }

                      # code...
                    echo "
                    <tr>
                      <td ><label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='$kode'><i></i></label> </td>
                      <td >
                      <span style='font-size:14px'><b>$nama</b></span>
                      <small class='text-muted'><i class='text-warning' style='font-size:11px'> $jabatan</i></small>
                      <br>
                      <div id='atribut-page-".$kode."'>
                        <small class='clear pull-left'><a href='".base_url('administrator/user/edit/'.$kode)."'><span class='text-primary'>edit</a></span> | <a href='".base_url('administrator/user/delete/'.$kode)."'><span class='text-danger'>delete</span></a></small>
                        <small class='badge bg-$bg clear pull-right'>$status</small>
                      </div>
                      </td>
                      <td width='90' >$username</td>
                      <td width='20' > $yg_menambahkan</td>
                      <td width='20' > $hak_akses</td>
                      <td width='150' >$last</td>
                    </tr>";
                   
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