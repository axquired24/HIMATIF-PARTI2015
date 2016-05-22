<!-- LKTI -->
<!-- Online Register Form -->
<?php 
//data form
$cocokan = mktime(date("g")+5, date("i"), 0, date("m"), date("d"), date("y"));
$today = date("l, d F Y - g:iA", $cocokan);
$form_box = array(0=>array("asal_sekolah","Nama Sekolah"),
				  1=>array("alamat_sekolah","Alamat Sekolah"),
				  2=>array("email","Email Tim/Sekolah"),
				  3=>array("xtelp_sekolah","Telepon Sekolah"),
				  4=>array("nama_pembimbing","Guru Pembimbing"),
				  5=>array("xtelp_guru","Nomor Telepon Pembimbing"),
				  6=>array("nama_peserta1","Nama Ketua Tim"),
				  7=>array("xkelas1","Kelas "),
				  8=>array("nama_peserta2","Nama Anggota 1"),
				  9=>array("xkelas2","Kelas "),
				  10=>array("nama_peserta3","Nama Anggota 2"),
				  11=>array("xkelas3","Kelas "),
				  12=>array("tanggal_daftar", $today)
			);
?>			
<form method="post" enctype="multipart/form-data" action="finish_register_lkti.php">

<div style="background: #EFEFEF; padding-top: 60px;" class="row">			
	<div class="container">
		<h1>Pendaftaran Online LKTI</h1><br>
		<div class="row">
			<div class="span6">
				<fieldset>
				    <legend>Data Sekolah</legend>
				    <?php
				    	for($f=0; $f<6; $f++){
				    ?>
				    <label><?php echo $form_box[$f][1]; ?></label>
				    <div class="input-control text" data-role="input-control">
				        <input name="<?php echo $form_box[$f][0]; ?>" type="text" placeholder="<?php echo $form_box[$f][1]; ?>" required>
				        <button class="btn-clear" tabindex="-1" type="button"></button>
				    </div>					
				    <?php }; //end for?>		    
				</fieldset>

			</div>
			<!-- end span6 -->


			<div class="span5 offset1">
				<fieldset>
				    <legend>Data Peserta</legend>
				    <?php
				    	for($f=6; $f<12; $f++){
				    ?>
				    <label><?php echo $form_box[$f][1]; ?></label>
				    <div class="input-control text" data-role="input-control">
				        <input name="<?php echo $form_box[$f][0]; ?>" type="text" placeholder="<?php echo $form_box[$f][1]; ?>" required>
				        <button class="btn-clear" tabindex="-1" type="button"></button>							        
				    </div>					
				    <?php }; //end for?>							    							    
				</fieldset>

			</div>
			<!-- end span6 -->
		</div>
		<!-- end sub row -->

		<div class="row">
			<div class="span12">
				<div class="input-control checkbox">
				    <label>
				        <input type="checkbox" name="agree" required />
				        <span class="check"></span>
				        Kami akan mengikuti lomba karya tulis ilmiah sesuai dengan alur kegiatan yang ditentukan. <em>(Will be Registered: <?php echo $form_box[12][1]; ?> ).</em>
				    </label>
				</div><br><br>							
				<input name="lkti-send" class="button large danger" type="submit" value="Kirim Data">
				<br><br>
			</div>

		</div>
		

	</div>
</div>
<!-- end row big	 -->
</form>
<!-- end Form -->

