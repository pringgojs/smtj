<?php
include 'include/header.php';
?>
<section id="main">
	<div class="main-shadow"></div>
	<div class="main">
		<div class="main-wrap">
			<h1>NEWS And Event</h1>
			<b>KEEP UPDATE FROM OUR NEWSLETTER</b>
			<?php
				foreach ($post as $key => $value) {
					# code...
					$kode 	= $value->id_post;
					$data['judul'] = $value->judul;
					$data['isi'] = $value->isi;
					$data['diterbitkan'] = $this->method_call->date($value->diterbitkan);
					$data['last_update'] = $value->last_update;
					$data['jumlah_baca'] = $value->jumlah_baca;
					$data['id_user'] = $this->method_call->cek_user($value->id_user);
					$data['komen'] = $value->komen;
					$data['label'] = $value->label;
					$data['jam'] = $value->jam;
					$data['lokasi'] = $value->lokasi;
					$data['parent'] = $value->parent;
					$data['fitur_img'] = $value->fitur_img;
					$data['link_asli'] = $value->link_asli;

					if($data['lokasi']!=""){
						$data['lokasi'] = '<i class="fa fa-map-marker"></i> '.$data['lokasi'].'&nbsp;&nbsp;&nbsp';
					}else{
						$data['lokasi'] = "";
					}
					#cek img 
					$data['images'] = $this->method_call->catch_that_image($value->isi);

					$IMG = TRUE;
					if($data['fitur_img'] != ""){
						$thumbnail = '<div class="main-post-img"><img src="'.$data['fitur_img'].'"></div>';
					}else{
						if($data['images'] != ""){
							$thumbnail = '<div class="main-post-img"><img src="'.$data['images'].'"></div>';
						}else{
							$thumbnail = "";
							$IMG = FALSE;
						}
					}
					# cek deskrpsi
					$deskripsi = htmlentities(strip_tags($data['isi']));
					if(strlen($deskripsi) > 220 ){
						$deskripsi = substr($deskripsi, 0, 220)."...";
						$deskripsi2 = substr(htmlentities(strip_tags($data['isi'])), 0, 400)."...";
					}else{
						$deskripsi = $deskripsi;
						$deskripsi2 = $deskripsi;
					}
					# cek class jika img kosong 
					if($IMG == FALSE){
						$style = "style='width:100%;margin-left:0'";
					}else{
						$style = "";
					}
					
				
				?>

			<div class="main-post" style="border-bottom:#ccc dotted 1px;">
				
					<?=$thumbnail;?>
				
				<div class="main-article" <?=$style;?>>
					<h1><?=$data['judul'];?></h1>
					<div class="post-date">
						<i class="fa fa-calendar-o"></i> <?=$data['diterbitkan'];?> &nbsp;&nbsp;&nbsp; <?=$data['lokasi'];?>  <i class="fa fa-user"></i> <?=$data['id_user'];?>
					</div>
					<div class="article">
						<p><?php if($IMG == FALSE){ echo $deskripsi2;} else{ echo $deskripsi;}?>
							 &nbsp; <a href="<?=$data['link_asli'];?>">Readmore</a></p>
					</div>
					<div class="post-label">
						<div class="post-text">
							<i class="fa fa-tags"></i> TAGS : 
						</div>
						<?php
						/* label */
	                      if($data['label'] !=""){
	                          $explode = explode(",", $data['label']);
	                          $r=0;
	                          foreach ($explode as $key => $value) {
	                            # code...
	                            $labelname = $this->method_call->data_label_post($value);
	                            echo '<a href="'.base_url('tag/'.$labelname).'">'.$labelname.'</a>';
	                            $r++;
	                          }
	                          //$labelOK = implode(",", $labelname);
	                      }else{
	                        $labelOK = "";
	                      }
                      	?>
						
					</div>
				</div>
			</div>

			<?php } ?>
			<?=$paging;?>
			<!-- 
			<div class="pagination">
				<a href="#">Previous</a>
				<a href="#">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">Next</a>
			</div> -->
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>