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
                        <div class="nav-item dropdown">
                            <a href="" class="nav-link " data-bs-toggle="dropdown">ENQUREY</a>
                           
                        </div>
                        <a href="contact.html" class="nav-item nav-link">CONTACT</a>                    
						</div>
<div class="nav-item dropdown">
                    <a href="logout.php" class="btn btn-danger px-3 d-none d-lg-flex"><img src="img/download.png" width="30px" style="border-radius: 50%; padding-right:4px" ></img><?php echo htmlspecialchars($_SESSION["user_name"]);?></a>  
					
							 </div>           					 </div>
            </nav>
        </div>
        <!-- Navbar End -->




        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">BOOK YOUR BEST PACKAGE</h1>
                    <p style="color:#000000;"><b>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</b></p>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-map-marker-alt text-danger"></i>
                                        </div>
                                        <span style="color:#FFFFFF"><b>29 Street, Cuddalore, TN</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-envelope-open text-danger"></i>
                                        </div>
                                        <span style="color:#FFFFFF"><b>gurumoorthy00k@gmail.com</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="bg-light rounded p-3">
                                    <div class="d-flex align-items-center bg-white rounded p-3" style="border: 1px dashed rgba(0, 185, 142, .3)">
                                        <div class="icon me-3" style="width: 45px; height: 45px;">
                                            <i class="fa fa-phone-alt text-danger"></i>
                                        </div>
                                        <span style="color:#FFFFFF"><b>+91 77088 45209</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php
						 $key=$_REQUEST["key"];
						 require_once "db_con.php";
						 $sql="SELECT pt.pack_name,pt.pack_id, pt.service_1, pt.service_2, pt.service_3, pt.service_4, pt.service_5, pt.service_6,pt.p_id,pl.p_id,pl.ser_1,pl.ser_2,pl.ser_3,pl.ser_4,pl.ser_5,pl.ser_6 FROM package_type pt, price_list pl WHERE pt.pack_id='$key' AND pt.p_id=pl.p_id";
						 $guru = mysqli_query($link,$sql);
										
						 if(mysqli_num_rows($guru)>0)
						 {
						 while($row = mysqli_fetch_array($guru))
						 {
						 ?>
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                         <p class="mb-4" style="color:#000000;"><b>The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.</b></p>
					<form method="post">	
	<table width="500" height="400" border="5" style="color:#FFFFFF">
  <tr>
    <th scope="col">SERVICE NAME</th>
    <th scope="col">PRICE</th>
  </tr>
  <tr>
    <th scope="row"><?php echo strtoupper($row['service_1'])?> </th>
    <td><input id="ser1"  readonly value="<?php echo strtoupper($row['ser_1'])?>"></td>
  </tr>
  <tr>
    <th scope="row"><?php echo strtoupper($row['service_2'])?> </th>
    <td><input id="ser2" readonly value="<?php echo strtoupper($row['ser_2'])?>"></td>
  </tr>
  <tr>
    <th scope="row"><?php echo strtoupper($row['service_3'])?> </th>
    <td><input id="ser3" readonly value="<?php echo strtoupper($row['ser_3'])?>"></td>
  </tr>
  <tr>
    <th scope="row"><?php echo strtoupper($row['service_4'])?> </th>
    <td><input id="ser4" readonly value="<?php echo strtoupper($row['ser_4'])?>"></td>
  </tr>
  <tr>
    <th scope="row"><?php echo strtoupper($row['service_5'])?> </th>
    <td><input id="ser5" readonly value="<?php echo strtoupper($row['ser_5'])?>"></td>
  </tr>
  <tr>
    <th scope="row"><?php echo strtoupper($row['service_6'])?> </th>
    <td><input id="ser6" readonly value="<?php echo strtoupper($row['ser_6'])?>"></td>
  </tr>
   
  <tr>
    <th scope="row">OFFER 20% FINAL AMOUNT</th>
    <td><button onClick="myAdd()" >CALCULATE</button></td>
  </tr>
</table>
</form>
<script>
function myAdd() {
    let a = parseInt(document.getElementById("ser1").value);
    let b = parseInt(document.getElementById("ser2").value);
    let c = parseInt(document.getElementById("ser3").value);
    let e = parseInt(document.getElementById("ser4").value);
    let f = parseInt(document.getElementById("ser5").value);
    let g = parseInt(document.getElementById("ser6").value);
	
	
    let total = a + b + c + e + f + g;
    window.alert(total);
}
</script>
                    </div>
					
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <p class="mb-4" style="color:#000000;"><b>The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.</b></p>
                            <form action="package_book_API.php" method="post">
                                <div class="row g-3">
						
								
                                    <div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="pack" readonly id="name" value="<?php echo $row['pack_name']?> ">
                                            <label for="name">Package Name</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                  <input type="text" class="form-control" name="name" placeholder="Your Email"  readonly value="<?php echo htmlspecialchars($_SESSION["user_name"]); ?>">
                                            <label for="email">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                   <input type="text" class="form-control" id="subject" name="mail" placeholder="Subject"  readonly value="<?php echo htmlspecialchars($_SESSION["mail_id"]); ?>">
                                            <label for="subject">Email ID</label>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-floating">
                <input type="number" maxlength="10"  class="form-control" name="num1" id="email" placeholder="Your Email"  readonly value="<?php echo htmlspecialchars($_SESSION["number"]); ?>">
                                            <label for="email">Mobile No</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" required name="num2" id="subject" >
                                            <label for="subject">Mobile No2</label>
                                        </div>
                                    </div>
									<div class="col-md-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" required name="address" id="email" >
                                            <label for="email">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" required name="sport" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                            <label for="message">Enter The Sport Location</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input class="btn btn-danger w-100 py-3" name="submit" value="BOOK" type="submit">
                                    </div>
								
                                </div>
                            </form>
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
                               
                                <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Get Appoinment</a>
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