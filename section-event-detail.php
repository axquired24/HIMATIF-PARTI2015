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
			margin-top: 0;
		}
		#event-detail{
						
		}
		.detail {
			line-height: 30px;
			text-indent: 30px;
			text-align: justify;
		}
		.pamflet {
			height: 500px;
			vertical-align: bottom;
			
		}
	</style>
</head> 
<body class="metro">
	<?php
		include "hub.php";
		include "navbar-event.php";

		$eventID = $_GET[eventID];

		$select = $parti->query("SELECT * FROM EVENT_INFO WHERE id_event='$eventID'");
		$eventD = $select->fetchArray(SQLITE3_ASSOC);
	?>
	<!-- section more-sponsor -->	
	<div id="event-detail" class="grid fluid">
			<div style="background: #EFEFEF; padding-top: 60px;" class="row">
					<div align="center" class="span3">
						<div class="tile-group double">
							<a href="#" class="tile double double-vertical bg-darkMagenta">
								<span class="brand"><span class="label">Waktu</span></span>
							</a>
							<a href="#" class="tile default bg-darker">
								<span class="brand"><span class="label">Waktu</span></span>
							</a>							
							<a href="#" class="tile half bg-darker">
								<span class="brand"><span class="label">Waktu</span></span>
							</a>
							<a href="#" class="tile half bg-darker">
								<span class="brand"><span class="label">Waktu</span></span>
							</a>										
							<a href="#" class="tile half bg-darker">
								<span class="brand"><span class="label">Waktu</span></span>
							</a>											
						</div>
					</div>

					<div class="span6">
						<h1 class="text-right"><?php echo $eventD[event_name]; ?><br>
						<?php if($eventID != 4){ ?>
						<small>Tingkat SMA/SMK/MA Se-Eks Karesidenan Surakarta</small>
						<?php } // close if eventID
							else {
								echo "<br>";
							}
						?>
						</h1>

						<div class="row">
							<div class="span2"></div>
							<div align="right" class="span4 offset2">								
								<a href="#daftarOnline" class="button large inverse">Daftar Online</a>
							</div>														
							<div align="right" class="span4">								
								<a href="<?php echo $eventD[link_juklak]; ?>" class="button large inverse">Petunjuk Pelaksanaan</a>
							</div>													
						</div>
						<!-- end row -->

						<div class="row">
							<div class="span1"></div>
							<div class="span11 detail"><?php echo $eventD[description]; ?></div>
						</div>
					</div>

					<div class="span3 bg-dark pamflet">
						<a  title="Klik untuk perbesar" href="<?php echo $eventD[link_img_pamflet]; ?>"><img src="<?php echo $eventD[link_img_pamflet]; ?>" alt="Pamflet all"/></a>
						<a href="#" style="display: block; margin-top: 7px;" class="button large inverse">Kontak Panitia</a>
					</div>
			</div>
			<!-- end row big	 -->

<!-- 
			<div class="container">
				<div class="row">
					<div class="span12"><h2>Alur kegiatan</h2><br>
						<div class="tile-group eight">
					    	<a href="#" class="tile double bg-darkMagenta">
					    		<div class="tile-content icon">
					    			<span class="icon-arrow-right-5"></span></div>
					    		<div class="brand">
					    			<div class="label">Period</div>
					    		</div>
					    	</a>


					    	<a href="#" class="tile double bg-darkMagenta">
					    		<div class="tile-content icon">
					    			<span class="icon-arrow-right-5"></span></div>
					    		<div class="brand">
					    			<div class="label">Period</div>
					    		</div>
					    	</a>


					    	<a href="#" class="tile double bg-darkMagenta">
					    		<div class="tile-content icon">
					    			<span class="icon-arrow-right-5"></span></div>
					    		<div class="brand">
					    			<div class="label">Period</div>
					    		</div>
					    	</a>


					    	<a href="#" class="tile double bg-darkMagenta">
					    		<div class="tile-content icon">
					    			<span class="icon-arrow-right-5"></span></div>
					    		<div class="brand">
					    			<div class="label">Period</div>
					    		</div>
					    	</a>


						</div>

					</div>
				</div>
				// END row

			</div>
			// end container 

			--> 
			<div id="daftarOnline">
			<!-- Registration Form Included -->
			<?php 
				if($eventID == 1){
					include("register_lkti.php"); 
				}elseif ($eventID == 2){
					include("register_ld.php"); 
				}elseif ($eventID == 3){
					include("register_futsal.php"); 
				}elseif ($eventID == 4)	{
					echo "<h2 class='text-center'>Coming soon :)</h2>";
				}
			?>
			</div>

			<div class="row">
				<div align="center" class="span12">&copy 2015 - Panitia PARTI 2015</div>
			</div>			


	</div>
	<!-- end-section -->
		

<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/jquery.widget.min.js"></script> -->
<script type="text/javascript" src="js/metro.min.js"></script>	
</body>
</html>
