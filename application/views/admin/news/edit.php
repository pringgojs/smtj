                  <?php
                    foreach ($post as $key => $value) {
                      # code...
                      $kode   = $value->id_post;
                      $judul  = $value->judul;
                      $isi    = $value->isi;
                      $date   = $value->diterbitkan;
                      $last   = $value->last_update;
                      $view   = $value->jumlah_baca;
                      $link   = $value->link; // link parent
                      $nama_link = $value->nama_link; //  nama link
                      $link_asli = $value->link_asli; // link asli (parent+link)
                      $user   = $value->id_user;
                      $status = $value->status;
                      $komen  = $value->komen; // cek status komen
                      $label  = $value->label;
                      $kategori=$value->kategori;
                      $lokasi  =$value->lokasi;
                      
                      /* CEK KOMEN */
                      if($komen == "1"){
                           $komen = "checked";
                      }else{
                          $komen = "";
                      }
                      
                      /* label */
                      $explode = explode(",", $label);
                      $r=0;
                      foreach ($explode as $key => $value) {
                        # code...
                        $labelname[$r] = $this->method_call->data_label_post($value);
                        $r++;
                      }

                      $labelOK = implode(", ", $labelname).", ";
                  }
                ?>
<style type="text/css">
  .loader{
    display: none;
    border: 1px solid #BCBEBF;
    position:absolute;
    margin:20px 40% 20px 40%;
    padding: 10px 10px 10px 40px;
    background: url("<?=base_url('asset/images/712.gif');?>") no-repeat #E5E5E5 5px 10px;
  }
  #map_canvas{
    display: none;
  }
</style>
        <section id="content">
          <section class="hbox stretch">
            <section>
              <section class="vbox">
                <section class="scrollable padder">
                 <div class="loader">Saving data ...</div>
                  <div class="m-b-md">
                   <h3 class="m-b-none">News and Event</h3>
                  </div>
                  <form method="post" name="simpanberita" id="simpanberita" action="<?=base_url();?>administrator/news/save">
                      <section class="hbox stretch">
                                  <!-- .aside -->
                          <aside class="aside-lg bg-white b-r" id="aside" >
                            <div class="wrapper">
                               <div class="col-sm-6">
                                  <h3 class="m-b-xs text-black">News </h3>
                               </div>
                               <div class="col-sm-6 text-right text-left-xs m-t-md" style="padding-left:0px">
                               <div class="btn-toolbar" style="padding:0px;width:160px">
                                  <div class="btn-group">
                                    <button data-toggle="dropdown" class="btn btn-sm btn-default dropdown-toggle">
                                      <span class="dropdown-label">Show</span> 
                                      <span class="caret"></span>
                                    </button>
                                    
                                  </div>
                                  <div class="btn-group">
                                    <a class="btn btn-sm btn-bg btn-default" href="<?=base_url('news');?>" >
                                      <i class="fa  fa-mail-reply"></i>
                                    </a>
                                  </div>
                                </div>
                                </div>
                               
                               <div style="clear:both;margin-bottom:20px"></div>
                               <div class="main-agenda"></div>
                               <div class="form-agenda">
                                  <div class="form-group">
                                    <label>Category</label>
                                       <div class="panel panel-default">

                                       <div class="panel-body">
                                          <div id="list-category" class="list-category" style="height:100px; overflow-y:scroll">
                                           <?php 
                                              $this->method_call->cek_kategori($kategori);
                                             ?>
                                          </div>
                                         <br>
                                          <a href="#" onclick="showF('form-kategori')">+ Add New Category</a>
                                          <div class="input-group m-b" id="form-kategori">
                                              <input type="text" name="txtkategori" id="txtkategori" class="form-control"/>
                                              <span class="input-group-addon btn-default" onclick="addkategori()">Add</span>
                                          </div>
                                       </div>
                                       
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <label>Label</label> <br>
                                      <textarea class="input-sm form-control" id="label" name="label"> <?php echo $labelOK;?></textarea>
                                      <input type="hidden" name="id_label" id="id_label">
                                      *Separate labels by commas 
                                      <br>
                                        <?php
                                          $this->method_call->label();
                                          ?>
                                      
                                    </div>
                                    <div class="form-group">
                                      <label>Date</label>
                                      <input type="text" placeholder="Tanggal agenda" required name="tanggal" id="tanggal" value="<?php echo $date = date('Y-m-d H:i:s') ?>" class="datepicker input-sm form-control">
                                    </div>
                                     <div class="form-group">
                                      <label>Location</label>
                                       <div class="panel panel-default">
                                         <input id="pac-input" class="form-control" type="text" name="lokasi" value="<?=$lokasi;?>" placeholder="Search Location">
                                         <div id="map_canvas" style="width:100%; height:150px;">
                                            <?php echo $map['html']; ?>
                                          </div> 
                                       </div>
                                       <input type="hidden" id="langitude" name="langitude" style="display:block">
                                        <input type="hidden" id="longitude" name="longitude" style="display:block">
                                    </div>
                                    
                                    <div class="form-group">
                                      <label>Other settings</label>
                                                          
                                        <div class="checkbox i-checks"><label class="i-checks">
                                          <input type="checkbox" value="1" <?=$komen;?> id="komentar" name="komentar"><i></i>Allow comments</label>
                                        </div>
                                    </div>
                                    <div class="m-t-lg">
                                      <input type="submit" name="simpanberita" id="simpanberita" class="btn btn-sm btn-primary" Value="Publish News"/>
                                      <input type="button" onclick = "saveDraf()" id="savetoDraf" class="btn btn-sm btn-default" Value="Save to Draf"/>
                                    </div>
                                 
                                </div>
                              </div>
                          </aside>
                      <!-- form --> 
                    <aside>
                      <section class="panel panel-default">
                        <header class="panel-heading font-bold">Form Berita</header> 
                        <div class="panel-body"> 
                          <div class="form-group">
                          <label class="control-label">Title</label>
                           
                            <input type="text"  name="judul" id="judul" value="<?=$judul;?>" class="form-control"> 
                            <input type="hidden"  name="link" value="<?=$nama_link;?>" id="link" class="form-control">  
                            <input type="hidden"  name="kode" id="kode" value="<?=$kode;?>" class="form-control">  
                            <input type="hidden" value="<?=$nama_link;?>"  name="link_tmp" id="link_tmp" class="form-control"> 
                           <div id="load_link" style="margin:5px 0"><b>Permalink : </b> <?=$link_asli;?><span class='btn btn-xs btn-bg btn-default' onclick="editLink()">edit</span></div>
                          </div>
                          <div class="form-group">
                            <textarea id="berita" name="berita"><?=$isi;?></textarea>
                          </div>
                        </div>
                    </section>
                    </aside>
                      <!-- end form -->          
                  </section>
                   </form>
                  <!-- wysiwyg -->
            </section>
              
            
                <script type="text/javascript">
                  Dropzone.options.formFile = {
                        dictDefaultMessage: "<div class='btn btn-default btn-large'><i class='fa fa-upload'></i> Drop images file here to upload</i></div><i>",
                        acceptedFiles: ".jpeg, .jpg, .png, .gif",
                          success: function(file) {
                            if (file.previewElement) {
                              var bulusan = $(".bulusan").val();
                              var numplus = parseInt(bulusan)+1;
                              $(".bulusan").val(numplus);
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

                   <!--lightbox-->
                <div class='blackout2'></div>
                <div class='blackflash2'>
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
                              <input type="hidden" class="form-control" id="url"/>
                              <input type="text" name="key" id="key">
                              <input type="text" class="bulusan" value="<?=$id;?>">
                              <button class="btn btn-primary" onclick="addTinyMCE()">Select File</button>
                              <button class="btn btn-default" onclick="notif(false)" >Cancel</button>
                            </div>
                          </section>

                        </div>
                        
                          <div class="contentshow">
                         
                          </div>
                        </div>
                    </div>
                <!--/.lightbox-->
                </div>
        </section>
<script>

function showF(divId) {
    $("#"+divId).toggle();
    $("#txtkategori").focus();
  }

       
// <!-- MAPS GOOOGLE -->
      
      var marker, myCircle, map;
      function initialized() {
        var myLatlng = new google.maps.LatLng(37.7699298, -122.4469157);
        var mapOptions = {
          zoom: 12,
          center: myLatlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById('map_canvas'), 
            mapOptions);

        google.maps.event.addListener(map, 'click', function(event){
            addMarker(event.latLng);
            $("#langitude").val(event.latLng.lat());
            $("#longitude").val(event.latLng.lng());
        });
      }

      function addMarker(latLng){       
        //clear the previous marker and circle.
        if(marker != null){
            marker.setMap(null);
           //myCircle.setMap(null);
        }

        marker = new google.maps.Marker({
            position: latLng,
            map: map,
            draggable:true
        });
         
    }
    // sercing location
    function initAutocomplete() {

  // Create the search box and link it to the UI element.
  var input = document.getElementById('pac-input');
  var searchBox = new google.maps.places.SearchBox(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  // Bias the SearchBox results towards current map's viewport.
  map.addListener('bounds_changed', function() {
    searchBox.setBounds(map.getBounds());
  });

  var markers = [];
  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener('places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach(function(marker) {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    var bounds = new google.maps.LatLngBounds();
    places.forEach(function(place) {
      var icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      markers.push(new google.maps.Marker({
        map: map,
        icon: icon,
        title: place.name,
        position: place.geometry.location
      }));

      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
}
 //IP KEy
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9rojO6haHjOAMyKVciedVOhqNFZ5C3Ek&libraries=places&callback=initAutocomplete"
         async defer></script>
    
    <script>
    /* JS FOR ADD PAGES & EDIT PAGES
================================ */

var editCustomLine = false;
var posisiPageEdit = true;
function showF(divId) {
    $("#"+divId).toggle();
    $("#txtkategori").focus();
  }
function editLink(){
   editCustomLine = true;
   link = $("#link").val();

   $("#load_link").html("");
   $("#load_link").html("<b>Permalink : </b> <?=$link;?>/<input type='text' id='link_custom' value='"+link+"'/> <span class='btn btn-xs btn-bg btn-default' onclick=\"okLink()\">Ok</span> / <a onclick=\"batalLink()\"><small>Cancel</span></a>");
   $("#link_custom").focus();
}
function okLink(){
   link_custom   = $("#link_custom").val();
   link_custom   = link_custom.trim();
   link_custom   = link_custom.replace(/\s/g, '-').toLowerCase();
   $("#link").val(link_custom);
   $("#load_link").html("");
   $("#load_link").html("<b>Permalink : </b> <?=$link;?>/"+link_custom+" <span class='btn btn-xs btn-bg btn-default' onclick=\"editLink()\">edit</span>");
}
function batalLink(){
  //editCustomLine = false;
   judul   = $("#judul").val();
   judul   = judul.trim(); 
   judul   = judul.replace(/\s/g, '-').toLowerCase();
   link    = $("#link").val(judul);

   link_tmp   = $("#link_tmp").val();
   $("#load_link").html("");
   $("#load_link").html("<b>Permalink : </b> <?=$link;?>"+link_tmp+" <span class='btn btn-xs btn-bg btn-default' onclick=\"editLink()\">edit</span>");

}
    // generad LINK AUTO
var auto = setInterval(
    function(){
      link_tmp   = $("#link_tmp").val();
      judul   = $("#judul").val();
      judul   = judul.trim();
      judul   = judul.replace(/\s/g, '-').toLowerCase();
      kontent = tinyMCE.get('berita').getContent()
      kode    = $("#kode").val();
      data    = $("#simpanberita").serialize();

      newslink   = judul;
      link_tmp   = $("#link_tmp").val();
      $("#savetoDraf").val("Saving data ...");
      $(".loader").fadeIn();
      $.ajax({
        url:homepage+"administrator/news/autosave/?newslink="+link_tmp+"&konten="+kontent+"&kode="+kode+"&"+data,
        success:function(result){
          console.log(result);
          if (result != "0"){
             var hasil = result.split("|");
              kunci     = hasil[0];
              if(kunci  =="ID"){
                lastId = hasil[1];
                $("#kode").val(lastId);
                $(".loader").fadeOut();

              }else{
                $(".loader").fadeOut();
                $("#savetoDraf").val("Save to Draf");
                // if(posisiPageEdit == true){
                //   // link di ambil dari database
                //   $("#link").val(link_tmp);
                //   $("#load_link").html("");
                //   $("#load_link").html("<b>Permalink : </b>  <?=$link;?>"+ link_tmp+" <span class='btn btn-xs btn-bg btn-default' onclick=\"editLink()\">edit</span>");
                // }else{
                //   $("#link").val(newslink);
                //   $("#load_link").html("");
                //   $("#load_link").html("<b>Permalink : </b>  <?=$link;?>"+ newslink+" <span class='btn btn-xs btn-bg btn-default' onclick=\"editLink()\">edit</span>");
                // }
                if(editCustomLine == false){
                  $("#link").val(link_tmp);
                  $("#load_link").html("");
                  $("#load_link").html("<b>Permalink : </b> "+homepage+"news/"+kode+"/"+ link_tmp+" <span onclick=\"editLink()\" class='btn btn-xs btn-bg btn-default'>edit</span>");
                }
              }
          }else{
            $(".loader").fadeOut();
            $("#savetoDraf").val("Save to Draf");
          }
        }

       });
     
  
    },
    20000
);

</script>