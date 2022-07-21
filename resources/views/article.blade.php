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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> -->


    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- Commentaire Stylesheet -->
    <link href="../css/commentStyle.css" rel="stylesheet">


     <!-- CSS Global Compulsory (Do not remove)-->
     <link rel="stylesheet" href="../css/font-awesome/all.min.css" />


     <!-- Page CSS Implementing Plugins -->
     <link rel="stylesheet" href="../css/select2/select2.css" />

     <link rel="stylesheet" href="../css/swiper/swiper.min.css" />

     <!-- Template Style -->
     <link rel="stylesheet" href="../css/style.webzine.css" />

     <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
         Spinner End -->

        <!-- Navbar Start -->
        <div class="container-xxl position-relative p-0" >
          <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background-color: #F77B1E;">
            <a href="/" class="navbar-brand p-0">
              <img src="../img/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="fa fa-bars" style="color: #FFFFFF;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" >
                <div class="navbar-nav mx-auto py-0">
                    <a href="/" class="nav-item nav-link">Acceuil</a>
                        <a href="/webmagazine" class="nav-item nav-link active">Web Magazine</a>
                      <a href="/apropos" class="nav-item nav-link">A propos</a>
                        <!--<a href="service.html" class="nav-item nav-link">Service</a>-->
                        <!--<a href="project.html" class="nav-item nav-link">Projet</a>-->
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
        </div>
        <!-- Navbar End -->



  <!--=================================
    Article début
   -->

<section class="o-hidden position-relative pt-5">
    <div class="container mt-lg-5 pt-lg-5">
      <div class="row no-gutters justify-content-center bg-white">
        <div class="col-lg-8 blog-single">
          <div class="blog-post">
            <div class="blog-content pb-2 ps-0">
              <div class="blog-post-title">
                <h1 class="mb-0"><a href="#">{{ $article->title }}</a></h1>
                <h4 class="mb-0"><a href="#">{{ $article->subtitle }}</a></h4>
              </div>
              <div class="blog-post-footer blog-post-categorise justify-content-start">
              <div class="blog-post-author">
                  <span>Par <a href="#"><!--<img src="/img/avatar/03.jpg" alt="">-->{{$article->author->firstname}} {{$article->author->lastname}}</a></span>
                </div>
                <div class="blog-post-time">
                  <a href="#"><i class="far fa-clock"></i> {{ $article->created_at }}</a>
                </div>
                <div class="blog-post-time">
                  <a href="#"><i class="far fa-comment"></i>({{ $article->totalCommentaires() }})</a>
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
                </div>
              </div>
            </div>
          </div>
          <img class="img-fluid mb-3" src="../{{ $article->image }}" alt="">

          <h5 class="mb-20"><a href="#">{{ $article->description }}</a></h5>

          <div class="blog-post mb-4">
            <div class="blog-content ps-0 pe-0">

              <p class="mb-3 d-block text-justify" style="text-align : justify">
                {!! $article->content !!}
              </p>

              <div class="blog-post-share-box d-flex flex-wrap justify-content-between align-items-center mt-5">
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
                                <div class="topic__avatar">
                                    <a href="#" class="avatar"><img src="" alt="avatar"></a>
                                </div>
                                <div class="topic__caption">
                                    <div class="topic__name">
                                        <a href="#" style="">{{ $commentaire->author }}</a>
                                    </div>
                                    <div class="topic__date" style="margin-right: 10px;"><i class="fa fa-calendar"></i>
                                        {{ $commentaire->created_at }}
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
                                        <img class="img-fluid" src="{{ asset('images/'.$articleSimilaire->image) }}" alt="">
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
              <li class="ftco-animate"><a href="https://twitter.com/Alitcha5?t=RlRUgTunK2yOglcP7WbmgQ&s=09!" target="_blank" data-toggle="tooltip" data-placement="top" title="Twitter">

				  <span class="fab fa-twitter"></span>
				</a></li>
              <li class="ftco-animate"><a href="https://www.facebook.com/Alitcha-106586631967294" target="_blank" data-toggle="tooltip" data-placement="top" title="Facebook">
				<span class="fab fa-facebook"></span>

				</a></li>
              <li class="ftco-animate"><a href="https://www.instagram.com/ali.tcha/" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram">
				<span class="fab fa-instagram"></span></a></li>
            </ul>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col-md-12 text-center">
						<p class="copyright">
					  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa-solid fa-heart" ></i> by <a href="/" target="_blank">Alitcha Community</a>
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
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/isotope/isotope.pkgd.min.js"></script>
    <script src="../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/popper/popper.min.js"></script>
    <!--<script src="js/bootstrap/bootstrap.min.js"></script> -->

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="../js/jquery.appear.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../js/swiper/swiper.min.js"></script>
    <script src="../js/swiperanimation/swiperanimation.min.js"></script>
    <script src="../js/instagramFeed/jquery.instagramFeed.min.js"></script>


    <!-- Template Scripts (Do not remove)-->
    <script src="../js/custom.js"></script>


</body>

</html>
