
			<footer id="footer">
				<div id="footer-wrapper">
					<div class="footer">
						<div class="footer-left">
							<img src="<?=base_url();?>asset/images/logoakn.png"><br/><br/>
							Phone:  (+0352) 481 236 | Email : pr@aknponorogo.ac.id<br/>
							Jalan Niken Gandini Nomor 98 Jenangan Ponorogo 63492, Jawa Timur<br/>
							Website developed by <a href="" style="color:#FFF; text-decoration:underline">Aji & Pringgo </a>
							<div class="socmed-wrap">
								<div class="socmed facebook"></div>
								<div class="socmed twitter"></div>
								<div class="socmed google"></div>
								<div class="socmed email"></div>
								<a target="blank" href="rss.xml"><div class="socmed feed"></div></a>
							</div>
						</div>
						<div class="footer-right">
							<?=$this->method_call->link_luar();?>
						</div>
					</div>
				</div>
				<div id="navbar-footer">
					<div class="nav-footer">
						<div class="footer-asc">
							<img src="<?=base_url();?>asset/css/style/images/logo-pens.png" title="Politeknik Elektronika Negeri Surabaya">
						</div>
						<ul>
							<?=$this->method_call->menu('3');?>							
						</ul>
						<br/>
						Copyright © <?php echo date('Y')." Akademi Komunitas Negeri Ponorogo ";?>
					</div>
				</div>
			</footer>
		</section>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-76655278-1', 'auto');
		  ga('send', 'pageview');
		  //ga('set', 'userId', {{1922}}); // Tetapkan ID pengguna menggunakan user_id yang telah masuk ke sistem.

		</script>
	</body>
</html>