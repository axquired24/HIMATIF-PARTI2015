<h1 class="text-light">Edit Peserta <strong>Lomba Desain Logo & Brosur</strong> <span class="mif-user-plus place-right"></span></h1>
<hr class="thin bg-grayLighter">

<form action="" method="post" enctype="multipart/form-data">

<?php 
//data form
	$editID = $_GET[editID];
	$select = $parti->query("SELECT * FROM daftar_LD WHERE id_desain='$editID'");
	$tampil = $select->fetchArray(SQLITE3_ASSOC);

$cocokan = mktime(date("g")+5, date("i"), 0, date("m"), date("d"), date("y"));
$today = date("l, d F Y - g:iA", $cocokan);
$form_box = array(
				  array("asal_sekolah","Asal Sekolah"),				  
				  array("alamat_sekolah","Alamat Sekolah"),
				  array("telp_sekolah","Telepon Sekolah"),				
				  array("nama_lengkap","Nama Peserta"),	
				  array("no_induk_siswa","NIS (Nomor Induk Siswa)"),
				  array("kelas","Kelas"),
				  array("alamat_peserta","Alamat Peserta"),				  
				  array("no_hp","Telepon Peserta"),
				  array("email","Email Peserta"),
				  array("tanggal_daftar", $today)
			);				

for($k=0; $k<count($form_box)-1; $k++){

?>	


<br><br>
<label><?php echo $form_box[$k][1]; ?></label><br>
<div class="input-control full-size text">                    	
	<input name="<?php echo $form_box[$k][0]; ?>" type="text" placeholder="<?php echo $form_box[$k][1]; ?>" value="<?php echo $tampil[$form_box[$k][0]]; ?>" required>
</div>              

<?php	}  ?>

<button type="submit" name="submit_ld" class="button primary">Simpan Data</button> 
<button class="button" onclick="window.history.back()">Kembali</button><br><br>                    

</form>

<?php

if($_POST[asal_sekolah]){
	$dftr_ld = "UPDATE daftar_LD SET							 
							 asal_sekolah 		='$_POST[asal_sekolah]',
							 alamat_sekolah		='$_POST[alamat_sekolah]',
							 telp_sekolah		='$_POST[telp_sekolah]',							 
							 nama_lengkap		='$_POST[nama_lengkap]',
							 no_induk_siswa		='$_POST[no_induk_siswa]',
							 kelas				='$_POST[kelas]',
							 alamat_peserta		='$_POST[alamat_peserta]',
							 no_hp				='$_POST[no_hp]',
							 email				='$_POST[email]' 
							 WHERE id_desain = '$editID'
							 "; // ALL NAME RELATED to COLUMN in DB

	$sukses = $parti->exec($dftr_ld);
	if(!$sukses){
		echo "<h1>".$parti->lastErrorMsg()."</h1>";
	} // close if $parti
	else{
		
		echo "<script> alert('Data telah diubah ".$_POST[nama_lengkap].". '); </script>";
		echo "<meta http-equiv='refresh' content='0; url=./?hal=registrasi/view_LD' />";
	}

} // Close if post	                    					                    
?>