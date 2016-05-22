<?php 
	$eventID 	= $_GET[eventID];
	$hal  		= $_GET[hal];

	$pilih 		= $parti->query("SELECT * FROM EVENT_INFO WHERE id_event = '$eventID'");
	while ($tampil = $pilih->fetchArray(SQLITE3_ASSOC)) {		
?>
<h1 class="text-light">Edit Event <br><small><?php echo $tampil[event_name]; ?></small> <span class="mif-calendar place-right"></span></h1>
<hr class="thin bg-grayLighter">

<form action="" method="post" enctype="multipart/form-data">

<?php 
//data form

$cocokan = mktime(date("g")+5, date("i"), 0, date("m"), date("d"), date("y"));
$today = date("l, d F Y - g:iA", $cocokan);
$form_box = array(
				  array("event_name","Nama Event"),				  				  
				  array("event_time","Waktu Pelaksanaan"),				
				  array("place","Tempat Pelaksanaan"),	
				  array("ticket_price","Harga Tiket"),
				  array("link_juklak","Link Download Juklak"),
				  array("link_daftar","Link Pendaftaran Online"),
				  array("link_img_cover","Link Foto Kegiatan (1600x300px)"),
				  array("link_img_pamflet","Link Gambar Pamflet"),
				  array("description","Deskripsi Event"),
				  array("notes", "Catatan Lain / Kode Tambahan")
			);				

for($k=0; $k<count($form_box)-2; $k++){

?>	

<br><br>
<label><strong><?php echo $form_box[$k][1]; ?></strong></label><br>
<div class="input-control full-size text">                    	
	<input name="<?php echo $form_box[$k][0]; ?>" type="text" value="<?php echo $tampil[$form_box[$k][0]];?>" placeholder="<?php echo $form_box[$k][1]; ?>" required>
</div>              

<?php	} // Close for1

for($k=count($form_box)-2; $k<count($form_box); $k++){

?>

<br><br>
<label><strong><?php echo $form_box[$k][1]; ?></strong></label><br>
<div class="input-control full-size textarea">                    	
	<textarea name="<?php echo $form_box[$k][0]; ?>" placeholder="Masukkan <?php echo $form_box[6][1]; ?>" required>
		<?php echo $tampil[$form_box[$k][0]];?>
	</textarea>
</div>

<?php }; // CLose for2 ?>

<button type="submit" name="submit" class="button primary">Simpan Data</button> 
<button class="button" onclick="window.history.back()">Kembali</button><br><br>                    

</form>

<?php
	}; // Close WHILE Tampil

if($_POST[event_name]){
	$update = "UPDATE EVENT_INFO SET
							 event_name 	='$_POST[event_name]',
							 event_time 	='$_POST[event_time]',							 
							 place			='$_POST[place]',
							 ticket_price 	='$_POST[ticket_price]',

							 link_juklak 	='$_POST[link_juklak]',
							 link_daftar 	='$_POST[link_daftar]',
							 link_img_cover ='$_POST[link_img_cover]',							 
							 link_img_pamflet ='$_POST[link_img_pamflet]',

							 description 	='$_POST[description]',
							 notes 			='$_POST[notes]'							 

							 WHERE id_event='$eventID'
							 "; // ALL NAME RELATED to COLUMN in DB

	$sukses = $parti->exec($update);
	if(!$sukses){
		echo "<h1>".$parti->lastErrorMsg()."</h1>";
	} // close if $parti
	else{		
		echo "<script> alert('Event di Update ".$_POST[event_name].". '); </script>";		
	}

} // Close if post	                    					                    
?>