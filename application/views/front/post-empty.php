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
		
			<div class="main-post">
				<h1>Sorry.. we are can't looking for "<?=$_GET['q'];?>"</h1>
				
			</div>
			
			
		</div>
		<div id="sidebar">
			<div class="sidebar">
				<h3>Agenda<span class="tiny">/event</span></h3>
				<?=$this->method_call->agenda_utama();?>
				
			</div>
			<div class="sidebar">
				<h3>Popular <span class="tiny">/Post</span></h3>
				<?=$this->method_call->popular_post();?>
				
			</div>
			<div class="sidebar">
				<h3>Produk <span class="tiny">/siswa</span></h3>
				<?=$this->method_call->product_sidebar();?>
				
			</div>
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>