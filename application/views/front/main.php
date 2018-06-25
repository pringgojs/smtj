<?php
include 'include/header.php';
?>
<section id="slide-wrapper">
	<div class="fleximage">
	
		<img src="<?=$fitur_img;?>">
	</div>
    <div class="flexidet">
    	<div class="overlay-det"></div>
    	<div class="flexdes">
          	<h3><?=$alt_img;?></h3>
            <?=$deskripsi;?>
       	</div>
    </div>
</section>
<section id="main">
	<div class="main-shadow"></div>
	<div class="main">
		<div class="main-post">
			<h1><?=$judul;?></h1>
			<div class="post-date">
				<i class="fa fa-calendar-o"></i> <?=$diterbitkan;?> &nbsp;&nbsp;&nbsp; <i class="fa fa-map-marker"></i> Surakarta, Seputar Sekolah &nbsp;&nbsp;&nbsp; <i class="fa fa-user"></i> <?=$id_user;?>
			</div>
			<div class="article">
				<?=$isi;?>	
			</div>
		</div>
		<div class="more-sub">
		<?php
		foreach ($childParent as $key => $value) {
				# code...
				$kode 	= $value->id_post;
				$data['judul'] = $value->judul;
				$data['isi'] = $value->isi;
				$data['diterbitkan'] = $this->method_call->date($value->diterbitkan);
				$data['last_update'] = $value->last_update;
				$data['jumlah_baca'] = $value->jumlah_baca;
				$data['id_user'] = $this->method_call->cek_user($value->id_user);
				$data['komen'] = $value->komen;
				$data['label'] = $value->label;
				$data['jam'] = $value->jam;
				$data['lokasi'] = $value->lokasi;
				$data['parent'] = $value->parent;
				$data['fitur_img'] = $value->fitur_img;
				$data['link_asli'] = $value->link_asli;

				#cek img 
				$data['images'] = $this->method_call->catch_that_image($value->isi);

				if($data['fitur_img'] != ""){
					$thumbnail = '<img src="'.$data['fitur_img'].'">';
				}else{
					if($data['images'] != ""){
						$thumbnail = '<img src="'.$data['images'].'">';
					}else{
						$thumbnail = "";
					}
				}
				$deskripsi = htmlentities(strip_tags($data['isi']));
				if(strlen($deskripsi) > 200 ){
					$deskripsi = substr($deskripsi, 0, 200)."...";
					$deskripsi2 = substr(htmlentities(strip_tags($data['isi'])), 0, 400)."...";
				}else{
					$deskripsi = $deskripsi;
					$deskripsi2 = $deskripsi;
				}
				if($thumbnail ==""){
					$width = "style='width:44%'";
				}else{
					$width = "";
				}
				?>
			
			<div class="sub-menu" style='width:44%'>
				<h2><?=$data['judul'];?></h2>
				<?php
				if($thumbnail ==""){
					echo '<div class="sub-menu-desc"  style="width:100%; margin-left:0">
							'.$deskripsi2.'
							<a href="'.$data['link_asli'].'">Read More <i class="fa fa-plus"></i></a>
						</div>';
				}else{
					echo $thumbnail;
					echo '<div class="sub-menu-desc">
							'.$deskripsi.'
							<a href="'.$data['link_asli'].'">Read More <i class="fa fa-plus"></i></a>
						</div>';
				}
				?>
				
			</div>
			
			<?php
			}
		?>
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>