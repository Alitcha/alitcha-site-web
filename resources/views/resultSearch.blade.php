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
    <link rel="stylesheet" href="/css/ionicons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">


    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="/css/font-awesome/all.min.css" />


    <!-- Page CSS Implementing Plugins -->
    <link rel="stylesheet" href="/css/select2/select2.css" />

    <link rel="stylesheet" href="/css/swiper/swiper.min.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="/css/style.webzine.css" />

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
    <script src="/https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <!-- Navbar Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0"
                style="background-color: #F77B1E;">
                <a href="/" class="navbar-brand p-0">
                    <img src="/img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars" style="color: #FFFFFF;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="/" class="nav-item nav-link">Acceuil</a>
                        <a href="/webmagazine" class="nav-item nav-link active">Alitcha Magazine</a>
                        <a href="/labs" class="nav-item nav-link">Alitcha Labs</a>
                        <a href="/apropos" class="nav-item nav-link">A propos</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <form action={{ url('/search/article') }} method="post"
                        class="bg-white py-sm-3 px-sm-5 rounded-pill p-0">
                        @csrf
                        <input type="text" name="recherche" id="recherche" placeholder="Rechercher"
                            style="border: none" class="m-0" required>
                        <button type="submit" style="border: none" class="m-0 p-0">
                            <i class="fa fa-search"></i></button>
                    </form>
                </div>
            </nav>
        </div>
    </div>

    <!--=================================
    Articles début
   -->
    <section class="space-ptb bg-light">
        <div class="container mt-lg-5 px-lg-5">
            <div class="row">
                <div class="col-lg-8">
                    @if (count($result))
                        <div class="row justify-content-center m-5">
                            <div class="col-8 text-center">
                                {{ count($result) }} résultat(s) trouvé(s) pour <span
                                    style="font-weight:bold">{{ $key }}</span>.
                            </div>
                        </div>
                    @endif
                    <!-- Aticles post -->
                    <div class="row">
                        <div class="col-lg-12 mb-lg-0 populaire">
                            @if (!count($result))
                                <div class="col-12 text-danger text-center" style="font-size: 2.4em;">
                                    Aucun article publié ne correspond à votre recherche.
                                </div>
                            @else
                                @foreach ($result as $article_A)
                                    <div class="blog-post text-center mb-4  ">
                                        <div class="blog-post-image">
                                            <img class="img-fluid second" src="<?php echo $article_A->image; ?>" alt="">
                                        </div>
                                        <div class="blog-content">
                                            <div class="blog-post-title mt-1">
                                                <h5 class="mb-0"><a href="#">{{ $article_A->title }}</a></h5>
                                            </div>
                                            <div class="blog-post-footer blog-post-categorise">
                                                <div class="blog-post-author">
                                                    <span>Par<a href="#"><img src="/img/avatar/03.jpg"
                                                                alt="">John</a></span>
                                                </div>
                                                <div class="blog-post-time">
                                                    <a href="#"><i
                                                            class="far fa-clock"></i>{{ $article_A->created_at }}</a>
                                                </div>
                                                <div class="blog-post-time">
                                                    <a href="#"><i
                                                            class="far fa-heart"></i>({{ $article_A->nb_like }})</a>
                                                </div>
                                                <div class="blog-post-share">
                                                    <div class="share-box">
                                                        <a href="#"> <i class="fas fa-share-alt"></i><span
                                                                class="ps-2">Share</span></a>
                                                        <ul class="list-unstyled share-box-social">
                                                            <li> <a href="#"><i
                                                                        class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li> <a href="#"><i class="fab fa-twitter"></i></a>
                                                            </li>
                                                            <li> <a href="#"><i class="fab fa-linkedin"></i></a>
                                                            </li>
                                                            <li> <a href="#"><i
                                                                        class="fab fa-instagram"></i></a>
                                                            </li>
                                                            <li> <a href="#"><i
                                                                        class="fab fa-pinterest"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-post-divider">
                                            </div>
                                            <p class="mt-2 mb-0 p-4">{{ $article_A->subtitle }}</p>
                                            <a href="/article/<?php echo $article_A->id; ?>"
                                                class="btn btn-link text-dark p-1">Continuer la lecture</a>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- Articles post fin -->
                <!-- -->
                <div class="col-lg-4 mt-5 mt-lg-0">
                    <div class="blog-sidebar bg-white sidebar">

                        <div class="widget">
                            <h6 class="widget-title">Publications récentes</h6>
                            <div class="blog-sidebar-post-divider">
                            </div>
                            <div class="widget-content mt-4">
                                @foreach ($articles as $article)
                                    <div class="d-flex mb-3 align-items-top">
                                        <div class="avatar avatar-xll h-auto">
                                            <img class="img-fluid post-recent-img" src="<?php echo $article->image; ?>"
                                                alt="">
                                        </div>
                                        <div class="ms-3">
                                            <div class="tag">
                                                <a class="btn btn-link p-0" href="#">INSPIRATION,</a>
                                                <a class="btn btn-link p-0" href="#">Fashion</a>
                                            </div>
                                            <h6 class="text-dark"><a href="blog-single-01.html">
                                                    {{ $article->title }}</a></h6>
                                            <span class="small"><i
                                                    class="far fa-clock text-primary me-1"></i>{{ $article->created_at }}</span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="widget">
                            <h6 class="widget-title">Categories</h6>
                            <div class="blog-sidebar-post-divider">
                            </div>
                            <div class="widget-content mt-4">
                                <ul class="list-unstyled list-style mb-0">
                                    <li>
                                        <div class="blog-post blog-overlay blog-post-05">
                                            <div class="blog-image">
                                                <img class="img-fluid" src="/img/blog/num.jpg" alt="">
                                            </div>
                                            <div class="blog-name">
                                                <a href="#">Numérique <span class="ms-auto">(10)</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-post blog-overlay blog-post-05">
                                            <div class="blog-image">
                                                <img class="img-fluid" src="/img/blog/tech.jpg" alt="">
                                            </div>
                                            <div class="blog-name">
                                                <a href="#">Technologie <span class="ms-auto">(8)</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-post blog-overlay blog-post-05">
                                            <div class="blog-image">
                                                <img class="img-fluid" src="/img/blog/05.jpg" alt="">
                                            </div>
                                            <div class="blog-name">
                                                <a href="#">Ecologie<span class="ms-auto">(5)</span></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="blog-post blog-overlay blog-post-05">
                                            <div class="blog-image">
                                                <img class="img-fluid" src="/img/blog/divers.jpg" alt="">
                                            </div>
                                            <div class="blog-name">
                                                <a href="#">Divers <span class="ms-auto">(10)</span></a>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="widget">

                        </div>
                        <div class="widget">
                            <h6 class="widget-title"> Abonnez-vous et suivez</h6>
                            <div class="blog-sidebar-post-divider">
                            </div>
                            <div class="widget-content mt-4">
                                <div class="social">
                                    <ul class="list-unstyled">
                                        <li class="facebook">
                                            <a href="#"> <i class="fab fa-facebook-f me-3"></i>Facebook</a>
                                            <a class="follow ms-auto" href="#">Like </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"> <i class="fab fa-twitter me-3"></i>twitter</a>
                                            <a class="follow ms-auto" href="#">followers </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="#"> <i class="fab fa-youtube me-3"></i>youtube</a>
                                            <a class="follow ms-auto" href="#">Subscribers </a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"> <i class="fab fa-instagram me-3"></i>instagram</a>
                                            <a class="follow ms-auto" href="#">followers </a>
                                        </li>
                                        <li class="linkedIn">
                                            <a href="#"> <i class="fab fa-linkedin-in me-3"></i>linkedIn</a>
                                            <a class="follow ms-auto" href="#">followers </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                        <li class="ftco-animate"><a href="https://twitter.com/Alitcha5?t=RlRUgTunK2yOglcP7WbmgQ&s=09!"
                                target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter">

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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/popper/popper.min.js"></script>
    <!--<script src="/js/bootstrap/bootstrap.min.js"></script> -->

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="/js/jquery.appear.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/swiper/swiper.min.js"></script>
    <script src="/js/swiperanimation/swiperanimation.min.js"></script>
    <script src="/js/instagramFeed/jquery.instagramFeed.min.js"></script>


    <!-- Template Scripts (Do not remove)-->
    <script src="/js/custom.js"></script>


</body>

</html>