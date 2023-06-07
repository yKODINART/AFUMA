<!DOCTYPE html>
<html lang="EN">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="author" content="Afuma">
    <meta name="keywords" content="Afuma, échassiers,acrobates du ciel, association togolaise, les échassiers du togo, Afuma du Togo, Festival Afuma, compagnie Afuma, culture togolaise">
    <meta name="description" content="Afuma est une association togolaise des échassiers. Ils sont les acrobates du ciel. AROUKA Kossivi Blaise, AROUKA Kodjo Luc, le berceau de la tradition des échasses, 
    appartiennent à des familles d'échassiers, ils ont été formés par les maîtres de la famille Ayena depuis leur plus tendre enfance">
    <meta property="og:title" content="Afuma"/>
<meta property="og:type" content="afuma.org"/>
    <meta property="og:url" content="https://www.facebook.com/afumatogo/?locale=fr_FR"/>
    <meta property="og:image" content="{{asset('assets2/img/logo.jpeg')}}"/>

    <title> @yield('title') | Afuma</title>


        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{asset('assets2/img/logo.jpeg')}}">
        <link rel="stylesheet" href="{{asset('assets2/css/icomoon/style.css')}}">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 
    
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/79ff35c9c1.js" crossorigin="anonymous"></script>
        <!-- Libraries Stylesheet -->
        <link href="{{asset('assets2/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets2/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('assets2/css/bootstrap.min.css')}}" rel="stylesheet">
    
        <!-- Template Stylesheet -->
        <link href="{{asset('assets2/css/style.css')}}" rel="stylesheet">

          <!-- Vendor CSS Files -->
        <link href="{{asset('assets2/css/animate.css/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets2/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets2/css/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('assets2/css/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets2/css/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets2/css/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

        <!-- Custom -->
        <link href="{{asset('assets2/css/boxicons.css')}}" rel="stylesheet">
        <link href="{{asset('assets2/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets2/css/custom.css')}}" rel="stylesheet">
        <link href="{{asset('assets2/css/gallery.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets2/css/cookies.css')}}">
        <link href="{{asset('assets2/css/blog.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets2/css/schedule.css')}}">
        <link href="{{asset('assets2/css/video.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('assets2/css/sweetalert2.min.css')}}">
  </head>
  <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->
    
    
        <!-- Navbar Start -->
        <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
                <div class="col-lg-6 px-5 text-start">
                    <small><i class="fa fa-map-marker-alt me-2"></i>16 Route de la Croisette,71990 Saint Prix en Morvan</small>
                    <small class="ms-4"><i class="fa fa-envelope me-2"></i><a href="mailto:cyclochevo@gmail.com" class="text-white-50">cyclochevo@gmail.com</a></small>
                </div>
                <div class="col-lg-6 px-5 text-end">
                    <small>Nous suivre:</small>
                    <a class="text-white-50 ms-3" href="https://www.facebook.com/afumatogo/?locale=fr_FR" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-3" href="https://www.youtube.com/@afumaorara7489" target="_blank"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
    
            <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <a href="/" class="navbar-brand ms-4 ms-lg-0">
                    <h1 class="fw-bold logo text-white m-0">
                        <!-- Afuma -->
                        <img class="logo" src="{{asset('assets2/img/logo.png')}}" alt="logo" style="width: 100px;"><span class="text-white"></span>
                    </h1>
                        <span class="text-white"></span></h1>
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                        <a href="/" class="nav-item nav-link active">Accueil</a>
                        <a href="/afuma/about" class="nav-item nav-link">A propos</a>
                        <a href="/afuma/event" class="nav-item nav-link">Agenda</a>
                        <a href="/afuma/spectacle" class="nav-item nav-link">Spectacle</a>
                        <a href="/afuma/galerie" class="nav-item nav-link">Gallerie</a>
                        <a href="/afuma/blog" class="nav-item nav-link">Blog</a>
                        <a href="/afuma/presse" class="nav-item nav-link">Presse</a>
                        <a href="/afuma/contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

        @if (Session::has('flash_message_error'))
				<script type="text/javascript" src="{{asset('assets2/js/sweetalert2.all.min.js')}}"></script>
				<script type="text/javascript">;
				Swal.fire({
				position: 'center',
				icon: 'error',
				title: "{{ session('flash_message_error') }}",
				showConfirmButton: false,
				timer: 5000
				});
				</script>
				@endif
				@if (Session::has('flash_message_success'))
				<script type="text/javascript" src="{{asset('assets2/js/sweetalert2.all.min.js')}}"></script>
				<script type="text/javascript">;
				Swal.fire({
				position: 'center',
				icon: 'success',
				title: "{{ session('flash_message_success') }}",
				showConfirmButton: false,
				timer: 5000
				});
				</script>
			@endif

        @yield('content')

          <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">
                        <a href="/">
                            <img class="logo" src="{{asset('assets2/img/logo.png')}}" alt="" style="width: 100px;">
                        </a>
                    </h4>
                    <p class="mt-4 text-white-50" style="font-size: 13px; text-align: justify;">Afuma est le nom d'une fougère qui pousse sur les arbres et qui reste accrochée au bois avec lequel  on fait les échasses, sans jamais tomber à terre. Elle symbolise l'échassier, l'homme qui ne tombe pas, celui qui reste en l'air.</p>
                    
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-2" href="https://www.facebook.com/afumatogo/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href="https://www.youtube.com/@afumaorara7489" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Liens Utiles</h4>
                    <a class="btn btn-link" href="/afuma/about">A propos</a>
                    <a class="btn btn-link" href="/afuma/contact">Contact</a>
                    <a class="btn btn-link" href="/afuma/event">Agenda</a>
                    <a class="btn btn-link" href="/afuma/spectacle">Spectacle</a>
                    <a class="btn btn-link" href="/afuma/galerie">Gallerie</a>
                    <a class="btn btn-link" href="/afuma/blog">Blog</a>
                    <a class="btn btn-link" href="/afuma/presse">Presse</a>
                    
                </div>

                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Stage</h4>
                    <a class="btn btn-link" href="/afuma/galerie">Institut français Togo</a>
                    <a class="btn btn-link" href="/afuma/galerie">Bruxelles</a>
                    <a class="btn btn-link" href="/afuma/galerie">FIPRE Cote d'ivoire</a>
                    <a class="btn btn-link" href="/afuma/galerie">Paris  Grigni</a>
                    <a class="btn btn-link" href="/afuma/galerie">Rue Danse Niger Niamey</a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Adresse</h5>
                    <p class="text-white-50 "><i class="fa fa-map-marker-alt me-3"></i>16 Route de la Croisette, 71990 Saint Prix en Morvan</p>
                    <a href="tel:+33620193565" class="text-white-50"><p><i class="fa fa-phone-alt me-3"></i>+33620193565</p></a>
                   <a href="tel:+228 91 81 80 17" class="text-white-50"><p><i class="fa fa-phone-alt me-3"></i>(+228) 91 81 80 17</p></a>
                    <a href="mailto:cyclochevo@gmail.com" class="text-white-50"><p><i class="fa fa-envelope me-3"></i>cyclochevo@gmail.com</p></a>
                    <p class="text-white-50 mb-2"><i class="fa fa-clock me-3"></i>Tous les jours: 09h - 18h</p>
                </div>
            </div>
        </div>
            <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    © <a class="" href="/">Afuma</a>, Tous droits réservés.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Réalisation: <span>Kodinart</span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets2/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('assets2/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets2/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('assets2/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets2/lib/parallax/parallax.min.js')}}"></script>

    <script src="{{asset('assets2/css/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets2/css/glightbox/js/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets2/css/glightbox/js/swiper/swiper-bundle.min.js')}}"></script>

    <script src="{{asset('assets2/js/cookies.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>

    <!-- Swiptalert -->
    <script src="{{asset('assets2/js/sweetalert2.all.min.js')}}"></script>
    <script src="{{asset('assets2/js/sweetalert2.all.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets2/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets2/js/main.js')}}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtenez tous les liens de la barre de navigation
            var navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    
            // Parcourir tous les liens
            navLinks.forEach(function(link) {
                // Ajoutez un écouteur d'événement pour le clic sur chaque lien
                link.addEventListener('click', function(event) {
                    // Supprimez la classe "active" de tous les liens
                    navLinks.forEach(function(navLink) {
                        navLink.classList.remove('active');
                    });
                    
                    // Ajoutez la classe "active" au lien cliqué
                    link.classList.add('active');
                      
                    // Mettez à jour l'URL dans la barre d'adresse sans rechargement de la page
                    history.pushState(null, null, link.href);
                    
                    // Appliquez le style CSS à la classe "active"
                    applyActiveLinkStyle();
                });
            });
    
            // Appliquez le style CSS au lien actif lors du chargement initial de la page
            applyActiveLinkStyle();
    
            // Fonction pour appliquer le style CSS à la classe "active"
            function applyActiveLinkStyle() {
                // Obtenez l'URL actuelle
                var currentUrl = window.location.pathname;
    
                // Parcourir tous les liens
                navLinks.forEach(function(link) {
                    // Vérifiez si l'URL du lien correspond à l'URL actuelle
                    if (link.getAttribute('href') === currentUrl) {
                        // Ajoutez la classe "active" au lien correspondant à l'URL actuelle
                        link.classList.add('active');
                    } else {
                        // Supprimez la classe "active" des autres liens
                        link.classList.remove('active');
                    }
                });
            }
        });
    </script>
    
  </body>
</html>
