<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('assets/img/curved-images/logo.png')}}">
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

<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Bienvenue</h3>
                  <p class="mb-0">Entrer votre Identifiant et votre Mot de Passe </p>
                </div>
                <div class="card-body">
                  <form role="form" action="/login" method="post">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" aria-describedby="email-addon">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Souviens toi de moi</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Se Connecter</button>
                    </div>
                  </form>
                </div>
               
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url({{asset('assets/img/curved-images/logo.png')}})"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

   <!--   Core JS Files   -->
   <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
   <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
   <script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
   <script src="{{asset('assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
   <script src="{{asset('assets/js/plugins/chartjs.min.js')}}"></script>
   <script src="{{asset('assets/js/plugins/sweetalert2.all.js')}}"></script>

   <script>
     var ctx = document.getElementById("chart-bars").getContext("2d");
 
     new Chart(ctx, {
       type: "bar",
       data: {
         labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
         datasets: [{
           label: "Sales",
           tension: 0.4,
           borderWidth: 0,
           borderRadius: 4,
           borderSkipped: false,
           backgroundColor: "#fff",
           data: [450, 200, 100, 220, 500, 100, 400, 230, 500],
           maxBarThickness: 6
         }, ],
       },
       options: {
         responsive: true,
         maintainAspectRatio: false,
         plugins: {
           legend: {
             display: false,
           }
         },
         interaction: {
           intersect: false,
           mode: 'index',
         },
         scales: {
           y: {
             grid: {
               drawBorder: false,
               display: false,
               drawOnChartArea: false,
               drawTicks: false,
             },
             ticks: {
               suggestedMin: 0,
               suggestedMax: 500,
               beginAtZero: true,
               padding: 15,
               font: {
                 size: 14,
                 family: "Open Sans",
                 style: 'normal',
                 lineHeight: 2
               },
               color: "#fff"
             },
           },
           x: {
             grid: {
               drawBorder: false,
               display: false,
               drawOnChartArea: false,
               drawTicks: false
             },
             ticks: {
               display: false
             },
           },
         },
       },
     });
 
 
     var ctx2 = document.getElementById("chart-line").getContext("2d");
 
     var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);
 
     gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
     gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
     gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors
 
     var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
 
     gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
     gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
     gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors
 
     new Chart(ctx2, {
       type: "line",
       data: {
         labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
         datasets: [{
             label: "Mobile apps",
             tension: 0.4,
             borderWidth: 0,
             pointRadius: 0,
             borderColor: "#cb0c9f",
             borderWidth: 3,
             backgroundColor: gradientStroke1,
             fill: true,
             data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
             maxBarThickness: 6
 
           },
           {
             label: "Websites",
             tension: 0.4,
             borderWidth: 0,
             pointRadius: 0,
             borderColor: "#3A416F",
             borderWidth: 3,
             backgroundColor: gradientStroke2,
             fill: true,
             data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
             maxBarThickness: 6
           },
         ],
       },
       options: {
         responsive: true,
         maintainAspectRatio: false,
         plugins: {
           legend: {
             display: false,
           }
         },
         interaction: {
           intersect: false,
           mode: 'index',
         },
         scales: {
           y: {
             grid: {
               drawBorder: false,
               display: true,
               drawOnChartArea: true,
               drawTicks: false,
               borderDash: [5, 5]
             },
             ticks: {
               display: true,
               padding: 10,
               color: '#b2b9bf',
               font: {
                 size: 11,
                 family: "Open Sans",
                 style: 'normal',
                 lineHeight: 2
               },
             }
           },
           x: {
             grid: {
               drawBorder: false,
               display: false,
               drawOnChartArea: false,
               drawTicks: false,
               borderDash: [5, 5]
             },
             ticks: {
               display: true,
               color: '#b2b9bf',
               padding: 20,
               font: {
                 size: 11,
                 family: "Open Sans",
                 style: 'normal',
                 lineHeight: 2
               },
             }
           },
         },
       },
     });
   </script>
   <script>
     var win = navigator.platform.indexOf('Win') > -1;
     if (win && document.querySelector('#sidenav-scrollbar')) {
       var options = {
         damping: '0.5'
       }
       Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
     }
   </script>
   <!-- Github buttons -->
   <script async defer src="https://buttons.github.io/buttons.js"></script>
   
   <script src="{{asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3')}}"></script>
 </body>
 
 </html>

