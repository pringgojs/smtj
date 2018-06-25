        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">DEFAULT PAGE</h3>
                  </div>
                  <div class="col-sm-12">
                    <section class="panel panel-default">
                      
                      <div class="panel-body">
                       
                        <div class="col-sm-4 m-b-xs">
                         Select a menu to edit:
                          <select class="input-sm form-control input-s-sm inline v-middle">
                            <option>Menu 1</option>
                            <option>Menu 1</option>
                          </select>
                          <button class="btn btn-sm btn-default">Select</button>
                        </div>

                      </div>
                    </section>
                  </div>
                  <div class="col-sm-6">
                    <section class="panel panel-default">
                      <header class="panel-heading text-right bg-light">
                          <ul class="nav nav-tabs pull-left">
                            <li class="active"><a href="#upload" data-toggle="tab">Pages</a></li>
                            <li class="" ><a href="#files" data-toggle="tab"> News</a></li>
                            <li class="" ><a href="#files" data-toggle="tab"> Custom URL</a></li>
                          </ul>
                          <span class="hidden-sm">
                            <i onclick="notif(false)" class="i i-cross2"></i>
                          </span>
                      </header>
                     <div class="panel-body" style="height:300px; overflow-y:scroll; color:#000">
                      <div class="tab-content">              
                        <div class="tab-pane fade active in" id="upload">
                          <?php
                            foreach ($parent as $key => $value) {
                              # code...
                              $kode = $value->id_post;
                              $name = $value->judul;
                              echo "<label  onclick=\"addtomenulis('".$kode."','".$name."')\"class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='$kode'><i></i> ".$name."</label>";
                              $this->method_call->call_child($kode);
                            }
                          ?>
                          
                        </div>
                      </div>
                     </div>
                    </section>
                  </div>
                  <div class="col-sm-6">
                    <section class="panel panel-default">
                      <header class="panel-heading ">
                      Structure of Menu
                      <button class="btn btn-success btn-sm pull-right">Submit </button>
                      </header>
                      <div class="panel-body"> 
                      <div class="dd" id="nestable1">
                        <ol class="dd-list" id="list-menu">
                          
                      </ol>
                      </div>

                      </div>
                    </section>
                  </div>
                </section>
              </section>
            </section>
