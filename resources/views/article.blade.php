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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet"> 
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> -->


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- Commentaire Stylesheet -->
    <link href="/css/commentStyle.css" rel="stylesheet">


     <!-- CSS Global Compulsory (Do not remove)-->
     <link rel="stylesheet" href="/css/font-awesome/all.min.css" />


     <!-- Page CSS Implementing Plugins -->
     <link rel="stylesheet" href="/css/select2/select2.css" />

     <link rel="stylesheet" href="/css/swiper/swiper.min.css" />

     <!-- Template Style -->
     <link rel="stylesheet" href="/css/style.webzine.css" />

     <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
    <style>
     /* img {max-width: 100%;
      
      
      }*/

     
    </style>
        <script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>


</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
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
        <!-- Navbar End -->

        <!-- breadcrumb start -->

        

        <!-- breadcrumb end -->

  <!--=================================
     Article début
   -->

<section class="o-hidden position-relative pt-5">
    <div class="container mt-lg-5 pt-lg-5">
      <div class="row no-gutters justify-content-center bg-white">
        <div class="col-lg-8 blog-single">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
            <li class="breadcrumb-item"><a href="#">Magazine</a></li>
            <li class="breadcrumb-item active" aria-current="page">Article : {{ $article->title }}</li>
          </ol>
        </nav>
          <div class="blog-post mt-5">
            <div class="blog-content pb-2 ps-0">
              <div class="blog-post-title">
                <h5 class="display-6">{{ $article->title }}</h5>
              </div>
              <div>
              <h6 class="mt-1">{{ $article->subtitle }}</h6>
              </div>
              <div class="blog-post-footer blog-post-categorise justify-content-start">
              <div class="blog-post-author">
                  <span>Par <!--<img src="/img/avatar/03.jpg" alt="">-->{{$article->author->firstname}} {{$article->author->lastname}}</span>
                </div>
                <div class="blog-post-time">
                  <i class="far fa-clock"></i> {{ $article->created_at->diffForHumans() }}
                </div>
                <!--
                <div class="blog-post-time">
                  <i class="far fa-comment"></i>({{ $article->totalCommentaires() }})
                </div>
                
                <div class="blog-post-time">
                      <a href="#"><i
                        class="far fa-heart"></i>({{ $article->nb_like }})</a>
                </div>
                
                <div class="blog-post-share">
                  <div class="share-box">
                    <a href="#"> <i class="fas fa-share-alt"></i><span class="ps-2">Share</span></a>
                    <ul class="list-unstyled share-box-social" style="min-width : 120px !important;">
                      <li> <a href="https://www.facebook.com/sharer.php?u=http://127.0.0.1:8000/article/{{ $article->id }}" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                      <li> <a href="https://twitter.com/intent/tweet?url=http://127.0.0.1:8000/article/{{ $article->id }}" target="_blank"><i class="fab fa-twitter"></i></a> </li>
                      <li> <a href="https://www.linkedin.com/shareArticle?url=http://127.0.0.1:8000/article/{{ $article->id }}&title=" target="_blank"><i class="fab fa-linkedin"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                      {{-- <li> <a href="#"><i class="fab fa-pinterest"></i></a> </li> --}}
                    </ul>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
          <img class="img-fluid mb-3" src="{{ $article->image }}" alt="">

          <h5 class="mb-20">{{ $article->description }}</h5>

          <div class="blog-post mb-4">
            <div class="blog-content ps-0 pe-0">

              <p class="mb-3 d-block text-justify article-content" style="text-align : justify">
                {!! $article->content !!}
              </p>

              <div class="blog-post-share-box d-flex flex-wrap justify-content-between align-items-center mt-5">
                   <p>
                     Vous avez aimé cet article? Partagez-le.
                   </p> 
                  <div class="blog-post-share">
                  <div class="share-box">
                    <a href="#"> <i class="fas fa-share-alt fa-2x"></i><span class="ps-2" style="font-size: 20px;">Partagez</span></a>
                    <ul class="list-unstyled share-box-social" style="min-width : 120px !important;">
                      <li> <a href="https://www.facebook.com/sharer.php?u=http://127.0.0.1:8000/article/{{ $article->id }}" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                      <li> <a href="https://twitter.com/intent/tweet?url=http://127.0.0.1:8000/article/{{ $article->id }}" target="_blank"><i class="fab fa-twitter"></i></a> </li>
                      <li> <a href="https://www.linkedin.com/shareArticle?url=http://127.0.0.1:8000/article/{{ $article->id }}&title=" target="_blank"><i class="fab fa-linkedin"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                      {{-- <li> <a href="#"><i class="fab fa-pinterest"></i></a> </li> --}}
                    </ul>
                  </div>
                </div>
                <!--<div>
                     <i class="fas fa-like"></i>
                     <span class="ps-2">{{ $article->nb_like }}
                        @if ($article->nb_like > 1)
                         likes
                         @else
                         like
                        @endif
                     </span>

                </div>
                <div class="badges">

                  <a href="#" class="btn btn-outline-primary">Like</a>
                </div>-->
              </div>
              <nav class="navigation post-navigation py-2 py-lg-3">
            <div class="nav-links d-sm-flex justify-content-between">
             <!-- <div class="nav-previous float-left">
                <a class="d-flex align-items-center" href="#">
                  <div class="align-self-center nav-left ml-2">
                    <span class="pagi-text d-inline-block btn btn-link px-0 p-1">
                      <i class="fas fa-chevron-left"></i>
                      Précédent
                    </span>


                  </div>

                </a>
              </div>
              <div class="nav-next float-right">
                <a class="d-flex align-items-center" href="#">

                  <div class="align-self-center text-right nav-right">
                    <span class="pagi-text d-inline-block btn btn-link px-0 p-1">
                      Suivant
                      <i class="fas fa-chevron-right"></i>
                    </span>


                  </div>
                </a>
              </div>
-->
            </div>
          </nav>
              <div class="bg-white mt-5">
                <h6 class="widget-title text-uppercase fw-bolder">Laisser un commentaire</h6>
                <div class="blog-sidebar-post-divider mb-4">
                </div>
                <form class="row" action="{{ route('addComment', $article->id) }}" method="post">
                  @csrf
                  <div class="col-lg-4 mb-3">
                    <input type="text" class="form-control" placeholder="Votre Nom" name="nom" name="comment" style="border-radius : 5px !important;">
                  </div>
                  {{-- <div class="col-lg-4 mb-3">
                    <input type="text" class="form-control" placeholder="Email" name="email">
                  </div> --}}

                  <div class="col-lg-12 mb-3">
                    <textarea class="form-control" rows="5" placeholder="Votre Commentaire" name="comment" style="border-radius : 5px !important;"></textarea>
                  </div>
                  <div class="col-lg-12 mb-3">
                    <input type="submit" class="btn btn-primary" value="Publier" />
                  </div>
                </form>

                <h6 class="widget-title text-uppercase fw-bolder">Commentaires ...</h6>
                <div class="blog-sidebar-post-divider mb-4">
                </div>

                <div class="topics">
                    @foreach ($article->commentaires() as $commentaire)

                        <div class="topic topic--comment" style="margin-bottom : 20px; background-color: #f0f0f0;">
                            <div class="topic__head" style="align-items: center;">
                                <!--<div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="" alt="avatar"></a>
                                </div>-->
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#" >{{ $commentaire->author }}</a>
                                    </div>
                                    <div class="topic__date" style="margin-right: 10px;"><i class="fa fa-calendar"></i>
                                        {{ $commentaire->created_at->diffForHumans() }}
                                        <i class="fa fa-clock" style="margin-left: 14px;"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="topic__content">
                                <div class="topic__text">
                                    <p style="word-break : break-word; text-align : justify;">{{ $commentaire->comment }}</p>
                                </div>

                                {{-- <div>
                                    <div class="topic__footer" style="margin-top : 20px;">
                                        <div class="topic__footer-likes d-flex">
                                            <div>
                                                <a href="http://fast-shore-82505.herokuapp.com/like-comment/1" >
                                                    <i class="fa fa-thumbs-up"></i>
                                                                                        1
                                                    Likes
                                                </a>
                                            </div>
                                            <div>
                                                <a href="http://fast-shore-82505.herokuapp.com/dislike-comment/1" >
                                                    <i class="fa fa-thumbs-down"></i>
                                                                                        0
                                                    dislikes
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>


                    @endforeach


                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!--=================================
    Article fin  -->

@if ($article->articlesSimilaires()->count() > 0)
<!--================================= blog  -->
    <section class="space-pb bg-light">
        <div class="container">
            <div class="col-md-12">
                <div class="bg-white p-4">
                    <h6 class="widget-title text-uppercase fw-bolder">Vous pourriez aussi aimer</h6>
                    <div class="blog-sidebar-post-divider mb-4">
                    </div>
                    <div class="owl-carousel blog-arrow" data-nav-arrow="true" data-nav-dots="false" data-items="3" data-md-items="2" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="15">
                        @foreach ($article->articlesSimilaires() as $articleSimilaire)
                        @if($articleSimilaire->id != $article->id)
                            <div class="item">
                                <div class="blog-post text-center p-0">
                                    <div class="blog-post-image">
                                        <img class="img-fluid four" src="{{ $articleSimilaire->image }}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <a class="badge" href="{{ route('article', $articleSimilaire->id) }}">Lire</a>
                                        <div class="blog-post-title">
                                            <h6 class="mb-0"><a href="{{ route('article', $articleSimilaire->id) }}">{{ $articleSimilaire->title }} </a></h6>
                                        </div>
                                        <div class="blog-post-footer blog-post-categorise">
                                            <div class="blog-post-time">
                                                <a href="#"><i class="far fa-clock"></i> {{ $articleSimilaire->created_at }} </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--=================================
 blog -->
@endif


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
    <!--<script src="js/bootstrap/bootstrap.min.js"></script> -->

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="/js/jquery.appear.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/js/swiper/swiper.min.js"></script>
    <script src="/js/swiperanimation/swiperanimation.min.js"></script>
    <script src="/js/instagramFeed/jquery.instagramFeed.min.js"></script>


    <!-- Template Scripts (Do not remove)-->
    <script src="/js/custom.js"></script>
    <script>
      $("p img").addClass("img-fluid");
    </script>


</body>

</html>
