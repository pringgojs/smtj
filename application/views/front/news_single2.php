<?php
include "include/header.php";
?>
<style type="text/css">
	#navbar-wrapper, #header-wrapper, .footer{
		width: 1000px;
	}
	#main-wrapper, .nav-footer {
		width: 960px;
	}
</style>
<section id="main">
	<div id="main-wrapper">
		<h2>KABAR BERITA</h2>
		<b>MENAMPILAKN BERITA TEBARU SEPUTAR KAMPUS</b><br>
		<div class="main-news-wrapper">
			<!-- selection for main news -->
			<div class="main-news">
				<div class="main-title">
					<div class="tanggal" style="margin-top:8px;">
						<span style="font-size:23px"><?=$tgl;?></span>
						<br>
						<?=$bulan;?>
					</div>
					<div class="main-info" <?=$margin_top;?>>
						<h1><?=$judul;?></h1>
					</div>
				</div>
				<span class="title-info">
					<i class="icon-calendar"></i> <?=$diterbitkan;?> &nbsp &nbsp 
					<i class="icon-user"></i> <?=$user;?> 
				</span><br>
				<?=$isi;?>
				<div class="post-label">
					<div class="post-text">
						<i class="icon-tags"></i> TAGS : 
					</div>
					<?php
					/* label */
                      if($label !=""){
                          $explode = explode(",", $label);
                          $r=0;
                          foreach ($explode as $key => $value) {
                            # code...
                            $labelname = $this->method_call->data_label_post($value);
                            echo '<a href="'.base_url('tag/'.$labelname).'">'.$labelname.'</a>';
                            $r++;
                          }
                      }
                  	?>					
				</div>
			</div>
			<!-- selection for next news -->
			<?=$this->method_call->pengumuman_selanjutnya($kode, 'agenda');?>
			<!-- selection for disqus -->
			<div class="main-news">
				<h3>KOMENTAR</h3>
				<div id="disqus_thread"></div>
				<script>

				(function() { // DON'T EDIT BELOW THIS LINE
				var d = document, s = d.createElement('script');

				s.src = '//aknponorogo.disqus.com/embed.js';

				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
					<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
			</div>
		</div>
		
		<div class="sidebar">
				<div class="view-all" style="margin-top:15px;"><a href="<?=base_url('news');?>">LIHAT SEMUA <i class="icon-arrow-right"></i></a></div>
				<div class="corner-title" style="margin-top:5px;">
					BERITA UTAMA
				</div>
				<?=$this->method_call->corner();?>
		</div>
	</div>
</section>
<?php
include "include/footer.php";
?>