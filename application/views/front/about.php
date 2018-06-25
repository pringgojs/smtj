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
	.main-news-wrapper, .main-news{
		width: 100%;
	}
</style>

<section id="main">
	<div id="main-wrapper">
		<h2>TENTANG AKNP</h2>
		<!-- <b>JADWAL KEGIATAN KAMPUS</b><br> --> 
		<div class="main-news-wrapper">
			<!-- selection for main news -->
			<div class="main-news">
				<ul class="listinformasi">
                    <li class="keterangan">
                    	<a href="<?=base_url('profil');?>"><h4>Profil AKNP</h4></a>
						<div class="clear"></div>
						Profil Akademi Komunitas Negeri Ponorogo.
					</li>
          			<li class="listnya">       
						<img src="http://www.aknponorogo.ac.id/upload/7-profil.png">			   
					</li>
				</ul>
				<ul class="listinformasi">
                    <li class="keterangan">
                    	<a href="<?=base_url('location');?>"><h4>Peta Lokasi Profil Akademi Komunitas Negeri Ponorogo</h4></a>
						<div class="clear"></div>
						Akademi Komunitas Negeri Ponorogo berlokasi di SMK Negeri 1 Jenagan Ponorogo.
						<br>Jl. Niken Gandini 98 Setono Jenangan Ponorogo
					</li>
          			<li class="listnya">       
						<img src="http://www.aknponorogo.ac.id/upload/8-lokasi.png">
					</li>
				</ul>
				
			</div>
			
		</div>
		
	</div>
</section>
<?php
include "include/footer.php";
?>