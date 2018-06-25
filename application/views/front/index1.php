<?php
include "include/header.php"
?>
<section id="slide-wrapper">
    <div class="flexslider slide">
        <div class="flex-viewport" style="overflow: hidden; position: relative;">
        <ul class="slides" style="width: 100%; height:500px;">
        	<!-- scripts slider untuk looping-->
            <?=$this->method_call->slider();?>
         </ul>
         </div>
         <ol class="flex-control-nav flex-control-paging"></ol>
         <ul class="flex-direction-nav">
         	<li><a class="flex-prev" href="#"></a></li>
         	<li><a class="flex-next" href="#"></a></li>
         </ul>
    </div>
</section>
<section id="main">
	<div id="main-wrapper">
		<div class="pengumuman-wrapper">
			<div class="view-all"><a href="<?=base_url('announcement');?>">LIHAT SEMUA <i class="icon-arrow-right"></i></a></div>
			<h3>PENGUMUMAN</h3>
			<div class="pengumuman-left">
				<!-- pengumuman yang paling tebaru -->
				<?=$this->method_call->pengumuman_utama('1');?>
			</div>
			<div class="pengumuman-right">
				<!-- pengumuman yang paling terbaru nomor 2 & 3 -->
				<?=$this->method_call->pengumuman_utama('2');?>
			</div>
		</div>
		<div class="agenda-wrapper">
			<div class="view-all"><a href="<?=base_url('agenda');?>">LIHAT SEMUA <i class="icon-arrow-right"></i></a></div>
			<h3>AGENDA KAMPUS</h3>
			<div class="agenda">
				<ul id="agenda" class="jcarousel-skin-tango">
					<!-- script untuk looping agenda -->
					<?=$this->method_call->agenda_utama();?>
				</ul>
			</div>
		</div>
		<div class="berita-wrapper">
			<div class="view-all" style="font-size:13px;margin-top:15px;margin-right:10px;"><a href="<?=base_url();?>news">LIHAT SEMUA BERITA <i class="icon-arrow-right"></i></a></div>
			<h3>BERITA TERKINI</h3>
			<b>KUMPULAN BERITA TERBARU SEPUTAR KAMPUS <i class="icon-chevron-right"></i></b><br><br>
			<!-- looping untuk berita apapun -->
			<?=$this->method_call->berita_utama();?>
		</div>
	<!--</div>
</section>

<section id="about-wrapper">
	<div id="about">
		<div class="pendaftaran">

		</div>
		<div class="about">

		</div>
	</div>
</section>

<section id="main">

	<div id="main-wrapper">-->
	<!--
		<div class="product-wrapper">
			<div class="product-left">
				<div class="product-head">
					<h3>PRODUK MAHASISWA</h3>
					<span style="color:#777">Kumpulan produk-produk yang dibuat oleh mahasiswa</span>
					<div class="view-all"><a href="http://localhost/aknp/more-produk">VIEW ALL <i class="icon-arrow-right"></i></a></div>
				</div>
			</div>
			<div class="product-right">
					<div class=" jcarousel-skin-tango-product"><div class="jcarousel-container jcarousel-container-horizontal" style="position: relative; display: block;"><div class="jcarousel-clip jcarousel-clip-horizontal" style="position: relative;"><ul id="produk" class="jcarousel-list jcarousel-list-horizontal" style="overflow: hidden; position: relative; top: 0px; margin: 0px; padding: 0px; left: 0px; width: 1940px;">
						<!-- looping untuk produk mahasiswa 
						<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-1 jcarousel-item-1-horizontal" jcarouselindex="1" style="float: left; list-style: none;">
							<div class="product-thumb">
								<img src="webadmin/images/produk/Themelate_tokospot.png" width="280">
							</div>
							<div class="product-title">
								<b>WEB APPLICATION <i class="icon-chevron-right"></i></b><br>
								<h2>THEMELATE</h2>
								<span style="color:#888">Dibuat oleh : Aji Ainul Hakim</span><br>
								<a href="http://localhost/aknp/product/themelate"><span class="button red" style="float:left">VIEW DETAIL <i class="icon-chevron-right"></i></span></a>
							</div>
							<div class="product-description">                          TokoSpot adalah template untuk toko online yang menggunakan Platform Blogger, template ini sangat cocok bagi anda yang baru memulai usaha dalam berbisnis online, tanpa ribet-ribet mendesign toko dan membeli hosting dll. 
                          TokoSpot adalah template untuk toko online yang menggunakan Platform Blogger, template ini sangat
							</div>
						</li>
						
						<li class="jcarousel-item jcarousel-item-horizontal jcarousel-item-2 jcarousel-item-2-horizontal" jcarouselindex="2" style="float: left; list-style: none;">
							<div class="product-thumb">
								<img src="webadmin/images/produk/Web Profil AKN Ponorogo_akn.png" width="280">
							</div>
							<div class="product-title">
								<b>WEB APPLICATION <i class="icon-chevron-right"></i></b><br>
								<h2>WEB PROFIL AKNP</h2>
								<span style="color:#888">Dibuat oleh : Aji &amp; Pringgo</span><br>
								<a href="http://localhost/aknp/product/web-profil-aknp"><span class="button red" style="float:left">VIEW DETAIL <i class="icon-chevron-right"></i></span></a>
							</div>
							<div class="product-description">                          Web ini adalah di buat sebagai profil AKN Ponorogo agar lebih dikenal oleh masyarakat luas
							</div>
						</li>
						
					<!-- looping untuk produk mahasiswa 
						
					</ul></div><div class="jcarousel-prev jcarousel-prev-horizontal jcarousel-prev-disabled jcarousel-prev-disabled-horizontal" disabled="true" style="display: block;"><i class="icon-arrow-left"></i></div><div class="jcarousel-next jcarousel-next-horizontal" disabled="false" style="display: block;"><i class="icon-arrow-right"></i></div></div></div>
			</div>
			<!--
		</div>
		-->
	</div>
</section>
<?php
include "include/footer.php"
?>