<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>kirimaya</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url("assets/template_real-estate-html-template/") ?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url("assets/template_real-estate-html-template/") ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url("assets/template_real-estate-html-template/") ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url("assets/template_real-estate-html-template/") ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url("assets/template_real-estate-html-template/") ?>css/style.css" rel="stylesheet">


<!-- --------------------------------------- -->

    <!-- Google Web Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">  -->

    <!-- Icon Font Stylesheet -->
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet"> -->
    <!-- <link href="<?php //echo base_url("assets/template_construction-company-website-template-free/") ?>css/all.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->
    <!-- <link href="<?php //echo base_url("assets/template_construction-company-website-template-free/") ?>css/bootstrap-icons.css" rel="stylesheet"> -->

    <!-- Libraries Stylesheet -->
    <!-- <link href="<?php //echo base_url("assets/template_construction-company-website-template-free/") ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> -->
    <link href="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <!-- <link href="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>css/style.css" rel="stylesheet">

<!-- --------------------------------------- -->

    
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
                <a href="index" class="navbar-brand d-flex align-items-center text-center">
                    <div class="icon p-2 me-2">
                        <img class="img-fluid" src="<?php echo base_url("assets/template_real-estate-html-template/") ?>img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                    </div>
                    <h1 class="m-0 text-primary">kirimaya</h1>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="<?php echo base_url("Template5/") ?>index" class="nav-item nav-link ">Home</a>
                        <a href="<?php echo base_url("Template5/") ?>kegiatan" class="nav-item nav-link active">Kegiatan</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Produk</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="<?php echo base_url("Property_proses") ?>" class="dropdown-item">Properti</a>
                                <!-- <a href="<?php //echo base_url("Template5/") ?>propertytype" class="dropdown-item">Partner</a> -->
                                <a href="<?php echo base_url("Desain_proses") ?>" class="dropdown-item">Desain</a>
                            </div>
                        </div>                      
                        <a href="<?php echo base_url("Template5/") ?>about" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="<?php echo base_url("Template5/") ?>propertylist" class="dropdown-item">Property List</a>
                                <a href="<?php echo base_url("Template5/") ?>propertytype" class="dropdown-item">Property Type</a>
                                <a href="<?php echo base_url("Template5/") ?>propertyagent" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="<?php echo base_url("Template5/") ?>testimonial" class="dropdown-item">Testimonial</a>
                                <a href="<?php echo base_url("Template5/") ?>X404" class="dropdown-item">404 Error</a>
                            </div>
                        </div>
                        <a href="<?php echo base_url("Template5/") ?>contact" class="nav-item nav-link">Contact</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Template</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="<?php echo base_url("Template1") ?>" class="dropdown-item">Template 1</a>
                                <a href="<?php echo base_url("Template2") ?>" class="dropdown-item">Template 2</a>
                                <a href="<?php echo base_url("Template3") ?>" class="dropdown-item">Template 3</a>
                                <a href="<?php echo base_url("Template4") ?>" class="dropdown-item">Template 4</a>
                                <a href="<?php echo base_url("Template5") ?>" class="dropdown-item">Template 5</a>
                            </div>
                        </div>

                    </div>
                    <a href="<?php echo base_url("Property_proses") ?>" class="btn btn-primary px-3 d-none d-lg-flex">Pilih /Pesan Hunian Impian Anda</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


        <!-- Header Start -->
        <!-- <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Property List</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Property List</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="<?php echo base_url("assets/template_real-estate-html-template/") ?>img/header.jpg" alt="">
                </div>
            </div>
        </div> -->
        <!-- Header End -->


        <!-- Search Start -->
        <!-- <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Property Type</option>
                                    <option value="1">Property Type 1</option>
                                    <option value="2">Property Type 2</option>
                                    <option value="3">Property Type 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0 py-3">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Search End -->


        <!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">



                <div class="tab-content">
               
                




                <!-- Portfolio Start -->
                <!-- <div class="container-fluid bg-light py-6 px-5"> -->
                <div class="container-fluid bg-light py-1 px-5">
                    <!-- <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                        <h1 class="display-5 text-uppercase mb-4">Some Of Our <span class="text-primary">Popular</span> Dream Projects</h1>
                    </div> -->
                    <div class="row gx-5">
                        <div class="col-12 text-center">
                            <div class="d-inline-block bg-dark-radial text-center pt-2 px-3 mb-3">
                                <ul class="list-inline mb-0" id="portfolio-flters">
                                    <li class="btn btn-outline-primary bg-white p-2 active mx-2 mb-4" data-filter="*">
                                        <img src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-5.jpg" style="width: 150px; height: 100px;">
                                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                            <h6 class="text-white text-uppercase m-0">Semua Kegiatan</h6>
                                        </div>
                                    </li>

                                    <?php
                                        $start=0;
                                        foreach ($data_kegiatan as $data_kegiatan_list)
                                        {
                                            // $x_start=++$start;
                                    ?>

                                        <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter="<?php echo ".".$data_kegiatan_list->kegiatan ?>">
                                            <img src="<?php echo base_url("assets/template_construction-company-website-template-free/img/".$data_kegiatan_list->poto) ?>" style="width: 150px; height: 100px;">
                                            <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                                <h6 class="text-white text-uppercase m-0"><?php echo $data_kegiatan_list->kegiatan ?></h6>
                                            </div>
                                        </li>

                                    <?php

                                        }
                                    ?>


                                    <!-- <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".first">
                                        <img src="<?php //echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-2.jpg" style="width: 150px; height: 100px;">
                                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                            <h6 class="text-white text-uppercase m-0">Konstruksi</h6>
                                        </div>
                                    </li>


                                    <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".second">
                                        <img src="<?php //echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-3.jpg" style="width: 150px; height: 100px;">
                                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                            <h6 class="text-white text-uppercase m-0">Renovasi</h6>
                                        </div>
                                    </li>
                                    <li class="btn btn-outline-primary bg-white p-2 mx-2 mb-4" data-filter=".xxx">
                                        <img src="<?php //echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-3.jpg" style="width: 150px; height: 100px;">
                                        <div class="position-absolute top-0 start-0 end-0 bottom-0 m-2 d-flex align-items-center justify-content-center" style="background: rgba(4, 15, 40, .3);">
                                            <h6 class="text-white text-uppercase m-0">Pembangunan</h6>
                                        </div>
                                    </li> -->


                                </ul>
                            </div>
                        </div>
                    </div>




                    <div class="row g-5 portfolio-container">


                        <?php
                            $start=0;
                            foreach ($data_kegiatan as $data_kegiatan_list)
                            {
                        ?>
                            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item <?php  echo $data_kegiatan_list->kegiatan; ?>">
                                <div class="position-relative portfolio-box">
                                    <img class="img-fluid w-100" src="<?php echo base_url("assets/template_construction-company-website-template-free/img/".$data_kegiatan_list->poto)  ?> " alt="">
                                    <a class="portfolio-title shadow-sm" href="">
                                        <p class="h4 text-uppercase"><?php  echo $data_kegiatan_list->lokasi; ?></p>
                                        <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-1"></i><?php  echo $data_kegiatan_list->kelurahan; ?></span>
                                    </a>
                                    <a class="portfolio-btn" href="<?php echo base_url("assets/template_construction-company-website-template-free/img/.$data_kegiatan_list->poto")  ?>" data-lightbox="portfolio">
                                        <i class="bi bi-plus text-white"></i>
                                    </a>
                                </div>
                            </div>

                        <?php
                            }
                        ?>






<!-- 

                        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                            <div class="position-relative portfolio-box">
                                <img class="img-fluid w-100" src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-1.jpg" alt="">
                                <a class="portfolio-title shadow-sm" href="">
                                    <p class="h4 text-uppercase">Project Name</p>
                                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Solo - Jateng - indonesia</span>
                                </a>
                                <a class="portfolio-btn" href="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-1.jpg" data-lightbox="portfolio">
                                    <i class="bi bi-plus text-white"></i>
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                            <div class="position-relative portfolio-box">
                                <img class="img-fluid w-100" src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-2.jpg" alt="">
                                <a class="portfolio-title shadow-sm" href="">
                                    <p class="h4 text-uppercase">Project Name</p>
                                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Solo - Jateng - indonesia</span>
                                </a>
                                <a class="portfolio-btn" href="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-2.jpg" data-lightbox="portfolio">
                                    <i class="bi bi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                            <div class="position-relative portfolio-box">
                                <img class="img-fluid w-100" src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-3.jpg" alt="">
                                <a class="portfolio-title shadow-sm" href="">
                                    <p class="h4 text-uppercase">Project Name</p>
                                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Solo - Jateng - indonesia</span>
                                </a>
                                <a class="portfolio-btn" href="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-3.jpg" data-lightbox="portfolio">
                                    <i class="bi bi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                            <div class="position-relative portfolio-box">
                                <img class="img-fluid w-100" src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-4.jpg" alt="">
                                <a class="portfolio-title shadow-sm" href="">
                                    <p class="h4 text-uppercase">Project Name</p>
                                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Solo - Jateng - indonesia</span>
                                </a>
                                <a class="portfolio-btn" href="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-4.jpg" data-lightbox="portfolio">
                                    <i class="bi bi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                            <div class="position-relative portfolio-box">
                                <img class="img-fluid w-100" src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-5.jpg" alt="">
                                <a class="portfolio-title shadow-sm" href="">
                                    <p class="h4 text-uppercase">Project Name</p>
                                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Solo - Jateng - indonesia</span>
                                </a>
                                <a class="portfolio-btn" href="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-5.jpg" data-lightbox="portfolio">
                                    <i class="bi bi-plus text-white"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item second">
                            <div class="position-relative portfolio-box">
                                <img class="img-fluid w-100" src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-6.jpg" alt="">
                                <a class="portfolio-title shadow-sm" href="">
                                    <p class="h4 text-uppercase">Project Name</p>
                                    <span class="text-body"><i class="fa fa-map-marker-alt text-primary me-2"></i>Solo - Jateng - indonesia</span>
                                </a>
                                <a class="portfolio-btn" href="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>img/portfolio-6.jpg" data-lightbox="portfolio">
                                    <i class="bi bi-plus text-white"></i>
                                </a>
                            </div>
                        </div> -->




                    </div>
                </div>
                <!-- Portfolio End -->

                </div>


            </div>
        </div>
        <!-- Property List End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Solo - Jateng - Indonesia</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@kirimaya.id</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
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
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url("assets/template_real-estate-html-template/") ?>img/property-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url("assets/template_real-estate-html-template/") ?>img/property-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url("assets/template_real-estate-html-template/") ?>img/property-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url("assets/template_real-estate-html-template/") ?>img/property-4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url("assets/template_real-estate-html-template/") ?>img/property-5.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="<?php echo base_url("assets/template_real-estate-html-template/") ?>img/property-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">kirimaya.id</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://gocikosukses.com/kirimaya">kirimaya</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url("assets/template_real-estate-html-template/") ?>lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url("assets/template_real-estate-html-template/") ?>lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url("assets/template_real-estate-html-template/") ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url("assets/template_real-estate-html-template/") ?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url("assets/template_real-estate-html-template/") ?>js/main.js"></script>


<!-- ----------------------------------------- -->

    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php //echo base_url("assets/template_construction-company-website-template-free/") ?>lib/easing/easing.min.js"></script>
    <script src="<?php //echo base_url("assets/template_construction-company-website-template-free/") ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php //echo base_url("assets/template_construction-company-website-template-free/") ?>lib/owlcarousel/owl.carousel.min.js"></script> -->
    <script src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url("assets/template_construction-company-website-template-free/") ?>js/main.js"></script>

<!-- ----------------------------------------- -->

</body>

</html>