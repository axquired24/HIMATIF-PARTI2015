<!-- Finish Register Futsal-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="product" content="Official Site PARTI 2015">
    <meta name="description" content="Parade Teknik Informatika 2015">
    <meta name="author" content="HIMATIF UMS">
	<title>PARTI 2015</title>
	<link rel="stylesheet" href="partiWeb.css">
	<style>
		body{
			background: #DCDEDD;
			margin-top: 100px;
		}
	</style>
</head> 
<body class="metro">
	<!-- php scripting LD -->
	<div style="display: none;">	
	<?php
	include "hub.php";
	if($_POST["ld-send"]){
	$a = $_POST[asal_sekolah];
	$b = $_POST[nama_lengkap];

		$dftr_ld = "INSERT INTO daftar_LD VALUES(
					 null,
					 '$_POST[no_induk_siswa]',
					 '$_POST[nama_lengkap]',
					 '$_POST[asal_sekolah]',
					 '$_POST[kelas]',
					 '$_POST[alamat_sekolah]',
					 '$_POST[alamat_peserta]',
					 '$_POST[no_hp]',				 
					 '$_POST[email]',
					 '$today'
					 )"; // ALL NAME RELATED to COLUMN in DB

		$ex_ld = $parti->exec($dftr_ld);
		if(!$ex_ld){
			echo $parti->lastErrorMsg();
		}
	}

	?>
	</div>
	<!-- end php scripting LD -->

	<div class="grid fluid">
		<div class="row text-center">
			<h1><span class="icon-checkmark"></span> <br>
			<small>Pengiriman Data Peserta Lomba Desain Berhasil				
			</small>
			</h1>
			<br>
			<br>
			<?php echo $a. " - ".$b; ?>
			<strong>Selanjutnya,</strong>
			<ul>				
				<li> Transfer biaya pendaftaran Rp 20.000 ke nomor rekening : BRI cabang Ngawi atas nama Fajar Diyah Ayu Martilasari no. Rek 6442-01-013540-53-6 </li>
				<li> Verifikasi pendaftaran & pembayaran melalui sms ke 081 915 310 907 (Anggit) </li>
				<li> Anda terdaftar Resmi! <span class="icon-smiley"></span></li>
			</ul>
			<br><br><br>

			<a href="http://parti2015.himatifums.org" class="button large primary"> Saya Mengerti, kembali ke halaman awal.</a>
		</div>		

		<div class="row">
			<div class="span12 text-center">&copy 2015 - Panitia PARTI 2015</div>
		</div>					
	</div>
	

<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.widget.min.js"></script> -->
<script type="text/javascript" src="js/metro.min.js"></script>	
</body>
</html>
