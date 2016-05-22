<?php
	$delID = $_GET[delID];

	$del = $parti->exec("DELETE FROM daftar_LKTI WHERE id_lkti = '$delID'");
	if(!$del){
		echo "<h1>Gagal</h1>";
	}
	else{
		echo "<script>alert('Data terhapus')</script>";
	}
	echo "<meta http-equiv='refresh' content='0; url=./?hal=registrasi/view_LKTI' />";

?>