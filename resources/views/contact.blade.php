<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact - Alitcha Community</title>
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/ionicons.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/contact.css" rel="stylesheet">
    <link href="css/animcontact.css" rel="stylesheet">
    <style>

  .bg-primary {
    background: #f77b1e !important; 
    
}
.btn-outline-primary {
    background-color: transparent;
    color: #f77b1e;
    border-color: #f77b1e; }
    .btn-outline-primary:hover {
      background-color: #29077a;
      color: #ffffff;
      border-color: #eb701e; }
    .btn-outline-primary:not(:disabled):not(.disabled).active {
      background-color: #000000;
      color: #ffffff;
      border-color: #000000; }
    .btn-outline-primary:not(:disabled):not(.disabled):active {
      background-color: #000000;
      color: #ffffff;
      border-color: #000000; }
    </style>
    
    <link href="css/style.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-xxl bg-white p-0">

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" >
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
                            &nbsp; Accueil</a>
                        <a href="{{ route('webmagazine') }}" class="nav-item nav-link"><i class="fa fa-newspaper"></i>
                            &nbsp; Alitcha Magazine</a>
                        <a href="{{ route('labs') }}" class="nav-item nav-link"><i class="fa fa-fa"></i>
                            &nbsp; Alitcha Labs</a>
                        <a href="{{ route('apropos') }}" class="nav-item nav-link "><i class="fa fa-info-circle"></i>
                            &nbsp; A propos</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link active"><i class="fa fa-phone"></i>
                            &nbsp; Contact</a>
                    </div>
                </div>
            </nav>
            <!-- Navbar & Hero End -->


            <!-- Contact Start -->
            <!-- Wrapper container -->
            <section class="ftco-section">
                <div class="container">

                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="wrapper">
                                <div class="row no-gutters">
                                    <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                                        <div class="contact-wrap w-100 p-md-5 p-4">
                                            <h3 class="mb-4">Contactez-nous !</h3>
                                            <div id="form-message-warning" class="mb-4"></div>
                                            <div id="form-message-success" class="mb-4">
                                                Votre message a été envoyé. Merci !
                                            </div>
                                            <form method="POST" action="{{ route('contactMessage') }}" id="contactForm"
                                                name="contactForm" class="contactForm">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="label" for="name">Nom & Prénom(s)</label>
                                                            <input type="text" class="form-control" name="name"
                                                                id="name" placeholder="Votre nom et prénom(s)"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="label" for="email">Email</label>
                                                            <input type="email" class="form-control" name="email"
                                                                id="email" placeholder="Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="label" for="subject">Objet</label>
                                                            <input type="text" class="form-control" name="subject"
                                                                id="subject" placeholder="Objet" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="label" for="#">Message</label>
                                                            <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"
                                                                required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input type="submit" value="Envoyer mon message"
                                                                class="btn btn-primary"
                                                                style="background-color: #f77b1e #91c7e9">
                                                            <div class="submitting"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-5 d-flex align-items-stretch bg-sky">
                                        <div class="info-wrap w-100 p-md-5 p-4 bg-gradient"  style="background: linear-gradient(blue, #F77B1E) !important">
                                            <h5 class="mb-4">Nous sommes ouvert pour toute sugession, requête ou
                                                discussion.</h5>
                                            
                                            <div class="dbox w-100 d-flex align-items-start">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-facebook"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span><a
                                                                href="https://www.facebook.com/Alitcha-106586631967294/!">Alitcha</a></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-phone"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Phone:</span> <a href="tel://22957251474">+ 229
                                                            57251474</a></p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-paper-plane"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Email:</span> <a
                                                            href="mailto:alitcha.community@gmail.com">info@alitchateam.com</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="dbox w-100 d-flex align-items-center">
                                                <div class="icon d-flex align-items-center justify-content-center">
                                                    <span class="fa fa-twitter"></span>
                                                </div>
                                                <div class="text pl-3">
                                                    <p><span>Alitcha : </span> <a
                                                            href="https://twitter.com/Alitcha5?t=RlRUgTunK2yOglcP7WbmgQ&s=09!">@Alitcha5</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact End -->

        <!-- Footer Start -->
        <div class="container-fluid  footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: black;">
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
        <script src="/js/jquery.min.js"></script>
        <script src="/js/popper.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/jquery.validate.min.js"></script>


        <link rel="stylesheet" href="js/toastify/toastify.css">
        <script src="/js/toastify.js"></script>

        <script src="/js/toastify/toastify.js"></script>
        <!-- Template Javascript -->
        <script src="/js/main.js"></script>

        @if (session('success'))
            <script>
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    close: true,
                    backgroundColor: "#4fbe87",
                }).showToast();
            </script>
        @endif

        @if (session('error'))
            <script>
                Toastify({
                    text: "{{ session('error') }}",
                    duration: 3000,
                    close: true,
                    backgroundColor: "#FF2020",
                }).showToast();
            </script>
        @endif


</body>

</html>
