<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Alitcha Community</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/ionicons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet {{ asset('css/bootstrap.min.css') }} -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.webzine.css" />


    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-xxl bg-white p-0">



        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background:#ffffff;">
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <img src="/img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars" ></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link"> <i class="fa fa-home"></i>
                            &nbsp; Acceuil</a>
                        <a href="{{ route('webmagazine') }}" class="nav-item nav-link"><i class="fa fa-newspaper"></i>
                            &nbsp; Alitcha Magazine</a>
                        <a href="{{ route('labs') }}" class="nav-item nav-link active"><i class="fa fa-fa"></i>
                            &nbsp; Alitcha Labs</a>
                        <a href="{{ route('apropos') }}" class="nav-item nav-link "><i class="fa fa-info-circle"></i>
                            &nbsp; A propos</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link"><i class="fa fa-phone"></i>
                            &nbsp; Contact</a>
                    </div>
                </div>
            </nav>

           
            
            <div class="container-xxl labs-head  bg-gradient">
                <div class="container px-md-5 p-2 pt-md-5">
                    <div class="row g-5 align-items-end" >
                        <div class="col-lg-6 text-center text-lg-start" style="margin-top: 0 !important;">
                        <h1 class="mb-4 animated slideInDow text-white">Nos Labs </h1>
                                
                        <p class="mb-4 animated slideInDow fs-5 text-white">L’équipe de Alitcha est conscient de l’importance de
                                la recherche dans la technologie. Elle met donc en avant la recherche pour
                                l’apprentissage, le partage et l’innovation. Ses premiers Labs sont Techlab, Numlab et Eumlab.</p>
                           
                        </div>
                        <!-- <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="/img/hero.png" alt="">
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Feature Start -->
        <div class="container-xxl pb-5 pt-4" style="color: black; font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">
            <div class="container pb-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp bg-gradient" data-wow-delay="0.1s" >
                        <div class="feature-item bg-light rounded text-center p-md-4 p-1">

                            <i class="fa fa-3x fa-user-astronaut mb-4" style="color:#F77B1E;"></i>
                            <h5 class="display-6 mb-3" style="color:black;">Techlab</h5>
                            <p class="m-0">Composé d'amoureux de l'ingénierie innovante, l'équipe technologique de
                                Alitcha s'occupe de la mise en œuvre des projets relevant de son ressort. Avec elle,
                                allez à la rencontre des technologies futures.</p>

                        </div>

                    </div>
                    <div class="col-lg-4 wow fadeInUp bg-gradient" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-md-4 p-1">

                            <i class="fa fa-3x fa-laptop-code mb-4" style="color:#F77B1E;"></i>
                            <h5 class="display-6 mb-3" style="color:black;">Numlab</h5>
                            <p class="m-0">Formé par des amateurs de la technologie numérique, cette équipe met en
                                œuvre le génie du web et du digital (génie logiciel, intelligence artificielle, sécurité
                                informatique et plusieurs autres dérivées du numérique)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp bg-gradient" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-md-4 p-1">
                            <i class="fa fa-3x fa-leaf mb-4" style="color:#F77B1E;"></i>
                            <h5 class="display-6 mb-3" style="color:black;">Ecolab</h5>
                            <p class="m-0">Conscient des exigences environnementales liées à un développement
                                durable, la communauté s'est dotée de cette cellule afin de favoriser une transition
                                écologique durable au Bénin, en Afrique et dans le monde.
                            </p>

                        </div>
                    </div>
                    <p class="mt-5 text-center">Les Labs fonctionnent de façon très moderne avec des activités de
                        recherche, de créativité et d’innovation.</p>
                </div>
            </div>
        </div>
        <!-- Feature End -->

 <!-- Footer Start -->
 <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">

                    <h1 class="text-white">
                        Alitcha
                    </h1>
                    <p>
                        Promotion du numérique, de la technologie et de l'écologie, la recherche et la réalisation de projets innovants.
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-primary me-1" href="https://twitter.com/Alitcha5?t=RlRUgTunK2yOglcP7WbmgQ&s=09!" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fab fa-twitter fs-4 p-1"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href="https://www.facebook.com/Alitcha-106586631967294" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fab fa-facebook-f fs-4 p-1"></i></a>
                        <a class="btn btn-square btn-outline-primary me-1" href="https://www.instagram.com/ali.tcha/" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fab fa-instagram fs-4 p-1"></i></a>


                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Adresse</h4>
                    <p>
                        <i class="fa fa-map-marker-alt me-3"></i>Cotonou, Bénin
                    </p>
                    <p><i class="fa fa-phone-alt me-3"></i>+229 57 25 14 74</p>
                    <p><i class="fa fa-envelope me-3"></i>info@alitchateam.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Liens rapides</h4>
                    <a class="btn btn-link" href="/apropos">A propos</a>
                    <a class="btn btn-link" href="/contact">Contact</a>
                    <a class="btn btn-link" href="/webmagazine">Alitcha magazine</a>
                    <a class="btn btn-link" href="/labs">Alitcha labs</a>
                    <a class="btn btn-link" href="#">Politique de confidentialité</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Rejoignez notre newsletter pour recevoir des informations en temps réel sur Alitcha et notre Webmagazi</p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre email" />
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p class="copyright">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | <i class="fa-solid fa-heart"></i> by <a href="/" target="_blank">Alitcha Community</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i
                class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/counterup/counterup.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>
