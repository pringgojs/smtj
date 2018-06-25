<?php date_default_timezone_set('Asia/Jakarta');?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>  
  <meta charset="utf-8" />
  <title>CPanel - SMKN 1 Jenpo</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
	<link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo base_url() ?>asset/images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/icon.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/font.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/app.css" type="text/css" />  
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/redactor.css" type="text/css" />  
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/style.css" type="text/css" />  
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/css/dropzone.css" type="text/css" />  
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>asset/js/nestable/nestable.css" type="text/css" />
  <script src="<?php echo base_url() ?>asset/js/dropzoneDE.js"></script> 
  
  <script src="<?php echo base_url() ?>asset/js/gridGalery/modernizr.custom.js"></script>
  <?php echo @$map['js']; ?>
<script type="text/javascript">
            // DROPZONE
            Dropzone.options.formFile = {
                    acceptedFiles: ".jpeg, .jpg, .png, .gif",
                    success: function(file, response){
                        alert(file.name);
            };</script>
             
  <!-- tinyMCE -->
  <script src="<?php echo base_url() ?>asset/js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ 
          selector:'#berita',
           height: 1000,
           
            plugins: [
              'advlist autolink lists link image charmap print preview anchor',
              'searchreplace visualblocks code fullscreen',
              'insertdatetime media table contextmenu paste code'
            ],
            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image uploadimg',
            content_css: [
              '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
              '<?php echo base_url() ?>asset/css/codepen.min.css'
            ],
            relative_urls: false,
            remove_script_host: false,
            setup : function(ed) {
              // Add a custom button
              ed.addButton('uploadimg', {
                  title : 'Upload image',
                  image : '<?=base_url("asset/images/tipe/upload.png");?>',
                  onclick : function() {
                      // Add you own code to execute something on click
                      // ed.focus();
                      //ed.selection.setContent('Hello world!');
                      notif('img');
                  }
              });
          }
           });



</script>

  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
  
</head>
