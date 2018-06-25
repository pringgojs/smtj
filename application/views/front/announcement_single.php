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
</style>
<section id="main">
	<div id="main-wrapper">
		<h2>PENGUMUMAN</h2>
		<b>PENGUMUMAN TERKINI DARI KAMPUS</b><br>
		<div class="main-news-wrapper">
			<!-- selection for main news -->
			<div class="main-news">
				<div class="main-title">
					<div class="tanggal" style="margin-top:8px;">
						<span style="font-size:23px"><?=$tgl;?></span>
						<br>
						<?=$bulan;?>
					</div>
					<div class="main-info" <?=$margin_top;?>>
						<h1><?=$judul;?></h1>
					</div>
				</div>
				<span class="title-info"><?=$diterbitkan;?></span><br>
				<?=$isi;?>
			</div>
			<!-- selection for next news -->
			<?=$this->method_call->pengumuman_selanjutnya($kode, 'pengumuman');?>
			<!-- selection for disqus -->
			<!-- <div class="main-news">
				<h3>KOMENTAR</h3>
			</div> -->
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