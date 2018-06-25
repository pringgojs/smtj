<?php 
$lang = @$_COOKIE['lang'];
$page = $this->uri->segment(1);
$link = $this->uri->segment(2);
if($page == "agenda" && $link == ""){
	$title = "Event | SMKN 1 Jenangan";
}else if($page == "news" && $link == ""){
	$title = "News | SMKN 1 Jenangan";
}else if($page == "about" && $link == ""){
	$title = "About | SMKN 1 Jenangan";
}else if($page == "contact" && $link == ""){
	$title = "Contact | SMKN 1 Jenangan";
}else if($page == "gallery" && $link == ""){
	$title = "Gallery | SMKN 1 Jenangan";
}else if($page == "product" && $link == ""){
	$title = "Product | SMKN 1 Jenangan";
}else if($page !="" && $link != ""){
	if(isset($judul)){
		$title = $judul;
	}else{
		$title = "SMKN 1 Jenangan";
	}
}else{
	$title = "SMKN 1 Jenangan";
}

?>
<?php
$lang = @$_COOKIE['lang'];
$indo_label = "Berita Terbaru seputar SMK Negeri 1 Jenangan";
$eng_label 	= "Latest news about SMK Negeri 1 Jenangan";
$indo_more  = "LIHAT SEMUA";
$eng_more 	= "VIEW ALL";
$indo_more2  = "SELENGKAPNYA";
$eng_more2 	= "MORE";

$indo_readmore = "Selengkapnya";
$eng_readmore = "Readmore";
$labelNews 	= "";
$labelMore 	= "";
$labelMore2 	= "";
$labelReadMore = "";
if(isset($_COOKIE['lang'])){
	
	if($lang=="eng"){
		# lang indonesia
		$labelNews 	= $eng_label;
		$labelMore 	= $eng_more;
		$labelMore2 	= $eng_more2;
		$labelReadMore = $eng_readmore;
	}else{
		$labelNews 	= $indo_label;
		$labelMore 	= $indo_more;
		$labelMore2 	= $indo_more2;
		$labelReadMore = $indo_readmore;
	}
}else{
	# default lang indonesia
	$labelNews 	= $indo_label;
	$labelMore 	= $indo_more;
	$labelMore2 	= $indo_more2;
	$labelReadMore = $indo_readmore;
}
?>
<!--
*	Dibuat oleh Pringgo Juni Saputro
*	Email : odyinggo@gmail.com
*	Sosial Media 
    .. fb : www.facebook.com/odyinggo
    .. tw : www.twitter.com/odyinggo
    .. ig : www.instagram.com/odyinggo
    
-->
<html>
	<head>
		<title><?=@$title;?> </title>
		<meta content="Website SMK Negeri 1 Jenangan Ponorogo, Lets Make Future Our" name="description" />
		<meta content="STMJ, JENPO, Jenangan, SMKN 1 Jenangan, SMKN Ponorogo, SMK Adiwiyata" name="keywords" />
		<meta content='index, follow' name='robots'/>
		<link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo base_url() ?>asset/images/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/css/style/style.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/css/style/responsive.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/css/style/flex.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/css/style/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/css/style/raleway.css"/>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/css/style/skin.css"/>
		<script type="text/javascript" src="<?php echo base_url() ?>asset/js/gridGalery/modernizr.custom.js"></script>


  		
	</head>
	<body>
		<section id="navbar">
			<div class="navbar">
				<div class="hotline">
					<i class="fa fa-phone"></i>  <?=$this->method_call->identitas("telepon");?> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; <i class="fa fa-envelope"></i> <?=$this->method_call->identitas("email");?>
					<span>Call for information</span>
				</div>
				<div class="menu-small">
					<ul>
						<li><span>Browse the page</span></li>
						<?=$this->method_call->menu("1");?>
						<?=$this->method_call->flag();?>
						
					</ul>
				</div>
			</div>
		</section>
		<section id="header">
			<div class="header">
			<a href="<?=base_url();?>">
				<div class="logo">
					<img src="<?=base_url('asset/images/ireng.png');?>" height="70">
				</div>
			</a>
				<div class="search-wrap">
					<form action="<?=base_url('?');?>" name="cari" method="GET">
						<input type="text" name="q" class="search" placeholder="Type and search...">
					</form>
				</div>
				<div class="menubar">
					<ul>
					<?=$this->method_call->menu("2");?>
						
					</ul>
				</div>
			</div>
		</section>