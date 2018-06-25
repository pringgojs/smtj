<?php
include 'include/header.php';
?>

		<section id="slide-wrapper">
			<div class="slide-shadow"></div>
			<div class="flexslider slide">
		        <div class="flex-viewport" style="overflow: hidden; position: relative;">
		        <ul class="slides" style="width: 100%; height:500px;">
		        	<!-- scripts slider untuk looping-->
		        	<?=$this->method_call->slider();?>
		            
		        	<!-- end scripts slider -->
		            
		         </ul>
		         </div>
		         <ol class="flex-control-nav flex-control-paging"></ol>
		         <ul class="flex-direction-nav">
		         	<li><a class="flex-prev" href="#"><i class="fa fa-chevron-left"></i></a></li>
		         	<li><a class="flex-next" href="#"><i class="fa fa-chevron-right"></i></a></li>
		         </ul>
		    </div>
		</section>
		<section id="main">
			<div class="main">
				<div class="profile-main">
					<?=$this->method_call->head_line();?>
				</div>
				<div class="agenda-wrap">
					<h3>Agenda<span>/event</span></h3>
					<div class="more-widget">
						<a href="<?=base_url('agenda');?>"><?=$labelMore2;?> <i class="fa fa-plus"></i></a>
					</div>
					<?=$this->method_call->agenda_utama();?>
					
				</div>
				<div id="article">
					<div class="headline-article">
						<b>NEWS & UPDATE</b><br/>
						<?=$labelNews;?>
						
					</div>
					<div class="post-wrap">
					<?=$this->method_call->berita_utama();?>
					
					</div>
					<div style="clear:both"></div>
					<a href="<?=base_url('news');?>"><button class="button-view"><?=$labelMore;?></button></a>
				</div>
				<div id="product">
					<h3>Product<span>/siswa</span></h3>
					<ul id="produk" class="jcarousel-skin-tango">
						<!-- looping untuk produk mahasiswa -->
						<?=$this->method_call->produk_utama();?>
					</ul>
				</div>
				<div id="gallery">
					<h3>gallery<span>/photos</span></h3>
					<div class="more-widget">
						<a href="<?=base_url('gallery');?>"><?=$labelMore2;?> <i class="fa fa-plus"></i></a>
					</div>
					<div class="gallery-wrap">
					<?=$this->method_call->galery_utama();?>
					</div>
				</div>
			</div>
			<!--
			<div class="more-info">
				<button class="more-button">Kontak Kami</button>
				<b style="text-transform:uppercase;color:#444">Kirimkan pesan, pertanyaan dan saran anda melalui kontak.</b><br>
				Kami dengan senang hati akan menjawab dan mendengar saran dari anda.
			</div>
			-->
		</section>
<?php
include 'include/footer.php';
?>