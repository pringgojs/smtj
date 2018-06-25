
		<section id="footer">
			<div class="footer">
				<div class="foot-contact">
					<img src="<?=base_url('asset/images/logo.png');?>"><br>
					Phone: <?=$this->method_call->identitas("telepon");?> | Email : <?=$this->method_call->identitas("email");?><br>
					<?=$this->method_call->identitas("alamat");?>
				</div>
				<?=$this->method_call->link_luar();?>
				
			</div>
		</section>
		<section id="footer-link">
			<div class="footer-copy">
				&copy; <?=date('Y');?> - SMK Negeri 1 Jenangan - Allright Reserved
				<div class="footer-right">
					<ul>
					<?=$this->method_call->menu("3");?>
					
					</ul>
				</div>
			</div>
		</section>

		<script src="<?php echo base_url() ?>asset/js/gridGalery/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/gridGalery/masonry.pkgd.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/gridGalery/classie.js"></script>
		<script src="<?php echo base_url() ?>asset/js/gridGalery/cbpGridGallery.js"></script>
		<script>
			new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
		</script>
		
		<script type="text/javascript" src="<?=base_url();?>asset/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>asset/js/jquery-1.4.2.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>asset/js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="<?=base_url();?>asset/js/jquery.jcarousel.min.js"></script>
		
		<script type="text/javascript">
			jQuery(function($){
				jQuery('.flexslider.slide').flexslider({
					animation: "slide",
					start: function(slider){
					}
				});
			});
			jQuery(document).ready(function() {
			    jQuery('#produk').jcarousel();
			});
		</script>


	</body>
</html>