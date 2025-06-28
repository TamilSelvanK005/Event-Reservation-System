<?php
session_start();
if(!isset($_SESSION["user"])|| $_SESSION["user"]!==true)
{
	header("location:login.html");
	exit;
}

?>
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
	 <link href="css/mycss.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
	 <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <div class="container-xxl movie-night p-0">
        <div id="spinner" class="show movie-night position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <button class="btn " type="button" disabled>
  <span aria-hidden="true"></span>
<img src="img/20230921_211420.png" height="100px">
</button>
        </div>


       <!-- Navbar Start -->
         <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg movie-night navbar-light py-0 px-4">
                <a href="" class="navbar-brand d-flex align-items-center text-center">
                   
                                         
						
                    <h1 class="m-0 text-black" style="font-family:Arial, Helvetica, sans-serif; font-size:30px">WEDD<img class="img-fluid" src="img/20230921_211420.png" alt="Icon" style=" height: 80px;">PLANER</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">HOME</a>
						 
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
                        <div class="nav-item dropdown">
                        <a href="contact.php" class="nav-item nav-link">ENQUREY</a>                    
                           
                        </div>
						</div>
<div class="nav-item dropdown">
                    <a href="logout.php" class="btn btn-danger px-3 d-none d-lg-flex"><img src="img/download.png" width="30px" style="border-radius: 50%; padding-right:4px" ></img><?php echo htmlspecialchars($_SESSION["user_name"]);?></a>  
					
							 </div>           					 </div>
            </nav>
        </div>
        <!-- Navbar End -->



        
		
		
		
	<!-- Team Start -->
	<form action="tryapi.php" method="post" enctype="multipart/form-data">
        <div class="container-xxl py-5">
            <div class="container" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
					<?php
						 $key=$_REQUEST["key"];
						 require_once "db_con.php";
						 $sql="SELECT * FROM catering WHERE cat_id='$key'";
						 $guru = mysqli_query($link,$sql);
										
						 if(mysqli_num_rows($guru)>0)
						 {
						  while($row = mysqli_fetch_array($guru))
						 {
						 ?>
                    <h1 class="mb-3"><?php echo $row['company_name']?></h1>
					<input type="hidden" class="form-control" name="key"  value="<?php echo $row['company_name']?>" >

                    <p style="color:#000000">Being deeply loved by someone gives you strength, while loving someone deeply gives you courage.</p>
					<?php
                            }
                            }
                            else
                            {
                            echo "no datas";
                            }
                            ?>
                </div>
                <div class="row g-4">
				<?php
						 $food=$_REQUEST["food"];
						 require_once "db_con.php";
						 $sql="SELECT * FROM food_menu  WHERE catagory ='$food'";
						 $guru = mysqli_query($link,$sql);
										
						 if(mysqli_num_rows($guru)>0)
						 {
						 ?>
										
						 <?php
						 while($row = mysqli_fetch_array($guru))
						 {
						 ?>
				
                    <div class="col-lg-2 col-md-6 wow fadeInUp shadow-lg p-3 mb-5 rounded" data-wow-delay="0.1s">
                         <div class="property-item rounded overflow-hidden team-item rounded">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo $row['image']?>">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                  
                                    <input style="width:20px" type="checkbox" id="checkbox1" class="btn btn-square mx-1" name="checkboxes[]" value="<?php echo $row['food_name']?>">
                                   
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"> <?php echo $row['food_name']?></h5>
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
        <!-- Team End -->
		
		<!--food 2-->
		<div class="container-xxl py-5">
            <div class="container" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">SWEETS</h1>
                    <p style="color:#000000">Being deeply loved by someone gives you strength, while loving someone deeply gives you courage.</p>
                </div>
                <div class="row g-4">
				<?php
						 
						 require_once "db_con.php";
						 $sql="SELECT * FROM food_menu  WHERE catagory ='sweet'";
						 $guru = mysqli_query($link,$sql);
										
						 if(mysqli_num_rows($guru)>0)
						 {
						 ?>
										
						 <?php
						 while($row = mysqli_fetch_array($guru))
						 {
						 ?>
                    <div class="col-lg-2 col-md-6 wow fadeInUp shadow-lg p-3 mb-5 rounded" data-wow-delay="0.1s">
                         <div class="property-item rounded overflow-hidden team-item rounded">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo $row['image']?>">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                  
                                    <input style="width:20px" type="checkbox" id="checkbox1" class="btn btn-square mx-1" name="checkboxes[]" value="<?php echo $row['food_name']?>">
                                   
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0"> <?php echo $row['food_name']?></h5>
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

<?php
						 $key=$_REQUEST["key"];
						 require_once "db_con.php";
						 $sql="SELECT * FROM catering WHERE cat_id='$key'";
						 $guru = mysqli_query($link,$sql);
										
						 if(mysqli_num_rows($guru)>0)
						 {
						  while($row = mysqli_fetch_array($guru))
						 {
						 ?>

			<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">BOOK NOW</h1>
                    <p style="color:#000000">Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                       <img src="<?php echo $row['photo']?>" class="img-fluid rounded w-100">
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            
                            
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="hall_name" id="name" readonly value="<?php echo $row['company_name']?>">
                                            <label for="name">Service Name</label>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="aname" id="name" placeholder="Your Name">
                                            <label for="name">Enter Your Name</label>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="country" id="name" placeholder="Your Name">
                                            <label for="name">Country</label>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="city" id="name" placeholder="Your Name">
                                            <label for="name">Enter Your City</label>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="num1" id="name" placeholder="Your Name">
                                            <label for="name">Mobile Number</label>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="mail" class="form-control" name="mail" id="name" placeholder="Your Name">
                                            <label for="name">Enter Email</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="email" name="num2" placeholder="Your Email">
                                            <label for="email">Additional Number</label>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" id="email" name="date" placeholder="Your Email">
                                            <label for="email">Reserve Date</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" name="spot" placeholder="Subject">
                                            <label for="subject">Enter The Spot</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <input type="submit" style="width:550px" class="btn btn-danger w-40 py-3" value="submit"  name="submit" >
                                    </div>
                                </div>
                            
                        </div>
                    </div>
					
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 wow fadeIn " data-wow-delay="0.1s">
                                <div class="bg-light rounded p-3 ">
                                    <div class=" movie-night d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-map-marker-alt text-danger"></i>
                                        </div>
                                        <span style="color:#FFFFFF"><b>CUDDALORE</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex movie-night align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-danger"></i>
                                        </div>
                                        <span style="color:#FFFFFF"><b>gurumoorthy00k@.com</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex movie-night align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone-alt text-danger"></i>
                                        </div>
                                        <span style="color:#FFFFFF"><b>+91 77088 45209</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</form>
<?php
                            }
                            }
                            else
                            {
                            echo "no datas";
                            }
                            ?>


        <!-- Footer S-->
		
        <div class="container-fluid movie-night  text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
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

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>