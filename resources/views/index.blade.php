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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="/css/select2/style.css">


    <!-- Customized Bootstrap Stylesheet {{ asset('css/bootstrap.min.css') }} -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Template Style -->
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
                <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active"> <i class="fa fa-home"></i>
                            &nbsp; Acceuil</a>
                        <a href="{{ route('webmagazine') }}" class="nav-item nav-link"><i class="fa fa-newspaper"></i>
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
            <!-- <div class="shape">
            <svg id="sw-js-blob-svg" viewBox="20 0 200 100" xmlns="http://www.w3.org/2000/svg"> 
                <defs><linearGradient id="sw-gradient" x1="0" x2="1" y1="1" y2="0"> 
                      <stop id="stop1" stop-color="rgba(239.114, 241.826, 250.518, 1)" offset="0%"></stop> 
                      <stop id="stop2" stop-color="rgba(213.398, 232.595, 239.134, 1)" offset="100%"></stop>
                      </linearGradient>                    
                </defs>
                <path fill="url(#sw-gradient)" d="M10.2,-1.7C10.2,9,5.1,18,-4.4,18C-13.9,18,-27.8,9,-27.8,-1.7C-27.8,-12.4,-13.9,-24.8,-4.4,-24.8C5.1,-24.8,10.2,-12.4,10.2,-1.7Z"
                 width="100%" height="100%" transform="translate(50 50)" stroke-width="0" style="transition: all 0.3s ease 0s;"
                 stroke="url(#sw-gradient)"></path>
            </svg>
            </div> -->

            <!--
            <div class="container-xxl hero-header ">
                <div class="container px-lg-5 ">
                    <div class="row g-5 align-items-end"style="color:black;" >
                        <div class="col-lg-6 text-center text-lg-start" style="margin-top: 0 !important;">
                            <h1 class="mb-4 animated slideInDow" ></h1>
                            <p class="pb-3 animated slideInDown" style="color:black;">Notre vocation est de travailler sur des projets
                                innovants et futuristes tout en vous en apprenant le plus possible sur la science et ses
                                dérivées.<br> Adhérez Alitcha pour rejoindre nos Labs ou notre équipe du magazine.
                                Suivez
                                notre web magazine pour élargir votre culture en sciences, technologies et divers.</p>
                            <a href={{ url('/webmagazine') }}
                                class="btn py-sm-3 px-sm-5 rounded-pill animated slideInRight text-white"
                                style="background-color: #F77B1E;"><i class="fa fa-newspaper"></i> &nbsp; Web
                                Magazine</a>
                            <a data-bs-toggle="modal" data-bs-target="#adhererAlitcha" href=""
                                class="btn py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft text-white"
                                style="background-color: #F77B1E;"><i class="fa fa-user-plus"></i> &nbsp; Adhérer
                                Alitcha</a>


                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="/img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <!-- Navbar & Hero End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/ac9.png" alt="Image">
                        <div class="carousel-caption">
                            <div class="container ">
                                <div class="row justify-content-start ">
                                    <div class="col-lg-7">
                                        <h1 class="display-5 mb-2 animated slideInDown">Une communauté de jeunes entreprenants & créatifs</h1>
                                        <h5 class="pb-3 animated mb-4 slideInDown" style="color:black;">Notre vocation est de travailler sur des projets
                                            innovants et futuristes tout en vous en apprenant le plus possible sur la science et ses
                                            dérivées.</h5>
                                        <a href={{ url('/webmagazine') }} class="btn btn-primary rounded-pill py-sm-3 px-sm-5">
                                            Magazine</a>
                                        <a data-bs-toggle="modal" data-bs-target="#adhererAlitcha" href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Adhérer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/ac2.png" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-7">
                                        <h1 class="display-5 display-md-2 mb-5 animated slideInDown">Ecologie</h1>
                                        <h5 class=" mb-5">
                                            Favoriser une transition écologique durable au Bénin, en Afrique et dans le monde.
                                        </h5>
                                        <a href={{ url('/webmagazine') }} class="btn btn-primary rounded-pill py-sm-3 px-sm-5">
                                            Magazine</a>
                                        <a data-bs-toggle="modal" data-bs-target="#adhererAlitcha" href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Adhérer
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/ac6.png" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-7">
                                        <h1 class="display-5 mb-5 animated slideInDown">Technologie</h1>
                                        <h5 class=" mb-5">
                                            Allons à la rencontre des technologies futures pour améliorer des conditions de vie des populations.
                                        </h5>
                                        <a href={{ url('/webmagazine') }} class="btn btn-primary rounded-pill py-sm-3 px-sm-5">
                                            Magazine</a>
                                        <a data-bs-toggle="modal" data-bs-target="#adhererAlitcha" href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Adhérer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/ac8.png" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-lg-7">
                                        <h1 class="display-5 mb-5 animated slideInDown">Numérique</h1>
                                        <h5 class=" mb-5">
                                            Le numérique envahit notre quotidien : œuvrons pour l’émergence d’une société numérique innovante, inclusive et humaine.
                                        </h5>

                                        <a href={{ url('/webmagazine') }} class="btn btn-primary rounded-pill py-sm-3 px-sm-5">
                                            Magazine</a>
                                        <a data-bs-toggle="modal" data-bs-target="#adhererAlitcha" href="" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Adhérer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Feature Start -->
        <div class="container-xxl mt-5 pb-5" style="margin-top:-7em;">
            <div class="container pb-5 px-lg-5 text-center">
                <div class="row g-4">



                    <h1 class="display-5 mb-3 justify-content-center" style="color:black;"> Nos Labs</h1>
                    <h6 class="mb-4 text-center" style="color:black;">Recherche, innovation, apprentissage et partage sont le quotidien des labmates de Alitcha.<br>
                        Ils réfléchissent et travaillent sur les technologies innovantes et futuristes.
                    </h6>


                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center pt-4">

                            <i class="fa fa-3x fa-user-astronaut mb-4" style="color:#F77B1E;"></i>
                            <h5 class="mb-3">TechLab</h5>
                            <div class="bg-gradient rounded-bottom">
                                <p class="mx-2 p-1 p-md-4 bg-white" style="color:black;">Composé d'amoureux de l'ingénierie innovante, l'équipe technologique de
                                    Alitcha s'occupe de la mise en œuvre des projets relevant de son ressort. Avec elle,
                                    allez à la rencontre des technologies futures.</p>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center pt-4">

                            <i class="fa fa-3x fa-laptop-code mb-4" style="color:#F77B1E;"></i>
                            <h5 class="mb-3">Numlab</h5>
                            <div class="bg-gradient rounded-bottom">
                                <p class="mx-2 p-1 p-md-4 bg-white" style="color:black;">Formé par des amateurs de la technologie numérique, cette équipe met en
                                    œuvre le génie du web et du digital (génie logiciel, intelligence artificielle, sécurité
                                    informatique et plusieurs autres dérivées du numérique)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center pt-4">
                            <i class="fa fa-3x fa-leaf mb-4" style="color:#F77B1E;"></i>
                            <h5 class="mb-3">Ecolab</h5>
                            <div class="bg-gradient rounded-bottom">
                                <p class=" mx-2 p-1 p-md-4 bg-white" style="color:black;">Conscient des exigences environnementales liées à un développement
                                    durable, la communauté s'est dotée de cette cellule afin de favoriser une transition
                                    écologique durable au Bénin, en Afrique et dans le monde.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->








        <!-- Projects Start -->
        <div class="container-xxl py-5 mb-5" style="margin-top:-3em;">
            <div class="container py-5 px-lg-5 text-center">
                <div class="row wow fadeInUp justify-content-center mx-md-5 px-md-5" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-3 justify-content-center" style="color:black;"> Notre Web
                        Magazine</h1>
                    <p class="mb-4 text-center " style="color:black;">Media principalement scientifique et technologique,
                        Alitcha magazine
                        fait la promotion de ses domaines d’intervention par des articles et un magazine trimestriel.

                    </p>


                </div>
                <div class="row g-4 portfolio-container">
                    @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp mb-3" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{$article->image}}" alt="">
                                <div class="portfolio-overlay">
                                    <a href="{{ route('article', $article->id) }}" class="btn btn-square btn-outline-light mx-1" href="img/portfolio-1.jpg"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-download"></i></a>
                                </div>
                            </div>
                            <div class="bg-gradient">
                                <div class="bg-light p-1 p-md-4 mx-2">
                                    <p class="text-primary fw-medium mb-2">{{$article->title}}</p>
                                    <h5 class=" mb-0">{{$article->subtitle}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach




                </div>
                <div class="text-center mt-2">
                    --- <a href={{ url('/webmagazine') }} style="text-decoration: underline;">Voir plus</a> ---
                </div>
            </div>
        </div>
        <!-- Projects End -->

        <!-- Réalisations Start 
        <div class="container-xxl  py-5 wow fadeInUp bg-sky">
            
            <p class="section-title text-secondary justify-content-center">
                <span></span>Nos Réalisations<span></span>
            </p>
            <div class="container">
                <div class="owl-carousel slide-one-item">

                    <div class="d-md-flex testimony-29101 align-items-stretch">
                    <div class="image" style="background-image: url('images/1658411804.png');"></div>
                    <div class="text">
                        <p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, at! Atque totam obcaecati veniam eius vero, similique quibusdam! Sunt sequi, nemo. Quam consequuntur ipsum suscipit repellat molestiae laboriosam, incidunt!</p>

                        <div class="author">&mdash; Craig Stephen</div>
                        </p>
                    </div>
                    </div> 

                    <div class="d-md-flex testimony-29101 align-items-stretch">
                    <div class="image" style="background-image: url('images/1658411765.png');"></div>
                    <div class="text">
                        <p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, at! Atque totam obcaecati veniam eius vero, similique quibusdam! Sunt sequi, nemo. Quam consequuntur ipsum suscipit repellat molestiae laboriosam, incidunt!</p>

                        <div class="author">&mdash; Craig Stephen</div>
                        </p>
                    </div>
                    </div> 
                    
                </div>
            </div>
        </div>
         Réalisations End -->

        <!-- Services Start -->
        <div class="container-fluid  bg-icon my-1 py-3">
            <div class="container">
                <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h1 class="display-5 mb-3" style="color:black;"> Nos services</h1>
                    <p class="mb-4" style="color:black;">Alitcha propose ses services dans ses domaines
                        d’intervention pour
                        améliorer le quotidien des entreprises, entrepreneurs et populations africaines.
                    </p>
                </div>
            </div>
        </div>


        <!-- Services End -->

        <!-- equipe Start 
        <div class="container-xxl newsletter py-5 wow fadeInUp bg-sky">
                <p class="section-title text-secondary justify-content-center" >
                    <span></span>Notre équipe<span></span>
                </p>
                <section class="ftco-section" style="margin-top:-5em; margin-bottom:-2em;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(img/team-1.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-logo-linkedin"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Work 01</a></h3>
                                            <span>Web Design</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(img/team-2.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-logo-linkedin"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Work 02</a></h3>
                                            <span>Web Design</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(img/team-3.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-logo-linkedin"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Work 03</a></h3>
                                            <span>Web Design</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(img/image1.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-logo-linkedin"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Work 04</a></h3>
                                            <span>Web Design</span>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
		</section>
        </div>
         equipe End -->

         <!-- Adhérer Start -->
    <div class="container-fluid bg-gradient bg-icon my-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Adhérer Alitcha</h1>
                    <p class="text-white ">Adhérez Alitcha pour rejoindre nos Labs ou notre équipe du magazine.
                                Suivez  notre web magazine pour élargir votre culture en sciences, technologies et divers.</p>
                </div>
                <div class="col-md-5 mb-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                <a data-bs-toggle="modal" data-bs-target="#adhererAlitcha" href="" class="btn btn-white rounded-pill py-sm-3 px-sm-5 ms-3">Adhérer
                                        </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Adhérer  End -->

        <!-- Team Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block border rounded-pill text-primary px-4 mb-3" style="color:black;">Notre équipe</div>
                    <h2 class="mb-5">Rencontrez les membres de notre équipe</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <h5>Full Name</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-1.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item">
                            <h5>Full Name</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-2.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <h5>Full Name</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-3.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item">
                            <h5>Full Name</h5>
                            <p class="mb-4">Designation</p>
                            <img class="img-fluid rounded-circle w-100 mb-4" src="img/team-1.jpg" alt="">
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square text-primary bg-white m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->





        <!-- Partenaires Start 
        <div class="container-xxl newsletter py-5 wow fadeInUp" style="margin-top:-3em;">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-12 text-center">
                        <p class="section-title text-secondary justify-content-center">
                            <span></span>Nos Partenaires<span></span>
                        </p>
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
         Partenaires End -->

        <!-- Newsletter Start -->
        <div class="container-xxl newsletter py-1 wow fadeInUp bg-gradient">
            <div class="container py-5 px-md-5">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-12 text-center">
                        <p class="section-title text-secondary justify-content-center text-white">
                            <span></span>Newsletter<span></span>
                        </p>
                        <h1 class="text-center text-black mb-4 text-white">Restez à l'affus des informations</h1>
                        <p class="text-black mb-4 text-white">Rejoignez notre newsletter pour recevoir des informations en temps
                            réel sur Alitcha et notre Webmagazine</p>
                        <p class="text-success error">Envoyé avec succès !</p>
                        <p class="text-danger error"></p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" id="newsletterForm" type="text" placeholder="Entrer votre mail" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-0" id="newsletterSubmit"><i class="fa fa-paper-plane fs-4" style="color:#F77B1E;"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->
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


    <!-- Modal Adhérer Alitcha -->
    <form class="AdhesionUser">
        <div class="modal fade" id="adhererAlitcha" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header " style="background-color: #F77B1E;">
                        <h5 class="modal-title text-white" id="adhererAlitchaLabel">Adhérer Alitcha</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="AnnulerAdhesion"></button>
                    </div>
                    <div class="modal-body">
                        <p class="text-info">Remplissez ce formulaire pour soumettre votre demande d’adhésion.</p>
                        <p class="text-danger" id="champs_requis" style="display:none;">Veuillez remplir tout les
                            champs</p>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Nom et Prénoms</label>
                            <input type="text" class="form-control" id="nameForm" placeholder="Entrez votre nom et prénoms" style="color: #000000;">
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" id="emailForm" placeholder="name@example.com" style="color: #000000;">
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="form-label fw-bold">Numero de
                                téléphone</label>
                            <input type="tel" class="form-control" id="numForm" placeholder="229********" style="color: #000000;">
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Quelles sont vos
                                compétences, dans le domaine du numérique surtout ?</label>
                            <textarea class="form-control" id="competenceForm" rows="3" style="color: #000000;"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="exampleFormControlTextarea1" class="form-label fw-bold">Vos motivations pour
                                l'adhésion</label>
                            <textarea class="form-control" id="motivationForm" rows="3" style="color: #000000;"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <p class="text-success" id="add_success" style="display:none;">Votre soumission sera
                                étudié puis vous serez contactés par mail pour l’entretien en ligne.<br> Welcome chez
                                Alitcha !!!</p>
                            <p class="text-danger" id="add_error" style="display:none;">Soit un champ est mal entré,
                                soit l'email ou le numéro de téléphone entré est déjà utilisé.</p>
                            <p class="text-primary" id="add_error1" style="display:none;">Vérifiez que tout les
                                champs sont bien remplit et rééssayez...</p>
                        </div>
                        <button type="button" class="btn btn-dark" data-bs-dismiss="modal" id="AnnulerAdhesion">
                            <i class="fa fa-times"></i>
                            &nbsp; Annuler
                        </button>
                        <button style="background-color: #F77B1E;" type="submit" class="btn btn-secondary text-white">
                            <i class="fa fa-user-plus"></i>
                            &nbsp; Adhérer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>


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
    <script src="/js/toastify/jquery.min.js"></script>
    <script src="/js/popper.js"></script>
    <script src="/js/toastify/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/main.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>