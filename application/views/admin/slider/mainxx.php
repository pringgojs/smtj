  
            
                
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">Add Slider</h3>
                  </div>
                  <form id="formmenu" name="formmenu" action="<?=base_url('administrator/slider/save/');?>" method="post" class="form-horizontal" >
          					<section class="panel panel-default">
          						<div class="panel-body">
          							
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Image</label>
                           <div class="col-sm-10">
                                <div class="input-group m-b">
                                  <span class="input-group-btn">
                                    <span class="btn btn-default" onclick="popUp('file')"><i class="fa fa-link"></i></span>
                                  </span>
                                  <input class="form-control" required type="text" readonly="" name ="link" id="link"  >
                                </div>
                           </div>
                        </div>
          							<div class="form-group">

          					      		<label class="col-sm-2 control-label">Label</label>
          					        	<div class="col-sm-10">
          					            	<input class="form-control" type="text" required name="nama" id="nama" >
          					        		<input type="text" name="id_post" id="id_post">
          					        		<input type="text" placeholder="Type a URL" name="key" id="key" class="form-control">
                                          	
          					        	</div>
          					      	</div>
          					      	<div class="line line-dashed b-b line-lg pull-in"></div>
          					      	<div class="form-group">
          					      		<label class="col-sm-2 control-label">Description </label>
          					        	<div class="col-sm-10">
          					        	
          					            	<textarea class="form-control" rows="5" type="text" name="desc" id="desc" ></textarea>
          				        		</div>
          					      	</div>

          					      	<div class="line line-dashed b-b line-lg pull-in"></div>
          							  <div class="form-group">
          							    <label class="col-sm-2 control-label">Link</label>
          							      <div class="col-sm-10">
          							      	<div class="input-group m-b">
          							      		<span class="input-group-btn">
          							      			<span class="btn btn-default" onclick="popUp('link')"><i class="fa fa-link"></i></span>
          							      		</span>
          							      		<input class="form-control" required type="text" readonly="" name ="link" id="link"  >
          							      	</div>
          							         
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
                </section>
					    


					 <!--lightbox-->
          
                  
                <div class='blackout2'></div>
                <div class='blackflash2'>
<script type="text/javascript">
                  Dropzone.options.formFile = {
                        dictDefaultMessage: "<div class='btn btn-default btn-large'><i class='fa fa-upload'></i> Drop images file here to upload</div>",
                        acceptedFiles: ".jpeg, .jpg, .png, .gif",
                        maxFilesize: 5, //MB
                          success: function(file) {
                            if (file.previewElement) {
                              var bulusan = $(".bulusan").val();
                              var numplus = parseInt(bulusan)+1;
                              $(".bulusan").val(numplus);
                               $('#type_file').val("Images");
                              //alert(bulusan);
                              function tambahclass()
                              {
                                file.previewElement.classList.add("dz-success");
                                file.previewElement.classList.add("bulusan"+numplus);
                                file.previewElement.setAttribute('onclick','bulusan(\''+numplus+'-'+file.name+'\',\''+numplus+'\')');
                              }
                              return tambahclass();
                            }
                          },
                    };
                

                  </script>
                    <div class='canvasshow2' style="margin-top:-210px;">
                        <div class="canvasmain2" style="width:1000px; overflow:hidden; margin:0 auto; padding:10px 0px 20px;">
                        <div class="title">Add New File</div>
                        <div class="cols-6">
                          <section class="panel panel-default">
                            <header class="panel-heading text-right bg-light">
                              <ul class="nav nav-tabs pull-left">
                                <li class="active"><a href="#upload" data-toggle="tab"><i class="fa fa-upload text-muted"></i> Upload</a></li>
                                <li class="" onclick="loadFilePopup('Images')"><a href="#files" data-toggle="tab"><i class="fa fa-folder-open text-muted"></i> From your files</a></li>
                                
                              </ul>
                              <span class="hidden-sm">
                                <i onclick="notif(false)" class="i i-cross2"></i>
                              </span>
                            </header>
                            <div class="panel-body" style="height:300px; overflow-y:scroll; color:#000">
                              <div class="tab-content">              
                                <div class="tab-pane fade active in" id="upload">
                                <form action="<?php echo base_url() ?>administrator/news/upload" id="formFile" class="dropzone">
                                      <div class="fallback">
                                      <input name="file" type="file" multiple />
                                      </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="files">
                                  <br>
                                  <div id="hasil-file"></div>
                                </div>
                                
                              </div>
                            </div>

                            <div class="panel-heading b-b">
                            <?php 
                                $id = $this->method_call->max_file();
                            ?>
                              <input type="hidden" class="form-control" id="url_file"/>
                              <input type="hidden" class="form-control" id="nama_file"/>
                              <input type="hidden" class="form-control" id="type_file"/>
                              <input type="text" class="form-control" id="id_file"/>
                              <input type="hidden" name="key" id="key">
                              <input type="text" class="bulusan" value="<?=$id;?>">
                              <button class="btn btn-primary" onclick="selectUrlSlider()">Select File</button>
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
              </section>

            </section>
