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
</head> 
<body class="metro bg-start">
	<?php 
			include "hub.php";
			$select = $parti->query("SELECT * FROM EVENT_INFO ORDER BY id_event");
			$tampung = array(null, null, null, null);
			$s = 0;
			while($exe = $select->fetchArray(SQLITE3_ASSOC)){		
				$tampung[$s] = $exe;
				$s++;
			}
			$lkti 	= $tampung[0];
			$ld 	= $tampung[1];
			$futsal = $tampung[2];
			$semnas = $tampung[3];

			$cp_lkti	= explode(";", str_replace(","," ",$lkti[contact_person]));
			$cp_ld		= explode(";", str_replace(","," ",$ld[contact_person]));
			$cp_futsal	= explode(";", str_replace(","," ",$futsal[contact_person]));
			$cp_semnas	= explode(";", str_replace(","," ",$semnas[contact_person]));

			// for($a=0; $a<count($cp_lkti); $a++){
			// 	echo $cp_lkti[$a]."<br>";
			// }

		  include("navbar.php");
		  include("startMenu.php");
		  include("section-timeline.php");
		  include("section-apa-parti.php");
		  include("section-contact-us.php");		  
	?>


</body>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.widget.min.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="js/metro.min.js"></script>
</html>