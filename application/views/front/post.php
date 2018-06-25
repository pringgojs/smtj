<?php
include 'include/header.php';
?>
<style type="text/css">
	.hiden {
		
		display: none;
		color: #eee

	}
	.pagination {
		color: #eee
	}
</style>
<section id="main">
	<div class="main-shadow"></div>
	<div class="main">
		<div class="main-wrap">
		<?php
				foreach ($post as $key => $value) {
					# code...
					$kode 	= $value->id_post;
					$data['judul'] = $value->judul;
					$data['isi'] = $value->isi;
					$data['diterbitkan'] = $this->method_call->date($value->diterbitkan);
					$data['last_update'] = $value->last_update;
					$data['jumlah_baca'] = $value->jumlah_baca;
					$user = $this->method_call->cek_user($value->id_user);
					$data['komen'] = $value->komen;
					$label = $value->label;
					$data['jam'] = $value->jam;
					$data['lokasi'] = $value->lokasi;
					$data['parent'] = $value->parent;
					$data['fitur_img'] = $value->fitur_img;
					$data['link_asli'] = $value->link_asli;
					$diterbitkan 	= $this->method_call->date($value->diterbitkan);
					$bulan = $this->method_call->tgl($value->diterbitkan);
					$tgl = substr($value->diterbitkan,8,2);
					$tahun = substr($value->diterbitkan,0,4);
					#eng cek
					$eng_post 	= $value->eng_post;
					$eng_title = $value->eng_title;
					
					if(isset($_COOKIE['lang'])){
						$lang = $_COOKIE['lang'];
						if($lang=="id"){
							# lang indonesia
							$data['isi'] 	= $value->isi;
							$data['judul'] = $value->judul;
						}else if($lang=="eng"){
							# lang eng
							if($eng_title == "" || $eng_post == ""){
								$data['isi'] 	= $value->isi;
								$data['judul'] 		= strtoupper($value->judul);
							}else{
								$data['isi'] 	= $value->eng_post;
								$data['judul'] 		= strtoupper($value->eng_title);
							}
						}else{
							$data['isi'] 	= $value->isi;
							$data['judul'] = $value->judul;
						}
					}else{
						# default lang indonesia
						$data['isi'] 	= $value->isi;
						$data['judul'] = $value->judul;
					}

					if(strlen(trim($data['judul'])) < 30){
						$margin_top 	= "style = 'margin-top:20px'";
					}else{ $margin_top 	= "";}
					if($data['lokasi']!=""){
						$data['lokasi'] = '<i class="fa fa-map-marker"></i> '.$data['lokasi'].'&nbsp;&nbsp;&nbsp';
					}else{
						$data['lokasi'] = "";
					}
					#cek img 
					$data['images'] = $this->method_call->catch_that_image($value->isi);

					$IMG = TRUE;
					if($data['fitur_img'] != ""){
						$thumbnail = '<img src="'.$data['fitur_img'].'" class="second-image">';
					}else{
						if($data['images'] != ""){
							$thumbnail = '<img src="'.$data['images'].'" class="second-image">';
						}else{
							$thumbnail = "";
							$IMG = FALSE;
						}
					}
					# cek deskrpsi
					$deskripsi = htmlentities(strip_tags($data['isi']));
					if(strlen($deskripsi) > 390 ){
						$deskripsi = substr($deskripsi, 0, 390)."... <a href='".$data['link_asli']."'><b>".$labelReadMore."</b></a>";
						$deskripsi2 = substr(htmlentities(strip_tags($data['isi'])), 0, 390)."...";
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
			<div class="main-post">
				<h1><?=$data['judul'];?></h1>
				<div class="post-date">
					<i class="fa fa-calendar-o"></i> <?=$bulan;?> <?=$tgl;?>, <?=$tahun;?> &nbsp;&nbsp;&nbsp; <i class="fa fa-user"></i> <?=$user;?>
				</div>
				<div class="article">
					<?=$thumbnail;?>
					<p><?=$deskripsi;?></p>
				</div>
				<div class="post-label">
					<i class="fa fa-tags"></i> TAGS : 
					<?php
						/* label */
	                      if($label !=""){
	                          $explode = explode(",", $label);
	                          $r=0;
	                          foreach ($explode as $key => $value) {
	                            # code...
	                            $labelname = $this->method_call->data_label_post($value);
	                            echo '<a href="'.base_url('tag/'.$labelname).'">'.$labelname.'</a>';
	                            $r++;
	                          }
	                      }
                      	?>	

				</div>
			</div>
			<?php } ?>
			<?=$paging;?>
			
		</div>
		<div id="sidebar">
			<div class="sidebar">
				<h3>Agenda<span class="tiny">/event</span></h3>
				<?=$this->method_call->agenda_utama();?>
				
			</div>
			<div class="sidebar">
				<h3>Popular <span class="tiny">/Post</span></h3>
				<?=$this->method_call->popular_post();?>
				
			</div>
			<div class="sidebar">
				<h3>Produk <span class="tiny">/siswa</span></h3>
				<?=$this->method_call->product_sidebar();?>
				
			</div>
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>