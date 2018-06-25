        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                 <!--  <div class="m-b-md">
                   <h3 class="m-b-none">DEFAULT PAGE</h3>
                  </div> -->
                  <section class="hbox stretch">
                    <aside class="aside-lg bg-light lter b-r">
                      <section class="vbox">
                        <section class="scrollable">
                          <div class="wrapper">
                            <section class="panel no-border bg-primary lt">
                              <div class="panel-body">
                                <div class="row m-t-xl">
                                  <div class="col-xs-3 text-right padder-v">
                                    <a href="#" class="btn btn-primary btn-icon btn-rounded m-t-xl"><i class="i i-mail2"></i></a>
                                  </div>
                                  <div class="col-xs-6 text-center">
                                    <div class="inline">
                                      <div class="easypiechart" data-percent="75" data-line-width="6" data-bar-color="#fff" data-track-Color="#2796de" data-scale-Color="false" data-size="140" data-line-cap='butt' data-animate="1000">
                                        <div class="thumb-lg avatar">
                                          <img src="<?=base_url();?>asset/images/a0.png" class="dker">
                                        </div>
                                      </div>
                                      <div class="h4 m-t m-b-xs font-bold text-lt"><?=$nama;?></div>
                                      <small class="text-muted m-b"><?=$jabatan;?></small>
                                    </div>
                                  </div>
                                  <a href="<?=$edit;?>" class="col-xs-3 padder-v">
                                    <div  class="btn btn-primary btn-icon btn-rounded m-t-xl">
                                      <i class="fa fa-pencil text"></i>
                                      <i class="fa fa-pencil text-active"></i>
                                    </div>
                                  </a>
                                </div>
                                <div class="wrapper m-t-xl m-b">
                                  <div class="row m-b">
                                    <div class="col-xs-6 text-right">
                                      <small>Last login</small>
                                      <div class="text-lt font-bold"><?=$last_login;?></div>
                                    </div>
                                    <div class="col-xs-6">
                                      <small>Added by</small>
                                      <div class="text-lt font-bold"><?=$yg_menambahkan;?></div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-12 text-center">
                                      <small>Status</small>
                                      <div class="text-lt font-bold"><?=$status;?></div>
                                    </div>
                                    
                                  </div>
                                </div>
                              </div>
                              <footer class="panel-footer dk text-center no-border">
                                <div class="row pull-out">
                                  <div class="col-xs-3">
                                    <div class="padder-v">
                                      <span class="m-b-xs h3 block text-white"><?=$jml_post;?></span>
                                      <small class="text-muted">Post & News</small>
                                    </div>
                                  </div>
                                  <div class="col-xs-3 dker">
                                    <div class="padder-v">
                                      <span class="m-b-xs h3 block text-white"><?=$jml_pages;?></span>
                                      <small class="text-muted">Pages</small>
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="padder-v">
                                      <span class="m-b-xs h3 block text-white"><?=$jml_agenda;?></span>
                                      <small class="text-muted">Agenda</small>
                                    </div>
                                  </div>
                                  <div class="col-xs-3">
                                    <div class="padder-v">
                                      <span class="m-b-xs h3 block text-white"><?=$jml_anno;?></span>
                                      <small class="text-muted">Announcement</small>
                                    </div>
                                  </div>
                                </div>
                              </footer>
                            </section>
                          </div>
                        </section>
                      </section>
                    </aside>
                    <!-- end aside -->
                     <aside class="col-lg-4 b-l no-padder">
                        <section class="vbox">
                          <section class="scrollable">
                            <div class="wrapper">
                              <section class="panel panel-default">
                                <form>
                                  <textarea class="form-control no-border" rows="3" placeholder="What are you doing..."></textarea>
                                </form>
                                <footer class="panel-footer bg-light lter">
                                  <button class="btn btn-info pull-right btn-sm">POST</button>
                                  <ul class="nav nav-pills nav-sm">
                                    <li><a href="#"><i class="fa fa-camera text-muted"></i></a></li>
                                    <li><a href="#"><i class="fa fa-video-camera text-muted"></i></a></li>
                                  </ul>
                                </footer>
                              </section>
                              <section class="panel panel-default">
                                <h4 class="padder">Aktifitas Terakhir</h4>
                                <ul class="list-group">
                                <?=$this->method_call->aktifitas_terakhir();?>
                                </ul>
                              </section>
                              
                            </div>
                          </section>
                        </section>              
                      </aside>

                    <!-- end aside -->
                  </section>
                </section>
              </section>
            </section>