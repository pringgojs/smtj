<div id="sidebar">
				<div class="sidebar">
					<div class="side-top">
						<div class="photo-thumb">
							<img src="<?php echo base_url() ?>asset/images/a0.png">
						</div>
						<b><?php
				              foreach ($user as $key => $datauser) {
				                # code...
				                echo $namauser = $datauser->nama;
				                $jabatan = $datauser->jabatan;
				                if($jabatan==1){
				                	$jabatan = "ADMINISTRATOR";
				                }else{
				                	$jabatan = "OPERATOR";
				                }
				              }
              				?>
          				</b><br>
						<span style="font-size:11px;color:#555"><?=$jabatan;?></span><br>
						<input type="search" class="search" placeholder="Search..." name="search">
					</div>
					<div class="side-menu">
						<div class="side-title-module">
							Primary
						</div>
						<ul>
							<li><a href="#" class="active"><i class='icon-globe'></i> Dashboard</a></li>
							<li><a href="#"><i class='icon-folder-open'></i> Module</a></li>
							<li><a href="#"><i class='icon-group'></i> Administrator</a></li>
						</ul>
						<div class="side-title-module">
							Frontpage
						</div>
						<ul>
							<li><a href="#"><i class='icon-globe'></i> User Management</a></li>
							<li><a href="#"><i class='icon-group'></i> Berita</a></li>
							<li><a href="#"><i class='icon-folder-open'></i> Halaman</a></li>
						</ul>
						<div class="side-title-module">
							Main
						</div>
						<ul>
							<li><a href="#"><i class='icon-globe'></i> Quisioner</a></li>
							<li><a href="#"><i class='icon-group'></i> Daftar Lolos</a></li>
							<li><a href="#"><i class='icon-folder-open'></i> Daftar Sekolah</a></li>
							<li><a href="#"><i class='icon-folder-open'></i> Statistik</a></li>
						</ul>
					</div>
				</div>
			</div>