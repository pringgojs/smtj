<?php
include 'include/header.php';
?>
<section id="main">
	<div class="main-shadow"></div>
	<div class="main" style="margin-bottom:50px;">
		<div class="contact-wrap">
			<h1>Kontak Kami</h1>
			<b>HUBUNGI KAMI UNTUK INFORMASI LAIN</b>
			<br><br>
			<div class="contact-left">
				<div class="contact-info">
					<div class="icn deep-blue">
						<i class="fa fa-map-marker"></i>
					</div>
					<div class="inc-info">
						<?=$this->method_call->identitas("alamat");?>
					</div>
				</div>
				<div class="contact-info">
					<div class="icn blue">
						<i class="fa fa-phone"></i>
					</div>
					<div class="inc-info">
						Phone :<br>
						<?=$this->method_call->identitas("telepon");?><br>
						Fax :<br>
						<?=$this->method_call->identitas("fax");?>
					</div>
				</div>
				<div class="contact-info">
					<div class="icn red">
						<i class="fa fa-envelope"></i>
					</div>
					<div class="inc-info">
						Email :<Br>
						<?=$this->method_call->identitas("email");?>
					</div>
				</div>
				<div class="contact-info">
					<div class="icn orange">
						<i class="fa fa-bell"></i>
					</div>
					<div class="inc-info">
						Monday - Friday<Br>
						07.00 - 16.00
					</div>
				</div>
			</div>
			<style type="text/css">
				.sukses{
					background: #f1f1f1;
					padding: 10px;
					border-top: 5px solid #214f80;
				}
			</style>
			<div class="contact-right">
			<?php
				if(@$_GET['s']){
					echo '<p class="sukses">Terimakasih atas saran atau pertanyaan dari Anda.
					Saran atau pertanyaan yang masuk tidak kami tampilkan. Dan Saran atau pertanyaan akan kami respon 
					balas lewat email.</p>';
				}else{


			?>
			<form action="<?=base_url('contact/save');?>" name="form-contact" method="POST">
					
				<table width="100%" class="table-contact">
					<tr>
						<td><b>Fist Name</b></td>
						<td><b>Last Name</b></td>
					</tr>
					<tr>
						<td><input type="text" class="text tigalima" name="first" required placeholder="Fist name"></td>									
						<td><input type="text" class="text tigalima" name="last" required placeholder="Last name"></td>
					</tr>
					<tr>
						<td><b>Email</b></td>
						<td><b>Phone</b></td>
					</tr>
					<tr>
						<td><input type="text" class="text tigalima" name="email" required placeholder="Email"></td>									
						<td><input type="text" class="text tigalima" name="phone" required placeholder="Phone"></td>
					</tr>
					<tr>
						<td><b>Subject</b></td>
					</tr>
					<tr>
						<td colspan="2"><input type="text" class="text tujuhdua" required name="subject" placeholder="Subject"></td>
					</tr>
					<tr>
						<td><b>Message</b></td>
					</tr>
					<tr>
						<td colspan="2"><textarea class="text tujuhdua" name="msg" required style="height:200px;"></textarea></td>
					</tr>
				</table>
				<input type="submit" name="form-contact" class="button-view" value="SEND MESSAGE" style="float:right; margin-right:15px; margin-top:20px;">
				</form>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
<?php
include 'include/footer.php';
?>