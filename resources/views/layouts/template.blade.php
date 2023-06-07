<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
  <title>
    AFUMA Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('assets/css/soft-ui-dashboard.css?v=1.0.3')}}" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">

  @if (Session::has('flash_message_error'))
<script type="text/javascript" src="{{asset('assets/js/plugins/sweetalert2.all.min.js')}}"></script>
<script type="text/javascript">;
Swal.fire({
  position: 'top-end',
  icon: 'error',
  title: "{{ session('flash_message_error') }}",
  showConfirmButton: false,
  timer: 1800
});
</script>
@endif
@if (Session::has('flash_message_success'))
<script type="text/javascript" src="{{asset('assets/js/plugins/sweetalert2.all.min.js')}}"></script>
<script type="text/javascript">;
Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: "{{ session('flash_message_success') }}",
  showConfirmButton: false,
  timer: 1800
});
</script>
@endif
   <!-- SIDEBAR -->
   @include('layouts.sidebar')
   <!-- SIDEBAR -->
 
    @yield('content')

 
 
  <footer class="footer py-5">
    <div class="container">
    <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> KOINART.
          </p>
        </div>
      </div>
    </div>
  </footer>
 
  <!--   Core JS Files   -->
  <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/plugins/sweetalert2.all.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  
  <script src="{{asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
  <script>
    // Récupération des liens de la barre de navigation
    var links = document.querySelectorAll('nav a');

    // Parcours des liens pour ajouter un événement clic
    links.forEach(function(link) {
    link.addEventListener('click', function() {
        // Suppression de la classe "active" de tous les liens
        links.forEach(function(link) {
        link.classList.remove('active');
        });
        // Ajout de la classe "active" au lien cliqué
        this.classList.add('active');
         });
    });
</script>
</body>

</html>