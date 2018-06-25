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
						<div class="mounth"><?=$bulan;?></div>
						<div class="date"><?=$tgl;?> <span><?=$tahun;?></span></div>
					</div>
				</div>
				<div class="event-post">
					<h1><?=$judul;?></h1>
					
					<div class="article">
						<?=$isi;?>
					</div>
				</div>
			</div>
		</div>

		<div id="sidebar">
			<div class="sidebar">
				<h3>Agenda<span class="tiny">/event</span></h3>
				<div class="more-widget">
					<a href="<?=base_url('agenda');?>">MORE <i class="fa fa-plus"></i></a>
				</div>
				<?=$this->method_call->agenda_utama();?>
				
			</div>
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>