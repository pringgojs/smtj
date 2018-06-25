        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                  <div class="m-b-md">
                   <h3 class="m-b-none">Category</h3>
                  </div>
                  <!-- notif -->
                    <?php
                      if(@$_GET['ntf']=='false'){?>
                        <div class="alert alert-danger">
                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                          <i class="fa fa-ban-circle"></i><strong>Oh snap!</strong> <a href="#" class="alert-link">Pilih sebuah file</a> dan coba lagi.
                      </div>
                      <?php }?>
                    <!-- End -->
                  <section class="panel panel-default">
	                  
	                  	
						  <header class="panel-heading">
			                  Data Category
		                	</header>
			                <div class="row wrapper">
			                  <div class="col-sm-6 m-b-xs">
				                  <div class="form-group">
				                  	<label class="col-sm-2 control-label" onclick="new()"> Add new </label>
				                  	<div class="col-sm-10">
				                  		<form id="save" method="post" action="<?php echo base_url();?>administrator/category/save">
				                  			<input type="text" id="kategori" name="kategori" class="form-control">
				                  			<input type="hidden" id="id" name="id" class="form-control">
				                  		</form>
				                  	</div>
				                  </div>
			                    </div>
			                  
			                </div>
	                		<div class="table-responsive">
			                  
			                  	<table class="table table-striped b-t b-light">
				                    <thead>
				                      <tr>
				                        <th width="20"><label class="checkbox m-n i-checks"><input  id="cek" onClick="cek_all()" value="All" type="checkbox"><i></i></label></th>
				                        <th class="th-sortable" data-toggle="class">Kategori
				                          <span class="th-sort">
				                            <i class="fa fa-sort-down text"></i>
				                            <i class="fa fa-sort-up text-active"></i>
				                            <i class="fa fa-sort"></i>
				                          </span>
				                        </th>
				                       <th width="30"></th>
				                      </tr>
				                    </thead>
				                    <form method="POST" id="cek-form" action="<?php echo base_url();?>administrator/category/delete"> 
				                    <tbody>
				                    <?php 
				                    	foreach ($kategori as $key => $value) {
				                    		$id 	= $value->id_kategori;
				                    		$nama 	= $value->nama;
				                    		# code...
				                    	echo "
										<tr id='baris-$id' onclick = editkategori('$id')>
					                        <td><label class='checkbox m-n i-checks'><input type='checkbox' name='kode_cek[]' id='kode_cek' value ='$id'><i></i></label></td>
					                        <td class='nama-kategori-$id'>$nama</td>
					                        <td>
					                          <a href='#' onclick = edit('kategori') class='active' data-toggle='class'><i class='fa fa-check text-success text-active'></i></a>
					                        </td>
				                      	</tr>";
				                      	}
			                      	?>

				                    </tbody>
			                  	</table>
			            	  
	                		</div>
							<div class="row wrapper">
			                  <div class="col-sm-6 m-b-xs">
			                    <select class="input-sm form-control input-s-sm inline v-middle" id='pilih' name='pilih'>
			                      <option value="del">Delete </option>
			                      
			                    </select>
			                     <input class="btn btn-sm btn-default" type="submit" id='apply'  value="Apply">     
			                  </div>
			                  </form>
			                </div>
	          		
          		</section>
        </section>
      </section>
    </section>
    <script type="text/javascript">
	
	function new(){
		alert("1");
		$('#kategori').val("").focus();;
		$('#id').val("");
	}
	</script>