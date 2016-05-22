<?php
	$editID = $_GET[editID];
	$pilih = $parti->query("SELECT * FROM EVENT_INFO WHERE id_event='$editID' ");
	$tampil = $pilih->fetchArray(SQLITE3_ASSOC);
	$contact = $tampil[contact_person];
	$pecahPerNama = explode(";", $contact);	
?>
<h1 class="text-light">Edit Contact <br><small><?php echo $tampil[event_name]; ?></small> <span class="mif-phone place-right"></span></h1>
<hr class="thin bg-grayLighter">
<form action="#" method="post" enctype="multipart/form-data">
	<?php 
		for($k=0; $k<count($pecahPerNama); $k++){
	?>

	<br><br><label>Contact <?php echo $k+1; ?> (Pisahkan Nama, No.HP)</label>
	<div class="input-control text full-size">		
		<input type="text" placeholder="Nama Contact" name="contact<?php echo $k+1; ?>" value="<?php echo $pecahPerNama[$k]; ?>"/>
	</div>

	<?php
		} // END FOR
	?>
	<input name="submit" type="submit" class="button primary" value="Simpan"> <button class="button" onclick="window.history.back()">Kembali</button>
</form>

<?php
	// Edit program
	
	//gabungkan
	if($_POST[submit]){
		$arrayGabung = array($_POST[contact1],$_POST[contact2],$_POST[contact3]);
		$gabung = implode(";", $arrayGabung);
		$q_edit = "UPDATE EVENT_INFO SET contact_person='$gabung' WHERE id_event='$editID'";
		$sukses = $parti->exec($q_edit);

		if($sukses){
			echo "<script>alert(' Contact Person disimpan'); </script>";
		}

	} //if submit

?>