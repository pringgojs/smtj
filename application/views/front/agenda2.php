<?php
include "include/header.php";
?>
<style type="text/css">
	#navbar-wrapper, #header-wrapper, .footer{
		width: 1000px;
	}
	#main-wrapper, .nav-footer {
		width: 960px;
	}
	a, a:link, a:visited{
		cursor: pointer;
	    color: #111;
	    text-decoration: none;
	    transition: 0.2s;
	}    
</style>
<section id="main">
	<div id="main-wrapper">
		<h2>AGENDA</h2>
		<b>MENAMPILAKN AGENDA TEBRARU</b><br>
		<div class="main-news-wrapper">
			<div class="main-news">
				<!-- selection for looping news -->
				<?php
				foreach ($announcement as $key => $value) {
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
					$diterbitkan 	= $this->method_call->RelativeTime($value->diterbitkan);
					$bulan = strtoupper($this->method_call->tgl($value->diterbitkan));
					$tgl = substr($value->diterbitkan,8,2);

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
					if(strlen($deskripsi) > 290 ){
						$deskripsi = substr($deskripsi, 0, 290)."... <a href='".$data['link_asli']."'><b>Selengkapnya</b></a>";
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
				<div class="news-perpage">
					<div class="main-title">
						<div class="tanggal" style="margin-top:8px;">
							<span style="font-size:23px"><?=$tgl;?></span>
							<br>
							<?=$bulan;?>
						</div>
						<div class="main-info" <?=$margin_top;?>>
							<h1><?=$data['judul'];?></h1>
						</div>
					</div>
					<span class="title-info"><?=$diterbitkan;?></span><br>
					<?=$thumbnail;?>
					<p><?=$deskripsi;?>
					</p>
				</div>
				<?php } ?>
				<?=$paging;?>
				<!-- for nav page -->
				<!-- <div class="page-nav">
					<a href="#"><span class="page-num">Previous</span></a>
					<a href="#"><span class="page-num">1</span></a>
					<a href="#"><span class="page-num">2</span></a>
					<a href="#"><span class="page-num">1</span></a>
					<a href="#"><span class="page-num">...</span></a>
					<a href="#"><span class="page-num">5</span></a>
					<a href="#"><span class="page-num">Next</span></a>
				</div> -->
			</div>
		</div>
		<div class="sidebar">
				<div class="view-all" style="margin-top:15px;"><a href="<?=base_url('news');?>">LIHAT SEMUA <i class="icon-arrow-right"></i></a></div>
				<div class="corner-title" style="margin-top:5px;">
					BERITA UTAMA
				</div>
				<?=$this->method_call->corner();?>
		</div>
		
	</div>
</section>
<?php
include "include/footer.php";
?>