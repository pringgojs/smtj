        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">Add Link Referensi</h3>
                  </div>
                  <form id="formmenu" name="formmenu" action="<?=base_url('administrator/link/save/');?>" method="post" class="form-horizontal" >
					<section class="panel panel-default">
						<div class="panel-body">
							<div class="form-group">
					      		<label class="col-sm-2 control-label">Label</label>
					        	<div class="col-sm-10">
					            	<input class="form-control" type="text" required name="nama" id="nama" >
					        	</div>
					      	</div>
					      	<div class="line line-dashed b-b line-lg pull-in"></div>
					      	<div class="form-group">
					      		<label class="col-sm-2 control-label">Link</label>
					        	<div class="col-sm-10">
					            	<input class="form-control" type="text" required name="link" id="link" >
					        	</div>
					      	</div>
					      	
					    	<div class="line line-dashed b-b line-lg pull-in"></div>
						    <div class="form-group">
						    	<label class="col-sm-2 control-label">Root</label>
					         	<div class="col-sm-10">
						          <div class="btn-group m-r">
						          	  <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
						                 <span class="dropdown-label">Choose position </span> 
						                 <span class="caret"></span>
						              </button>
						              <ul class="dropdown-menu dropdown-select">
						              <li class="active"><a href="#"><input type="radio" value="0" checked="checked" name="root" id="root">(Make a root)</a></li>
						              	<?=$this->method_call->get_perent();?>
						              </ul> 
						            </div>
					            </div>
							</div>
					  
							 
							
							<div class="line line-dashed b-b line-lg pull-in"></div>
							    <div class="form-group">
							      <label class="col-sm-2 control-label">Order</label>
							        <div class="col-sm-10">
							            <input class="form-control" required type="number" name ="nomer_urut" maxlength="2"   id="nomer_urut"  >
							        </div>

							      </div>
					      
							
							      <div class="line line-dashed b-b line-lg pull-in"></div>
							      <div class="form-group">
							         <div class="col-sm-5 col-sm-offset-2">
							          <input type="submit" name="formmenu" class="btn btn-primary" id="simpan"  value="Save Link">
							          <img id="load" src='<?=base_url();?>asset/images/loading.gif' style='width:20px;margin:0px 5px;display:none'>
							         </div>
							      </div>
					      
					</div>
					</section>
					</form>
					
                </section>
              </section>

            </section>

        