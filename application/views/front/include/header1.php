<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<title>AKN PONOROGO</title>
		<meta content="Website SMK Negeri 1 Jenangan Ponorogo, Lets Make Future Our" name="description" />
		<meta content="STMJ, JENPO, Jenangan, SMKN 1 Jenangan" name="keywords" />
		<meta content='index, follow' name='robots'/>
		
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/css/style/style.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/css/style/flex.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/css/style/skin.css">
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>asset/css/style/font-awesome.min.css"/>
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
		    jQuery('#agenda').jcarousel();
		});
		jQuery(document).ready(function() {
		    jQuery('#produk').jcarousel();
		});
		</script>
	</head>
	<body>
		<section id="wrapper">
			<nav id="navbar">
				<div id="navbar-wrapper">
					<div class="nav-phone">
						<i class="icon-phone" style="font-size:14px;"></i> (+0352) 481 236
						<span style="color:#8CACCA;margin-left:10px;">Call for information</span>
					</div>
					<div class="navbar-top">
						<ul>
							<li>Browse the page</li>
							<?=$this->method_call->menu('1');?>
						</ul>
					</div>
				</div>
			</nav>
			<header id="header">
				<div id="header-wrapper">
					<div class="logo">
						<a href="<?=base_url();?>"><img src="<?=base_url();?>asset/images/logoakn.png"></a>
					</div>
					<nav class="navbar-header">
						<div class="search-wrap">
							<form action="<?=base_url('?');?>" name="cari" method="GET">
								<input type="search" name="q" class="search-input" placeholder="Search...">
							</form>
						</div>
						<ul>
						<?=$this->method_call->menu('2');?>
							
						</ul>
					</nav>
				</div>
			</header>