<?php
include 'include/header.php';
?>
<section id="main">
	<div class="main">
		<div class="main-post">
			<h1><?=$judul;?></h1>
			<div class="post-date">
				<i class="fa fa-calendar-o"></i> <?=$diterbitkan;?> &nbsp;&nbsp;&nbsp;  <?=$lokasi;?>  <i class="fa fa-user"></i> <?=$id_user;?>
			</div>
			<div class="article">
				
				<?=$isi;?>	
			</div>
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>