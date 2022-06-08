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
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars" style="color: #FFFFFF;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active"> <i class="fa fa-home"></i>
                            &nbsp; Acceuil</a>
                        <a href="{{ route('webmagazine') }}" class="nav-item nav-link"><i class="fa fa-newspaper"></i>
                            &nbsp; Web Magazine</a>
                        <a href="{{ route('apropos') }}" class="nav-item nav-link "><i class="fa fa-info-circle"></i>
                            &nbsp; A propos</a>
                        <!--<a href="service.html" class="nav-item nav-link">Service</a>-->
                        <!--<a href="project.html" class="nav-item nav-link">Projet</a>-->
                        <a href="{{ route('contact') }}" class="nav-item nav-link"><i class="fa fa-phone"></i>
                            &nbsp; Contact</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="mb-4 animated slideInDow">Une communauté de jeunes entreprenants & créatifs</h1>
                            <p class="pb-3 animated slideInDown">Notre vocation est de travailler sur des projets
                                révolutionnaires tout en vous en apprenant le
                                plus possible sur la science et ses dérivées. Adhérez Alitcha et suivez notre
                                web magazine pour élargir votre culture. </p>
                            <a href="webmag.html"
                                class="btn py-sm-3 px-sm-5 rounded-pill animated slideInRight text-white"
                                style="background-color: #F77B1E;"><i class="fa fa-newspaper"></i> &nbsp; Web
                                Magazine</a>
                            <a data-bs-toggle="modal" data-bs-target="#adhererAlitcha" href=""
                                class="btn py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft text-white"
                                style="background-color: #F77B1E;"><i class="fa fa-user-plus"></i> &nbsp; Adhérer
                                Alitcha</a>

                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero.png" alt="">
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
                            <h5 class="mb-3">Technologie</h5>
                            <p class="m-0">Composée d'amoureux de l'ingénierie innovante, l'équipe
                                technologique de
                                Alitcha s'occupe de la mise en œuvre des projets relevant de son ressort. Avec elle,
                                allez à la
                                rencontre des technologies futures.</p>

                        </div>

                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">

                            <i class="fa fa-3x fa-leaf mb-4" style="color:#F77B1E;"></i>
                            <h5 class="mb-3">Écologie</h5>
                            <p class="m-0">Conscient des exigences environnementales liées à un développement
                                durable, la
                                communauté s'est dotée de cette cellule afin de favoriser des transitions écologiques
                                conséquentes.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-laptop-code mb-4" style="color:#F77B1E;"></i>
                            <h5 class="mb-3">Numérique</h5>
                            <p class="m-0">Formée par des amateurs de la technologie numérique, cette équipe
                                met en
                                œuvre le génie du web et du digital (génie logiciel, intelligence artificielle, sécurité
                                informatique...) pour réaliser des projets innovants.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->





        <!-- Newsletter Start -->
        <div class="container-xxl newsletter py-5 wow fadeInUp bg-light">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <p class="section-title text-secondary justify-content-center">
                            <span></span>Newsletter<span></span>
                        </p>
                        <h1 class="text-center text-black mb-4">Restez à l'affus des informations</h1>
                        <p class="text-black mb-4">Rejoignez notre newsletter pour recevoir des informations en temps
                            réel sur Alitcha et notre Webmagazine</p>
                        <p class="text-success error">Envoyé avec succès !</p>
                        <p class="text-danger error"></p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" id="newsletterForm"
                                type="text" placeholder="Entrer votre mail" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"
                                id="newsletterSubmit"><i class="fa fa-paper-plane fs-4"
                                    style="color:#F77B1E;"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Projects Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Web
                        Magazine<span></span></p>
                    <h1 class="text-center mb-5">Publications récentes</h1>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="mx-2 active" data-filter="*">Numérique</li>
                            <li class="mx-2" data-filter=".first">Technologie</li>
                            <li class="mx-2" data-filter=".second">Ecologie</li>
                            <li class="mx-2" data-filter=".second">Divers</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a href="{{ route('article', 1) }}" class="btn btn-square btn-outline-light mx-1"
                                        href="img/portfolio-1.jpg"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-download"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a href="{{ route('article', 1) }}" class="btn btn-square btn-outline-light mx-1"
                                        href="img/portfolio-2.jpg"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-download"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a href="{{ route('article', 1) }}" class="btn btn-square btn-outline-light mx-1"
                                        href="img/portfolio-3.jpg"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-download"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a href="{{ route('article', 1) }}"
                                        class="btn btn-square btn-outline-light mx-1" href="img/portfolio-4.jpg"><i
                                            class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-download"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a href="{{ route('article', 1) }}"
                                        class="btn btn-square btn-outline-light mx-1" href="img/portfolio-5.jpg"><i
                                            class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-download"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a href="{{ route('article', 1) }}"
                                        class="btn btn-square btn-outline-light mx-1" href="img/portfolio-6.jpg"><i
                                            class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i
                                            class="fa fa-download"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">UI / UX Design</p>
                                <h5 class="lh-base mb-0">Digital Agency Website Design And Development</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects End -->




        <!-- Footer Start -->

        <footer class="footer-07">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h2 class="footer-heading"><a href="/" class="logo">&nbsp;</a></h2>
                        <p class="menu">
                            <a href="{{ route('home') }}"><i class="fa fa-home"></i> Accueil</a>
                            <a href="{{ route('webmagazine') }}"><i class="fa fa-newspaper"></i> Web Magazine</a>
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
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>


    <!-- Modal Adhérer Alitcha -->
    <div class="modal fade" id="adhererAlitcha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header " style="background-color: #F77B1E;">
                    <h5 class="modal-title text-white" id="adhererAlitchaLabel">Adhérer Alitcha</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Nom et Prénoms</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Entrez votre nom et prénoms">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Numero de téléphone</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="Entrez votre numero">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bold">Quelles sont vos
                            compétences, dans le domaine du numérique surtout ?</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label fw-bold">Vos motivations pour
                            l'adhésion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal"><i
                            class="fa fa-times"></i> &nbsp; Annuler</button>
                    <button style="background-color: #F77B1E;" type="button" class="btn btn-secondary text-white"><i
                            class="fa fa-user-plus"></i> &nbsp; Adhérer</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
