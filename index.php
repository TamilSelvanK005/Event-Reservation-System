 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A to Z</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/20230921_211420.png" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
	 <link href="css/mycss.css" rel="stylesheet">
	 
	   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	
	
</head>

<body>
    <div class="container-xxl movie-night  p-0 ">
        <div id="spinner" class="show movie-night position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <button class="btn " type="button" disabled>
  <span aria-hidden="true"></span>
<img src="img/20230921_211420.png" height="100px">
</button>
        </div>


       <!-- Navbar Start -->
         <div class="container-fluid nav-bar bg-transparent ">
            <nav class="navbar navbar-expand-lg  navbar-light py-0 px-4 movie-night ">
                <a href="" class="navbar-brand d-flex align-items-center text-center">
                   
                                         
						
                    <h1 class="m-0 text-black" style="font-family:Arial, Helvetica, sans-serif; font-size:30px">WEDD<img class="img-fluid" src="img/20230921_211420.png" alt="Icon" style=" height: 80px;">PLANER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link ">HOME</a>
						 <a href="singlebook.php" class="nav-item nav-link">BOOKING</a> 
						 
						 
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SERVICES </a>
                            <div class="dropdown-menu rounded-0 movie-night  m-0">
                                <a href="hallinfo.php" class="dropdown-item">Hall selection </a>
                                <a href="decoration.php" class="dropdown-item"> Decotion</a>
								<a href="catering.php" class="dropdown-item">Catering Services </a> 
								<a href="videography.php" class="dropdown-item"> Photo and Videography </a> 
								<a href="djsetup.php" class="dropdown-item"> Sound and Lighting</a> 
								<a href="djsetup.php" class="dropdown-item">DJ Setup</a>
                                <a href="bridal.php" class="dropdown-item"> Makeup Artist</a> 
								<a href="bridal.php" class="dropdown-item"> Meheadi Artist</a> 
								                           
							 </div>
                        </div>
                        
                        <a href="contact.php" class="nav-item nav-link">ENQUREY</a>                    
						</div>
                    <a href="login.html" class="btn btn-danger px-3 d-none d-lg-flex">LOGIN</a>               
					 </div>
            </nav>
        </div>
        <!-- Navbar End -->



        <!-- Header Start -->
        <div class="container-fluid header movie-night  p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
			<?php
             require_once "db_con.php";
             $sql="SELECT * FROM offers";
             $guru = mysqli_query($link,$sql);
                            
             if(mysqli_num_rows($guru)>0)
             {
             ?>
                            
             <?php
             while($row = mysqli_fetch_array($guru))
             {
             ?>
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4" data-aos="zoom-in" data-wow-delay="0.9s"><span  class="text-warning"><?php echo strtoupper($row['off_name'])?> </span></h1>
                    <p class="animated fadeIn mb-4 pb-2" style="color:#FFFFFF"><?php echo $row['offer_content']?>

</p>
                   <!-- <a href="" class="btn btn-dark py-3 px-5 me-3 animated fadeIn"> BOOKING NOW</a>-->
					<button type="button" class="btn btn-dark py-3 px-5 me-3 animated fadeIn" data-toggle="modal" data-target="#notesModal">BOOKING NOW</button>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/<?php echo $row['offer_image']?>" style="height:675px" alt="">
                        </div>
                        
                    </div>
                </div>
				 <?php
             }
             }
             else
             {
               echo "no datas";
             }
             ?>		
            </div>
        </div>
        <!-- Header End -->
		
		
		
		
		<!-- card End -->
		
		
		<div class="container-xxl py-5">
            <div class="container" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="bg-light rounded p-3">
                    <div class="movie-night  rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/81-crystalline-banner.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Booking Now!!!</h1>
                                    <p></p>
                                </div>
                               
                                <a href="singlebook.php" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Open It..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- card End -->
		
		<!-- EVENT Start -->
       <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">EVENTS</h1>
            <p style="color:#FFFFFF">Being deeply loved by someone gives you strength, while loving someone deeply gives you courage.</p>
        </div>
        <div class="row g-4">
            <?php
             require_once "db_con.php";
             $sql="SELECT * FROM event";
             $guru = mysqli_query($link,$sql);
                            
             if(mysqli_num_rows($guru)>0)
             {
             ?>
                            
             <?php
             while($row = mysqli_fetch_array($guru))
             {
             ?>
            <div class="col-lg-3 col-md-6 wow fadeInUp shadow-lg p-3 mb-5 rounded" data-wow-delay="0.1s">
                <div class="team-item rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="<?php echo $row['event_img']?>" alt="">
                        <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                          
                            <a class="btn btn-square mx-1" href=""><i class="bi bi-arrow-right-circle"></i></a>
                           
                        </div>
                    </div>
                    <div class="text-center p-4 mt-3">
                        <h5 class="fw-bold mb-0"><?php echo  strtoupper ($row['event_name'])?></h5>
                        <small></small>
                    </div>
                </div>
            </div>
             <?php
             }
             }
             else
             {
               echo "no datas";
             }
             ?>				                   
        </div>
    </div>
</div>
        <!-- EVENTS End -->


		
	


        

        <!-- event plane End -->


        <!-- event plane Start -->
		
        



        <!-- package S -->
         <div class="container-xxl py-5">
            <div class="container">
			<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                            <h1 class="mb-3">Packages</h1>
                            <p style="color:#FFFFFF">A to Z wedding brings you the best reckoner! ‘Wedding Packages’ introduced for the first time by many luxury hotels in different Indian cities. Please note – the packages will be applicable only if in accordance with the prevailing guidelines in the respective States/ UT. Also, rates/offerings may be subject to change and taxes maybe applicable on amounts mentioned below.</p>
                        </div>
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                     
						
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <?php
                            require_once "db_con.php";
                            $sql="SELECT * FROM package_type";
							
                            $guru = mysqli_query($link,$sql);
                            
                            if(mysqli_num_rows($guru)>0)
                            {
                            ?>
                            
                            <?php
                                while($row = mysqli_fetch_array($guru))
                                {
                            ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp shadow-lg p-3 mb-5 rounded" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" style="height:300px; width:410px" src="img/<?php echo $row['image']?>" alt="">
                                        <a href="package_book.php?key=<?php echo $row['pack_id']?>"><div class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">BOOKING</div></a>
                                        <div class="bg-secondary rounded-top text-white position-absolute start-0 bottom-0 mx-4 pt-1 px-3"><?php echo $row['pack_name']?> </div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-secondary mb-3"></h5> 
										<div class="text-white mb-3"><b><ul>
										<li><?php echo $row['service_1']?></li>
										<li><?php echo $row['service_2']?></li>
										<li><?php echo $row['service_3']?></li>
										<li><?php echo $row['service_4']?></li>
										<li><?php echo $row['service_5']?></li>
										<li><?php echo $row['service_6']?></li>

										</ul></b></div>
                                        <a class="d-block h5 mb-2 text-danger" href="package_book.php?key=<?php echo $row['pack_id']?>">more+</a>
                                    </div>
                                   
                                </div>
                            </div>
                            <?php
                        }
                   }
                   else
                   {
                       echo "no datas";
                   }
                   ?>				
                        </div>
						
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Packages E-->


        <!-- CONTACT Start -->
        <div class="container-xxl py-5">
            <div class="container" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="bg-light rounded p-3">
                    <div class="movie-night  rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/81-crystalline-banner.jpg" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3">Contact For Booking Now!!!</h1>
                                    <p></p>
                                </div>
                               
                                <a href="contact.php" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTACT End -->




        <!-- Footer S-->
		
        <div class="container-fluid movie-night  text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5" >
                <div class="row g-5">
				  <?php
             require_once "db_con.php";
             $sql="SELECT * FROM footer ";
             $guru = mysqli_query($link,$sql);
                            
             if(mysqli_num_rows($guru)>0)
             {
             ?>
                            
             <?php
             while($row = mysqli_fetch_array($guru))
             {
             ?>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $row['address']?></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $row['phone_no']?></p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $row['e-mail']?></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
						  <?php
                        }
                   }
                   else
                   {
                       echo "no datas";
                   }
                   ?>				
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Photo Gallery</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/ATLHEA-87.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" style="height:60px" src="img/DSC3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" style="height:60px" src="img/1st-birthday-ideas.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" style="height:60px" src="img/1_7D0GJZL9uYk4bj7MWJLpsQ.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" style="height:60px" src="img/download.jpeg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" style="height:60px" src="img/wedding-videography.jpg" alt="">
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
      </div>
		   
        </div>    <!-- nav sticky-->
		
		
        <!-- Footer E -->

		<!-- PopUp S-->
		
        <div class="modal fade" id="notesModal" tabindex="-1" role="dialog" aria-labelledby="notesModalLabel" aria-hidden="true" style="padding-top:200px">
        <div class="modal-dialog " role="document">
            <div class="modal-content movie-night">
                <div class="modal-header">
                    <h5 class="modal-title" id="notesModalLabel">Notes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color:red; text-shadow:#FF0000">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This is a notes popup message. You can add your notes or content here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
	
	<!-- PopUp End-->
	
	
	
		
    <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

	 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>