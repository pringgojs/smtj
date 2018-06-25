<?php
include 'include/header.php';
?>
<section id="main">
	<div class="main-shadow"></div>
	<div class="main">
		<div class="main-wrap">
			<div class="main-post">
				<div class="event-date">
					<div class="agenda-date">
						<div class="mounth" style="background:rgb(233, 133, 48)"><?=$kategori;?></div>
						<div class="date"  style="background:#61686f"><span><?=$pembuat;?></span></div>
					</div>
				</div>
				<div class="event-post">
				<h1><?=$judul;?></h1>
				<i class="fa fa-calendar-o"></i> <?=$diterbitkan;?>  &nbsp;&nbsp;&nbsp; <i class="fa fa-user"></i> <?=$id_user;?>
					
					
					<div class="article">
						<?=$keterangan;?>
					</div>
				</div>
			</div>
		</div>

		<div id="sidebar">
			<div class="sidebar">
				<h3>Produk<span class="tiny">/product</span></h3>
				<div class="more-widget">
					<a href="<?=base_url('product');?>">MORE <i class="fa fa-plus"></i></a>
				</div>
				<?=$this->method_call->product_sidebar();?>
				
			</div>
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>