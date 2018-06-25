
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
	                                    	$this->method_call->pages();?>
	                                    	
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
	                                    	$this->method_call->news();?>
				                         
	                                    	
	                                    </tbody>
	                                  </table>
	                                </div>
                                </div>
                                <div class="tab-pane fade" id="files">
                                	 <?php $this->method_call->files();?>
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
              