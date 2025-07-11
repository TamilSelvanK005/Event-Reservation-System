<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A to Z</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>


       <!-- Navbar Start -->
          <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
                   
                                         
						
                    <h1 class="m-0 text-black" style="font-family:Arial, Helvetica, sans-serif; font-size:30px"><img class="img-fluid" src="img/20230921_211420.png" alt="Icon" style=" height: 80px;"></h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">HOME</a>
						 
						<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">HALLS </a>
                            <div class="dropdown-menu rounded-0 m-0">
								  <a href="halls_add.php" class="dropdown-item">ADDING </a>
									<a href="hall_view.php" class="dropdown-item">VIEW DATA </a>    
							 </div>
                        </div>
						
                           
						<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">OFFERS</a>
                            <div class="dropdown-menu rounded-0 m-0">
								  <a href="offer_add.php" class="dropdown-item">ADDING </a>
									<a href="offers.php" class="dropdown-item">OFFER DATA </a>    
							 </div>
                        </div>    
                           
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">PACKAGES TYPES </a>
                            <div class="dropdown-menu rounded-0 m-0">
								  <a href="package_add.php" class="dropdown-item">ADDING </a>
									<a href="pack_type_view.php" class="dropdown-item">VIEW DATA </a>    
							 </div>
                        </div>
						
						   <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">EVENTS </a>
                            <div class="dropdown-menu rounded-0 m-0">
								  <a href="event_add.php" class="dropdown-item">ADDING </a>
									<a href="events_view.php" class="dropdown-item">VIEW DATA </a>    
							 </div>
                        </div>
                       <div class="nav-item ">
                        <a href="enquery.php" class="nav-item nav-link ">ENQUREY</a>
                        </div>
						 <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">BOOKING </a>
                            <div class="dropdown-menu rounded-0 m-0">
								  <a href="catagory_hallbook.php" class="dropdown-item">HALL </a>
									<a href="catagory_decorationbook.php" class="dropdown-item">DECORATION</a> 
									<a href="catagory_bridalboook.php" class="dropdown-item">BRIDAL</a>
									<a href="catagory_dj.php" class="dropdown-item">DJ SETUPS</a>
									<a href="catagory_videobook.php" class="dropdown-item">VIDEOGRAPHY</a>
									<a href="catagory_catering.php" class="dropdown-item">CATERING</a>   
							 </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">SERVICES</a>                    
						</div>
                    <a href="login.html" class="btn btn-danger px-3 d-none d-lg-flex">LOGIN</a>               
					 </div>
            </nav>
        </div>
		
        <!-- Navbar End -->
        <!-- Navbar End -->
		
		<!--Text box start--->
		
		
		  
 <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded p-3">
                    <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                        <div class="row g-5 align-items-center">
						 <?php
						 require_once "db_con.php";
						 $sql="SELECT * FROM wedding_hall ";
						 $guru = mysqli_query($link,$sql);
										
						 if(mysqli_num_rows($guru)>0)
						 {
						 ?>
										
						 <?php
						 while($row = mysqli_fetch_array($guru))
						 {
						 ?>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                                <img class="img-fluid rounded w-100" src="img/<?php echo $row['hall_image']?>" alt="">
                            </div>
                            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="mb-4">
                                    <h1 class="mb-3"><?php echo $row['hall_name']?></h1>
                                    <p></p>
                                </div>
                               
                                <div class="col-12">
									  <div class="col-12">
									  <a  class="btn mr-md-2 mb-md-0 mb-2 btn-primary" href="hall_detials.php?key=<?php echo $row['wh_id']?>">VIEW</a>
									   <a  class="btn mr-md-2 mb-md-0 mb-2 btn-success" href="hall_update.php?key=<?php echo $row['wh_id']?>">EDIT</a>
									    <a  class="btn mr-md-2 mb-md-0 mb-2 btn-danger" href="hall_delete.php?key=<?php echo $row['wh_id']?>">DELETE</a>
										
										
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
		
						            
			<!-- Text box end-->
								
		</div>
		  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

		</body>
</html>