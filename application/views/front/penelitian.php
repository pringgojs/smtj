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
		width: 96.3%;
	}
	.news-wrapper{
		margin: 25px 29px 0px 2px;
		width: 28.1%;
		height: 320px;
	}
	.news-deskripsi{
		height: 260px;
	}
	 .loader{
	 	top: 10px;
	    display: none;
	    border: 1px solid #BCBEBF;
	    position:fixed;
	    z-index: 100000;
	    margin:20px 40% 20px 40%;
	    padding: 10px 10px 10px 40px;
	    background: url("<?=base_url('asset/images/712.gif');?>") no-repeat #E5E5E5 5px 10px;
  	}
</style>
<section id="main">
<div class="loader">Checking data ...</div>
	<div id="main-wrapper">
		
		<h2>PENELITIAN</h2>
		<b>Penelitian Mahasiswa Pada Proyek Akhir</b><br> 
		<div class="main-news-wrapper">
			
		</div>
		<!-- looping -->
		<?php
		foreach ($research as $key => $value) {
			# code...

			$diterbitkan 	= $this->method_call->date($value->diterbitkan);
			$judul 	= strtoupper($value->judul);
			$bulan 	= strtoupper($this->method_call->tgl($value->diterbitkan));
			$tgl 	= substr($value->diterbitkan,8,2);
			$link 	= $value->link_asli;
			$deskripsi 	= $value->isi;
			//$kategori 	= $this->method_call->cek_kategori(explode('-', $value->kategori)['0']);
			#cek img 
			$desc_img 	= false;
			$img = $this->method_call->catch_that_image($value->isi);
			if($img == ""){
				$img = "";
				$desc_img 	= false;
				$jumlah_karakter 	= 320;
			}else{
				$img = "<div class='news-thumb'><img src='".$img."'></div>";
				$desc_img 	= true;
				$jumlah_karakter 	= 40;
			}
			
			#cek deskripsi
			if($deskripsi != ""){
				$deskripsi = htmlentities(strip_tags($deskripsi));
				if(strlen($deskripsi) > $jumlah_karakter ){
					$deskripsi = substr($deskripsi, 0, $jumlah_karakter)."...";
				}else{
					$deskripsi = $deskripsi;
				}
				
			}else{
				$deskripsi = $deskripsi;
			}
			echo '<div class="news-wrapper" style="border-top: #FB8113 solid 3px;">
					
					<div class="news">
					'.$img.'
						<div class="news-deskripsi">
							<h2>'.$judul.'</h2>
							<br>
							'.$deskripsi.'
						</div>
						<div class="news-date">
							'.$diterbitkan.'
						</div>
						<div class="readmore"><a href="'.$link.'">SELENGKAPNYA <i class="icon-chevron-right"></i></a></div>
					</div>
				</div>';
		}
		?>
		
		
		<div id="hasil">
			<input type="hidden" value="9" id="page" >
		</div>
		<!-- end looping -->
	</div>

</section>
<?php
include "include/footer.php";
?>
<script>
$(document).ready(function() {
    var win = $(window);
    var halaman = $("#page").val();
   
    // Each time the user scrolls
    win.scroll(function() {
 	 	
        
        if ($(document).height() - win.height() == win.scrollTop()) {
            $(".loader").fadeIn();
		
            $.ajax({
                url: '<?=base_url();?>research_next/'+halaman,
                dataType: 'html',
                success: function(html) {
                	
                	$(".loader").fadeOut();
			halaman = parseInt($("#page").val())+9;
                	$("#page").val(halaman);
                   	$('#hasil').append(html);
                    
                }
            });
            

            // $('#posts').append(randomPost());
            // $('#loading').hide();
        }
    });
});
/*
// Generate a random post
function randomPost() {
    // Paragraphs that will appear in the post
    var paragraphs = [
        '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae suscipit arcu. Praesent pretium orci neque, non egestas massa suscipit non. In urna ligula, pretium ac magna in, consectetur venenatis dui. Etiam id commodo neque, vel semper nunc. Vivamus porttitor condimentum pulvinar. Quisque et consequat mi. Suspendisse luctus, quam in dapibus venenatis, velit erat malesuada lacus, dapibus tincidunt neque ex vitae leo. Suspendisse fermentum sit amet urna eu dignissim. Curabitur vel nibh quis justo volutpat porttitor et tempus sem.</p>',
        '<p>In a luctus purus, in tempus mi. Integer vulputate tincidunt arcu quis aliquet. Maecenas sollicitudin nec nisi sit amet dictum. Curabitur sagittis nulla id sem vulputate, eget blandit nibh ullamcorper. Nam feugiat elementum pharetra. Vestibulum a purus eget mi mattis tincidunt a sed felis. Sed pretium dignissim elementum. Cras est arcu, posuere et justo in, vehicula rutrum elit. Phasellus dictum risus libero, non cursus neque faucibus a. Nunc dignissim at purus vitae condimentum. Curabitur in libero mi.</p>',
        '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at tristique nibh, sed congue ligula. Curabitur eu porttitor tellus. Aliquam eu mollis tortor. Donec tortor sapien, molestie eu turpis vel, ultrices pulvinar orci. Aenean sagittis sem sit amet viverra maximus. Morbi id enim ipsum. Curabitur luctus placerat erat ut volutpat. In quis eros mattis, rutrum neque ut, malesuada neque.</p>',
        '<p>Integer erat eros, vestibulum at tortor vitae, sollicitudin finibus est. Aliquam ornare, elit nec gravida sagittis, sapien nibh elementum felis, eu eleifend eros lectus non mi. Nulla vel nisl scelerisque, consectetur nibh vel, malesuada lacus. Nam lobortis accumsan nisl consequat dictum. Praesent eget lobortis lorem. Ut sed ultrices enim. Nam nec ultricies felis.</p>',
        '<p>Donec hendrerit dolor id auctor ullamcorper. Curabitur ut mauris dolor. Quisque vitae cursus eros, ac rutrum sem. Aenean in turpis turpis. Fusce sit amet libero id massa dictum fermentum at eget arcu. Vestibulum eget blandit urna. In eu tristique augue. Phasellus augue risus, porttitor vel arcu nec, tincidunt laoreet tellus. Nam ornare leo dapibus ipsum dictum interdum.</p>',
        '<p>Nulla molestie porttitor justo vitae pharetra. Proin non convallis lacus, eget malesuada metus. Duis aliquam eu massa molestie rhoncus. Vestibulum a malesuada nulla. Morbi at libero tempus, hendrerit quam vitae, auctor eros. Vivamus tincidunt enim a est tincidunt, sed fringilla erat placerat. Nulla cursus, eros sed posuere sagittis, dui est lobortis tellus, id dapibus dui sem eget enim. Vestibulum eleifend lacus velit, ut suscipit nisi bibendum at. Nulla facilisi. Aenean luctus tellus eget nisi vestibulum, eget interdum lectus efficitur.</p>',
        '<p>Quisque facilisis aliquet dui, ut blandit odio vulputate et. Ut ac nisl turpis. Pellentesque scelerisque massa sit amet ipsum commodo cursus. Aenean eget ante et neque gravida tempor. Phasellus aliquam, purus quis malesuada vestibulum, sem mi cursus justo, a convallis purus dolor non lorem. Nunc dapibus vehicula nisi, eget egestas tellus lacinia vel. Nullam nisl ipsum, vehicula dignissim feugiat eu, semper nec arcu. Duis porttitor ut ex eget commodo. Curabitur accumsan diam ac euismod tincidunt. Cras dui urna, volutpat quis vehicula vitae, rhoncus a lacus. Curabitur ut purus aliquet, venenatis felis in, laoreet massa. Nullam lobortis sollicitudin aliquam. Quisque nec nisl eu sem vulputate venenatis. Proin sagittis erat sit amet sem vestibulum vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>'
    ];

    // Shuffle the paragraphs
    for (var i = paragraphs.length - 1; !!i; --i) {
        var j = Math.floor(Math.random() * i);
        var p = paragraphs[i];
        paragraphs[i] = paragraphs[j];
        paragraphs[j] = p;
    }

    // Generate the post
    var post = '<li>';
    post += '<article>';
    post += '<header><h1>Random Article!</h1></header>';
    post += paragraphs.join('');
    post += '</article>';
    post += '</li>';

    return post;
}
*/
</script>