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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">
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
    <link href="css/style.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/1f9f6c8634.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container-xxl bg-white p-0">

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" style="background-color: #F77B1E;">
                <a href="/" class="navbar-brand p-0">
                  <img src="img/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="fa fa-bars" style="color: #FFFFFF;"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                      <a href="/" class="nav-item nav-link">Acceuil</a>
                      <a href="/webmagazine" class="nav-item nav-link">Web Magazine</a>
                      <a href="/apropos" class="nav-item nav-link">A propos</a>
                      <!--<a href="service.html" class="nav-item nav-link">Service</a>-->
                      <!--<a href="project.html" class="nav-item nav-link">Projet</a>-->
                      <a href="/contact" class="nav-item nav-link active">Contact</a>
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
									<form method="POST" action="{{ route('contactMessage') }}" id="contactForm" name="contactForm" class="contactForm">
                                        @csrf
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Nom & Prénom(s)</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Votre nom et prénom(s)" required>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="email">Email</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Objet</label>
													<input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" required></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Envoyer mon message" class="btn btn-primary" style="background-color: #f77b1e">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch" style="background-color: grey;">
								<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									<h3>Prenez contact avec nous.</h3>
									<p class="mb-4">Nous sommes ouvert pour toute sugession, requête ou discussion.</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-facebook"></span>
				        		</div>
				        		<div class="text pl-3">
								<p><span><a href="https://www.facebook.com/Alitcha-106586631967294/!">Alitcha</a></span> </p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Phone:</span> <a href="tel://22957251474">+ 229 57251474</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <a href="mailto:alitcha.community@gmail.com">alitcha.community@gmail.com</a></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-twitter"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Alitcha : </span> <a href="https://twitter.com/Alitcha5?t=RlRUgTunK2yOglcP7WbmgQ&s=09!">@Alitcha5</a></p>
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

        <footer class="footer-07">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 text-center">
						<h2 class="footer-heading"><a href="/" class="logo">&nbsp;</a></h2>
						<p class="menu">
							<a href="index.html">Accueil</a>
							<a href="webmag.html">Web Magazine</a>
							<a href="apropos.html">A propos</a>

							<a href="contact.html">Contact</a>

						</p>

		<ul class="ftco-footer-social p-0">
              <li class="ftco-animate"><a href="https://twitter.com/Alitcha5?t=RlRUgTunK2yOglcP7WbmgQ&s=09!" data-toggle="tooltip" data-placement="top" title="Twitter">
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
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>


    <link rel="stylesheet" href="js/toastify/toastify.css">
    <script src="js/toastify.js"></script>

    <script src="js/toastify/toastify.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>

@if (session('success'))
    <script>
        Toastify({
            text: "{{ session('success') }}",
            duration: 3000,
            close:true,
            backgroundColor: "#4fbe87",
        }).showToast();
    </script>
@endif

@if (session('error'))
    <script>
        Toastify({
            text: "{{ session('error') }}",
            duration: 3000,
            close:true,
            backgroundColor: "#FF2020",
        }).showToast();
    </script>
@endif


</body>

</html>

