<div id="startMenu" class="tile-area">
	<h1 class="tile-area-title fg-white">Start</h1>
	<div class="user-id">
		<div class="user-id-image">
			<span class="icon-user no-display1"></span>
			<img src="#" alt="" class="no-display">
		</div>
		<div class="user-id-name">
			<div class="first-name">PARTI</div>
			<div class="last-name">2015</div>
		</div>		
	</div>

	<!-- quadro grup -->
    <div class="tile-group quadro">
    	<div class="tile-group-title">Lomba Tingkat SMA/SMK/MA Se-Eks Karesidenan Surakarta</div>

	        <a class="tile double bg-darker live" data-role="live-tile" data-effect="slideUpDown" data-click="transform">
	            <div class="tile-content email">
                    <div class="email-image">
                        <span class="icon-calendar"></span>
                    </div>	            
	                <div class="text-right padding10 ntp">
	                <?php
	                	$tgl = explode(" ",$ld[event_time]);
	                ?>
	                    <h1 class="fg-white no-margin"><?php echo $tgl[0]; ?></h1>
	                    <p class="fg-white"><?php echo $tgl[1]." ".$tgl[2]; ?></p>
	                </div>
	            </div>
	            <div class="brand">
	                <div class="label"><h4 class="no-margin fg-white"><span><small>Lomba Desain Grafis (LD)</small></span></h4></div>
	            </div>
	            <div class="tile-content email">
                    <div class="email-image">
                        <span class="icon-location-3"></span>
                    </div>	            
                    <div class="email-data">
                        <span class="email-data-title">Tempat</span>
                        <span class="email-data-subtitle"><?php echo $ld[place]; ?></span>
                        <span class="email-data-text">UMS</span>
                    </div>
	            </div>            
	        </a> 
	        <!-- end tile -->

	    	<a href="<?php echo $ld[link_daftar];?>" class="tile default bg-cyan" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-screen"></span></div>
	    		<div class="brand">
	    			<div class="label">Lomba Desain</div>
	    		</div>
	    	</a>
	    	<!-- end tile -->

	    	<a href="<?php echo $ld[link_juklak]; ?>" title="Juklak (Petunjuk Pelaksanaan) - Lomba Desain Grafis" class="tile default bg-cyan" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-copy"></span></div>
	    		<div class="brand">
	    			<div class="label">Juklak - L D</div>
	    		</div>
	    	</a>
	    	<!-- end tile -->

	    	<a href="<?php echo $futsal[link_daftar];?>" class="tile default bg-darkMagenta" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-dribbble"></span></div>
	    		<div class="brand">
	    			<div class="label">Futsal</div>
	    		</div>
	    	</a>
	    	<!-- end tile -->	     

			<!-- small tile -->
	    	<a href="<?php echo $futsal[link_juklak]; ?>" title="Juklak (Petunjuk Pelaksanaan) - Futsal" class="tile half bg-darkMagenta" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-copy"></span></div>
	    	</a>

	    	<a href="<?php echo $futsal[link_juklak]; ?>" title="Ketentuan Umum & Khusus Futsal" class="tile half bg-darkMagenta" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-cube-2"></span></div>
	    	</a>

	    	<!-- end small tile -->		    	   

	        <a class="tile double bg-darker live" data-role="live-tile" data-effect="slideLeftRight" data-click="transform">
	            <div class="tile-content email">
                    <div class="email-image">
                        <span class="icon-calendar"></span>
                    </div>	            
	                <div class="text-right padding10 ntp">
	                <?php
	                	$tgl_futsal = explode(" ",$futsal[event_time]);
	                	$tempat_futsal = explode(";",$futsal[place]);
	                ?>	                
	                    <h1 class="fg-white no-margin"><?php echo $tgl_futsal[0]; ?></h1>
	                    <p class="fg-white"><?php echo $tgl_futsal[1]." ".$tgl_futsal[2]; ?></p>
	                </div>
	            </div>
	            <div class="brand">
	                <div class="label"><h4 class="no-margin fg-white"><span><small>Kompetisi Futsal</small></span></h4></div>
	            </div>
	            <div class="tile-content email">
                    <div class="email-image">
                        <span class="icon-location-3"></span>
                    </div>	            
                    <div class="email-data">
                        <span class="email-data-title">Tempat</span>
                        <span class="email-data-subtitle"><?php echo $tempat_futsal[0]; ?></span>
                        <span class="email-data-text"><?php echo $tempat_futsal[1]; ?></span>
                    </div>
	            </div>            
	        </a> 
	        <!-- end tile -->


	        <a class="tile triple double-vertical bg-darker live" data-role="live-tile" data-effect="slideUp" data-click="transform">
	            <div class="tile-content email">
                    <div class="email-image">
                        <span class="icon-calendar"></span>
                    </div>	            
	                <div class="text-right padding10 ntp">
	                <?php
	                	$tgl_lkti = explode(";", $lkti[event_time]);
	                	$pendaftaran = explode(" ",$tgl_lkti[0]);
	                	$seleksi = explode(" ",$tgl_lkti[1]);
	                	$finalis = explode(" ",$tgl_lkti[2]);
	                	$presentasi = explode(" ",$tgl_lkti[3]);
	                ?>		                
	                    <h1 class="fg-white no-margin"><?php echo $presentasi[0]; ?></h1>
	                    <p class="fg-white"><?php echo $presentasi[1]." ".$presentasi[2]; ?></p>
	                    <p class="fg-gray">Presentasi Finalis Terpilih</p>
	                </div>
	            </div>
	            <div class="tile-content email">
                    <div class="email-image">
                        <span class="icon-calendar"></span>
                    </div>	            
	                <div class="text-right padding10 ntp">
	                    <h1 class="fg-white no-margin"><?php echo $pendaftaran[0]; ?></h1>
	                    <p class="fg-white"><?php echo $pendaftaran[1]." ".$pendaftaran[2]; ?></p>
	                    <p class="fg-gray">Pendaftaran & Pengumpulan Karya</p>
	                </div>
	            </div>	            
	            <div class="tile-content email">
                    <div class="email-image">
                        <span class="icon-location-3"></span>
                    </div>	            
                    <div class="email-data">
                        <span class="email-data-title">Tempat</span>
                        <span class="email-data-subtitle">
                        	Pengumpulan Karya <br>
                        	<span class="icon-location"></span> HIMATIF UMS - Lt.3 Gedung J | FKI <br>
                        	<span class="icon-mail"></span> box.parti2015@gmail.com
                        	<br><br>

                        	Presentasi Finalis<br>
                        	R. Seminar 1 - Gedung J <br>
                        	Fakultas Komunikasi & Informatika
                        	<br><br>

                        	</span>
                        <span class="email-data-text">Kampus 2 UMS</span>
                    </div>
	            </div>
	            <div class="brand">
	                <div class="label"><h4 class="no-margin fg-white"><span><small>Lomba Karya Tulis Ilmiah (LKTI)</small></span></h4></div>
	            </div>	                        
	        </a> 
	        <!-- end tile -->	        	 

			<!-- small tile -->
	    	<a href="<?php echo $lkti[link_juklak]; ?>" title="Petunjuk Pelaksanaan Lomba Karya Tulis Ilmiah (LKTI)" class="tile half bg-darkRed" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-copy"></span></div>
	    	</a>

	    	<a href="#more-timeline" title="Timeline Pelaksanaan LKTI" class="tile half bg-darkRed" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-history"></span></div>
	    	</a>
	    	<!-- end small tile -->	    	

	    	<a href="<?php echo $lkti[link_daftar];?>" class="tile default bg-darkRed" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-pencil"></span>
	    		</div>
	            <div class="brand">
	                <div class="label"><h4 class="no-margin fg-white"> <span><small>L K T I</small></span></h4></div>
	            </div>	    			
	    	</a>
	        <!-- end tile -->		    	
    </div>
    <!-- end grup -->

	<!-- triple grup -->
    <div class="tile-group quadro">
    	<div class="tile-group-title">Featured Event</div>

	        <a class="tile double double-vertical bg-orange live" data-role="live-tile" data-effect="slideDown" data-click="transform">
	            <div class="tile-content email">
                    <div class="email-image">
                        <span class="icon-calendar"></span>
                    </div>	            
	                <div class="text-right padding10 ntp">
	                <?php
	                	$tgl_semnas = explode(" ",$semnas[event_time]);
	                ?>		                
	                    <h1 class="fg-white no-margin"><?php echo $tgl_semnas[0]; ?></h1>
	                    <p class="fg-white"><?php echo $tgl_semnas[1]." ".$tgl_semnas[2]; ?></p>
	                </div>
	            </div>
	            <div class="brand">
	                <div class="label"><h4 class="no-margin fg-white"><span><small>Seminar Nasional</small></span></h4></div>
	            </div>
	            <div class="tile-content email">
                    <div class="email-image">
                        <h1 class="fg-white"><span class="icon-user-3"></span></h1>
                    </div>		            
                    <div class="email-data"> 
                    	<?php $note = explode(";", $semnas[notes]);
                    	?>
                        <span class="email-data-title">Future Tech</span>
                        <span class="email-data-subtitle">"<?php echo $note[0]; ?>"</span>
                        <span class="email-data-text">
                        	<br><strong>Speaker</strong> <br><br>
                        	<span class="icon-grid-view"></span>  <?php echo $note[1]; ?> <br><br>
                        	<span class="icon-grid-view"></span> <?php echo $note[2]; ?>                        	
                        </span>
                    </div>
	            </div> 

	            <div class="tile-content email">
	            	<div class="email-image">
                        <span class="icon-location-3"></span>
                    </div>	            
                            
                    <div class="email-data">
                        <span class="email-data-title">Tempat</span>
                        <span class="email-data-subtitle"><?php echo $semnas[place]; ?></span>
                        <span class="email-data-text">Surakarta</span>
                    </div>
	            </div> 	                       
	        </a> 
	        <!-- end tile -->

	    	<a href="<?php echo $semnas[link_daftar];?>" class="tile default bg-darker" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-arrow-down-2"></span></div>
	    		<div class="brand">
	    			<div class="label">Order Tiket!</div>
	    		</div>
	    	</a>
	    	<!-- end tile -->     

			<!-- small tile -->
	    	<a href="<?php echo $semnas[link_daftar];?>" title="Daftar Online" class="tile half bg-orange" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-IE"></span></div>
	    	</a>

	    	<a href="#contact-us" title="Daftar Offline" class="tile half bg-orange" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-user-2"></span></div>
	    	</a>
	    	<a href="#contact-us" title="Kontak Panitia" class="tile half bg-orange" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-phone"></span></div>
	    	</a>

	    	<!-- end small tile -->		    	       	
    </div>
    <!-- end grup -->

	<!-- double grup -->
    <div class="tile-group quadro">
    	<div class="tile-group-title">Official</div>

	    	<a href="#" class="tile double bg-transparent" data-click="transform">
			    <div class="tile-content image">
			        <img src="image/seminar.jpg">
			    </div>
			    <div class="brand">
			        <span class="label fg-white">Event Info</span>
			        <span class="badge bg-orange"><span class="icon-info-2"></span></span>
			    </div>
	    	</a>
	    	<!-- end tile -->    	

	    	<a href="#contact-us" class="tile default bg-darker" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-user"></span></div>
	    		<div class="brand">
	    			<div class="label">Kontak Panitia</div>
	    		</div>
	    	</a>
	    	<!-- end tile -->

			<!-- small tile -->
	    	<a href="#" title="Cari sesuatu?" class="tile half bg-darker" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-search"></span></div>
	    	</a>

	    	<a href="#" title="Pusat bantuan" class="tile half bg-darker" data-click="transform">
	    		<div class="tile-content icon">
	    			<span class="icon-help"></span></div>
	    	</a>

	    	<!-- end small tile -->		    	   
    	
    </div>
    <!-- end grup -->    

	<!-- double grup -->
    <div class="tile-group double">
    	<div class="tile-group-title">Organized by</div>     

			<!-- small tile -->
	    	<a href="http://himatifums.org" title="Himpunan Mahasiswa Teknik Informatika UMS" class="tile half bg-transparent" data-click="transform">
	    		<div class="tile-content icon">
	    			<img src="image/himatif_41.png" alt="HIMATIF"></div>
	    	</a>

	    	<a href="#" title="Forum Open Source Teknik Informatika UMS" class="tile half bg-transparent" data-click="transform">
	    		<div class="tile-content icon">
	    			<img src="image/fosti_41.png" alt="HIMATIF"></div>
	    	</a>

	    	<a href="http://ums.ac.id" title="Universitas Muhammadiyah Surakarta" class="tile half bg-transparent" data-click="transform">
	    		<div class="tile-content icon">
	    			<img src="image/ums_41.png" alt="HIMATIF"></div>
	    	</a>

	    	<!-- end small tile -->		    	   
    	
    </div>
    <!-- end grup -->

	<!-- quadro grup -->
    <div class="tile-group quadro">
    	<div class="tile-group-title">Didukung oleh</div>     

			<!-- small tile -->
			<?php
				$dinas = array(
								array("Dinas Pendidikan Pemuda dan Olahraga Kota Surakarta", "surakarta", "http://1drv.ms/1Ug6Lw6"),
								array("Dinas Pendidikan Kab. Sukoharjo", "sukoharjo", "http://1drv.ms/1Ug6KbL"),
								array("Dinas Pendidikan Pemuda dan Olahraga Kab. Boyolali", "boyolali", "http://1drv.ms/1Ug6GZs"),
								array("Dinas Pendidikan Kab. Klaten", "klaten", "http://1drv.ms/1Ug6IjT"),
								array("Dinas Pendidikan Pemuda dan Olahraga Kab. Karanganyar", "karanganyar", "http://1drv.ms/1Ug6Hwq"),
								array("Dinas Pendidikan Kab. Sragen", "sragen", "http://1drv.ms/1Ug6OrP"),
								array("Dinas Pendidikan Kab. Wonogiri", "wonogiri", "http://1drv.ms/1Ug6Ccg")
						 );
				for($din=0; $din<count($dinas); $din++){

			?>
	    	<a href="<?php echo $dinas[$din][2]; ?>" title="<?php echo $dinas[$din][0]; ?>" class="tile half bg-transparent" data-click="transform">
	    		<div class="tile-content icon">
	    			<img src="image/<?php echo $dinas[$din][1]; ?>.png" alt="<?php echo $dinas[$din][1]; ?>"></div>
	    	</a>
	    	<?php }; // Close for $din ?>

	    	<!-- end small tile -->		    	   
    	
    </div>
    <!-- end grup -->     
</div>

