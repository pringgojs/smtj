
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

                                    <form action="<?php echo base_url() ?>administrator/news/upload" id="FormUpload" name="FormUpload" class="dropzone">
                                      <div class="fallback">
                                      <input name="file" type="file" multiple />
                                      </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="files">
                                <div class="cols-12"> 
                                    Type 
                                            <select class="input-sm form-control input-s-sm inline v-middle" name="type" onchange="loadFilePopup(this.value)">
                                              <option value="All">All</option>
                                              <option value="Images">Images</option>
                                              <option value="Audios">Audios</option>
                                              <option value="Videos">Videos</option>
                                              <option value="Attachment">Attachment</option>
                                            </select>
                                        </div>
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
                        
                
                                   
                