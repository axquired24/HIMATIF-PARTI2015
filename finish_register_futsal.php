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
<!-- php scripting FUTSAL -->
	<div style="display: none;">	
	<?php 
	include "hub.php";
	if($_POST["futsal-send"]){
		
		$a = $_POST[asal_sekolah];
		$b = $_POST[nama_tim];

		$dftr_futsal = "INSERT INTO daftar_FUTSAL VALUES(
					 null,
					 '$_POST[asal_sekolah]',
					 '$_POST[alamat_sekolah]',
					 '$_POST[telp_sekolah]',
					 '$_POST[nama_tim]',
					 '$_POST[peserta_tim]',
					 '$_POST[nama_manajer]',				 
					 '$_POST[hp_manajer]',
					 '$today'
					 )"; // ALL NAME RELATED to COLUMN in DB

		$ex_futsal = $parti->exec($dftr_futsal);
		if(!$ex_futsal){
			echo $parti->lastErrorMsg();		
		}
	}

	?>
	</div>
	<!-- end php scripting FUTSAL -->
	<div class="grid fluid">
		<div class="row text-center">
			<h1><span class="icon-checkmark"></span> <br>
			<small>Pengiriman Data Peserta FUTSAL Berhasil				
			</small>
			</h1>
			<br>
			<br>
			<?php echo $a. " - ".$b; ?>
			<strong>Selanjutnya,</strong>
			<ul>				
				<li> Transfer biaya pendaftaran Rp 200.000 ke nomor rekening : BRI cabang Ngawi atas nama Fajar Diyah Ayu Martilasari no. Rek 6442-01-013540-53-6 </li>
				<li> Verifikasi pendaftaran & pembayaran melalui sms ke 085 729 479 619 (Aji) </li>
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
