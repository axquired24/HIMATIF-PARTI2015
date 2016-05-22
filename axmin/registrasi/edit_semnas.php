<h1 class="text-light">Edit data peserta <strong>Seminar Nasional</strong> <span class="mif-user-plus place-right"></span>
<br><small>Develop Your Powerfull Website Using .NET Technology</small>
</h1>
<hr class="thin bg-grayLighter">

<form action="" method="post" enctype="multipart/form-data">

<?php 
//data form
	$editID = $_GET[editID];
	$select = $parti->query("SELECT * FROM daftar_semnas WHERE id_peserta='$editID'");
	$tampil = $select->fetchArray(SQLITE3_ASSOC);

$cocokan = mktime(date("g")+5, date("i"), 0, date("m"), date("d"), date("y"));
$today = date("l, d F Y - g:iA", $cocokan);
$form_box = array(
				  array("nama_lengkap","Nama Lengkap"),
				  array("alamat_sekarang","Alamat Sekarang"),
				  array("email","Email"),
				  array("hp","No HP"),
				  array("valid","Apakah peserta ini sudah Lunas? Yes/No"),
				  array("pesan","Dari mana tau seminar ini? + Pesan untuk Panitia"),
				  array("tanggal_daftar", $today)
			);				

for($k=0; $k<count($form_box)-2; $k++){

?>	


<br><br>
<label><?php echo $form_box[$k][1]; ?></label><br>
<div class="input-control full-size text">                    	
	<input name="<?php echo $form_box[$k][0]; ?>" type="text" placeholder="<?php echo $form_box[$k][1]; ?>" value="<?php echo $tampil[$form_box[$k][0]]; ?>" required>
</div>              

<?php	}  ?>

<br><br>
<label>Pesan</label><br>
<div class="input-control full-size textarea">                    	
	<textarea name="<?php echo $form_box[5][0]; ?>" placeholder="Masukkan <?php echo $form_box[5][1]; ?>" readonly> <?php echo $tampil[$form_box[5][0]];?></textarea>
</div>

<button type="submit" name="submit_semnas" class="button primary">Simpan Data</button> 
<button class="button" onclick="window.history.back()">Kembali</button><br><br>                    

</form>

<?php

if($_POST[nama_lengkap]){
	$dftr_semnas = "UPDATE daftar_semnas SET
							 nama_lengkap		='$_POST[nama_lengkap]',
							 alamat_sekarang	='$_POST[alamat_sekarang]',							 
							 email				='$_POST[email]',
							 hp					='$_POST[hp]',
							 valid				='$_POST[valid]',
							 pesan				='$_POST[pesan]'
							 WHERE id_peserta = '$editID'
							 "; // ALL NAME RELATED to COLUMN in DB

	$sukses = $parti->exec($dftr_semnas);
	if(!$sukses){
		echo "<h1>".$parti->lastErrorMsg()."</h1>";
	} // close if $parti
	else{
		
		echo "<script> alert('Data diubah - ".$_POST[nama_lengkap]." '); </script>";
		echo "<meta http-equiv='refresh' content='0; url=./?hal=registrasi/view_semnas' />";
	}

} // Close if post	                    					                    
?>