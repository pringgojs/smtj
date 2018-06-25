
<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>SMKN 1 Jenangan Ponorogo</title>
  <meta name="description" content="SMKN 1 Jenpo, SMKN 1 Jenangan, stm jenangan, smkn adiwiyata ponorogo" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css" type="text/css" />

  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/app.css" type="text/css" />  
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
<style type="text/css">
#linex{
  position:fixed;
  background:#428bca;
  height:4px;
  width:0%;
  top:0;
  }
  #load{
  position:fixed;
  bottom:0px;
  margin:auto;
  background:#11ACFF;
  height:70px;
  margin-bottom:-120px;
  right:47%;
  padding:20px 20px;
  border-radius:6px 6px 0px 0px;
  border:1px solid #0089D2;
  box-shadow:0px 0px 4px #0089D2 inset;
}
.notif{
  padding:20px 20px;
  background:#666666;
  position:fixed;
  color:#FFFFFF;
  margin-top:80px;
}
</style>
<script type="text/javascript">
</script>
<script src="<?php echo base_url() ?>asset/js/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  $('#notifsalah').animate({'margin-left':'-=400px'}, 0, 'swing');
  $('#notifblokir').animate({'margin-left':'-=400px'}, 0, 'swing');
  $('#notifkosong').animate({'margin-left':'-=400px'}, 0, 'swing');
    
  <?php
    if(isset($_GET['ref'])){
      if($_GET['ref'] == 0)
        { ?>$('#notifsalah').delay(1000).animate({'margin-left':'-=400px'}, 800, 'swing');<?php }
        else if($_GET['i']==1)
        {?>$('#notiflogin').delay(1000).animate({'margin-left':'+=400px'}, 800, 'swing');<?php }
      else{
         ?>$('#notifblokir').delay(1000).animate({'margin-left':'+=400px'}, 800, 'swing');<?php
      }
    }
  ?>
  $("#login").submit(function(event) {
    event.preventDefault();
    data = $("#login").serialize();
    
    var username = $("input[name='username']").val();
    var password = $("input[name='password']").val();
    if($("#pakecookie").prop("checked")==true) { pcookie = "iya"; }else{ pcookie = "tidak"; }
    $('#content').delay(400).animate({'margin-top':'-=700px'}, 400, 'swing');
    $('#load').animate({'margin-bottom':'+=118px'}, 600, 'swing');
    $("#notifsalah").animate({'margin-left':'-=400px'}, 400, 'swing');
    $("#notifblokir").animate({'margin-left':'-=400px'}, 400, 'swing');
    $("#notifkosong").animate({'margin-left':'-=400px'}, 400, 'swing');
    $.ajax({
          url:"<?php echo base_url() ?>login/cek_login/?pakecookie="+pcookie+"&"+data,    // Url to which the request is send
          type: "POST",             // Type of request to be send, called as method
          data:  {username:username, password:password},    // Data sent to server, a set of key/value pairs representing form fields and values 
          success: function(result)     // A function to be called if request succeeds
          {
		
            
            if(result == 1){
              $("#notifsalah,#notifblokir,#notifkosong").animate({'margin-left':'-=400px'}, 1000, 'swing');
              $('#load').delay(450).animate({'margin-bottom':'-=100px'}, 800, 'swing');
              $('#linex').delay(600).animate({'width':'+=100%'}, 2500, 'easeInOutCubic');  
              <?php 
                $url = @$_GET['rel'];
                if(isset($url)){
                  $url = $url;
                }else{
                  $url = base_url('administrator');
                }
              ?>
              
              window.setTimeout("window.location='<?=$url;?>'",3000); 
            }
            else if(result == 2){//sandi slaah
              
              $('#content').delay(500).animate({'margin-top':'+=700px'}, 1000, 'swing');
              $('#load').delay(450).animate({'margin-bottom':'-=118px'}, 800, 'swing');
              $('#notifsalah').delay(2000).animate({'margin-left':'0px'}, 800, 'swing');
            }
            else if(result == 3){//akun blokir
              
              $('#content').delay(500).animate({'margin-top':'+=700px'}, 1000, 'swing');
              $('#load').delay(450).animate({'margin-bottom':'-=118px'}, 800, 'swing');
              $('#notifblokir').delay(2000).animate({'margin-left':'0px'}, 800, 'swing');
            }
            else if(result == 4){
              <?php $urlx = base_url('not_access');?>
              window.setTimeout("window.location='<?=$urlx;?>'",3000); 
            
            }else{
              
              $('#content').delay(500).animate({'margin-top':'+=700px'}, 1000, 'swing');
              $('#load').delay(450).animate({'margin-bottom':'-=118px'}, 800, 'swing');
              $('#notifkosong').delay(2000).animate({'margin-left':'0px'}, 800, 'swing');
            }              
          }         
     });  
  });
});
</script>
  
</head>
<body class="">
 
 <div id='notifblokir' class="notif">Akun Anda diblokir</div>
 <div id='notifsalah' class="notif">Nama pengguna atau kata sandi salah!</div>
 <div id='notifkosong' class="notif">Tidak ada data yang cocok!</div>
 <div id="linex"></div>
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xl">
      <a class="navbar-brand block" href="index.html">Admistrator </a>
      <section class="m-b-lg">
        <header class="wrapper text-center">
          <strong>Silahkan login untuk akses adminpanel</strong>
        </header>
        <form id="login" method="post" action="#">
          <div class="list-group">
            <div class="list-group-item">
              <input type="text" placeholder="Username" name="username" class="form-control no-border">
            </div>
            <div class="list-group-item">
               <input type="password" placeholder="Password" name="password" class="form-control no-border">
            </div>
            <div class="list-group-item">
               <div class="checkbox i-checks">
                 <label>
                   <input type="checkbox" name="pakecookie" id="pakecookie" >
                   <i></i> Biarkan saya masuk
                 </label>
              </div>
            </div>
          </div>
          
              
          <button id="log" type="login"  class="btn btn-lg btn-primary btn-block">Login</button>
          <div class="text-center m-t m-b"><a href="#"><small>Lupa password?</small></a></div>
          <div class="line line-dashed"></div>
          <p class="text-muted text-center"><small>Belum mempunyai account?</small></p>
          
       </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
      <p>
        <small>SMK Negeri 1 Jenangan Ponorogo<br>&copy; <?php echo date('Y');?></small>
      </p>
    </div>
  </footer>
  <div id="load" align="center"><img src="<?php echo base_url() ?>asset/images/load.gif" width="50" height="50"></div> 
  <!-- / footer -->


  <script src="<?php echo base_url() ?>asset/js/jquery.easing.1.3.js"></script>
</body>
</html>