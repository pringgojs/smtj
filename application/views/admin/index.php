<!DOCTYPE HTML>
<html>
	<head>
		<title>Administrator</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/redactor.css">
		<script type='text/javascript' charset='utf-8' src='<?php echo base_url() ?>asset/js/jquery.js'></script>
		<script type='text/javascript' charset='utf-8' src='<?php echo base_url() ?>asset/js/redactor.js'></script>
		<script type='text/javascript' charset='utf-8' src='<?php echo base_url() ?>asset/js/redactor.min.js'></script>
		<script type="text/javascript">
        $(function()
        {
            $('#content').redactor();
        });
        
        </script>
		<script type="text/javascript">
		    $(document).ready(function(){
			  $(".list").hover(
			  	  function(){ $(".list-opt").hide();}
			  );
		    });
			function addpop(opt, id)
			{
				if(opt)
				{
					$(".loading-pop").show();
					$(".canvasshow").css('margin-top','6%');
					$(".canvasshow").fadeIn(200).animate({'margin-top':'5%'},{queue:false,duration:200});
					$(".blackout").show();
					$(".blackflash").show();
				}
				else
				{
					$(".blackout").fadeOut(200);
					$(".blackflash").hide();
					$(".canvasshow").hide();
					$(".loading-pop").hide();
				}
			}
		</script>
	</head>
	<body>
		<section id="wrapper">
			<nav id="navbar">
				<div class="nav-title">
					ADIWIYATA
				</div>
				<div class="nav-user" onclick="$('.nav-detail').toggle()">
					<img src="<?php echo base_url() ?>asset/images/a0.png" height="30" style="float:left">
					<div class="nav-name">HERY PRAST <i class="icon-caret-down"></i></div>
				</div>
				<div class="nav-detail">
					<div class="arrow"></div>
					<ul>
						<li><a href="#"><i class='icon-wrench'></i> Setting</a></li>
						<li><a href="#"><i class="icon-cogs"></i> Password</a></li>
						<li><a href="#"><i class='icon-off'></i> Logout</a></li>
					</ul>
				</div>
			</nav>
			<div id="sidebar">
				<div class="sidebar">
					<div class="side-top">
						<div class="photo-thumb">
							<img src="<?php echo base_url() ?>asset/images/a0.png">
						</div>
						<b>HERY PRAST</b><br>
						<span style="font-size:11px;color:#555">ADMINISTRATOR</span><br>
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
			<div id="main">
				<div class="main">
					<h2>ENCYCLOPEDIA</h2>
					<div class="notification">
						<div class="notif green">
							Selamat anda telah menang
							<span class="close-notif" onclick="$('.notif').fadeOut();"><i class="icon-remove"></i></span>
						</div>
					</div>
					<div class="content satu">
						<table class="table">
							<tr>
								<th>Name</th>
								<th>Title</th>
								<th>Action</th>
								<th>Statue</th>
							</tr>
							<tr>
								<td>Anonymous</td>
								<td>Hastag</td>
								<td>#101230</td>
								<td>Okay</td>
							</tr>
						</table>
					</div>
					<div class="clear"/>
					<div class="content dua left">
						<input type="button" class="button plus hitam" value="ADD WIDGET" onclick="addpop(true)" style="float:right">
						<h3>WIDGET</h3>
						<div class="list-wrap">
							<div class="list">
								<div class="list-option" onclick="$('#list1').toggle()">
									<i class="icon-ellipsis-vertical"></i>
								</div>
								<div id="list1" class="list-opt">
									<div class="list-opt-ctn" onclick="addpop(true,'1')">Edit</div>
									<div class="list-opt-ctn">Hapus</div>
								</div>
								<span class="list-check"><input type="checkbox" id="" name=""></span>
								<div class="list-content">
									<div class="ikon dark-green">A</div>
								</div>
								<div class="list-content">Testing</div>
								<div class="list-content">Testing</div>
							</div>
							<div class="list">
								<div class="list-option" onclick="$('#list2').toggle()">
									<i class="icon-ellipsis-vertical"></i>
								</div>
								<div id="list2" class="list-opt">
									<div class="list-opt-ctn">Edit</div>
									<div class="list-opt-ctn">Hapus</div>
								</div>
								<span class="list-check"><input type="checkbox" id="" name=""></span>
								<div class="list-content">
									<div class="ikon orange">B</div>
								</div>
								<div class="list-content">Testing</div>
								<div class="list-content">Testing</div>
							</div>
						</div>
					</div>
					<div class="content dua">
						<input type="text" class="text">
						<input type="button" class="button merah" value="SUBMIT" onclick="addpop(true)"><br/><br/>
						<input type="button" class="button kuning" value="TAMBAH">
						<input type="button" class="button hijau" value="UPDATE">
						<input type="button" class="button hitam" value="UPDATE">
						<input type="button" class="button abu" value="EDIT">
						<div class="navigation">
							<div class="nav-page"><i class="icon-arrow-right"></i></div>
							<div class="nav-page">2</div>
							<div class="nav-page nav-active">1</div>
							<div class="nav-page"><i class="icon-arrow-left"></i></div>
						</div>
					</div>
					<div class="clear"/>
					<div class="wrap-tiga left">
						<div class="content full">
							<h3>KETERANGAN</h3><br>
							Where I found a love with you. I will create a something cool!
						</div>
						<div class="content full">
							Where I found a love with you. I will create a something cool!
						</div>
					</div>
					<div class="content tiga">
						
					</div>
					<div class="content tiga right">
						3
					</div>
					<div class="clear"/>
					<div class="content empat left">
						4
					</div>
					<div class="content empat left">
						4
					</div>
					<div class="content empat">
						4
					</div>
					<div class="content empat right">
						4
					</div>
					<div class="clear"/>
					<div class="content empat left">
						4
					</div>
					<div class="content empat">
						4
					</div>
					<div class="content dua right">
						2
					</div>
					<div class="clear"/>
					<div class="content tiga left">
						3
					</div>
					<div class="content enam">
						<h3>Form Enam</h3>
						<table class="form" width="100%" border="0">
							<tr>
								<td width="200">Nama</td>
								<td><input type="text" class="text lebar" placeholder="Masukkan nama"></td>
							</tr>
							<tr>
								<td>Nama</td>
								<td><input type="text" class="text lebar" placeholder="Masukkan nama"></td>
							</tr>
							<tr>
								<td>Nama</td>
								<td><input type="text" class="text lebar" placeholder="Masukkan nama"></td>
							</tr>
							<tr>
								<td>Nama</td>
								<td><input type="text" class="text lebar" placeholder="Masukkan nama"></td>
							</tr>
						</table>
					</div>
					<div class="clear"/>
					<div class="content empat left">
						4
					</div>
					<div class="content delapan">
						<form action="" method="post">
						    <textarea id="content" name="content"></textarea>
						    <p>
						        <input type="submit" value="Submit" name="send">
						    </p>
						</form>
					</div>
					<!-- pop up -->
					<div class="blackout"></div>
					<div class="blackflash">
						<div class="loading-pop"><img src="style/images/loading.gif" width="30"></div>
						<div id="canvas" class="canvasshow">
					    	<div class="title">
					    		<h3>Add Widget</h3>
					    		<div class="closeshow-download" onclick="addpop(false)"><img src="style/images/close.png" alt="icon" width="20px"></div>
					    		<div class="canvasmain" style="overflow:hidden; margin:0 auto;">
					    			Nama <input type="text" class="text">
					        	</div>
							</div>
						</div>
					</div>
					<!-- pop up -->
				</div>
			</div>
		</section>
	</body>
</html>