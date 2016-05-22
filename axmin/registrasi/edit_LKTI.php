<h1 class="text-light">Edit Data <strong>Tim LKTI</strong> <span class="mif-user-plus place-right"></span></h1>
<hr class="thin bg-grayLighter">

<form action="" method="post" enctype="multipart/form-data">

<?php 
//data form
	$editID = $_GET[editID];
	$select = $parti->query("SELECT * FROM daftar_LKTI WHERE id_lkti='$editID'");
	$tampil = $select->fetchArray(SQLITE3_ASSOC);

$cocokan = mktime(date("g")+5, date("i"), 0, date("m"), date("d"), date("y"));
$today = date("l, d F Y - g:iA", $cocokan);
$form_box = array(array("asal_sekolah","Nama Sekolah"),	
				  array("alamat_sekolah","Alamat Sekolah"),
				  array("email","Email Tim"),
				  array("telp_sekolah","Telepon Sekolah"),
				  array("nama_peserta1","Ketua Tim"),
				  array("kelas_nis_telepon1","Kelas, NIS, Telepon Ketua Tim (Pisahkan dengan koma(,))"),
				  array("nama_peserta2","Anggota 1"),
				  array("kelas_nis_telepon2","Kelas, NIS, Anggota 1 (Pisahkan dengan koma(,))"),
				  array("nama_peserta3","Anggota 2"),
				  array("kelas_nis_telepon3","Kelas, NIS, Telepon Anggota 2 (Pisahkan dengan koma(,))"),
				  array("nama_pembimbing","Nama Pembimbing"),
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

<button type="submit" name="submit_lkti" class="button primary">Simpan Data</button> 
<button class="button" onclick="window.history.back()">Kembali</button><br><br>                    

</form>

<?php

if($_POST[asal_sekolah]){
	$dftr_lkti = "UPDATE daftar_LKTI SET							 
							 asal_sekolah 		= '$_POST[asal_sekolah]',
							 alamat_sekolah 	= '$_POST[alamat_sekolah]',
							 email 				= '$_POST[email]',
							 telp_sekolah 		= '$_POST[telp_sekolah]',
							 nama_peserta1		= '$_POST[nama_peserta1]',
							 nama_peserta2		= '$_POST[nama_peserta2]',
							 nama_peserta3		= '$_POST[nama_peserta3]',
							 kelas_nis_telepon1	= '$_POST[kelas_nis_telepon1]',
							 kelas_nis_telepon2	= '$_POST[kelas_nis_telepon2]',
							 kelas_nis_telepon3	= '$_POST[kelas_nis_telepon3]',
							 nama_pembimbing	= '$_POST[nama_pembimbing]'
							 WHERE id_lkti = '$editID'
							 "; // ALL NAME RELATED to COLUMN in DB

	$sukses = $parti->exec($dftr_lkti);
	if(!$sukses){
		echo "<h1>".$parti->lastErrorMsg()."</h1>";
	} // close if $parti
	else{
		
		echo "<script> alert('Data ".$_POST[asal_sekolah]." diEdit. '); </script>";
		echo "<meta http-equiv='refresh' content='0; url=./?hal=registrasi/view_LKTI' />";
	}

} // Close if post	                    					                    
?>