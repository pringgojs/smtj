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
  #map_canvas{
    display: none;
  }
  #fiturImages img{
    max-width: 100%;
    height: auto;
    width: auto;
  }
  .hide_link{
    display: none;
  }
  .show_link{
    display: block;
  }

</style>
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  
                      <section class="row m-b-md">
                        <div class="col-sm-6">
                          <h3 class="m-b-xs text-black">Dashboard</h3>
                          <small>Welcome back,  di Adminpanel AKNP System</small>
                        </div>
                        <div class="col-sm-6 text-right text-left-xs m-t-md">
                          
                          <a href="#" class="btn btn-icon b-2x btn-default btn-rounded hover"><i class="i i-bars3 hover-rotate"></i></a>
                          <a href="#nav, #sidebar" class="btn btn-icon b-2x btn-info btn-rounded" data-toggle="class:nav-xs, show">
                            <i class="fa fa-bars"></i>
                          </a>
                        </div>
                      </section>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="panel b-a">
                           <div class="row m-n">
                            <div class="col-md-6 b-b b-r">
                              <a href="<?=base_url('administrator/news/add');?>" class="block padder-v hover">
                               <span class="i-s i-s-2x pull-left m-r-sm">
                                 <i class="i i-hexagon2 i-s-base text-danger hover-rotate"></i>
                                 <i class="i  i-stack i-1x text-white"></i>
                               </span>
                               <span class="clear">
                                 <span class="h3 block m-t-xs text-danger"><?=$jumlah_post;?></span>
                                 <small class="text-muted text-u-c">New Post</small>
                                </span>
                              </a>
                            </div>
                            <div class="col-md-6 b-b">
                              <a href="<?=base_url('administrator/pages/add');?>" class="block padder-v hover">
                               <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-success-lt hover-rotate"></i>
                                <i class="i  i-popout i-sm text-white"></i>
                               </span>
                               <span class="clear">
                                <span class="h3 block m-t-xs text-success"><?=$jumlah_page;?></span>
                                <small class="text-muted text-u-c">New page</small>
                               </span>
                              </a>
                            </div>
                            <div class="col-md-6 b-b b-r">
                              <a href="<?=base_url('administrator/research/add');?>" class="block padder-v hover">
                               <span class="i-s i-s-2x pull-left m-r-sm">
                                 <i class="i i-hexagon2 i-s-base text-info hover-rotate"></i>
                                 <i class="i i-plus2 i-1x text-white"></i>
                               </span>
                               <span class="clear">
                                 <span class="h3 block m-t-xs text-info"><?=$research_view;?></span>
                                 <small class="text-muted text-u-c">Research</small>
                                </span>
                              </a>
                            </div>
                            <div class="col-md-6 b-b">
                              <a href="<?=base_url('administrator/announcement/add');?>" class="block padder-v hover">
                               <span class="i-s i-s-2x pull-left m-r-sm">
                                <i class="i i-hexagon2 i-s-base text-primary hover-rotate"></i>
                                <i class="i i-calendar i-sm text-white"></i>
                               </span>
                               <span class="clear">
                                <span class="h3 block m-t-xs text-primary"><?=$Announcement;?></span>
                                <small class="text-muted text-u-c">Announcement</small>
                               </span>
                              </a>
                            </div>
                                        
                           </div>
                         </div>
                       </div>
                      <!-- SocMed -->
                        <div class="col-md-4">
                          <div class="panel b-a">
                            <div class="panel-heading no-border bg-primary lt text-center">
                              <a href="#">
                                <i class="fa fa-facebook fa fa-3x m-t m-b text-white"></i>
                              </a>
                            </div>
                          <div class="padder-v text-center clearfix">                            
                            <div class="col-xs-6 b-r">
                              <div class="h3 font-bold">42k</div>
                                <small class="text-muted">Friends</small>
                            </div>
                            <div class="col-xs-6">
                              <div class="h3 font-bold">90</div>
                                <small class="text-muted">Feeds</small>
                            </div>
                            </div>
                          </div>
                        </div>
                      
                      <!-- pagging-->

                      <div class="col-md-4">
                         <section class="panel panel-info">
                              <div class="panel-body">
                                <div class="clear">
                                  <a href="#" class="text-info">Pagging frontend</a>
                                  <input onblur="updatepagging('pagging_frontend')" class="form-control" id="pg_pagging_frontend" type="number" value="<?php echo $this->method_call->cek_setting('pagging_frontend');?>"> 
                                  <input type="hidden" name="tmp_pg_pagging_frontend" value="<?php echo $this->method_call->cek_setting('pagging_frontend');?>">       
                                </div>
                                <div class="clear">
                                  <a href="#" class="text-info">Pagging backend</a>
                                  <input onblur="updatepagging('pagging_backend')" class="form-control" id="pg_pagging_backend" type="number" value="<?php echo $this->method_call->cek_setting('pagging_backend');?>"> 
                                  <input type="hidden" name="tmp_pg_pagging_backend" value="<?php echo $this->method_call->cek_setting('pagging_backend');?>">       
                                </div>
                              </div>
                          </section>

                      </div> 
                      </div>
                      <!-- End -->
                      <!-- COntact Ynga masuk -->
                      <div class="row">
                        <div class="col-md-4">
                          <section class="panel b-a">
                            <div class="panel-heading b-b">
                                <span class="badge bg-warning pull-right"><?=$jumlah_contact;?></span>
                                <a href="#" class="font-bold">Pesan </a>
                            </div>
                            <?php
                              foreach ($contact as $key => $value) {
                                # code...
                                $nama = $value->nama;
                                $email = $value->email;
                                $subject = $value->subject;
                                $pesan = $value->pesan;
                                $date = $value->date;

                              
                            ?>
                            <ul class="list-group list-group-lg no-bg auto">
                              <a href="#" class="list-group-item clearfix">
                                <span class="pull-left thumb-sm avatar m-r">
                                 <img src="<?=base_url();?>asset/images/a0.png" alt="...">
                                   <i class="on b-white bottom"></i>
                                </span>
                                <span class="clear">
                                  <span><?=$email;?></span>
                                  <small class="text-muted clear text-ellipsis"><?=$pesan;?></small>
                                  <small class="text-success clear text-ellipsis pull-right"><?=$date;?></small>
                                </span>
                              </a>
                            </ul>
                            <?php } ?>
                            
                          </section>
                        </div>
                        
                        <form method="post" name="updatewebsite" id="updatewebsite" action="">
                          <div class="col-sm-4">
                            <section class="panel panel-default">
                              <header class="panel-heading bg-light no-border">Front Settings
                                <div class="clearfix">
                                  
                                  <div id="preview" onclick="$('#foto').click();" style="border:1px dashed #CCC; width:100%;  margin:10px 10px 10px 0px">
                                    <img id="previewing" src="<?=base_url();?>asset/images/ireng.png" class="imglogo" />
                                    <span id="notif"></span>
                                  </div>
                                </div>
                              </header>
                             
                              <div class="list-group no-radius alt">
                                <a class="list-group-item" href="#" onclick="seting()">
                                  <small class="text-success clear text-ellipsis pull-right"><?php echo $this->method_call->cek_setting('nama_web');?></small>
                                  <i class="fa fa-font icon-muted"></i> 
                                    Tittle web
                                </a>
                                
                              </div>
                              <div class="list-group no-radius alt">
                                <a class="list-group-item" href="#" onclick="seting()">
                                  <span class="badge"><?php echo $this->method_call->cek_setting('telepon');?></span>
                                  <i class="i i-phone  icon-muted"></i> 
                                    Telepon
                                </a>
                                
                              </div>
                              <div class="list-group no-radius alt">
                                <a class="list-group-item" onclick="seting()">
                                   <span class="badge"><?php echo $this->method_call->cek_setting('fax');?></span>
                                  <i class="i  i-phone2 icon-muted"></i> 
                                    Fax
                                </a>
                                
                              </div>
                              <div class="list-group no-radius alt">
                                <a class="list-group-item" onclick="seting()">
                                   <small class="text-success clear text-ellipsis pull-right"><?php echo $this->method_call->cek_setting('email');?></small>
                                  <i class="i  i-mail2 icon-muted"></i> 
                                    Email
                                </a>
                                
                              </div>
                              <div class="list-group no-radius alt">
                              <a class="list-group-item " href="#" onclick="seting()">
                               
                                
                                  
                                  <i class="i i-local icon-muted"></i> 
                                    Address<br>
                                    <small class="text-success ">
                                   <?php echo $this->method_call->cek_setting('alamat');?>
                                  </small>
                                </a>
                                
                              </div>
                            </section>
                           
                          </div>
                          </form>
                          
                      <!-- /chat -->            
                        <div class="col-md-4">
                          <section class="panel panel-default">
                            
                            <header class="panel-heading">                    
                               Statistic Web
                            </header>
                            <section class="panel-body slim-scroll" data-height="230px" data-size="10px">
                              
                              <section id="auth-button"></section>
                              <section id="view-selector"></section>
                              <section id="timeline"></section>

                            </section>


                          </section>
                        </div>
                      <!-- END KOMENT -->
                      </div>

               

                </section>
              </section>
              <!--lightbox-->
                <div class='blackout2'></div>
                <div class='blackflash2'>
                    <div class='canvasshow2' style="margin-top:-210px;">
                        <div class="canvasmain2" style="width:1000px; overflow:hidden; margin:0 auto; padding:10px 0px 20px;">
                        <div class="title">Front Setting</div>
                        <div class="cols-6">
                          <section class="panel panel-default">
                            <div class="panel-body" id="h-body" style="height:300px; overflow-y:scroll; color:#000">
                              <form name="form-setting" method="post" action="<?=base_url('administrator/settingsave');?>">
                                 <div class="col-sm-8 m-b-xs">
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" > Tittle</label>
                                      <div class="col-sm-6">
                                        <input type="text" id="judul" value="<?php echo $this->method_call->cek_setting('nama_web');?>" name="judul" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-8 m-b-xs">
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" > Phone</label>
                                      <div class="col-sm-6">
                                        <input type="text" id="tlp" name="tlp" value="<?php echo $this->method_call->cek_setting('telepon');?>" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-8 m-b-xs">
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" > Fax</label>
                                      <div class="col-sm-6">
                                        <input type="text" id="fax" name="fax" value="<?php echo $this->method_call->cek_setting('fax');?>" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-8 m-b-xs">
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" > Email</label>
                                      <div class="col-sm-6">
                                        <input type="text" id="email" name="email" value="<?php echo $this->method_call->cek_setting('email');?>" class="form-control">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-8 m-b-xs">
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label" > Address</label>
                                      <div class="col-sm-6">
                                        <textarea class="form-control" name="alamat"><?php echo $this->method_call->cek_setting('alamat');?></textarea>
                                      </div>
                                    </div>
                                  </div>
                              
                            </div>

                            <div class="panel-heading">
                           
                              <button class="btn btn-primary" type="submit" name="form-setting">Save</button>
                              </form>
                              <button class="btn btn-default" onclick="notif(false)" >Cancel</button>
                            </div>
                          </section>

                        </div>
                        
                          <div class="contentshow">
                         
                          </div>
                        </div>
                    </div>
                </div>
                <!--/.lightbox-->
            </section>
            <script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
<script type="text/javascript">
<script>
(function(w,d,s,g,js,fjs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}};
  js=d.createElement(s);fjs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};
}(window,document,'script'));
</script>

<script>
gapi.analytics.ready(function() {

  // Step 3: Authorize the user.

  var CLIENT_ID = 'UA-84782859-1';

  gapi.analytics.auth.authorize({
    container: 'auth-button',
    clientid: CLIENT_ID,
  });

  // Step 4: Create the view selector.

  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector'
  });

  // Step 5: Create the timeline chart.

  var timeline = new gapi.analytics.googleCharts.DataChart({
    reportType: 'ga',
    query: {
      'dimensions': 'ga:date',
      'metrics': 'ga:sessions',
      'start-date': '30daysAgo',
      'end-date': 'yesterday',
    },
    chart: {
      type: 'LINE',
      container: 'timeline'
    }
  });

  // Step 6: Hook up the components to work together.

  gapi.analytics.auth.on('success', function(response) {
    viewSelector.execute();
  });

  viewSelector.on('change', function(ids) {
    var newIds = {
      query: {
        ids: ids
      }
    }
    timeline.set(newIds).execute();
  });
});
</script>
</script>