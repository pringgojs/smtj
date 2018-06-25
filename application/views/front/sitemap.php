<?php
include 'include/header.php';
?>
<section id="main">
	<div class="main-shadow"></div>
	<div class="main" style="margin-bottom:0px;">
		<div class="contact-wrap">
			<h1>Site Map</h1>
			<b>WE'RE EASY TO REACH THE POWER</b>
			<br>
			<div class="contact-left">
				<i class="fa fa-caret-right"></i> <b>Pages</b>
				
				<ul style="list-style:none; margin-left:0;padding-left:5px">
				<li style="margin-left:-5px"> <a href="<?=base_url('contact');?>"> <i class="fa fa-caret-right"></i> Contact </a></li>
				<li style="margin-left:-5px"> <a href="<?=base_url('sitemap');?>"> <i class="fa fa-caret-right"></i> Sitemap </a></li>
				<li style="margin-left:-5px"> <a href="<?=base_url('gallery');?>"> <i class="fa fa-caret-right"></i> Gallery </a></li>
				<li style="margin-left:-5px"> <a href="<?=base_url('news');?>"> <i class="fa fa-caret-right"></i> News </a></li>
				<li style="margin-left:-5px"> <a href="<?=base_url('agenda');?>"> <i class="fa fa-caret-right"></i> Agenda </a></li>
				<li style="margin-left:-5px">  <a href="<?=base_url('product');?>"> <i class="fa fa-caret-right"></i> Product </a> </li>
					<?php $this->method_call->sitemap_page(); ?>
				</ul>
			</div>
			<div class="contact-right">
			<i class="fa fa-caret-right"></i> <b>News</b>
				<ul style="list-style:none; margin-left:0;">
					<?php $this->method_call->sitemap_post(); ?>
				</ul>
			</div>
			
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>