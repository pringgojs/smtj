<?php
include 'include/header.php';
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
	<div class="main-shadow"></div>
	<div class="main">
		<div class="main-wrap">
		
			<div class="main-post">
				<h1>Opps Sorry.. Data Not Found !</h1>
				<p></p>
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
include "include/footer.php";
?>