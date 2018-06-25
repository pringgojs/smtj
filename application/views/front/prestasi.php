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
	.main-news-wrapper, .main-news{
		width: 97%;
	}

</style>
<script type="text/javascript">
	function cari(key){
		 alert(key);
	}
</script>
<section id="main">
	<div id="main-wrapper">
		
		<!-- <b>JADWAL KEGIATAN KAMPUS</b><br> -->
		<img src="<?=base_url();?>/upload/11-Prestasi.jpg" width="97%"> 
		<h2 style="font-family:Segoe UI Light;text-transform:capitalize">Data Prestasi Akademi Komunitas Negeri Ponorogo</h2>
		<div class="main-news-wrapper">
			<!-- selection for main news -->

			<div class="main-news" style="width:96%">
				<?php $tahun = $this->uri->segment(2);?>
				<div class="table-responsive">
				<span>Pilih tahun : </span>
				<select class="input" name="cari" onchange="self.location='<?=base_url();?>prestasi/'+this.value">
					<?php
						for ($i=2013; $i <= date('Y'); $i++) { 
							# code...
							if($tahun == $i){
								echo '<option selected value="'.$i.'">'.$i.'</option>';
							}else{
								echo '<option value="'.$i.'">'.$i.'</option>';
							}
							
						}
					
					;?>
				</select>				<br><br>
				<table class="table">
					<thead>
						<tr style="">
							<th width="5%" align="center">No</th>
							<th width="55%">Nama Lomba</th>
							<th width="10%">Jenis</th>
							<th width="10%">Skala</th>
							<th width="10%">Juara</th>
							<th width="10%">Tahun</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($prestasi as $key => $value) {
						# code...
						$nama 	= $value->nama_lomba;
						$jenis 	= $value->jenis;
						$skala 	= $value->skala;
						$juara 	= $value->juara;
						$tahun 	= $value->tahun;
						
						echo '<tr>
							<td align=center>'.$no.'</td>
							<td>'.$nama.'</td>
							<td>'.$jenis.'</td>
							<td>'.$skala.'</td>
							<td>'.$juara.'</td>
							<td>'.$tahun.'</td>

						</tr>';
						$no++;
					}
					?>	
						
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</section>
<?php
include "include/footer.php";
?>