<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AxMin, PARTI 2015 </title>

    <link href="../metro3/css/metro.min.css" rel="stylesheet">
    <link href="../metro3/css/metro-icons.min.css" rel="stylesheet">
    <link href="../metro3/css/metro-responsive.min.css" rel="stylesheet">
    <link href="../metro3/css/metro-schemes.min.css" rel="stylesheet">

    <script src="../metro3/js/jquery-2.1.3.min.js"></script>
    <script src="../metro3/js/jquery.dataTables.min.js"></script>

    <script src="../metro3/js/metro.js"></script>	

<style>
        html, body {
            height: 100%;
        }
        body {
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
        }

    </style>

    <script>
        function pushMessage(t){
            var mes = 'Info|Implement independently';
            $.Notify({
                caption: mes.split("|")[0],
                content: mes.split("|")[1],
                type: t
            });
        }

        $(function(){
            $('.sidebar').on('click', 'li', function(){
                if (!$(this).hasClass('active')) {
                    $('.sidebar li').removeClass('active');
                    $(this).addClass('active');
                }
            })
        })
    </script> 
</head>


<body class="bg-white">
<?php
	include("../hub.php");
	$parti = new pDB("../event.parti"); // Ambil DB dari luar | Mengikuti lokasi Index awal Axmin
?>
    <div class="app-bar fixed-top" data-role="appbar">
        <a class="app-bar-element branding"><span class="mif-windows"></span></a>
        <span class="app-bar-divider"></span>
        <ul class="app-bar-menu">
            <li><a href="?hal=other/view_contact"> <span class="mif-phone"></span> Contact Person</a></li>
            <li><a href="" class="dropdown-toggle"><span class="mif-calendar"></span> Data Event</a>
				<ul class="d-menu" data-role="dropdown">
					<li><a href="?hal=eventinfo/edit_event&eventID=1">LKTI</a></li>
					<li><a href="?hal=eventinfo/edit_event&eventID=2">Lomba Desain</a></li>
					<li><a href="?hal=eventinfo/edit_event&eventID=3">Futsal</a></li>
					<li class="divider"></li>
					<li><a href="?hal=eventinfo/edit_event&eventID=4">Seminar Nasional</a></li>
				</ul>
            </li>
            <li><a href="" class="dropdown-toggle"><span class="mif-users"></span> Registrasi Peserta</a>
				<ul class="d-menu" data-role="dropdown">
					<li><a href="?hal=registrasi/view_LKTI">LKTI</a></li>
					<li><a href="?hal=registrasi/view_LD">Lomba Desain</a></li>
					<li><a href="?hal=registrasi/view_futsal">Futsal</a></li>
					<li class="divider"></li>
					<li><a href="?hal=registrasi/view_semnas">Seminar Nasional</a></li>
				</ul>            
            </li>
            <li>
                <a href="" class="dropdown-toggle">Lain - Lain</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">ChatOn</a></li>
                    <li><a href="">Community support</a></li>
                    <li class="divider"></li>
                    <li><a href="">About</a></li>
                </ul>
            </li>
        </ul>

        <div class="app-bar-element place-right">
            <span class="dropdown-toggle"><span class="mif-cog"></span> Axmin PARTI</span>
            <div class="app-bar-drop-container padding10 place-right block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px">
                <h2 class="text-light">Quick settings</h2>
                <ul class="unstyled-list fg-dark">
                    <li><a href="">Profile</a></li>
                    <li><a href="">Security</a></li>
                    <li><a href="">Exit</a></li>
                </ul>
            </div>
        </div>
    </div>
	
	<?php 
	// Jumlah peserta
	$jml_futsal = $parti->query("SELECT COUNT(*) AS 'jml' FROM daftar_FUTSAL");
	$jml_lkti = $parti->query("SELECT COUNT(*) AS 'jml' FROM daftar_LKTI");
	$jml_ld = $parti->query("SELECT COUNT(*) AS 'jml' FROM daftar_LD");
	$jml_semnas = $parti->query("SELECT COUNT(*) AS 'jml' FROM daftar_semnas");

	$jfutsal = $jml_futsal->fetchArray(SQLITE3_ASSOC);
	$jlkti = $jml_lkti->fetchArray(SQLITE3_ASSOC);
	$jld = $jml_ld->fetchArray(SQLITE3_ASSOC);
	$jsemnas = $jml_semnas->fetchArray(SQLITE3_ASSOC);

	?>
    <div class="page-content">
        <div class="flex-grid" style="height: 100%;">
            <div class="row cells12" style="height: 100%">
            	<div class="cell no-tablet colspan2"></div> <!--  Tambahan untuk margin -->
                <div class="cell colspan2 no-tablet" id="cell-sidebar" style="background-color: #71b1d1; height: 100%; position:fixed; left:0;">
                    <ul class="sidebar">
                        <li><a href="#">
                            <span class="mif-apps icon"></span>
                            <span class="title">Semua Event</span>
                            <span class="counter">PARTI 2015</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-pencil icon"></span>
                            <span class="title">LKTI</span>
                            <span class="counter"><?php echo $jlkti[jml]; ?> Tim</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-display icon"></span>
                            <span class="title">Lomba Desain</span>
                            <span class="counter"><?php echo $jld[jml]; ?> Peserta</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-dribbble icon"></span>
                            <span class="title">Futsal</span>
                            <span class="counter"><?php echo $jfutsal[jml]; ?> Tim</span>
                        </a></li>
                        <li><a href="#">
                            <span class="mif-event-available icon"></span>
                            <span class="title">Seminar Nasional</span>
                            <span class="counter"><?php echo $jsemnas[jml]; ?> Peserta</span>
                        </a></li>
                    </ul>
                </div>

                <div class="cell colspan10 padding20 bg-white" id="cell-content">
                    <?php 
                    	$hal = $_GET[hal];
                    	if(isset($hal)){
                    		include($hal.".php");
                    	}
                    	else{
                    		echo "<h1><span class='mif-sun mif-ani-float'></span> Welcome Axmin</h1>";
                    	}

                    ?>

                </div>
            </div>
        </div>
    </div>
</body>
</html>