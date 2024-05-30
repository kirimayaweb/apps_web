<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>kirimaya</title>
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
    <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+0123456789"><i class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</a>
                    <a class="text-body px-2" href="mailto:info@kirimaya.id"><i class="fa fa-envelope-open text-primary me-2"></i>info@kirimaya.id</a>
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
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0"><img class="me-3" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/icons/icon-1.png" alt="Icon">kirimaya</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="<?php echo base_url("Template1/") ?>index" class="nav-item nav-link">Home</a>
                <a href="<?php echo base_url("Template1/") ?>about" class="nav-item nav-link">About</a>
                <a href="<?php echo base_url("Template1/") ?>service" class="nav-item nav-link">Layanan Kami</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Halaman Lain</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="<?php echo base_url("Template1/") ?>feature" class="dropdown-item active">Fitur-Fitur</a>
                        <a href="<?php echo base_url("Template1/") ?>project" class="dropdown-item">Proyek Kami</a>
                        <a href="<?php echo base_url("Template1/") ?>team" class="dropdown-item">Anggota Tim</a>
                        <a href="<?php echo base_url("Template1/") ?>appointment" class="dropdown-item">Jadwalkan Pemesanan</a>
                        <a href="<?php echo base_url("Template1/") ?>testimonial" class="dropdown-item">Testimoni</a>
                        <a href="<?php echo base_url("Template1/") ?>X404" class="dropdown-item">Halaman kosong [404]</a>
                    </div>
                </div>
                <a href="<?php echo base_url("Template1/") ?>contact" class="nav-item nav-link">Hubungi Kami</a>


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
            <a href="<?php echo base_url("Property_proses") ?>" class="btn btn-primary py-2 px-4 d-none d-lg-block">Pilih /Pesan Hunian Impian Anda</a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <!-- <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div> -->
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/about-1.jpg" alt="">
                        <img class="img-fluid" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/about-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">Tentang Kami</h4>
                    <h1 class="display-5 mb-4">Agen Arsitektur Kreatif Untuk Rumah Impian Anda</h1>
                    <p>Bangunan tidak hanya sekadar struktur fisik yang dibangun untuk tujuan fungsional, tetapi juga merupakan narasi visual yang mengandung cerita, nilai, dan makna yang mendalam. Arsitektur bukan hanya tentang desain estetika, tetapi juga tentang bagaimana bangunan tersebut berinteraksi dengan lingkungan sekitarnya dan bagaimana ia mempengaruhi pengalaman manusia yang berada di dalamnya. Dalam artikel ini, kita akan menjelajahi konsep arsitektur sebagai narasi dan bagaimana memahami cerita di balik bangunan.</p>
                    <p class="mb-4">Rumah idaman semestinya tidak hanya tampak indah dari luar, tetapi juga memiliki ruangan-ruangan yang lengkap dan tentunya memberikan kenyamanan bagi penghuninya. Kenyamanan merupakan kunci utama dalam sebuah rumah. Rumah idaman juga sebaiknya memiliki sirkulasi udara dan cahaya yang lancar sehingga menjadikannya rumah yang sehat, terang, dan tidak pengap. Rumah yang sehat tentu akan membuat keluarga kita menjadi sehat juga.</p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">25</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Tahun</h3>
                            <h3>Berkarya</h3>
                            <h3 class="mb-0">Pengalaman</h3>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Mengapa memilih kami!</h4>
                    <h1 class="display-5 mb-4">Mengapa Anda Harus Mempercayai Kami? Pelajari Lebih Lanjut Tentang Kami!</h1>
                    <p class="mb-4">Desain arsitektur tidak hanya tentang fungsi dan estetika, tetapi juga tentang makna dan filosofi yang terkandung di dalamnya. Arsitek sering kali menggunakan simbol, bentuk, dan proporsi untuk menyampaikan pesan yang lebih dalam melalui desain bangunan. Melalui eksplorasi makna dan filosofi desain, kita dapat memahami cerita yang ingin disampaikan oleh arsitek melalui bangunan tersebut. Misalnya, sebuah bangunan gereja mungkin memiliki desain yang mencerminkan nilai-nilai keagamaan atau spiritualitas tertentu.</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/icons/icon-2.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Design Approach</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/icons/icon-3.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Innovative Solutions</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/icons/icon-4.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Project Management</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/about-2.jpg" alt="">
                        <img class="img-fluid" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Team Members</h4>
                <h1 class="display-5 mb-4">We Are Creative Architecture Team For Your Dream Home</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/team-2.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/team-3.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="<?php echo base_url("assets/template_architecture-html-template/") ?>img/team-4.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
        

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-body footer mt-5 pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-light mb-4">Address</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Solo - Jateng - Indonesia</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@kirimaya.id</p>
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
                        &copy; <a href="#">kirimaya.id</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="https://gocikosukses.com/kirimaya">kirimaya</a>
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