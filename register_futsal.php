<!-- FUTSAL -->
<!-- Online Register Form -->
<?php 
//data form
$cocokan = mktime(date("g")+5, date("i"), 0, date("m"), date("d"), date("y"));
$today = date("l, d F Y - g:iA", $cocokan);
$form_box = array(0=>array("asal_sekolah","Nama Sekolah"),
				  1=>array("alamat_sekolah","Alamat Sekolah"),
				  2=>array("telp_sekolah","Telepon Sekolah"),
				  3=>array("nama_manajer","Nama Manajer / Pembimbing"),
				  4=>array("hp_manajer","Kontak Manajer"),
				  5=>array("nama_tim","Nama Tim"),
				  6=>array("peserta_tim","Anggota Tim"),	
				  7=>array("tanggal_daftar", $today)
			);
?>			
<form method="post" enctype="multipart/form-data" action="finish_register_futsal.php">

<div style="background: #EFEFEF; padding-top: 60px;" class="row">			
	<div class="container">
		<h1>Pendaftaran Online FUTSAL</h1><br>
		<div class="row">
			<div class="span6">
				<fieldset>
				    <legend>Data Sekolah & Manajer</legend>
				    <?php
				    	for($f=0; $f<5; $f++){
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
				    <legend>Data Tim</legend>
				    <?php
				    	for($f=5; $f<6; $f++){
				    ?>
				    <label><?php echo $form_box[$f][1]; ?></label>
				    <div class="input-control text" data-role="input-control">
				        <input name="<?php echo $form_box[$f][0]; ?>" type="text" placeholder="<?php echo $form_box[$f][1]; ?>" required>
				        <button class="btn-clear" tabindex="-1" type="button"></button>							        
				    </div>					
				    <?php }; //end for?>

				    <label><?php echo $form_box[6][1]; ?></label>
				    <div class="input-control textarea" data-role="input-control">
				        <textarea name="<?php echo $form_box[6][0]; ?>" rows="9" placeholder="Tuliskan nama semua <?php echo $form_box[6][1]; ?>. Pisahkan dengan titik-koma (;). Contoh M. Andi Setiawan; Ahmad Musykar; Jarod Nakula" required></textarea>				        
				    </div>				    							    							    
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
				        Kami akan mengikuti Kompetisi Futsal secara sportif dan fair sesuai ketentuan dan petunjuk pelaksanaan. <em>(Will be Registered: <?php echo $form_box[7][1]; ?> ).</em>
				    </label>
				</div><br><br>							
				<input name="futsal-send" class="button large inverse" type="submit" value="Kirim Data">
				<br><br>
			</div>

		</div>
		

	</div>
</div>
<!-- end row big	 -->
</form>
<!-- end Form -->