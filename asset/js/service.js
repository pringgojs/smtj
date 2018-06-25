var homepage = "http://www.smkn1jenpo.sch.id/";
var customLink = false;

function editkategori(id){
	
	var nama = $('.nama-kategori-'+id).html();
	$('#kategori').val(nama).focus();;
	$('#id').val(id);
}
function hapus_kategori(){
	
	  data = $("#cek-form").serialize();

	  window.location.href=homepage+'category/delete';
	  //alert(data);
	    // $.ajax({
	    //     url:homepage+"category/delete/?"+data,
	    //     success:function(result){
					// alert(result);
		   //        if(result == 1){
		   //          window.location.href=homepage+'category';
		   //        }else{
		   //          alert("Terjadi kegagalan sistem dalam menghapus");
		   //        }
	    //     }
	    //   })
	}
function hapus_file(id){
	$.ajax({
		url: homepage+"administrator/files/delete/"+id,
		success: function(status){
			if(status == 1){
				// sukses
				$("#data-"+id).fadeOut(0);
			}else{
				alert(status);
			}
		}
	});
}
function konfirm(key,act){
	var txt;
	var r = confirm("apakah ingin menghapus "+key+" ?");
	if (r == true) {
	    hapus_news(id);
	} else {
	    return true;
	}
}
function tanya(key,act)
{
	a = confirm("Anda yakin menghapus yang dicentang?");
	if(a == true)
	{	
		var r 	= $("#pilih").val();
		data 	= $("#cek-form").serialize();
		// uri 	= fixedEncodeURI(data);
		// alert(uri);
		if(r == "del"){
			location.href=homepage+key+"/delete/"+data;
		}else{
			/* jukabukan del */
		}
		
	}
	else
	{	return false; }
}

function cek_all(){
         allCheckList = document.getElementById("cek-form").elements;
         jumlahCheckList = allCheckList.length;
         if(document.getElementById("cek").value == "All"){
            for(i = 0; i < jumlahCheckList; i++){
                allCheckList[i].checked = true;
            }
            document.getElementById("cek").value = "UnAll";
         }else{
            for(i = 0; i < jumlahCheckList; i++){
                allCheckList[i].checked = false;
         }
            document.getElementById("cek").value = "All";
         }
}
function cek_modul(){
         allCheckList = document.getElementById("simpanberita").elements;
         jumlahCheckList = allCheckList.length;
         if(document.getElementById("cek").value == "All"){
            for(i = 0; i < jumlahCheckList; i++){
                allCheckList[i].checked = true;
            }
            document.getElementById("cek").value = "UnAll";
         }else{
            for(i = 0; i < jumlahCheckList; i++){
                allCheckList[i].checked = false;
         }
            document.getElementById("cek").value = "All";
         }
}

function addlabel(label, id){
	var data 	= $("#label").val();
 	var txtId 	= $("#id_label").val();
    if(data.indexOf(label+",")==-1){
    	$('#label').val(data + label+ ", ");
    	$('#id_label').val(txtId + id+ ", ");
       // document.getElementById("#label").value = data + con + ",";
    } else {
    	//alert(con);
    	// jika data sudah ada di dalam textbox data todak bisa ditampilkan
    	
    	//$('#label').val(data + con+ ", ");
        //document.getElementById("#label").value = data.replace(con + ",","");
    }
    function fixedEncodeURI (str) {
    	
    	return encodeURI(str).replace(/%5B/g, '[').replace(/%5D/g, ']');
	}
}

// $.Redactor.prototype.advanced = function()
// {
//     return {
//         init: function ()
//         {
//             var button = this.button.add('advanced', 'Advanced');
//             this.button.addCallback(button, this.advanced.testButton);
//         },
//         testButton: function(buttonName)
//         {
//             alert(buttonName);
//         }
//     };
// };

function notif(opt)
{

  if(opt)
  {
    $(".popbox").attr("class","popbox hide");
    $(".blackout2").fadeIn("fast");
    $(".blackflash2").fadeIn("fast");
    $(".canvasshow2").fadeIn(10).animate({'margin-top':'0px'},{queue:false,duration:300});
    //$('#formFile').html("");
    $('#url').val(""); // menu
    $("#key").val(opt); // load gambar di halaman page n post

  }
  else
  {
    $(".blackout2").fadeOut("fast");
    $(".blackflash2").fadeOut("fast");    
    $(".canvasshow2").fadeIn(10).animate({'margin-top':'-250px'},{queue:false,duration:300});
    $(".contentshow").show();
    $(".popbox").attr("class","popbox");
  }
};
function loadFilePopup(key){ // load file img dari tb_files
	//alert(key);
	$.ajax({
		url:homepage+"administrator/news/files/"+key,
	    success:function(result){
	    	$('#hasil-file').html(result);
	    	//$('#files').html(result);
	    }
	})
}
function select_file(url, id, nama, type){ // fungsi click img di tumnail
	//alert(id);
		$('#url_file').val(url);
		$('#nama_file').val(nama);
		$('#type_file').val(type);
		$('.selected-image').removeClass("selected-image");
		$('.img-'+id).addClass("selected-image");
		$("#id_file").val(id);
	
}
function addTinyMCE(){
	url 	= $('#url_file').val();
	nama 	= $('#nama_file').val();
	type 	= $('#type_file').val();
	key 	= $("#key").val();
	if(key == 'fiturImages'){
		//alert("a");
		$("#fiturImages").html('<div class="panel bg-light"><div class="panel-body "><img src="'+url+'" style="margin-bottom:15px"/>  <input type="text" name="alt" placeholder="Tittle of Images" id="alt" class="form-control"/><br><input type="text" name="deskripsi" placeholder="Discription of Images" id="deskripsi" class="form-control"/> <a href="#" onclick=\"removeImg()\"><b>-Remove Fitur Images</b></a></div></div>');
		$("#urlfiturImages").val(url);
		notif(false);
	}else{
		if(type == "Images"){
			content = '<img src="'+url+'"/>';
		}else{
			content = '<a href="'+url+'">'+nama+'</a>';
		}
		tinyMCE.activeEditor.selection.setContent(content);
	  	notif(false);
	}
	
}
function removeImg(){
	$("#fiturImages").html("");
	$("#urlfiturImages").val("");
	$("#alt").val("");
	$("#deskripsi").val("");
}

function bulusan(url, id)
{
	alert(url+" "+id);
	 //var idx = parseInt(id)+1;
	$("#url_file").val(homepage+"upload/"+url);
	$('.select-image').removeClass("select-image");
	$(".bulusan"+id).addClass("select-image");
	$('#nama_file').val(url);
}

// function select_img(){
// 	url = $('#url_file').val();
// 	//tinyMCE.execCommand('mceInsertContent', true, '<img src="'+url+'"/>');

// 	tinyMCE.activeEditor.selection.setContent('<img src="'+url+'"/>');
//   	notif(false);
// }
//load files
function loadfile(key, type, order){
	type = $("#pilih").val();

	var page;
	if(arguments.length == 3){
		page = homepage+'administrator/files/load/'+key+'/'+type+'/'+order;
	}
	else if(arguments.length == 2){
		page = homepage+'administrator/files/load/'+key+'/'+type;
	}else{
		page = homepage+'administrator/files/load/'+key;
	}
	$("#key_load_file").val(key);
		
	

	// if(key	 =="grid"){
	// 	page = homepage+'administrator/files/grid/'+type+'/'+order;
	// }else{
	// 	page = homepage+'administrator/files/table/'+type+'/'+order;
	// 	//window.location.href=page;
		
	// }
	$("#hasil").html("");
	
	$.ajax({
		url:page,
		success:function(result){
			$("#hasil").html(result);
		}

	});
}
function al(a){
	alert(a)
}
function loadFileKategori(key){ // load file img dari tb_files
	$("#hasil").html("");
	$.ajax({
		url:homepage+"administrator/news/files/"+key,
	    success:function(result){
	    	$("#hasil").html(result);
	    	
	    	//$('#files').html(result);
	    }
	})
}
function addkategori(){
	nama = $("#txtkategori").val();
	nama = nama.trim();
	if(nama==""){
		alert("Kolom tidak boleh kosong !");
		nama = $("#txtkategori").val("");
		$("#txtkategori").focus();
	}else{
		nama = nama.replace(/\s/g, '-');
		$("#list-category").html("Loading ..");
		$.ajax({
			url:homepage+'administrator/news/addkategori/'+nama,
			success: function(result){

				$("#list-category").html(result);
				$("#txtkategori").val("");
				//alert(result);
			}

		});
	}
	
}
function saveDraf(key){
	alert(key);
	judul   = $("#judul").val();
   	judul   = judul.trim();
   	judul   = judul.replace(/\s/g, '-');
   	kontent = tinyMCE.get('berita').getContent()
   	kode    = $("#kode").val();
   	data    = $("#simpanberita").serialize();
   	if(key == 'news'){
   		newslink   = homepage+"news/"+kode+"/"+judul;
	}else if(key=="announcement"){
		newslink   = homepage+"/announcement/"+kode+"/"+judul;
	}else{
		newslink   = homepage+"/"+judul;
	
	}
	
	$.ajax({
		url:homepage+"administrator/"+key+"/savetodraf",
		data: {
			newslink: link_tmp,
			konten: kontent,
			kode: kode,
			judul: judul,
			data,
		},
		type: 'post',
		success: function(result){
			window.location.href=homepage+"administrator/"+key;
		}
	});
}


function addtomenulis(id, value)
{
	if($("#list-menu-item-"+id).length == 0)
	{
		isi = "<li class='dd-item' data-id='"+id+"' id='list-menu-item-"+id+"'>"+
			  "<div class='dd-handle'>"+value+" <button class='btn btn-default pull-right btn-xs'  onclick=\"removechilemenu('"+id+"')\"><i class='fa fa-times '></i></button></div>"+
			  "</li>";
		$("#list-menu").append(isi);
	//$("#maxpinjam").html(parseInt($("#maxpinjam").html())-1);
		
	}
	else
	{
		//alert("Menu sudah ada di daftar!");
	}
	
}
function removechilemenu(id){
	alert(id);
}

function selectRow(link, kode, key){
	//alert(link);
	$(".baris").removeClass('bg-light');
	$(".baris-halaman-"+kode).addClass('bg-light');
	$('#url').val(link);
	$("#id_post").val(kode);
	$("#key").val(key);

	
}
function selectUrlMenu(){
	// cek URL CUSTOM apa POST
	url = $("#url").val();
	$("#link").val(url);
	notif(false);
}
function opsiLinkCustom(){
	$("#url").val(""); // URL POST di REMOVE
	$("#id_post").val("0"); // ID POST DI REMOVE
	$("#key").val("custom");
}

/* LAYOUT */
function selectPage(link, kode, deskripsi,img, judul){
	
	key = $("#key").val();

	$(".baris").removeClass('bg-light');
	$(".baris-halaman-"+kode).addClass('bg-light');
	$('#link').val(link);
	$('#isi').val(deskripsi);
	$('#key').val(key);
	$('#img').val(img);
	$('#judul').val(judul);
	$('#kode').val(kode);
}
function selectPageLayout(){
	kode = $('#kode').val();
	key = $("#key").val();
	link =$('#link').val();
	img = $('#img').val();
	judul = $('#judul').val();
	$.ajax({
		url: homepage+"administrator/layout/cek_post/"+kode+"/echo",
			success:function(result){
				// deskripsi = $('#isi').val(result);
				//alert(result);
				elm = '<img id="img-'+key+'" onclick=\'notif("'+key+'")\' style="max-width:100%; height:auto; width:auto" src="'+img+'">';
				$('#link-'+key).val(link);
				$('#isi-'+key).val(result);
				$('#key-'+key).val(key);

				$('#thum-'+key).html(elm);
				$('#judul-'+key).html(judul);
				$('#content-'+key).html(result);

				$("#box-"+key).removeClass('wrong');
				$("#box-"+key).addClass('panel-default');

				
			}
	});
	notif(false);

	
}
function ubahLabel(key){
	// id = label-1 di " "
	html = '<input type="text" name="txtLabel-'+key+'" id="txtLabel-'+key+'" class="col-sm-6" ><button onclick=\'okLabel("'+key+'")\' class="btn btn-default btn-sm">Ok</button>';
	$("#label-"+key).html(html);
	$("#txtLabel-"+key).focus();
}
function okLabel(key){
	
	input = $("#txtLabel-"+key).val();
	input = input.trim();
	if(input==""){
		alert('Masukan inputan yang benar !');
		$("#txtLabel-"+key).focus();
	}else{
		txtInput = '<input type="hidden" name="txtLabel-'+key+'" id="txtLabel-'+key+'" value="'+input+'" >';
		html  = txtInput+input+'<button onclick=\'ubahLabel("'+key+'")\' class="btn btn-default btn-sm">Edit</button>';
		$("#label-"+key).html(html);
	}
	
}
function svLayout(){
	save = true;
	id1 	= $("#id1").val();
	label1 	= $("#txtLabel-1").val();
	editlabel1 	= $("#edit-txtLabel-1").val();
	key1 	= $("#key-1").val();
	link1 	= $("#link-1").val();
	// ---------------
	id2 	= $("#id2").val();
	label2 	= $("#txtLabel-2").val();
	editlabel2 	= $("#edit-txtLabel-2").val();
	key2 	= $("#key-2").val();
	link2 	= $("#link-2").val();
	// -----------------
	id3 	= $("#id3").val();
	label3 	= $("#txtLabel-3").val();
	editlabel3 	= $("#edit-txtLabel-3").val();
	key3 	= $("#key-3").val();
	link3	= $("#link-3").val();
	// -----------------
	id4 	= $("#id4").val();
	label4 	= $("#txtLabel-4").val();
	editlabel4 	= $("#edit-txtLabel-4").val();
	key4 	= $("#key-4").val();
	link4	= $("#link-4").val();
	
	if(label1 == null){
		label1 = editlabel1;
		
	}else{
		label1 = label1;
	}
	if(label2 == null){
		label2 = editlabel2;
	}else{
		label2 = label2;
	}
	if(label3 == null){
		label3 = editlabel3;
	}else{
		label3 = label3;
	}
	if(label4 == null){
		label4 = editlabel4;
	}else{
		label4 = label4;
	}

	// link

	if(link1 ==""){
		alert('Anda belum memilih sebuah page');
		$("#box-1").removeClass('panel-default');
		$("#box-1").addClass('wrong');
		save = false;
	}else{
		save = true;
	}
	if(link2 ==""){
		alert('Anda belum memilih sebuah page');
		$("#box-2").removeClass('panel-default');
		$("#box-2").addClass('wrong');
		save = false;
	}else{
		save = true;
	}
	if(link3 ==""){
		alert('Anda belum memilih sebuah page');
		$("#box-3").removeClass('panel-default');
		$("#box-3").addClass('wrong');
		save = false;
	}else{
		save = true;
	}
	if(link4 ==""){
		alert('Anda belum memilih sebuah page');
		$("#box-4").removeClass('panel-default');
		$("#box-4").addClass('wrong');
		save = false;
	}else{
		save = true;
	}

	// validator posisi
	if(key1 ==""){
		alert('Anda belum memilih sebuah page');
		$("#box-1").removeClass('panel-default');
		$("#box-1").addClass('wrong');
		save = false;
	}else{
		save = true;
	}
	if(key2 ==""){
		alert('Anda belum memilih sebuah page');
		$("#box-2").removeClass('panel-default');
		$("#box-2").addClass('wrong');
		save = false;
	}else{
		save = true;
	}
	if(key3 ==""){
		alert('Anda belum memilih sebuah page');
		$("#box-3").removeClass('panel-default');
		$("#box-3").addClass('wrong');
		save = false;
	}else{
		save = true;
	}
	if(key4 ==""){
		alert('Anda belum memilih sebuah page');
		$("#box-4").removeClass('panel-default');
		$("#box-4").addClass('wrong');
		save = false;
	}else{
		save = true;
	}


	if(save == true){
		//data 	= $("#save").serialize();
		data1 = "id1="+id1+"&label1="+label1+"&key1="+key1+"&link1="+link1;
		data2 = "&id2="+id2+"&label2="+label2+"&key2="+key2+"&link2="+link2;
		data3 = "&id3="+id3+"&label3="+label3+"&key3="+key3+"&link3="+link3;
		data4 = "&id4="+id4+"&label4="+label4+"&key4="+key4+"&link4="+link4;
		$.ajax({
			url: homepage+"administrator/layout/save/?"+data1+data2+data3+data4,
			success:function(result){
				window.location.href=homepage+"administrator/layout";
				//alert(result);
			}
		});
	}else{

	}

	
	
}

// SLIDER //
function selectUrlSlider(){
	
	id_file = $("#id_file").val();
	url 	= $("#url_file").val();
	elm = '<img id="img" onclick=\'notif("imgs")\' style="max-width:100%; height:auto; width:auto" src="'+url+'">';
	$("#thum").html(elm);			
	$("#kode_file").val(id_file);
	notif(false);

}
function pilihImgPascaUpload(url, id)
{
	alert(url);
	id_file = $("#id_file").val(id);
	$("#url_file").val(homepage+"upload/"+url);
	$('.select-image').removeClass("select-image");
	$(".bulusan"+id).addClass("select-image");
	$('#nama_file').val(url);
}
function popUp(opt)
{

  if(opt)
  {
  	$(".canvasshow2").html("");
    $(".popbox").attr("class","popbox hide");
    $(".blackout2").fadeIn("fast");
    $(".blackflash2").fadeIn("fast");
    $(".canvasshow2").fadeIn(10).animate({'margin-top':'0px'},{queue:false,duration:300});
    //$('#formFile').html("");
    alert(opt);
    $.ajax({
    	url : homepage+"administrator/slider/openPOPUP/"+opt,
    	success: function(result){
    		$(".canvasshow2").html(result);
    	}
    });
    $('#url').val(""); // menu
    $("#key").val(opt); // load gambar di halaman page n post

  }
  else
  {
    $(".blackout2").fadeOut("fast");
    $(".blackflash2").fadeOut("fast");    
    $(".canvasshow2").fadeIn(10).animate({'margin-top':'-250px'},{queue:false,duration:300});
    $(".contentshow").show();
    $(".popbox").attr("class","popbox");
  }
};

// AGENDA //
function cari(key){
	keyword = $("#txtcari").val().trim();
	view = $("#view").val();

	if(keyword != ""){
		if(view!=""){
			window.location.href=homepage+"administrator/"+key+"/?v="+view+"&q="+keyword;
		}else{
			window.location.href=homepage+"administrator/"+key+"/?q="+keyword;
		}
		
		
	}
}
function create_corner(kode){
	
	html = "<i onclick='delete_corner("+kode+")' class='fa fa-star text-warning fa-lg text' id='star-$kode'></i>";
	$.ajax({
		url:homepage+"administrator/news/create_corner/"+kode,
		success:function(result){
			if(result == 1){
				$("#div-star-"+kode).html("");
				$("#div-star-"+kode).html(html);
			}else{
				alert('Sorry, system crash. Please try again');
			}
		}
	})
}

function delete_corner(kode){
	
	html = "<i onclick='create_corner("+kode+")' class='fa fa-star-o fa-lg text' id='star-$kode'></i>";
	$.ajax({
		url:homepage+"administrator/news/delete_corner/"+kode,
		cache:true,
		success:function(result){
			if(result == 1){
				$("#div-star-"+kode).html("");
				$("#div-star-"+kode).html(html);
			}else{
				alert(result);
				//alert('Sorry, system crash. Please try again');
			}
		}
	})
}
// MODULE
function pilih_icon(icon)
{
	
	$("#icon").val(icon);
}
function cek_cabang(id){
    $(".loader").fadeIn();
    $.ajax({
      url:homepage+"administrator/module/ambil_cabang/"+id,
      success: function(result){
        $(".loader").fadeOut();
        $("#perent2").html(result);
      }
    });
}

// 22 Sep 2016
function seting()
{
	$(".popbox").attr("class","popbox hide");
    $(".blackout2").fadeIn("fast");
    $(".blackflash2").fadeIn("fast");
    $(".canvasshow2").fadeIn(10).animate({'margin-top':'0px'},{queue:false,duration:300});
  
}
function updatepagging(key){
	var tmp = $("#tmp_pg_"+key).val();
	var input = $("#pg_"+key).val();
	if(input < 1){
		alert('pastikan lebih dari 0');
		$("#pg_"+key).val(tmp);
	}else{
		if(input != tmp){
			$.ajax({
		      url:homepage+"administrator/updatepaging/"+input+"/"+key,
		      success: function(result){
		        if(result==1){
		        	alert('Berhasil dirubah');
		        	$("#tmp_pg"+key).val(input);
		        }else{
		        	alert('Perubahan tidak disimpan');
		        }
		        
		      }
		    });

		}else{
			
		}
	}
	
}
function redirect_post(url){
	window.location.href=url;
}
function selectUrlAlbume(){
	
	id_file = $("#id_file").val();
	url 	= $("#url_file").val();
	elm = '<img id="img" onclick=\'notif("imgs")\' style="max-width:100%; height:auto; width:auto" src="'+url+'">';
	$("#thum").html(elm);			
	$("#kode_file").val(id_file);
	$("#linkImg").val(url);
	notif(false);
	
}
function addImageAlbum(){
	
	id_file = $("#id_file").val();
	url 	= $("#url_file").val();
	id_album = $("#id_albume").val();
	
	page 	= homepage+"administrator/galery/add_image_to_albume/"+id_album+"/"+id_file;
	
	$.ajax({
      url:page,
      success: function(result){
      	html = 
      			'<div style="position:absolute; margin-top:20px; margin-left:20px;z-index:100; display:block;">'+
                  '<a href="'+homepage+'administrator/galery/hapus/'+result+'">'+
                    '<button class="btn btn-sm btn-bg btn-primary"><i class="fa fa-trash-o"></i></button>'+
                  '</a>'+
                '</div>'+
                '<figure>'+
                  '<img src="'+url+'" alt="img0'+result+'"/>'+
                '</figure>';
       
        $("#hasil-add-image").append(html);            
      }
    });

	notif(false);
	
}

