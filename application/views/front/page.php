<?php
include 'include/header.php';
?>
<section id="main">
	<div class="main-shadow"></div>
	<div class="main">
		<div class="main-wrap-right">
			<div class="main-post">
				<h1><?=$judul;?></h1>
				<div class="post-date">
					<i class="fa fa-calendar-o"></i> <?=$bulan;?> <?=$tgl;?>, <?=$tahun;?> &nbsp;&nbsp;&nbsp; <i class="fa fa-user"></i> <?=$user;?>
				</div>
				<div class="article">
				<?=$isi;?>
				</div>
			</div>
		</div>
		<div id="sidebar-left">
<!--
			<div class="sidebar">
				<h3>Pages <span class="tiny">/profil</span></h3>
				<ul class="label">
					<li><a href="#">Home</a></li>
					<li><a href="#">Article</a></li>
					<li><a href="#">Seputar Sekolah</a></li>
					<li><a href="#">Event Sekolah</a></li>
					<li><a href="#">Produk Sekolah</a></li>
					<li><a href="#">Education</a></li>
				</ul>
			</div>
-->
			<div class="sidebar">
				<h3>Agenda<span class="tiny">/event</span></h3>
				<?=$this->method_call->agenda_utama();?>
			</div>
			<div class="sidebar">
				<h3>Popular <span class="tiny">/Post</span></h3>
				<?=$this->method_call->popular_post();?>
			</div>
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>