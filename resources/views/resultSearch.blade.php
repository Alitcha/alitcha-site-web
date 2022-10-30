<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Alitcha Community</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="{{ asset('img/favicon.ico') }}" rel="icon">

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
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="/css/style.css" rel="stylesheet">


  <!-- CSS Global Compulsory (Do not remove)-->
  <link rel="stylesheet" href="{{ asset('css/font-awesome/all.min.css') }}" />


  <!-- Page CSS Implementing Plugins -->
  <link rel="stylesheet" href="/css/select2/select2.css" />

  <link rel="stylesheet" href="/css/swiper/swiper.min.css" />

  <!-- Template Style -->
  <link rel="stylesheet" href="/css/style.webzine.css" />

  <!-- Template Stylesheet -->
  <link href="/css/style.css" rel="stylesheet">
  <script src="/https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>
  <style>
    .list-label li:first-child {
      padding-top: 0;
      border-top: 0;
    }

    .list-label li {
      position: relative;
      display: block;
      padding: 7px 0;
      border-top: 1px dotted #ebebeb;
    }

    .list-label li a {
      display: block !important;
      color: #333333;
      font-size: 12px;
      font-weight: 400;
      text-transform: capitalize;
      transition: color .17s;
    }

    .list-label li a:before {
      content: "\f054";
      float: left;
      color: #333333;
      font-weight: 400;
      font-family: FontAwesome;
      font-size: 6px;
      margin: 6px 3px 0 0;
      transition: color .17s;
    }

    .list-label .label-count {
      position: relative;
      float: right;
      width: 16px;
      height: 16px;
      font-size: 11px;
      font-weight: 400;
      text-align: center;
      line-height: 16px;
    }

    .index-post .post-info>h2 {
      font-size: 19px;
      font-weight: 500;
      line-height: 1.5em;
      text-decoration: none;
      margin: 0;
    }

    .post-meta {
      overflow: hidden;
      color: #e5491d;
      font-size: 11px;
      font-weight: 500;
      text-transform: uppercase;
      padding: 0 1px;
    }

    .index-post .post-meta {
      margin: 10px 0 0;
    }

    .index-post {
      display: block;
      margin: 0 0 30px;
      box-sizing: border-box;
      padding: 0;
    }

    .blog-post {
      display: block;
      overflow: hidden;
      word-wrap: break-word;
    }

    .index-post .post-image-wrap {
      float: left;
      width: 260px;
      height: 180px;
      overflow: hidden;
      margin: 0;
      margin: 0 20px 0 0;
    }

    .post-image-wrap {
      position: relative;
      display: block;
    }

    .index-post .post-info {
      overflow: hidden;
    }

    .index-post .post-image-wrap .post-image-link {
      width: 100%;
      height: 100%;
      position: relative;
      display: block;
      z-index: 1;
      overflow: hidden;
    }

    .post-image-link,
    .about-author .avatar-container,
    .comments .avatar-image-container {
      background-color: rgba(155, 155, 155, 0.07);
      color: transparent !important;
    }

    .post-tag {
      position: absolute;
      top: 20px;
      left: 20px;
      height: 18px;
      z-index: 5;
      background-color: #e5491d;
      color: #fff;
      font-size: 10px;
      line-height: 18px;
      font-weight: 500;
      text-transform: uppercase;
      padding: 0 7px;
    }

    .index-post .post-image-wrap .post-image-link .post-thumb {
      border-radius: 0;
    }

    .post-thumb.lazy-yard {
      opacity: 1;
    }

    .post-thumb {
      display: block;
      position: relative;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 1;
      opacity: 0;
      transition: opacity .17s ease;
    }

    a img {
      border: 0;
    }

    .post-snippet {
      position: relative;
      display: none;
      overflow: hidden;
      font-size: 13px;
      line-height: 1.6em;
      font-weight: 400;
      margin: 7px 0 0;
    }

    .post-snippet {
      display: block;
    }

    .post-meta .post-author,
    .post-meta .post-date {
      float: left;
      display: inline-block;
      margin: 0 10px 0 0;
    }

    .post-meta .post-author,
    .post-meta .post-date {
      float: left;
      display: inline-block;
      margin: 0 10px 0 0;
    }

    .post-meta .post-author:before {
      content: '\f007';
    }

    .post-meta .post-author:before,
    .post-meta .post-date:before {
      font-family: FontAwesome;
      font-weight: 400;
      margin: 0 3px 0 0;
    }

    .post-meta .post-date:before {
      content: '\f017';
    }

    .post-meta .post-author:before,
    .post-meta .post-date:before {
      font-family: FontAwesome;
      font-weight: 400;
      margin: 0 3px 0 0;
    }

    a.read-more {
      background: #202020;
      display: inline-block;
      overflow: hidden;
      font-size: 13px;
      font-weight: 500;
      text-transform: uppercase;
      margin: 15px 0 0;
      height: 25px;
      font-size: 12px;
      color: #fff;
      line-height: 25px;
      padding: 2px 12px;
      letter-spacing: 0.5px;
      transition: all .17s ease;
    }
  </style>
</head>

<body>
  <div class="container-xxl bg-white p-0">

    <!-- Navbar Start -->
    <div class="container-xxl position-relative p-0">
      <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background:#ffffff;">
        <a href="{{ route('home') }}" class="navbar-brand p-0">
          <img src="/img/logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mx-auto py-0">
            <a href="{{ route('home') }}" class="nav-item nav-link"> <i class="fa fa-home"></i>
              &nbsp; Acceuil</a>
            <a href="{{ route('webmagazine') }}" class="nav-item nav-link active"><i class="fa fa-newspaper"></i>
              &nbsp; Alitcha Magazine</a>
            <a href="{{ route('labs') }}" class="nav-item nav-link"><i class="fa fa-fa"></i>
              &nbsp; Alitcha Labs</a>
            <a href="{{ route('apropos') }}" class="nav-item nav-link "><i class="fa fa-info-circle"></i>
              &nbsp; A propos</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link"><i class="fa fa-phone"></i>
              &nbsp; Contact</a>
          </div>
        </div>
      </nav>
    </div>
  </div>

  <!--=================================
    Articles début
   -->
  <section class="space-ptb bg-light">
    <div class="container-xxl mt-lg-2 px-lg-5">
      <div class="row">
        <form action={{ url('/search/article') }} method="post"
          class="bg-white py-sm-3 px-sm-5 rounded-pill p-0 w-50 m-auto my-2 d-flex justify-content-between">
          @csrf
          <input type="text" name="recherche" id="recherche" placeholder="Rechercher"
            style="border: none;color:black;" class="m-0 w-75" required>
          <button type="submit" style="border: none" class="m-0 p-0">
            <i class="fa fa-search"></i>
          </button>
        </form>
        <div class="col-lg-8">
          @if (count($result))
            <div class="row justify-content-center m-3">
              <div class="col-8 text-center">
                @if (isset($key))
                  {{ count($result) }} résultat(s) trouvé(s) pour <span
                    style="font-weight:bold">{{ $key }}</span>.
                @else
                  {{ count($result) }} résultat(s) trouvé(s).
                @endif

              </div>
            </div>
          @endif
          <!-- Aticles post -->
          <div class="row">
            <div class="col-lg-12 mb-lg-0 populaire">
              @if (!count($result))
                <div class="alert alert-danger w-100 text-center mt-3" role="alert">
                  <i class="far fa-meh-blank"></i>&nbsp;&nbsp;Aucun article publié ne correspond à votre recherche...
                </div>
              @else
                @foreach ($result as $article_A)
                  <div class="d-flex flex-wrap  w-100">
                    <div class="blog-post hentry index-post col-12">
                      <div class="post-image-wrap">
                        <a class="post-image-link" href="/article/<?php echo $article_A->id; ?>">
                          <img alt="" class="post-thumb lazy-yard" src="<?php echo $article_A->image; ?>">
                        </a>
                        <span class="post-tag index-post-tag">
                          {{ $article_A->categorie->name }}
                        </span>
                      </div>
                      <div class="post-info">
                        <h2 class="post-title">
                          <a href="/article/<?php echo $article_A->id; ?>">{{ $article_A->title }}</a>
                        </h2>
                        <div class="post-meta">
                          <span class="post-author"><a href="/search/article?author={{ $article_A->author->id }}"
                              title="{{ $article_A->author->firstname }}">{{ $article_A->author->firstname }}</a></span>
                          <span class="post-date published">{{ $article_A->created_at }}</span>
                        </div>
                        <p class="post-snippet">{{ $article_A->subtitle }}</p>
                        <a class="read-more" href="/article/<?php echo $article_A->id; ?>">Lire plus</a>
                      </div>
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
                  <div class="post mb-3">
                    <div class="d-flex">
                      <a class="me-3" href="/article/<?php echo $article->id; ?>">
                        <img alt="" class="" style="width:80px; height:70px"
                          src="<?php echo $article->image; ?>">
                      </a>
                      <div class="d-flex flex-column">
                        <h2 class="post-title mb-0" style="font-size: 0.9rem">
                          <a href="/article/<?php echo $article->id; ?>">{{ $article->title }}</a>
                        </h2>
                        <div class="post-meta m-0">
                          <span class="text-primary" style="font-size: 0.65rem"><i
                              class="far fa-clock text-primary me-1"></i>{{ $article->created_at }}</span>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach

              </div>
            </div>

            <div class="widget">
              <h6 class="widget-title">Categories</h6>
              <div class="blog-sidebar-post-divider">
              </div>
              <div class="widget-content mt-4 list-label">
                <ul class="list-unstyled list-style mb-0">
                  {{-- <li>
                    <div class="blog-post blog-overlay blog-post-05">
                      <div class="blog-image">
                        <img class="img-fluid" src="/img/blog/num.jpg" alt="">
                      </div>
                      <div class="blog-name">
                        <a href="#">Numérique <span class="ms-auto">({{ $num }})</span></a>
                      </div>
                    </div>
                  </li> --}}
                  <li>
                    <a class="label-name" href="/search/article?categorie=1">
                      Numérique
                      <span class="label-count">{{ $num }}</span>
                    </a>
                  </li>
                  <li>
                    <a class="label-name" href="/search/article?categorie=3">
                      Technologie
                      <span class="label-count">{{ $tech }}</span>
                    </a>
                  </li>
                  {{-- <li>
                    <div class="blog-post blog-overlay blog-post-05">
                      <div class="blog-image">
                        <img class="img-fluid" src="/img/blog/tech.jpg" alt="">
                      </div>
                      <div class="blog-name">
                        <a href="#">Technologie <span class="ms-auto">({{ $tech }})</span></a>
                      </div>
                    </div>
                  </li> --}}
                  <li>
                    <a class="label-name" href="/search/article?categorie=2">
                      Ecologie
                      <span class="label-count">{{ $eco }}</span>
                    </a>
                  </li>
                  {{-- <li>
                    <div class="blog-post blog-overlay blog-post-05">
                      <div class="blog-image">
                        <img class="img-fluid" src="/img/blog/05.jpg" alt="">
                      </div>
                      <div class="blog-name">
                        <a href="#">Ecologie<span class="ms-auto">({{ $eco }})</span></a>
                      </div>
                    </div>
                  </li> --}}
                  {{-- <li>
                    <div class="blog-post blog-overlay blog-post-05">
                      <div class="blog-image">
                        <img class="img-fluid" src="/img/blog/divers.jpg" alt="">
                      </div>
                      <div class="blog-name">
                        <a href="#">Divers <span class="ms-auto">({{ $divers }})</span></a>
                      </div>
                    </div>
                  </li> --}}
                  <li>
                    <a class="label-name" href="/search/article?categorie=4">
                      Divers
                      <span class="label-count">{{ $divers }}</span>
                    </a>
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
                      <a href="https://www.facebook.com/Alitcha-106586631967294" target="_blank"
                        data-toggle="tooltip" data-placement="top" title="Facebook"> <i
                          class="fab fa-facebook-f me-3"></i>Facebook</a>
                      <a class="follow ms-auto" href="https://www.facebook.com/Alitcha-106586631967294">Aimer</a>
                    </li>
                    <li class="twitter">
                      <a href="https://twitter.com/Alitcha5?t=RlRUgTunK2yOglcP7WbmgQ&s=09!" target="_blank"
                        data-toggle="tooltip" data-placement="top" title="Twitter"> <i
                          class="fab fa-twitter me-3"></i>twitter</a>
                      <a class="follow ms-auto"
                        href="https://twitter.com/Alitcha5?t=RlRUgTunK2yOglcP7WbmgQ&s=09!">Suivre </a>
                    </li>
                    <!--<li class="youtube">
                                            <a href="#"> <i class="fab fa-youtube me-3"></i>youtube</a>
                                            <a class="follow ms-auto" href="#">Subscribers </a>
                                        </li>-->
                    <li class="instagram">
                      <a href="https://www.instagram.com/ali.tcha/" target="_blank" data-toggle="tooltip"
                        data-placement="top" title="Instagram"> <i class="fab fa-instagram me-3"></i>instagram</a>
                      <a class="follow ms-auto" href="https://www.instagram.com/ali.tcha/">Suivre </a>
                    </li>
                    <!--<li class="linkedIn">
                                            <a href="#"> <i class="fab fa-linkedin-in me-3"></i>linkedIn</a>
                                            <a class="follow ms-auto" href="#">followers </a>
                                        </li> -->
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
  <div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">

          <h1 class="text-white">
            Alitcha
          </h1>
          <p>
            Promotion du numérique, de la technologie et de l'écologie, la recherche et la réalisation de projets
            innovants.
          </p>
          <div class="d-flex pt-2">
            <a class="btn btn-square btn-outline-primary me-1"
              href="https://twitter.com/Alitcha5?t=RlRUgTunK2yOglcP7WbmgQ&s=09!" target="_blank"
              data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fab fa-twitter fs-4 p-1"></i></a>
            <a class="btn btn-square btn-outline-primary me-1" href="https://www.facebook.com/Alitcha-106586631967294"
              target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook"><i
                class="fab fa-facebook-f fs-4 p-1"></i></a>
            <a class="btn btn-square btn-outline-primary me-1" href="https://www.instagram.com/ali.tcha/"
              target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i
                class="fab fa-instagram fs-4 p-1"></i></a>


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
            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
              placeholder="Votre email" />
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
              </script> All rights reserved | <i class="fa-solid fa-heart"></i> by <a href="/"
                target="_blank">Alitcha Community</a>
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>
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
