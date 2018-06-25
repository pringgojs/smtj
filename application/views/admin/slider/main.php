        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">Slider</h3>
                  </div>

                  <section class="panel panel-default">
                  <form method="POST" id="cek-form" action="<?=base_url('administrator/menu/delete');?>"> 
                    <header class="panel-heading">
                      Data Slider 
                    </header>
                    <div class="row wrapper">
                      <div class="col-sm-5 m-b-xs">
                        <div class="btn-group">
                          <button type="submit" class="btn btn-sm btn-bg btn-default" data-toggle="tooltip" data-placement="bottom" data-title="Delete" data-original-title="" title="">
                            <i class="fa fa-trash-o"></i></button>
                        </div>
                         <a class="btn btn-sm btn-primary" id='apply' href="<?=base_url('administrator/slider/add');?>"> <i class="fa fa-plus"></i> Add menu </a>
                      </div>
                    </div>

                      <div class="table-responsive">
                        <table class="table table-striped b-t b-light">
                         <thead>
                          <tr>
                            <th width="20" valign="center"><label class="checkbox m-n i-checks"><input  id="cek" onClick="cek_all()" value="All" type="checkbox"><i></i></label></th>
                            <th rowspan="2"> Slider</th>

                          </tr>
                          </thead>
                          <tbody>
                            <?php $this->method_call->data();?>
                          </tbody>
                        </table>
                      </div>
                  </section>
                </section>
              </section>
            </section>