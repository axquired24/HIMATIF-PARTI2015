<h1 class="text-light">Tambah Data <strong>Tim Futsal</strong> <span class="mif-user-plus place-right"></span></h1>
<hr class="thin bg-grayLighter">

<form action="" method="post" enctype="multipart/form-data">

<?php 
//data form
	$editID = $_GET[editID];
	$select = $parti->query("SELECT * FROM daftar_FUTSAL WHERE id_futsal='$editID'");
	$tampil = $select->fetchArray(SQLITE3_ASSOC);

$cocokan = mktime(date("g")+5, date("i"), 0, date("m"), date("d"), date("y"));
$today = date("l, d F Y - g:iA", $cocokan);
$form_box = array(0=>array("asal_sekolah","Nama Sekolah"),
				  1=>array("alamat_sekolah","Alamat Sekolah"),
				  2=>array("telp_sekolah","Telepon Sekolah"),
				  3=>array("nama_manajer","Nama Manajer / Pembimbing"),
				  4=>array("hp_manajer","Kontak Manajer"),
				  5=>array("nama_tim","Nama Tim"),
				  6=>array("peserta_tim","Anggota Tim - Pisahkan antarnama dengan koma(,)"),	
				  7=>array("tanggal_daftar", $today)
			);				

for($k=0; $k<count($form_box)-2; $k++){

?>	


<br><br>
<label><?php echo $form_box[$k][1]; ?></label><br>
<div class="input-control full-size text">                    	
	<input name="<?php echo $form_box[$k][0]; ?>" type="text" placeholder="Masukkan <?php echo $form_box[$k][1]; ?>" value="<?php echo $tampil[$form_box[$k][0]]; ?>" required>
</div>              

<?php	}  ?>

<br><br>
<label><?php echo $form_box[6][1]; ?></label><br>
<div class="input-control full-size textarea">                    	
	<textarea name="<?php echo $form_box[6][0]; ?>" placeholder="Masukkan <?php echo $form_box[6][1]; ?>" required> <?php echo $tmpil[$form_box[6][0]]; ?></textarea>
</div>

<button type="submit" name="submit_futsal" class="button primary">Simpan Data</button> 
<button class="button" onclick="window.history.back()">Kembali</button><br><br>                    

</form>

<?php

if($_POST[nama_tim]){
	$dftr_futsal = "UPDATE daftar_FUTSAL SET							 
							 asal_sekolah		='$_POST[asal_sekolah]',
							 alamat_sekolah		='$_POST[alamat_sekolah]',
							 telp_sekolah		='$_POST[telp_sekolah]',
							 nama_tim			='$_POST[nama_tim]',
							 peserta_tim		='$_POST[peserta_tim]',
							 nama_manajer		='$_POST[nama_manajer]',				 
							 hp_manajer			='$_POST[hp_manajer]'
							 WHERE id_futsal = '$editID'
							 "; // ALL NAME RELATED to COLUMN in DB

	$sukses = $parti->exec($dftr_futsal);
	if(!$sukses){
		echo "<h1>".$parti->lastErrorMsg()."</h1>";
	} // close if $parti
	else{
		
		echo "<script> alert('Nama ".$_POST[nama_tim]." diubah. '); </script>";
		echo "<meta http-equiv='refresh' content='0; url=./?hal=registrasi/view_futsal' />";
	}

} // Close if post	                    					                    
?>