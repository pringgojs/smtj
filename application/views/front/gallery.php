<?php
include 'include/header.php';
?>
<section id="main">
	<div class="main-shadow"></div>
	<div class="main">
		<div id="gallery-photo">
			<div class="headline-article">
				<b>GALLERY PHOTOS</b><br/>
				Gallery photo tentang SMK Negeri 1 Jenangan
			</div>
			<div class="post-wrap">
				<?=$this->method_call->page_gallery();?>
				
			</div>
			<div style="clear:both"></div>
			<button class="button-view">VIEW ALL</button>
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>