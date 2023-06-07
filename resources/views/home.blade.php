@extends('layouts.template')
@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">AFUMA</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
          </div>
          <ul class="navbar-nav  justify-content-end">
           
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <!-- <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New message</span> from Laur
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">New album</span> by Travis Scott
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          Payment successfully completed
                        </h6>
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li> -->
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row mb-xl-4">
        {{-- <div class="col-xl-4 col-sm-6 mb-xl-4 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Visiteurs</p>
                    <h5 class="font-weight-bolder mb-0">
                      0
                      <span class="text-success text-sm font-weight-bolder">+0%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="col-xl-4 col-sm-6 mb-xl-4 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Evènements</p>
                    <h5 class="font-weight-bolder mb-0">
                      {{ $events }}
                      <span class="text-danger text-sm font-weight-bolder">-0%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-4 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Galeries</p>
                    <h5 class="font-weight-bolder mb-0">
                     {{ $galeries }}
                      <span class="text-success text-sm font-weight-bolder">+0%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Blog/Articles</p>
                    <h5 class="font-weight-bolder mb-0">
                     {{ $blogs }}
                      <span class="text-success text-sm font-weight-bolder">+0%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="col-xl-4 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Utilisateurs</p>
                    <h5 class="font-weight-bolder mb-0">
                     {{ $users }}
                      <span class="text-success text-sm font-weight-bolder">+0%</span>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    
     
      <div class="row my-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Evènements</h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1">30 achevés</span> Ce mois
                  </p>
                </div>
               
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TITRE</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ANNEE</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LIEU</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PAYS</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DATE</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ACTIONS</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($eventss as $event)
                    <tr>
                        <td class="align-middle  text-sm">
                            <span class="text-xs font-weight-bold">{{$event->titre}} </span>
                          </td>
                          <td class="align-middle  text-sm">
                            <span class="text-xs font-weight-bold">{{$event->annee}}  </span>
                          </td>
                          <td class="align-middle  text-sm">
                            <span class="text-xs font-weight-bold"> {{$event->lieu}} </span>
                          </td>
                          <td class="align-middle  text-sm">
                            <span class="text-xs font-weight-bold"> {{$event->pays}}  </span>
                          </td>
                          <td class="align-middle  text-sm">
                            <span class="text-xs font-weight-bold"> {{$event->date}}  </span>
                          </td>  
                      <td>
                          <a href="javascript:;">
                            <i class="fas fa-info text-primary text-sm" data-bs-toggle="modal" data-bs-target="#infoevent{{$event->id}}" data-bs-placement="top" title="Info Profile"></i>
                          </a> &nbsp; 
                          <a href="javascript:;">
                            <i class="fas fa-user-edit  text-sm" data-bs-toggle="modal" data-bs-target="#editevent{{$event->id}}" data-bs-placement="top" title="Edit Profile" style="color: blue;"></i>
                          </a> &nbsp; 
                          <a href="javascript:;">
                            <i class="fas fa-trash  text-sm" data-bs-toggle="modal" data-bs-target="#deleteevent{{$event->id}}"  data-bs-placement="top" title="Delete Profile" style="color: red;"></i>
                          </a>
                      </td>
                    </tr>

                    <div class="modal fade" id="infoevent{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Détails</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                                 <h3 class="modal-title w-100 font-weight-bold text-center">{{ $event->titre }}   {{ $event->annee }} </h3>
                                  <p style="text-align: center"> VILLE :  {{ $event->lieu }} </p> <br>
                                  <p style="text-align: center"> PAYS :  {{ $event->pays }} </p> <br>
                                  <p style="text-align: center"> DATE :  {{ $event->date }} </p> <br>
                            
                              <div class="modal-footer d-flex justify-content-center">
                                  <button class="btn btn-primary" data-bs-dismiss="modal"> FERMER <i class="fas fa-paper-plane-o ml-1"></i></button>
                              </div>
                        
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="editevent{{$event->id}}" tabindex="-1"  role="dialog" aria-labelledby="myModal" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Editer l'Evènement</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="/admin/evenements/edit/{{$event->id}}" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="modal-body mx-3">
              
                                  <div class="md-form mb-2">
                                      <i class="fas fa-envelope prefix grey-text"></i>
                                      <label data-error="wrong" data-success="right" for="form34">Titre</label>
                                      <input type="text" name="titre" value="{{$event->titre}}" id="form34" class="form-control validate">    
                                  </div>
                                  
                                  <div class="md-form mb-2">
                                      <i class="fas fa-envelope prefix grey-text"></i>
                                      <label data-error="wrong" data-success="right" for="form34">Année</label>
                                      <input type="number" name="annee" value="{{$event->annee}}" id="form34" class="form-control validate">    
                                  </div>
                                  
                                  <div class="md-form mb-2">
                                      <i class="fas fa-envelope prefix grey-text"></i>
                                      <label data-error="wrong" data-success="right" for="form34">Lieu</label>
                                      <input type="text" name="lieu" value="{{$event->lieu}}" id="form34" class="form-control validate">    
                                  </div>
                                  
                                  <div class="md-form mb-2">
                                      <i class="fas fa-envelope prefix grey-text"></i>
                                      <label data-error="wrong" data-success="right" for="form34">Pays</label>
                                      <input type="text" name="pays" value="{{$event->pays}}" id="form34" class="form-control validate">    
                                  </div>
                                  
                                  <div class="md-form mb-2">
                                      <i class="fas fa-envelope prefix grey-text"></i>
                                      <label data-error="wrong" data-success="right" for="form34">Date</label>
                                      <input type="date" name="date" value="{{$event->date}}" id="form34" class="form-control validate">    
                                  </div>
                              </div>
                                  <div class="modal-footer d-flex justify-content-center">
                                      <button type="submit" class="btn btn-secondary"> MODIFIER </button>
                                      <button type="button" data-bs-dismiss="modal" class="btn btn-primary" > ANNULER </button>
                                  </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="deleteevent{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Suppression</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                                  <p> Confirmer la suppression de l'evènement {{ $event->lieu }} ?</p>
                            
                              <div class="modal-footer d-flex justify-content-center">
                                  <a href="/admin/evenements/delete/{{$event->id}}"><button class="btn btn-secondary"> OUI <i class="fas fa-paper-plane-o ml-1"></i></button></a>
                                  <button class="btn btn-primary" data-bs-dismiss="modal"> NON <i class="fas fa-paper-plane-o ml-1"></i></button>
                              </div>
                        
                        </div>
                      </div>
                    </div>
                  @endforeach
                 </tbody>
                 </table>
              </div>
            </div>
          </div>
        </div>
       
      </div>
       <br> <br> <br> <br> <br>
      <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                Fait avec <i class="fa fa-heart"></i> par
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">KODINART</a>
                pour une meilleure experience.
              </div>
            </div>
            <div class="col-lg-6">
              <!-- <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">KODINART</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">A Propos</a>
                </li>
              </ul> -->
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="fa fa-cog py-2"> </i>
    </a>
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Configurateur Dashboard</h5>
          <p>Changer Option Dashboard.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Couleur Sidebar</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Type de Sidenav</h6>
          <p class="text-sm">Choisir entre deux types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">Vous pouvez changer le type de Sidenav pour la Vue Desktop</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
      
      </div>
    </div>
  </div>

@endsection