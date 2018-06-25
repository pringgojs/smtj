        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">News & Event</h3>
                  </div>

                <section class="panel panel-default">
                  <header class="panel-heading">
                    News data <span class='badge bg-info'><?php echo $jumlah;?></span>
                  </header>
              <form method="POST" id="cek-form" name="action" action="<?=base_url('administrator/news/action');?>"> 
                <div class="row wrapper">
                  <div class="col-sm-5 m-b-xs">
                    <select class="input-sm form-control input-s-sm inline v-middle" id='pilih' name='pilih'>
                      <option value="publish">Publish</option>
                      <option value="draf">Draf</option>
                      <option value="trash">Trash</option>
                      <option value="pending">Pending</option>
                    </select>
                     <button type="submit" class="btn btn-sm btn-default" id='apply'  > Apply </button>
                     <a href="<?=base_url('administrator/news/add');?>" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i> Add News</a>
                  </div>
                  <div class="col-sm-4 m-b-xs">
                  <?php
                    
                      if(@$_GET['v']=="all"){
                        $all = "active";
                      }else{
                        $all = "";
                      }
                      if(@$_GET['v']=="draf"){
                        $draf = "active";
                      }else{
                        $draf = "";
                      }
                      if(@$_GET['v']=="pending"){
                        $pending = "active";
                      }else{
                        $pending = "";
                      }
                      if(@$_GET['v']=="trash"){
                        $trash = "active";
                      }else{
                        $trash = "";
                      }
                      if(@$_GET['v']=="your_post"){
                        $your_post = "active";
                      }else{
                        $your_post = "";
                      }
                    
                  ?>
                    <div class="btn-group" data-toggle="buttons">
                      
                      <label class="btn btn-sm btn-default <?=$all;?>" onclick="redirect_post('<?=base_url('administrator/news?v=all');?>')" >
                        All
                      </label>

                      <label class="btn btn-sm btn-default <?=$draf;?>" onclick="redirect_post('<?=base_url('administrator/news?v=draf');?>')">
                        <input type="radio" name="options" id="option2" > Draf
                      </label>
                      <label class="btn btn-sm btn-default <?=$pending;?>" onclick="redirect_post('<?=base_url('administrator/news?v=pending');?>')">
                       Pending
                      </label>
                      <label class="btn btn-sm btn-default <?=$trash;?>" onclick="redirect_post('<?=base_url('administrator/news?v=trash');?>')">
                        Trash
                      </label>
                      <label class="btn btn-sm btn-default <?=$your_post;?> " onclick="redirect_post('<?=base_url('administrator/news?v=your_post');?>')">
                        Your post
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                    <input type="hidden" value="<?=@$_GET['v'];?>" id="view">
                      <input type="text" id="txtcari" class="input-sm form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" onclick="cari('news')" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
               
                <div class="table-responsive">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                        <th width="80px"><label class="checkbox m-n i-checks"><input  id="cek" onClick="cek_all()" value="All" type="checkbox"><i></i></label></th>
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
                    $kode_login = $this->method_call->cekLogin();
                    $jabatan = $this->method_call->cek_jabatan($kode_login);
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
                      /* status :
                          1. published
                          2. draf
                          3. trash
                          4. pending
                      */
                      if($status == "2"){
                          $statusx = "draf";
                          $status = "<small class='text-warning pull-right'><i>draf</i></small>";

                      }else if($status == "3"){
                        $statusx = "trash";
                         $status = "<small class='text-primary pull-right'><i>trash</i></small>";
                          // $status = 'trash'; 
                      }else if($status == "4"){
                        $statusx = 'pending'; 
                        $status = "<small class='text-info pull-right'><i>pending</i></small>";
                      }else{
                        $status = '';// publis
                        $statusx = '';// publis
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
                     
                      #CORNER
                      $corner = $this->method_call->cek_corner($kode);
                      if($corner == "0"){ 
                        #jika tidak ada di tabel corner
                        $bintang  = "<i class='fa fa-star-o fa-lg text'  onclick='create_corner($kode)' id='star-$kode'></i>";
                      }else{
                        $bintang  = "<i class='fa fa-star text-warning fa-lg text'  onclick='delete_corner($kode)' id='star-$kode'></i>";
                      }

                      # code...
                    echo "
                    <tr>
                      <td >
                        <div class='col-sm-6' style='padding:0'>";
                        if($kode_login==$user  || $jabatan=="Administrator" ){
                          echo "<label class='checkbox m-n i-checks'>
                              <input type='checkbox' name='kode_cek[]' id='kode_cek' value ='$kode'><i></i>
                            </label> ";
                        }
                        echo"</div>";
                         if($kode_login==$user  || $jabatan=="Administrator" ){
                            ECHO " <div class='col-sm-6' id='div-star-$kode' style='padding:0'>
                         ".$bintang."
                        </div>";
                         }
                       echo "
                      </td>
                      <td >
                      <span style='font-size:14px'><b>$judul</b></span>
                      <small class='text-muted'><i class='text-warning' style='font-size:11px'> $labelOK</i></small>
                      <br> ";
                      if($kode_login == $user || $jabatan=="Administrator" ){
                        echo "<small class='clear pull-left'><a href='".base_url('administrator/news/edit/'.$kode)."'><span class='text-primary'>edit</a></span> | <a href='".base_url('administrator/news/delete/'.$kode)."'><span class='text-danger'>delete</span></a>
                        | <a href='".base_url('administrator/announcement/eng_post/'.$kode.'/?k=news')."'><span class='text-warning'>english post</span></a></small>
                      ";
                      }
                      if($jabatan=="Administrator" && $statusx=="pending"){
                        echo " | <a href='".base_url('administrator/news/update_pending/'.$kode)."'><span class='text-info'>approve</a></span></small>";
                      }
                      echo"

                      $status
                      
                      </td>
                      <td width='200' align='center'>$us</td>
                      <td width='20' align='center'> <i class='fa ".$komen."'></i></td>
                      <td width='20' align='center'> $view <i class='fa fa-eye text'></i></td>
                      <td width='150' align='center'>$date</td>
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