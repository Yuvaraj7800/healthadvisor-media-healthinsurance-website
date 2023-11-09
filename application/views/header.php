<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Health Advisor Media</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?= base_url(); ?>images\health12-removebg-preview.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">
    <style>
    .arrow-form {
    position: absolute;
    /* left: 117px; */
    /* top: 156px; */
    z-index: 888;
    margin-top: 40px;
    margin-bottom:140px;
    margin-right:10px;
    
}
.forms{
    background-color:orange;
     
}
@media only screen and (min-device-width: 480px){
    
}
        
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-white py-2 px-0 ">
        <div class="row gx-0 align-items-center">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4"><a class="text-white" href="tel:+1 689 999 4084">
                    <small class="fa fa-phone-alt me-2"></small>
                    <small>+1 689-999-4084</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small>info@healthadvisormedia.com</small>
                    
                </div>
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 10 AM - 06 PM EST</small>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Topbar End -->



    <!-- Navbar Start -->
    
     <div class="container-xxl py-">
        <div class="container">
            <div class="row g-">
         <div class="col-md-6">
        <a href="index.html" class="navbar-brand  ">
            <img class="img-fluid pl-2 mb-0 h-100" src="<?= base_url(); ?>assets/img/new_health-removebg-preview.png" alt="">
        </a>
        </div>
        <div class="col-md-6">
        <div class="mt-5 mb-0 " style="font-size:1rem; border: 1px solid red; max-width: 290px; min-width:250px; 
     background-color: darkgreen; border-radius: 10px;">
      <h4 class="text-white p-2"><a class="text-white" href="tel:+1 689 999 4084">Talk To An Expert! &nbsp;&nbsp;<br/><small class="fa fa-phone-alt me-2" ></small>+1 689-999-4084</a></h4>
      

      </div>
        </div>
        </div>
        </div>
        </div>
        
   <!-- <nav class="row navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">-->
   <!--     <div class="col-md-6">-->
   <!--     <a href="<?= base_url('Web/index'); ?>" class="navbar-brand d-flex align-items-center">-->
   <!--         <img class="img-fluid me- h-100 w-100" src="<?= base_url(); ?>assets/img/advisor-removebg-preview.png" alt="">-->
   <!--     </a>-->
   <!--     </div>-->
   <!--     <div class="col-md-6">-->
   <!--     <div class=" text-start p-2 " style="border: 2px solid orange; max-width: 300px; -->
   <!--  background-color: darkgreen; border-radius: 20px;">-->
   <!--   <h4 class="text-white p-1">Get Your Debt Settled Now! <span style="color:orange;"><small class="fas fa-phone-alt"></small></span> +1 012-345-6789</h4>-->

   <!--   </div>-->
   <!--</div>-->
   <!-- </nav>-->
        <!--<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">-->
        <!--    <span class="navbar-toggler-icon"></span>-->
        <!--</button> -->
        <!-- <div class="collapse navbar-collapse" id="navbarCollapse">-->
        <!--    <div class="navbar-nav mx-auto  rounded pe-4 py-3 py-lg-0">-->
        <!--    <p class="text-white h-100 d-inline  me- p-2 bg-success " style="border-radius:25px; font-size:30px;  width:300px;"><a class="text-white" href="tel:+1 689 999 4084">-->
        <!--            <small>Talk To An Expert</small> <small class="fa fa-phone-alt me-2">+1 689-999-4084</small><a/>-->
                    
        <!--        </p>-->
                <!--<div class="h-100 d-inline-flex align-items-center me-4 bg-warning">-->
                <!--    <medium class="far fa-envelope-open me-2"></medium>-->
                <!--    <medium>info@msvemtek.com</medium>-->
                <!--</div>-->
                <!--<div class="h-100 d-inline-flex align-items-center me-4 bg-warning">-->
                <!--    <small class="far fa-clock me-2"></small>-->
                <!--    <small>Mon - Fri : 09 AM - 09 PM</small>-->
                <!--</div>-->
                <!-- <div class="nav-item dropdown">-->
                <!--    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>-->
                <!--    <div class="dropdown-menu bg-light border-0 m-0">-->
                <!--        <a href="feature.html" class="dropdown-item">Features</a>-->
                <!--        <a href="appointment.html" class="dropdown-item">Appointment</a>-->
                <!--        <a href="team.html" class="dropdown-item">Team Members</a>-->
                <!--        <a href="testimonial.html" class="dropdown-item">Testimonial</a>-->
                <!--        <a href="404.html" class="dropdown-item">404 Page</a>-->
                <!--    </div> -->
                <!--</div>-->
                <!--<a href="<?= base_url('Web/contact'); ?>" style="font-size:35px;"class="nav-item nav-link">Contact Us</a>-->
        <!--    </div>-->
        <!--</div> -->
        <!-- <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a>  -->
   
    <!-- Navbar End -->
    <!-- Navbar Start -->
    
<!--<nav class=" row navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 background-light">-->
<!--  <div class="col-md-6"> -->
<!--    <a href="<?= base_url('Web/index'); ?>" class="navbar-brand d-flex align-items-center">-->
<!--        <img class="img-fluid me-3" style="max-height: 130px; max-width: 130px;" src="<?= base_url(); ?>assets/img/new_health-removebg-preview.png" alt="">-->
<!--    </a>-->
<!--  </div>-->
    
    <!-- <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button> -->
    <!-- <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto bg-light rounded pe-4 py-3 py-lg-0">
            <!<a href="index.html" class="nav-item nav-link active">Home</a>
            <a href="about.html" class="nav-item nav-link">About Us</a>
            <a href="service.html" class="nav-item nav-link">Our Services</a> -->
            <!-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="appointment.html" class="dropdown-item">Appointment</a>
                    <a href="team.html" class="dropdown-item">Team Members</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> -->
            <!-- <a href="contact.html" class="nav-item nav-link">Contact Us</a> -->
        <!-- </div> -->
    <!-- </div> --> 
    <!-- <a href="" class="btn btn-primary px-3 d-none d-lg-block">Get A Quote</a> -->
<!--</nav>-->
<!-- Navbar End -->