<style type="text/css">
  #map_canvas{
    height: 200px
  }
  .loader{
    display: none;
    border: 1px solid #BCBEBF;
    position:absolute;
    margin:20px 40% 20px 40%;
    padding: 10px 10px 10px 40px;
    background: url("<?=base_url('asset/images/712.gif');?>") no-repeat #E5E5E5 5px 10px;
  }
</style>
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                 <div class="loader">Checking data ...</div>
                  <div class="m-b-md">
                   <h3 class="m-b-none">Module</h3>
                  </div>
                  <form action="<?=base_url('administrator/module/update');?>" name="simpanberita" id="simpanberita" method="post" class="form-horizontal" >
                    <section class="panel panel-default">
                      <div class="panel-body">
                      	<div class="form-group">
                            <label class="col-sm-2 control-label">Label</label>
                            <div class="col-sm-10">
                                <input required value="<?=$label;?>" class="form-control" type="text" name="label" id="label" >
                                 <input required value="<?=$kode;?>" class="form-control" type="hidden" name="kode" id="kode" >
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Root</label>
                           <div class="col-sm-10">              
                            <div class="btn-group m-r">
                              <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                                <span class="dropdown-label">Parent</span> 
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu dropdown-select">
                                <?=$this->method_call->cek_parent1($posisi);?>
                              </ul>
                            </div>
                            <div class="btn-group m-r" >
                               <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                                <span class="dropdown-label">Parent 2</span> 
                                <span class="caret"></span>
                               </button>
                               <ul class="dropdown-menu dropdown-select" id="perent2">
                                <?=$this->method_call->cek_root($posisi, $perent);?>
                               </ul>
                            </div>
                           </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" style="margin-top:10px">Link</label>
                            <div class="col-sm-10">
                                <ul class="nav navbar-nav hidden-xs" onclick="notif('link')">
                                  <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                      <i class="fa fa-link"></i>
                                    </a>
                                  </li>
                                </ul>
                                <div class="col-sm-10"> <input value="<?=$link;?>" readonly="" style="margin-top:10px" class="form-control" type="text" name ="link" id="link"  >
                                <input type="hidden" name="id_module" value="<?=$id_modul;?>" id="id_module">
                                </div>
                            </div>
                        </div>

                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" style="margin-top:10px">Choose Icon</label>
                          <div class="col-sm-10">
                            <ul class="nav navbar-nav hidden-xs">
                              <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  <i class="i i-grid"></i>
                                </a>
                                <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
                                  <div class="row m-l-none m-r-none m-t m-b text-center">
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-support text-primary-lt')">
                                          <span class="m-b-xs block">
                                            <i class="i i-support i-2x text-primary-lt"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon(' i-home text-danger-lt')">
                                          <span class="m-b-xs block">
                                            <i class="i  i-home i-2x text-danger-lt"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-user2 text-success-lt')">
                                          <span class="m-b-xs block">
                                            <i class="i i-user2 i-2x text-success-lt"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-slider text-info-lt')">
                                          <span class="m-b-xs block">
                                            <i class="i i-slider i-2x text-info-lt"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-images text-muted')">
                                          <span class="m-b-xs block">
                                            <i class="i i-images i-2x text-muted"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-stack text-warning-lter')">
                                          <span class="m-b-xs block">
                                            <i class="i i-stack i-2x text-warning-lter"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-settings text-info-lter')">
                                          <span class="m-b-xs block">
                                            <i class="i i-settings i-2x text-info-lter"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-stats text-danger-lt')">
                                          <span class="m-b-xs block">
                                            <i class="i i-stats i-2x text-danger-lt"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-data text-warning-lter')">
                                          <span class="m-b-xs block">
                                            <i class="i i-data i-2x text-warning-lter"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-statistics ext-danger-lter')">
                                          <span class="m-b-xs block">
                                            <i class="i i-statistics i-2x text-danger-lter"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-grid text-success-lter')">
                                          <span class="m-b-xs block">
                                            <i class="i  i-grid i-2x text-success-lter"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-grid2 text-warning-lter')">
                                          <span class="m-b-xs block">
                                            <i class="i i-grid2 i-2x text-warning-lter"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-share text-danger-lter')">
                                          <span class="m-b-xs block">
                                            <i class="i i-share i-2x text-danger-lter"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i-circle-o text-info-lter')">
                                          <span class="m-b-xs block">
                                            <i class="i  i-circle-o i-2x text-info-lter"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i i-circle-sm text-danger')">
                                          <span class="m-b-xs block">
                                            <i class="i i-circle-sm text-danger"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i i-circle-sm text-primary')">
                                          <span class="m-b-xs block">
                                            <i class="i i-circle-sm text-primary"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i i-circle-sm  text-warning')">
                                          <span class="m-b-xs block">
                                            <i class="i i-circle-sm text-warning"></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>
                                    <div class="col-xs-2">
                                      <div class="padder-v">
                                        <a onclick="pilih_icon('i i-dot ')">
                                          <span class="m-b-xs block">
                                            <i class="i i-dot "></i>
                                          </span>
                                          <small class="text-muted"></small>
                                        </a>
                                      </div>
                                    </div>

                                  </div>
                                </section>
                              </li>
                            </ul>
                            <div class="col-sm-10"> <input readonly="readonly" value="<?=$ikon;?>" class="form-control" style="margin-top:10px" name ="icon" id="icon"  >
                               
                            </div>
                          </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Order</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="<?=$urut;?>" required type="text" name ="nomer_urut" size="16"  id="nomer_urut"  >
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <div class="col-sm-4 col-sm-offset-2">
                            <input type="submit" name="simpanberita" id="simpanberita" class="btn btn-sm btn-primary" Value="Publish News"/>
                           </div>
                        </div>
                      </div>
                    </section>
                  </form>
                  </section>
                  <!--lightbox-->
                <div class='blackout2'></div>
                <div class='blackflash2'>
                    <div class='canvasshow2' style="margin-top:-210px;">
                        <div class="canvasmain2" style="width:1000px; overflow:hidden; margin:0 auto; padding:10px 0px 20px;">
                        <div class="title">Choose URL</div>
                        <div class="cols-6">
                          <section class="panel panel-default">
                            <header class="panel-heading text-right bg-light">
                              <span class="hidden-sm">
                                <i onclick="notif(false)" class="i i-cross2"></i>
                              </span>
                            </header>
                            <div class="panel-body" style="height:300px; overflow-y:scroll; color:#000">
                              <?php $this->method_call->data_modul_admin();?>
                            </div>
                            <div class="panel-heading b-b">
                              <input type="hidden" class="form-control" id="url"/>
                              <input type="hidden" class="form-control" id="id_modul_a"/>
                              <button class="btn btn-primary" onclick="url_select()">Select URL</button>
                              <button class="btn btn-default" onclick="notif(false)" >Cancel</button>
                            </div>
                          </section>

                        </div>
                        
                          <div class="contentshow">
                         
                          </div>
                        </div>
                    </div>
                <!--/.lightbox-->
                </section>
              </section>
            </section>
          </section>
<script type="text/javascript">
function select_link_modul (link, kode) {
  var kode;
  
  $(".baris").removeClass('bg-light');
  $(".baris-"+kode).addClass('bg-light');
  $('#url').val(link);
  $('#id_modul_a').val(kode);
}
function url_select(){
  url = $('#url').val();
  id  = $('#id_modul_a').val();
  $('#link').val(url);
  $('#id_module').val(id);
  notif(false);
}
</script>