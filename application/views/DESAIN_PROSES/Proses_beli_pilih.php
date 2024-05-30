<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Griyaku</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url("assets/template_architecture-html-template/") ?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- <link href="<?php //echo base_url("assets/template_architecture-html-template/") ?>css/all.min.css" rel="stylesheet"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->
    <link href="<?php echo base_url("assets/template_architecture-html-template/") ?>css/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url("assets/template_architecture-html-template/") ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url("assets/template_architecture-html-template/") ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/icons/icon-1.png" alt="Icon">
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+0123456789"><i class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</a>
                    <a class="text-body px-2" href="mailto:info@griyaku.com"><i class="fa fa-envelope-open text-primary me-2"></i>info@griyaku.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="">Terms</a>
                    <a class="text-body px-2" href="">Privacy</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="<?php echo base_url('Property_proses'); ?>" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/icons/icon-1.png" alt="Icon">Griyaku</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index" class="nav-item nav-link">Home</a>
                <a href="about" class="nav-item nav-link">About</a>
                <a href="service" class="nav-item nav-link">Layanan Kami</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Halaman Lain</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="feature" class="dropdown-item active">Fitur-Fitur</a>
                        <a href="project" class="dropdown-item">Proyek Kami</a>
                        <a href="team" class="dropdown-item">Anggota Tim</a>
                        <a href="appointment" class="dropdown-item">Jadwalkan Pemesanan</a>
                        <a href="testimonial" class="dropdown-item">Testimoni</a>
                        <a href="X404" class="dropdown-item">Halaman kosong [404]</a>
                    </div>
                </div>
                <a href="contact" class="nav-item nav-link">Hubungi Kami</a>
            </div>
             <a href="https://htmlcodex.com/architecture-html-template-pro" class="btn btn-primary py-2 px-4 d-none d-lg-block">Pro Version</a> 
        </div> -->
    </nav>

    <!-- Navbar End -->


    <!-- Page Header Start -->
    <!-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div> -->
    <!-- Page Header End -->


    <!-- Project Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Terimakasih Anda telah memilih produk kami</h4>
                <h3 class="display-5 mb-12">Silahkan Lanjutkan proses pembelian Desain hunian idaman anda.</h3>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        
                    <?php
                        $start = 0;
                        foreach ($data_desain_terpilih as $list_data)
                        {
                            $x_nomor=++$start;

                            if($x_nomor==1){
                                ?>
                                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-<?php echo $x_nomor ?>" type="button">
                                        <h3 class="m-0"><?php echo $x_nomor ?>. <?php echo $list_data->posisi; ?></h3>
                                    </button> 
                                <?php
                            }else{
                                ?>
                                    <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-<?php echo $x_nomor ?>" type="button">
                                        <h3 class="m-0"><?php echo $x_nomor ?>. <?php echo $list_data->posisi; ?></h3>
                                    </button> 
                                <?php
                         }
                    ?>                    
                        

                        <!-- 
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02. Royal Hotel</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. Mexwel Buiding</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. Shopping Complex</h3>
                        </button> -->

                    <?php
                        }
                    ?>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        
                    <?php
                        $start = 0;
                        foreach ($data_desain_terpilih as $list_data)
                        {
                            $x_nomor=++$start;
                            if($x_nomor==1){
                    ?>
                        <div class="tab-pane fade show active" id="tab-pane-<?php echo $x_nomor ?>">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/<?php echo strtolower(str_replace(' ', '', $list_data->posisi)) . "/" . $list_data->poto ; ?>"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3"><?php echo $list_data->posisi; ?></h1>
                                    <!-- <h1 class="mb-3"><?php //echo strtolower(str_replace(' ', '', $list_data->posisi)); ?></h1> -->
                                    <p class="mb-4"><?php echo $list_data->deskripsi; ?></p>
                                    <!-- <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a> -->
                                </div>
                            </div>
                        </div>


                    <?php
                            }else{

                                ?>

                        <div class="tab-pane fade show" id="tab-pane-<?php echo $x_nomor ?>">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/<?php echo strtolower(str_replace(' ', '', $list_data->posisi)) . "/" . $list_data->poto ; ?>"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3"><?php echo $list_data->posisi; ?></h1>
                                    <p class="mb-4"><?php echo $list_data->deskripsi; ?></p>
                                    <!-- <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a> -->
                                </div>
                            </div>
                        </div>

                                <?php

                            }
                    ?>
                    


                    <?php
                        }
                    ?>



                        <!-- <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/project-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25c Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-3">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/project-3.jpg"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="mb-3">25f Years Of Experience In Architecture Industry</h1>
                                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-pane-4">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/project-4.jpg"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="mb-3">25g Years Of Experience In Architecture Industry</h1>
                                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                        <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                        <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        -->


                    </div>

                  
                </div>




                    <!-- Appointment Start -->
                    <form action="<?php echo base_url('Desain_proses/Checkout_action/'.$uuid_hunian); ?>" method="post"><table class='table table-bordered'></table>
                        <div class="container-xxl py-5">
                            <div class="container">
                                <div class="row g-5">
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <h4 class="section-title">Appointment</h4>
                                        <h1 class="display-5 mb-4">Silahkan isi nama dan nomor whatsapp anda, selanjutnya admin kami akan mengirimkan detail informasi untuk anda.</p>
                                        <!-- <div class="row g-4">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                                        <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                                    </div>
                                                    <div class="ms-4">
                                                        <p class="mb-2">Call Us Now</p>
                                                        <h3 class="mb-0">+012 345 6789</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                                        <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                                    </div>
                                                    <div class="ms-4">
                                                        <p class="mb-2">Mail Us Now</p>
                                                        <h3 class="mb-0">info@griyaku.com</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                                        <div class="row g-3">
                                            <div class="col-12 col-sm-6"> Nama:
                                                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Anda" style="height: 55px;">
                                            </div>
                                            <div class="col-12 col-sm-6"> Nomor Whatsapp:
                                                <input type="number" name="nmrwhatsapp" id="nmrwhatsapp" class="form-control" placeholder="Nomor Whatsapp : 081xxxxxxxxxx" style="height: 55px;">
                                            </div>
                                            <!-- <div class="col-12 col-sm-6">
                                                <input type="text" class="form-control" placeholder="Your Mobile" style="height: 55px;">
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <select class="form-select" style="height: 55px;">
                                                    <option selected>Choose Service</option>
                                                    <option value="1">Service 1</option>
                                                    <option value="2">Service 2</option>
                                                    <option value="3">Service 3</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="date" id="date" data-target-input="nearest">
                                                    <input type="text"
                                                        class="form-control datetimepicker-input"
                                                        placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="time" id="time" data-target-input="nearest">
                                                    <input type="text"
                                                        class="form-control datetimepicker-input"
                                                        placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                            </div> -->
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100 py-3" type="submit">Check Out</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Appointment End -->

                </div>







            </div>


            
        </div>



    </div>
    <!-- Project End -->
        




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Address</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Solo - Jateng - Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@griyaku.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-body me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Services</h3>
                    <a class="btn btn-link" href="">Architecture</a>
                    <a class="btn btn-link" href="">3D Animation</a>
                    <a class="btn btn-link" href="">House Planning</a>
                    <a class="btn btn-link" href="">Interior Design</a>
                    <a class="btn btn-link" href="">Construction</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Quick Links</h3>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Newsletter</h3>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">griyaku.com</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="#">Griyaku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>js/jquery-3.4.1.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url("assets/template_architecture-html-template/") ?>js/main.js"></script>
</body>

</html>