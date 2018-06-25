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
				<h1><?=$judul;?></h1>
				<div class="post-date">
					<i class="fa fa-calendar-o"></i> <?=$bulan;?> <?=$tgl;?>, <?=$tahun;?> &nbsp;&nbsp;&nbsp; <i class="fa fa-user"></i> <?=$user;?>
				</div>
				<div class="article">
					<?=$isi;?>
				</div>
				<div class="post-label">
					<i class="fa fa-tags"></i> TAGS : 
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