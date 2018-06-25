<!-- side content -->
            <aside class="aside-md bg-black hide" id="sidebar">
              <section class="vbox animated fadeInRight">
                <section class="scrollable">
                  <div class="wrapper"><strong>Recent Activity</strong></div>
                  <ul class="list-group no-bg no-borders auto">
                  <?php
                    foreach ($aktifitas as $key => $value) {
                      # code...
                      $user = $value->nama;
                      $akti = $user." ".$value->keterangan;
                      $tgl  = $value->tgl;
                    ?>
                    <li class="list-group-item">
                      <span class="fa-stack pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-success"></i>
                        <i class="fa fa-reply fa-stack-1x text-white"></i>
                      </span>
                      <span class="clear">
                        <a href="#"><?=$akti;?></a>
                        <small class="icon-muted">21 Januari 2016</small>
                      </span>
                    </li>
                  <?php } ?>
                    
                  </ul>
                  
                  
                </section>
              </section>              
            </aside>
            <!-- / side content -->
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
      </section>
    </section>
  </section>
  