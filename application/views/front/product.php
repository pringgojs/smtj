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
				foreach ($announcement as $key => $value) {
					# code...
					$kode 	= $value->id_produk;
					$data['judul'] = $value->judul;
					$data['isi'] = $value->keterangan;
					$data['diterbitkan'] = $this->method_call->date($value->diterbitkan);
					
					$data['jumlah_baca'] = $value->jumlah_baca;
					$data['id_user'] = $this->method_call->cek_user($value->id_user);
					$data['kategori'] = $value->kategori;
					$data['pembuat'] = $value->pembuat;
					$data['fitur_img'] = $value->fitur_img;
					$data['link_asli'] = $value->link_asli;
					$diterbitkan 	= $this->method_call->RelativeTime($value->diterbitkan);
					$bulan = strtoupper($this->method_call->tgl($value->diterbitkan));
					$tgl = substr($value->diterbitkan,8,2);
					$tahun = substr($value->diterbitkan,0,4);
					if(strlen(trim($data['judul'])) < 30){
						$margin_top 	= "style = 'margin-top:20px'";
					}else{ $margin_top 	= "";}
					
					#cek img 
					$data['images'] = $this->method_call->catch_that_image($value->keterangan);

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
					if(strlen($deskripsi) > 290 ){
						$deskripsi = substr($deskripsi, 0, 290)."... <a href='".$data['link_asli']."'><b>$labelReadMore</b></a>";
						$deskripsi2 = substr(htmlentities(strip_tags($data['isi'])), 0, 290)."...";
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
				<div class="event-date">
					<div class="agenda-date">
						<div class="mounth" style="background:rgb(233, 133, 48)"><?=$data['kategori'];?></div>
						<div class="date" style="background:#61686f"> <span><?=$data['pembuat'];?></span></div>
					</div>
				</div>
				<div class="event-post">
					<h1><?=$data['judul'];?></h1>
					<div class="post-date">
						<i class="fa fa-calendar-o"></i> <?=$diterbitkan;?>  &nbsp;&nbsp;&nbsp; <i class="fa fa-user"></i> <?=$data['id_user'];?>
					</div>
					<div class="article">
					<?=$thumbnail;?>
						<p><?=$deskripsi;?></p>
					</div>
				</div>
			</div>
			<?php } ?>
			<?=$paging;?>
			<!-- <input type="button" class="button-view" value="NEXT PAGE" style="float:right; margin-top:20px;">
			<input type="button" class="button-view" value="PREV PAGE" style="float:left; margin-top:20px;"> -->
		</div>

		<div id="sidebar">
			<div class="sidebar">
				<h3>Popular <span class="tiny">/Post</span></h3>
				<?=$this->method_call->popular_post();?>
				
			</div>
			<div class="sidebar">
				<h3>Agenda <span class="tiny">/event</span></h3>
				<?=$this->method_call->agenda_utama();?>
				
			</div>
			
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>