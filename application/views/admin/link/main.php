        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">Link Explorer</h3>
                  </div>
                  <section class="panel panel-default">
                   <form method="POST" id="cek-form" action="<?=base_url('administrator/link/delete');?>"> 
                  <header class="panel-heading">
                                 Link Data
                                </header>
                                <div class="row wrapper">
                                  <div class="col-sm-5 m-b-xs">
                                    <div class="btn-group">
                                      <button type="submit" class="btn btn-sm btn-bg btn-default" data-toggle="tooltip" data-placement="bottom" data-title="Delete" data-original-title="" title="">
                                        <i class="fa fa-trash-o"></i></button>
                                    </div>
                                     <a class="btn btn-sm btn-primary" id='apply' href="<?=base_url('administrator/link/add');?>"> <i class="fa fa-plus"></i> Add link </a>
                                  </div>
                                  
                                </div>
                               
                                <div class="table-responsive">
                                  <table class="table  b-t b-light">
                                    <thead>
                                      <tr>
                                        <th width="20"><label class="checkbox m-n i-checks"><input  id="cek" onClick="cek_all()" value="All" type="checkbox"><i></i></label></th>
                                        <th class="th-sortable" data-toggle="class">Label
                                          <span class="th-sort">
                                            <i class="fa fa-sort-down text"></i>
                                            <i class="fa fa-sort-up text-active"></i>
                                            <i class="fa fa-sort"></i>
                                          </span>
                                        </th>
                                        
                                        <th>Link</th>
                                        <th width="30">Order</th>
                                        <th width="30">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      
                                        <?php $this->method_call->datamenu();?>
                                    </tbody>
                                  </table>
                                   </form>
                                </div>
                               </section>
    
                </section>
              </section>
            </section>