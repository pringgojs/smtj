<!DOCTYPE HTML>
<html>
  <head>
    <title>Administrator</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/font-awesome.min.css">
    <!--
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/bootstrap.css">
    -->
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
          CONSULTAN ENGINEERING
        </div>
        <div class="nav-user" onclick="$('.nav-detail').toggle()">
          <img src="<?php echo base_url() ?>asset/images/a0.png" height="30" style="float:left">
          <div class="nav-name">
            <?php
              foreach ($user as $key => $datauser) {
                # code...
                echo $namauser = $datauser->nama;
              }
              ?>
            
            <i class="icon-caret-down"></i>
          </div>
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