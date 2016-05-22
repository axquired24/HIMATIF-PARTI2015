<?php
	$select = $parti->query("SELECT contact_person FROM EVENT_INFO ORDER BY id_event");
	$tampung = array(null, null, null, null);
	$s = 0;
	while($exe = $select->fetchArray(SQLITE3_ASSOC)){		
		$tampung[$s] = str_replace(",", " ", $exe[contact_person]);
		$s++;
	}

	$cp_lkti	= explode(";", $tampung[0]);
	$cp_ld		= explode(";", $tampung[1]);
	$cp_futsal	= explode(";", $tampung[2]);
	$cp_semnas	= explode(";", $tampung[3]);

	//str_replace(awal, digantiJadi, sumberTeks);

?>
<h1 class="text-light">Contact Person <strong>PARTI 2015</strong> <span class="mif-phone place-right"></span></h1>
<hr class="thin bg-grayLighter">
<div class="grid">
	<div class="row cells12">
		<div class="cell colspan6">
			<h3>Lomba Karya Tulis Ilmiah <a href="?hal=other/edit_contact&editID=1" title="Edit"><span class="mif-user-check"></span></a></h3>
			<ul class="numeric-list square-marker red-bullet large-bullet">
				<?php 
					for($d=0; $d<count($cp_lkti); $d++){
						echo "<li> ".$cp_lkti[$d]."</li>";
					}
				?>		
			</ul>
		</div>
		<div class="cell colspan6">
			<h3>Lomba Desain Logo & Brosur <a href="?hal=other/edit_contact&editID=2" title="Edit"><span class="mif-user-check"></span></a></h3>
			<ul class="numeric-list square-marker blue-bullet large-bullet">
				<?php 
					for($d=0; $d<count($cp_ld); $d++){
						echo "<li> ".$cp_ld[$d]."</li>";
					}
				?>	
			</ul>			
		</div>
	</div>

	<div class="row cells12">
		<div class="cell colspan6">
			<h3>Kompetisi Futsal <a href="?hal=other/edit_contact&editID=3" title="Edit"><span class="mif-user-check"></span></a></h3>
			<ul class="numeric-list square-marker dark-bullet large-bullet">
				<?php 
					for($d=0; $d<count($cp_futsal); $d++){
						echo "<li> ".$cp_futsal[$d]."</li>";
					}
				?>	
			</ul>
		</div>
		<div class="cell colspan6">
			<h3>Seminar Nasional <a href="?hal=other/edit_contact&editID=4" title="Edit"><span class="mif-user-check"></span></a></h3>
			<ul class="numeric-list square-marker yellow-bullet large-bullet">
				<?php 
					for($d=0; $d<count($cp_semnas); $d++){
						echo "<li> ".$cp_semnas[$d]."</li>";
					}
				?>	
			</ul>
		</div>
	</div>

</div>