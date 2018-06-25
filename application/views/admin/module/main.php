        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">Module</h3>
                  </div>

                <section class="panel panel-default">
                  <header class="panel-heading">
                    Module data <span class='badge bg-info'></span>
                  </header>
              <form method="POST" id="cek-form" name="action" action="<?=base_url('administrator/module/delete');?>"> 
                <div class="row wrapper">
                  <div class="col-sm-5 m-b-xs">
                     <button type="submit" class="btn btn-sm btn-default" id='apply'  > <i class="i i-trashcan"></i> </button>
                     <a href="<?=base_url('administrator/module/add');?>" class="btn btn-sm btn-primary"> <i class="fa fa-plus"></i> Add Module</a>
                  </div>
                  <div class="col-sm-4 m-b-xs">
                    
                  </div>
                  <div class="col-sm-3">
                    <div class="input-group">
                      <input type="text" id="txtcari" class="input-sm form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button class="btn btn-sm btn-default" onclick="cari('module')" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
               
                <div class="table-responsive">
                  <table class="table table-striped b-t b-light">
                        <thead>
                          <tr>
                            <th width="20"><label class="checkbox m-n i-checks"><input  id="cek" onClick="cek_all()" value="All" type="checkbox"><i></i></label></th>
                            <th width="20%" class="th-sortable" data-toggle="class">Label
                              <span class="th-sort">
                                <i class="fa fa-sort-down text"></i>
                                <i class="fa fa-sort-up text-active"></i>
                                <i class="fa fa-sort"></i>
                              </span>
                            </th>
                            <th align='center'>Link</th>
                            <th align='center'>Order</th>
                            <th align='center'>Edit</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php $this->method_call->data(); ?>
                    </tbody>
                  </table>
                   
                </div>
                </form>
                <footer class="panel-footer">
                  <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4 text-center">
                      <small class="text-muted inline m-t-sm m-b-sm">page 
                      </small></small>
                    </div>
                    <div class="col-sm-4 text-right text-center-xs">                
                       
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