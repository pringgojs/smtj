
<script src="<?php echo base_url() ?>asset/js/service.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>asset/js/bootstrap.js"></script>
<!-- App -->
<script src="<?php echo base_url() ?>asset/js/app.js"></script>  
<script src="<?php echo base_url() ?>asset/js/slimscroll/jquery.slimscroll.min.js"></script>

<script src="<?php echo base_url() ?>asset/js/nestable/jquery.nestable.js"></script>
<script src="<?php echo base_url() ?>asset/js/nestable/demo.js"></script>
<script src="<?php echo base_url() ?>asset/js/app.plugin.js"></script>
<script src="<?php echo base_url() ?>asset/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url() ?>asset/js/app.plugin.js"></script>

<!-- redactor -->
<script type='text/javascript' charset='utf-8' src='<?php echo base_url() ?>asset/js/redactor.js'></script>
<script type='text/javascript' charset='utf-8' src='<?php echo base_url() ?>asset/js/redactor.min.js'></script>
  
<script type="text/javascript">
  $(function(){
    $("#perent1").click(function(){
      if($('#perent1').hasClass("active")){
        $('#perent1').removeClass("active");
        $(this).addClass("active");
      }
    });
  });
  </script>
  <script type="text/javascript">
    $(function() {
      // form kartegori di page add news
      $("#form-kategori").hide(0);
      // upload file
      $("#FormuploadFile").hide(0);
      $('#news').redactor({
        plugins: ['advanced']
      });

      $('#tautan').hide();
        // reamove tag label
        //data  = $("#label").val("");
      txtId   = $("#id_label").val("");
    });
  </script>
  <script type="text/javascript">
      $("#tautanB").click(function(){
        $('#tautan').show(); 
        //$("#tautan").css("display","block");
        //$("#link").css("display","block");
      })
      $("#tautanA").click(function(){
        // $("#tautan").css("display","none");
        // $("#link").css("display","none");
        $('#tautan').hide(); 
      })
  </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-84782859-1', 'auto');
        ga('send', 'pageview');

    </script>
     
</body>
</html>