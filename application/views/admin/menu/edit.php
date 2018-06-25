        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">Add New Menu</h3>
                  </div>
                  <form id="formmenu" name="formmenu" action="<?=base_url('administrator/menu/update/');?>" method="post" class="form-horizontal" >
					<section class="panel panel-default">
						<div class="panel-body">
							<div class="form-group">
					      		<label class="col-sm-2 control-label">Label for Lang-Indo</label>
					        	<div class="col-sm-10">
					        	<input type="hidden" name="id" value="<?=$kode;?>">
					            	<input class="form-control" value="<?=$nama;?>" type="text" required name="nama" id="nama" >
					        		<input type="hidden" name="id_post" id="id_post" value="<?=$id_post;?>">
					        		<input type="hidden" value="<?=$key;?>" placeholder="Type a URL" name="key" id="key" class="form-control">
                                	
					        	</div>
					      	</div>
					      	<div class="line line-dashed b-b line-lg pull-in"></div>
					      	<div class="form-group">
					      		<label class="col-sm-2 control-label">Label for Lang-Eng</label>
					      		<div class="col-sm-10">
					            	<input class="form-control" type="text" value="<?=$name_eng;?>" required name="eng" id="eng" >
								</div>
					      	</div>
					      	<div class="line line-dashed b-b line-lg pull-in"></div>
					      	<div class="form-group">
					      		<label class="col-sm-2 control-label">Description </label>
					        	<div class="col-sm-10">

					            	<textarea class="form-control" rows="5" type="text" name="desc" id="desc" ><?=$deskripsi;?></textarea>
				        		</div>
					      	</div>

					      	<div class="line line-dashed b-b line-lg pull-in"></div>
							  <div class="form-group">
							    <label class="col-sm-2 control-label">Link Menu</label>
							      <div class="col-sm-10">
							      	<div class="input-group m-b">
							      		<span class="input-group-btn">
							      			<span class="btn btn-default" onclick="notif('URL')"><i class="fa fa-eye"></i></span>
							      		</span>
							      		<input class="form-control" value="<?=$link;?>" required type="text" readonly="" name ="link" id="link"  >
							      	</div>
							         
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
						             <?php $this->method_call->pilih_posisi($posisi);?>
						            </div>
						              <div class="btn-group m-r" id="menucabang">
							             
							             	<?php $this->method_call->child_menu_of_parent($posisi,$induk);?>
							             
						              </div>
						              <img id="loading" src='<?=base_url();?>asset/images/loading.gif' style='width:20px;margin:0px 5px;display:none'>
						          </div>
							</div>
					  
							 
							
							<div class="line line-dashed b-b line-lg pull-in"></div>
							    <div class="form-group">
							      <label class="col-sm-2 control-label">Order</label>
							        <div class="col-sm-10">
							            <input class="form-control" required type="number" value="<?=$urut;?>" name ="nomer_urut" maxlength="2"   id="nomer_urut"  >
							        </div>

							      </div>
					      
							
							      <div class="line line-dashed b-b line-lg pull-in"></div>
							      <div class="form-group">
							         <div class="col-sm-5 col-sm-offset-2">
							          <input type="submit" name="formmenu" class="btn btn-primary" id="simpan"  value="Save Menu">
							          <img id="load" src='<?=base_url();?>asset/images/loading.gif' style='width:20px;margin:0px 5px;display:none'>
							         </div>
							      </div>
					      
					</div>
					</section>
					</form>
					<!--lightbox-->
                <div class='blackout2'></div>
                <div class='blackflash2'>
                    <div class='canvasshow2' style="margin-top:-210px;">
                        <div class="canvasmain2" style="width:1000px; overflow:hidden; margin:0 auto; padding:10px 0px 20px;">
                        <div class="title">Select a URL</div>
                        <div class="cols-6">
                          <section class="panel panel-default">
                            <header class="panel-heading text-right bg-light">
                              <ul class="nav nav-tabs pull-left">
                                <li class="active"><a href="#page" data-toggle="tab"> Pages</a></li>
                                <li class=""><a href="#news" data-toggle="tab"> Event and News</a></li>
                                <li class=""><a href="#files" data-toggle="tab"> Your Files</a></li>
                                <li class=""><a href="#custom" onclick="opsiLinkCustom()" data-toggle="tab"> Custome URL</a></li>
                                
                              </ul>
                              <span class="hidden-sm">
                                <i onclick="notif(false)" class="i i-cross2"></i>
                              </span>
                            </header>
                            <div class="panel-body" style="height:300px; overflow-y:scroll; color:#000">
                              <div class="tab-content">              
                                <div class="tab-pane fade active in" id="page">
                                	<div class="table-responsive">
	                                  <table class="table  b-t b-light">
	                                    <thead>
	                                      <tr>
	                                      	<th width="20">No.</th>
	                                      	<th>Title Page</th>
	                                      	<th>Link</th>
	                                      </tr>
	                                    </thead>
	                                    <tbody>
	                                    <?php
	                                	 $no = 1;
				                            foreach ($parent as $key => $value) {
				                              # code...
				                              $kode = $value->id_post;
				                              $name = $value->judul;
				                              $link = $value->link_asli;
				                              echo "<tr class='baris baris-halaman-$kode' onclick=\"selectRow('".$link."','".$kode."','post')\">
		                                    		<td><b>".$no."</b></td>
		                                    		<td><b>".$name."</b></td>
		                                    		<td><b>".$link."</b></td>
		                                    	</tr>";
				                              
				                              $this->method_call->call_child_table($kode);
				                            $no++;
				                            }
				                          ?>
	                                    	
	                                    </tbody>
	                                  </table>
	                                </div>
                                	 
                                </div>
                                <div class="tab-pane fade" id="news">
                                	<div class="table-responsive">
	                                  <table class="table  b-t b-light">
	                                    <thead>
	                                      <tr>
	                                      	<th width="20">No.</th>
	                                      	<th>Title News</th>
	                                      	<th>Link</th>
	                                      </tr>
	                                    </thead>
	                                    <tbody>
	                                    <?php
	                                	 $no = 1;
				                            foreach ($news as $key => $value) {
				                              # code...
				                              $kode = $value->id_post;
				                              $name = $value->judul;
				                              $link = $value->link_asli;
				                              echo "<tr class='baris baris-halaman-$kode' onclick=\"selectRow('".$link."','".$kode."','post')\">
		                                    		<td>".$no."</td>
		                                    		<td>".$name."</td>
		                                    		<td>".$link."</td>
		                                    	</tr>";
				                              
				                              //$this->method_call->call_child_table($kode);
				                            $no++;
				                            }
				                          ?>
	                                    	
	                                    </tbody>
	                                  </table>
	                                </div>
                                </div>
                                <div class="tab-pane fade" id="files">
                                	 <?php $this->method_call->view_tabel_files();?>
                                </div>
                                <div class="tab-pane fade" id="custom">
                                	<input type="text" placeholder="Type a URL" name="url" id="url" class="form-control"><br>
                                	
                                </div>
                              </div>

                            </div>
                            <div class="panel-heading b-b">
                              	
                            	<button class="btn btn-primary" onclick="selectUrlMenu()">Select</button>
                            	<button class="btn btn-default" onclick="notif()">Cancel</button>
                            </div>
                          </section>
                        </div>
                    </div>
                </div>
                <!-- LIGHBOX--> 
                </section>
              </section>

            </section>

            
<script type="text/javascript">
  function ambil_cabang(pos){
	$("#loading").css("display","inline");
  	$.ajax({
	    url:homepage+"administrator/menu/posisi/?pos="+pos,
	    cache:true,
	    success: function(a,isi,b){
	    	
	      $("#menucabang").html(a+isi+b);
	      $("#loading").css("display","none");
	    }
  	});

}</script>
