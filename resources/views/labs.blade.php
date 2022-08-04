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

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-xxl bg-white p-0">



        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
                style="background-color: #F77B1E;">
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <img src="img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars" style="color: #FFFFFF;"></span>
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
            <div class="container-xxl hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 justify-content-center">
                        <div class="col-lg-7 text-center text-lg-start">
                            <h4 class="pb-3 animated slideInDown text-center">L’équipe de <span
                                    style="color: #F77B1E;">Alitcha</span> est conscient de l’importance de
                                la recherche dans la technologie. Elle met donc en avant la recherche pour
                                l’apprentissage, le partage et l’innovation. <br>
                                Ses premiers Labs sont :</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Feature Start -->
        <div class="container-xxl pb-5">
            <div class="container pb-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">

                            <i class="fa fa-3x fa-user-astronaut mb-4" style="color:#F77B1E;"></i>
                            <h5 class="mb-3">TechLab</h5>
                            <p class="m-0">Composé d'amoureux de l'ingénierie innovante, l'équipe technologique de
                                Alitcha s'occupe de la mise en œuvre des projets relevant de son ressort. Avec elle,
                                allez à la rencontre des technologies futures.</p>

                        </div>

                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">

                            <i class="fa fa-3x fa-laptop-code mb-4" style="color:#F77B1E;"></i>
                            <h5 class="mb-3">Numlab</h5>
                            <p class="m-0">Formé par des amateurs de la technologie numérique, cette équipe met en
                                œuvre le génie du web et du digital (génie logiciel, intelligence artificielle, sécurité
                                informatique et plusieurs autres dérivées du numérique)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-leaf mb-4" style="color:#F77B1E;"></i>
                            <h5 class="mb-3">Ecolab</h5>
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
        <footer class="footer-07">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h2 class="footer-heading"><a href="/" class="logo">&nbsp;</a></h2>
                        <p class="menu">
                            <a href="{{ route('home') }}"><i class="fa fa-home"></i> Accueil</a>
                            <a href="{{ route('webmagazine') }}"><i class="fa fa-newspaper"></i> Alitcha Magazine</a>
                            <a href="{{ route('labs') }}"><i class="fa fa-fa"></i> Alitcha Labs</a>
                            <a href="{{ route('apropos') }}"><i class="fa fa-info-circle"></i> A propos</a>
                            <a href="{{ route('contact') }}"><i class="fa fa-phone"></i> Contact</a>

                        </p>

                        <ul class="ftco-footer-social p-0">
                            <li class="ftco-animate"><a
                                    href="https://twitter.com/Alitcha5?t=RlRUgTunK2yOglcP7WbmgQ&s=09!" target="_blank"
                                    data-toggle="tooltip" data-placement="top" title="Twitter">

                                    <span class="fab fa-twitter"></span>
                                </a></li>
                            <li class="ftco-animate"><a href="https://www.facebook.com/Alitcha-106586631967294"
                                    target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook">
                                    <span class="fab fa-facebook"></span>

                                </a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/ali.tcha/" target="_blank"
                                    data-toggle="tooltip" data-placement="top" title="Instagram">
                                    <span class="fab fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-12 text-center">
                        <p class="copyright">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | <i class="fa-solid fa-heart"></i> by <a
                                href="/" target="_blank">Alitcha Community</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
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
