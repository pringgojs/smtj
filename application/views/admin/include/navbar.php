<!-- nav -->                 
                <?php
                  $get = $this->uri->segment(1);
                  if($get == 'files'){ $files = 'active';}else{ $files = ''; }

                  if($get == 'category'){ $category = 'active';}else{ $category = ''; }
                ?> 
                <nav class="nav-primary hidden-xs">
                <?php $this->method_call->cek_modul_0_0();?>
                
                </nav>
                <!-- / nav -->
              </div>
            </section>

            <footer class="footer hidden-xs no-padder text-center-nav-xs">
              <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                <i class="i i-logout"></i>
              </a>
              <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                <i class="i i-circleleft text"></i>
                <i class="i i-circleright text-active"></i>
              </a>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
            