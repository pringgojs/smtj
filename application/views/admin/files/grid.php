<style type="text/css">
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
 
}
.p {
  display: none;
}
.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background-color: rgba(75,75,75,0.7);
  -webkit-transition: all 0.4s  cubic-bezier(0.88,-0.99, 0, 1.81);
  transition: all 0.4s  cubic-bezier(0.88,-0.99, 0, 1.81);
}
.hovereffect:hover .p{
  display: block;
  color:#fff;
  font-weight: 600

}
.hovereffect:hover .overlay {
  background-color: rgba(48, 152, 157, 0.4);
}

.hovereffect img {
  display: block;
  position: relative;
  width: 150px;
  height: 150px;

}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
  -webkit-transform: translateY(45px);
  -ms-transform: translateY(45px);
  transform: translateY(45px);
  -webkit-transition: all 0.4s  cubic-bezier(0.88,-0.99, 0, 1.81);
  transition: all 0.4s  cubic-bezier(0.88,-0.99, 0, 1.81);
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(5px);
  -ms-transform: translateY(5px);
  transform: translateY(5px);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px dashed #fff;
  background-color: transparent;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: all 0.4s  cubic-bezier(0.88,-0.99, 0, 1.81);
  transition: all 0.4s  cubic-bezier(0.88,-0.99, 0, 1.81);
  font-weight: normal;
  margin: -52px 0 0 0;
  padding: 62px 100px;
}

.hovereffect:hover a.info {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}
.isotope-item {
    z-index: 2;
}
.isotope-hidden.isotope-item {
    pointer-events: none;
    z-index: 1;
}
.isotope,
.isotope .isotope-item {
  /* change duration value to whatever you like */

    -webkit-transition-duration: 0.8s;
    -moz-transition-duration: 0.8s;
    transition-duration: 0.8s;
}
.isotope {
    -webkit-transition-property: height, width;
    -moz-transition-property: height, width;
    transition-property: height, width;
}
.isotope .isotope-item {
    -webkit-transition-property: -webkit-transform, opacity;
    -moz-transition-property: -moz-transform, opacity;
    transition-property: transform, opacity;
}
</style>
<?php

$dir = base_url()."asset/images/tipe/";

foreach ($file as  $datafile) {
  # code...

  $iqui   = "kb";
  $id     = $datafile->id_file;
  $nama   = $datafile->nama;
  $ukuran = $datafile->ukuran;
  $tgl    = $datafile->tanggal;
  $link   = base_url().$datafile->link;
  $type   = $datafile->type;

  $size   = ceil($ukuran / 1024); //ubah ke kb
  if($size > 1024){//jika file lebih dari sekian ubah ke mb
      $ro   = $size / 1024;
      if($ro > 1024){
        $ukuran = round(($ro / 1024),2);
        $iqui ="gb";
      }else{
        $ukuran = round( $ro, 2);
        $iqui ="mb";
      }
    
  }else{
      $ukuran = $size;
      $iqui ="kb";
  }


  if(($type == "png")||($type == "jpeg")||($type == "jpg")||($type == "gif")||($type == "bmp")){
    //$icon = "img.png";
    tumbnail($id, $link, $nama, $ukuran, $iqui, $tgl);
    
  }elseif(($type == "docx")||($type == "doc")){
    $icon = "word.png";
    tumbnail($id, $dir.$icon, $nama, $ukuran, $iqui, $tgl);
    
  }elseif(($type == "xlsx")||($type == "xls")){
    $icon = "excel.png";
    tumbnail($id, $dir.$icon, $nama, $ukuran, $iqui, $tgl);
  }elseif(($type == "pptx")||($type == "ppt")){
    $icon = "pp.png";
    tumbnail($id, $dir.$icon, $nama, $ukuran, $iqui, $tgl);
  }elseif(($type == "txt")){
    $icon = "notepad.png";
    tumbnail($id, $dir.$icon, $nama, $ukuran, $iqui, $tgl);
  }elseif(($type == "exe")){
    $icon = "app.png";
    tumbnail($id, $dir.$icon, $nama, $ukuran, $iqui, $tgl);
  }elseif(($type == "pdf")){
    $icon = "pdf.png";
    tumbnail($id, $dir.$icon, $nama, $ukuran, $iqui, $tgl);
  }elseif(($type == "mp3")){
    $icon = "musik.png";
    tumbnail($id, $dir.$icon, $nama, $ukuran, $iqui, $tgl);
  }else{
    $icon = "help.png";
    tumbnail($id, $dir.$icon, $nama, $ukuran, $iqui, $tgl);
  }

  #end looping

}


function tumbnail($id, $url, $nama, $ukuran, $iqui, $tgl){
  $nama = substr($nama, 0, 20)."...";
  echo '
  
    
      <div class="col-xs-4 col-md-2">
        <div class="thumbnail" style="word-wrap: break-word;">
          <img width="171" height="180" src="'.$url.'" alt="...">
          <div class="caption">
            <h4>'.$nama.'</h4>
            
            <p> '.$tgl.'</p>
          </div>
        </div>
      </div>
    
  ';
  
}
?>