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
                   <h3 class="m-b-none">User</h3>
                  </div>
                  <form action="<?=base_url('administrator/profile/update');?>" name="simpanberita" id="simpanberita" method="post" class="form-horizontal" >
                    <section class="panel panel-default">
                      <div class="panel-body">
                      	<div class="form-group">
                            <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input required class="form-control" type="text" name="name" id="name" value="<?=$nama;?>">
                                <input type="hidden" name="kode" value="<?=$kode;?>">
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        
                        <div class="form-group">
                          <label class="col-sm-2 control-label" style="margin-top:10px">Username</label>
                            <div class="col-sm-10">
                              <input  style="margin-top:10px" class="form-control" value="<?=$username;?>" type="text" name ="username" id="username"  >
                            </div>
                        </div>
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" style="margin-top:10px">Password</label>
                            <div class="col-sm-10">
                              <input  style="margin-top:10px" class="form-control" type="password" name ="password" id="password"  >
                            </div>
                        </div>
                        
                        <div class="line line-dashed b-b line-lg pull-in"></div>
                        <div class="form-group">
                           <div class="col-sm-4 col-sm-offset-2">
                            <input type="submit" name="simpanberita" id="simpanberita" class="btn btn-sm btn-primary" Value="Update User"/>
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
                              
                            </div>
                            <div class="panel-heading b-b">
                              <input type="hidden" class="form-control" id="url"/>
                              
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
  $(".baris").removeClass('bg-light');
  $(".baris-"+kode).addClass('bg-light');
  $('#url').val(link);
  
}
function url_select(){
  url = $('#url').val();
  $('#link').val(url);
  notif(false);
}
</script>
        