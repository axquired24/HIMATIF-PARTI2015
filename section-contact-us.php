<div id="contact-us" class="grid fluid fg-white">
	<div class="container">
		<div class="row">
			<div class="span12">
				<h1 class="fg-white text-right">Contact Us <span class="icon-phone place-left fg-white"></span></h1>
				<br><br>

				
				<div class="row">
					<div class="span4 contact-box">
						<span class="outer-line">Desain Grafis</span>
						<?php 
							for($a=0; $a<count($cp_ld); $a++){
								echo "<span>".$cp_ld[$a]."</span>";
							}
						?>
					</div>
					<div class="span4 contact-box">
						<span class="outer-line">Kompetisi Futsal</span>
						<?php 
							for($a=0; $a<count($cp_futsal); $a++){
								echo "<span>".$cp_futsal[$a]."</span>";
							}
						?>					
					</div>
					<div class="span4 contact-box">
						<span class="outer-line">Karya Tulis Ilmiah</span>
						<?php 
							for($a=0; $a<count($cp_lkti); $a++){
								echo "<span>".$cp_lkti[$a]."</span>";
							}
						?>											
					</div>
				</div>
				<!-- end-sub-row -->

				<div class="row">
					<div class="span4 contact-box">
						<span class="outer-line">Seminar Nasional</span>						
						<?php 
							for($a=0; $a<count($cp_semnas); $a++){
								echo "<span>".$cp_semnas[$a]."</span>";
							}
						?>
					</div>
					<div class="span8 contact-box">
						<span class="outer-line">More Info</span>
						<span>HIMPUNAN MAHASISWA TEKNIK INFORMATIKA (HIMATIF)</span>
						<span>Lt.3 Gedung J / Fakultas Komunikasi dan Informatika</span>						
						<span>Universitas Muhammadiyah Surakarta</span>						
					</div>
				</div>
				<!-- end-sub-row -->

				<div class="row">
					<div class="span4 contact-box">
						<span class="outer-line">Email & <br>Website <br></span>						
					</div>
					<div class="span8 contact-box mail-big">
						<span>
							box.parti2015@gmail.com
							<small>http://parti2015.himatifums.org</small>
						</span>
					</div>
				</div>
				<!-- end-sub-row -->

				<div class="row" style="margin-top:40px;">
					<div class="span6 offset6 contact-box mail-big">
						<span class="text-right">
							<small>&copy; 2015 - Panitia Parade Teknik Informatika 2015</small>
						</span>
					</div>
				</div>
				<!-- end-sub-row -->

			</div>
		</div>
	</div>
</div>