<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Alitcha Community</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-xxl  p-0">


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" >
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background:#ffffff;">
                <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <img src="/img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars" style="color: #FFFFFF;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link "> <i class="fa fa-home"></i>
                            &nbsp; Acceuil</a>
                        <a href="{{ route('webmagazine') }}" class="nav-item nav-link"><i class="fa fa-newspaper"></i>
                            &nbsp; Alitcha Magazine</a>
                        <a href="{{ route('labs') }}" class="nav-item nav-link"><i class="fa fa-fa"></i>
                            &nbsp; Alitcha Labs</a>
                        <a href="{{ route('apropos') }}" class="nav-item nav-link active"><i class="fa fa-info-circle"></i>
                            &nbsp; A propos</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link"><i class="fa fa-phone"></i>
                            &nbsp; Contact</a>
                    </div>
                </div>
            </nav>
            <!-- Navbar & Hero End -->

            <!--Carrousel-->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner carrousel-div">
                    <div class="carousel-item active">
                        <img src="/img/blog/num.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/image2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/image1.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--Carrousel-->

            <div class="container-xxl hero-header" style="padding-top: 2rem;" class="bodyApropos">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="mb-4 animated slideInDow">À la fois communauté et startup studio,
                            </h1>
                            <p class="pb-3 animated slideInDown"><a href="/">Alitcha</a> a été créé non
                                seulement pour la promotion du numérique, de la technologie et de l'écologie mais
                                également pour la recherche et la réalisation d'innovants projets.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Communauté Start -->
        <div class="container-xxl newsletter py-5 wow fadeInUp bg-light" style="margin: 0;">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-secondary justify-content-center">
                            Communauté
                        </h1>
                        <p class="mb-4" style="color:black;">La communauté Alitcha est composé de ses Labs et de son
                            magazine.
                        </p>
                    </div>
                    <div class="col-lg-7 text-center mt-5">
                        <p class="section-title text-secondary justify-content-center">
                            <span></span>Notre magazine<span></span>
                        </p>
                        <p class="text-black mb-4">Alitcha magazine représente le contact avec le monde. C'est l'organe
                            médiatique chargé principalement de la vulgarisation et de la promotion des projets de
                            Alitcha. </p>
                        <p class="text-black mb-4" style="margin-top: 20px;">Nous ciblons en particulier les jeunes
                            afin de les pousser à se dépasser et à assurer ainsi l'avenir du Bénin en particulier et de
                            l'Afrique en général en ce qui concerne les technologies du futur.
                        </p>
                    </div>
                    <div class="col-lg-7 text-center mt-5">
                        <p class="section-title text-secondary justify-content-center">
                            <span></span>Notre Labs<span></span>
                        </p>
                        <p class="text-black mb-4">Avec pour objectif d’apprendre, de faire de la recherche et
                            d’innover, Alitcha Labs participe activement au développement des technologies en Afrique.
                            Il vise à intervenir dans plusieurs domaines et améliorer les conditions de vies et le
                            quotidien des populations africaines.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Communauté End -->

        <!-- Startup studio Start -->
        <div class="container-xxl newsletter py-5 wow fadeInUp bg-light" style="margin: 0;">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-secondary justify-content-center">
                            Startup studio
                        </h1>
                        <p class="mb-4" style="color:black;">Focalisé sur la réalisation , le suivi et la croissance
                            de projets visant à devenir des startups, elle permet aux membres d’acquérir de l’expérience
                            en participant à des projets d’envergure.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Startup studio End -->

        <!-- vision Start -->
        <div class="container-xxl newsletter py-5 wow fadeInUp bg-light" style="margin: 0;">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-secondary justify-content-center">
                            Notre vision
                        </h1>
                        <p class="mb-4" style="color:black;">Alitcha a pour vision de devenir le carrefour des
                            nouvelles technologies en Afrique en améliorant le quotidien des Africains grâce à la
                            recherche et à des solutions technologiques. Elle vise aussi à amener tous de ses membres à
                            atteindre leurs objectifs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- vision End -->

        <!-- valeurs Start -->
        <div class="container-xxl newsletter py-5 wow fadeInUp bg-light" style="margin: 0;">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-secondary justify-content-center">
                            Nos valeurs
                        </h1>
                        <p class="mb-4" style="color:black;">Alitcha c’est avant tout des valeurs qui font de ses
                            membres une équipe ayant les mêmes idéaux :
                        </p>
                    </div>
                    <div class="col-lg-7 text-center mt-5">
                        <p class="section-title text-secondary justify-content-center">
                            <span></span>Partage <span></span>
                        </p>
                        <p class="text-black mb-4">Le partage est au centre de nos activités non seulement au sein de
                            Alitcha mais aussi avec les organisations externes. </p>
                    </div>
                    <div class="col-lg-7 text-center mt-5">
                        <p class="section-title text-secondary justify-content-center">
                            <span></span>Curiosité <span></span>
                        </p>
                        <p class="text-black mb-4">Elle est l’une des principales caractéristiques de nos membres.
                            Avide de connaissances, nous cherchons sans cesse à nous améliorer dans nos différents
                            domaines d’intervention.</p>
                    </div>
                    <div class="col-lg-7 text-center mt-5">
                        <p class="section-title text-secondary justify-content-center">
                            <span></span>Travail acharné <span></span>
                        </p>
                        <p class="text-black mb-4">Nous sommes travailleurs et faisons toujours ce que nous avons à
                            faire dans les temps. </p>
                    </div>
                    <div class="col-lg-7 text-center mt-5">
                        <p class="section-title text-secondary justify-content-center">
                            <span></span>Passion<span></span>
                        </p>
                        <p class="text-black mb-4">La passion pour les sciences et technologies font vivre Alitcha et
                            nous permet de toujours atteindre nos objectifs.</p>
                    </div>
                    <div class="col-lg-7 text-center mt-5">
                        <p class="section-title text-secondary justify-content-center">
                            <span></span>Esprit d’équipe<span></span>
                        </p>
                        <p class="text-black mb-4">Nous sommes organisés et coordonnés pour travailler en équipe en
                            équipe dans une bonne harmonie.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- valeurs End -->

        <!-- objectifs et fonctionnement Start -->
        <div class="container-xxl py-5" class="bodyApropos">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp text-center mb-3" data-wow-delay="0.1s">
                    <h1 class="text-secondary justify-content-center"><span></span>Nos Objectifs<span></span>
                    </h1>Alitcha a pour objectif de :</p>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">Contribuer à l'amélioration des conditions de vie des
                            populations grâce à la recherche et l’innovation.</li>
                        <li class="mx-2" data-filter=".first">Devenir l'une des plus grandes communautés au Bénin,
                            en Afrique et dans le monde.</li>
                        <li class="mx-2" data-filter=".second">Devenir l’une des plus importantes startup studio
                            d'Afrique en faisant de nos startups des références sur le continent et dans le monde.</li>
                        <li class="mx-2" data-filter=".second">Faire de Alitcha Magazine le plus grand magazine Web
                            scientifique en Afrique.</li>
                        <li class="mx-2" data-filter=".second">Permettre à plus de nos membres de réaliser leurs
                            rêves par leurs propres moyens d’où le slogan de Alitcha : Be your own hero.</li>
                    </ul>
                    <img src="/img/about.png" alt="..." class="objeImage">
                </div>
            </div>

            <div class="container-xxl py-5">
                <div class="container py-5 px-lg-5">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="text-center text-secondary mb-5"> Fonctionnement de Alitcha </h1>
                    </div>
                    <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                        <h5>ALITCHA fonctionne avec une organisation bien établie. Plusieurs équipes collaborant entre
                            elles ont été mis en place pour la bonne marche des activités :</h5>
                        <ul class="portfolio-flters" id="fonctionnement">
                            <li class="mx-2 active" data-filter="*"> Equipe en charge de la réalisation, du suivi et
                                de la croissance des projets.</li>
                            <li class="mx-2" data-filter=".first"> Equipe des Labs pour la recherche et
                                l’innovation.</li>
                            <li class="mx-2" data-filter=".second"> Equipe en charge du magazine Web.</li>
                        </ul>
                        <p class="text-black mb-4">Des responsables ont été choisis pour assurer la coordination des
                            différentes activités.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- objectifs et fonctionnement End -->

        <!-- Réalisations Start -->
        <div class="container-xxl newsletter py-5 wow fadeInUp bg-light">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-center text-secondary mb-5">Nos Réalisations</h1>
                        <p class="text-center text-black mb-4">Nous vous présentons nos réalisations</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Réalisations End -->

        <!-- Services Start -->
        <div class="container-xxl newsletter py-5 wow fadeInUp bg-light">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-center text-secondary mb-5">Nos services</h1>
                        <p class="mb-4" style="color: #000000;">Alitcha propose ses services dans ses domaines
                            d’intervention pour
                            améliorer le quotidien des entreprises, entrepreneurs et populations africaines.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        <!-- equipe Start -->
        <div class="container-xxl newsletter py-5 wow fadeInUp bg-light">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <h1 class="text-center text-secondary mb-5">Notre équipe</h1>
                        <p class="text-center text-black mb-4">Rencontrez notre équipe.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- equipe End -->

        <!-- Partenaires Start -->
        <div class="container-xxl newsletter py-5 wow fadeInUp bg-light">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <h1 class="text-center text-secondary mb-5">Nos Partenaires</h1>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-2">
                                    <img src="/assets/img/company-logos/1.png" alt="">
                                </div>
                                <div class="col-2">
                                    <img src="/assets/img/company-logos/2.png" alt="">
                                </div>
                                <div class="col-2">
                                    <img src="/assets/img/company-logos/3.png" alt="">
                                </div>
                                <div class="col-2">
                                    <img src="/assets/img/company-logos/4.png" alt="">
                                </div>
                                <div class="col-2">
                                    <img src="/assets/img/company-logos/5.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            --- <a href={{ url('/apropos') }} style="text-decoration: underline;">En savoir plus sur
                                nous</a> ---
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partenaires End -->

        <!-- Footer Start -->

        <footer class="footer-07" style="margin-top:-7em;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center">
                        <h2 class="footer-heading"><a href="/" class="logo">&nbsp;</a></h2>
                        

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
                <div class="row">
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
