<!-- Lomba Desain Grafis -->
<!-- Online Register Form -->
<?php 
//data form
$cocokan = mktime(date("g")+5, date("i"), 0, date("m"), date("d"), date("y"));
$today = date("l, d F Y - g:iA", $cocokan);
$form_box = array(0=>array("nama_lengkap","Nama Lengkap"),
				  1=>array("no_induk_siswa","Nomor Induk Siswa (NIS)"),
				  2=>array("kelas","Kelas"),
				  3=>array("email","Email Peserta"),
				  4=>array("no_hp","Telepon Peserta"),
				  5=>array("alamat_peserta","Alamat Peserta"),
				  6=>array("asal_sekolah","Asal Sekolah"),
				  7=>array("alamat_sekolah","Alamat Sekolah"),
				  8=>array("tanggal_daftar", $today)
			);
?>			
<form method="post" enctype="multipart/form-data" action="finish_register_ld.php">

<div style="background: #EFEFEF; padding-top: 60px;" class="row">			
	<div class="container">
		<h1>Pendaftaran Online Lomba Desain Grafis</h1><br>
		<div class="row">
			<div class="span6">
				<fieldset>
				    <legend>Data Peserta</legend>
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
				    <legend>Data Sekolah</legend>
				    <?php
				    	for($f=6; $f<8; $f++){
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
				        Saya akan mengikuti Lomba Desain Grafis sesuai dengan petunjuk pelaksanaan yang diberikan. <em>(Will be Registered: <?php echo $form_box[8][1]; ?> ).</em>
				    </label>
				</div><br><br>							
				<input name="ld-send" class="button large danger" type="submit" value="Kirim Data">
				<br><br>
			</div>

		</div>
		

	</div>
</div>
<!-- end row big	 -->
</form>
<!-- end Form -->

