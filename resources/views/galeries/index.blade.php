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
          <h6 class="font-weight-bolder mb-0">Galeries</h6>
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
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
              <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
              <div class="row gx-4">
                <div class="col-auto">
                  <div class="avatar avatar-xl position-relative">
                    <img src="{{asset('assets/img/avatar.png')}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                  </div>
                </div>
                <div class="col-auto my-auto">
                  <div class="h-100">
                    <h5 class="mb-1">
                        <i class="fas fa-user prefix grey-text"></i>
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                     SuperAdmin
                    </p>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                  <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="modal" data-bs-target="#addgalerie" href="javascript:;" role="tab" aria-selected="true">
                          <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                <g transform="translate(1716.000000, 291.000000)">
                                  <g transform="translate(603.000000, 0.000000)">
                                    <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                    </path>
                                    <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                                    <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                                  </g>
                                </g>
                              </g>
                            </g>
                          </svg>
                         <span class="ms-1">Ajouter</span>
                        </a>
                      </li>
                   </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
      <div class="modal fade" id="addgalerie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Ajouter a la Galerie</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/admin/galeries/store" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body mx-3">

                    <div class="md-form mb-2">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form34">Image</label>
                        <input type="file" name="image[]" id="form34" class="form-control validate" accept="image/*" multiple required>
                        <p style="color: red;"> images autorisés: jpeg, png, jpg etc....</p>    
                    </div>
                    
                    <div class="md-form mb-2">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form34">Description</label>
                        <input type="text" name="description" id="form34" class="form-control validate">    
                    </div>
                    
                 </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary"> AJOUTER <i class="fas fa-paper-plane-o ml-1"></i></button>
                        <button type="button" data-bs-dismiss="modal" class="btn btn-primary"> ANNULER <i class="fas fa-paper-plane-o ml-1"></i></button>
                    </div>
            </form>
          </div>
        </div>
      </div>


      <div class="row my-4">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-2">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h4>Galeries</h4> 
                </div>   
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr class="align-center">
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Photos</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">description</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($galeries as $galerie)
                    <tr>
                        <td>
                                <a href="javascript:;" class="avatar avatar-xs" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                  <img src="{{$galerie->image}}" alt="galerie">
                                </a>
                        </td>
                        <td class="align-middle  text-sm">
                            <span class="text-xs font-weight-bold">{{$galerie->description}}  </span>
                        </td>
                      <td>
                          <a href="javascript:;">
                            <i class="fas fa-info text-primary text-sm" data-bs-toggle="modal" data-bs-target="#infogalerie{{$galerie->id}}" data-bs-placement="top" title="Info galerie"></i>
                          </a> &nbsp;
                          <a href="javascript:;">
                            <i class="fas fa-user-edit  text-sm" data-bs-toggle="modal" data-bs-target="#editgalerie{{$galerie->id}}" data-bs-placement="top" title="Edit galerie" style="color: blue;"></i>
                          </a> &nbsp;
                          <a href="javascript:;">
                            <i class="fas fa-trash  text-sm" data-bs-toggle="modal" data-bs-target="#deletegalerie{{$galerie->id}}"  data-bs-placement="top" title="Delete galerie" style="color: red;"></i>
                          </a>
                      </td>
                    </tr>

                    <div class="modal fade" id="infogalerie{{$galerie->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Détails</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 480px;object-fit:cover;">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                </ol>
                                                <div class="carousel-inner">
                                                
                                                    <div class="carousel-item active">
                                                        <img src="{{asset($galerie->image)}}" class="d-block w-100" alt="...">
                                                    </div>
                                                
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                            
                              <div class="modal-footer d-flex justify-content-center">
                                  <button class="btn btn-primary" data-bs-dismiss="modal"> FERMER <i class="fas fa-paper-plane-o ml-1"></i></button>
                              </div>
                        
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="editgalerie{{$galerie->id}}" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Editer la Galerie</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="/admin/galeries/edit/{{$galerie->id}}" method="post">
                              @csrf
                              <div class="modal-body mx-3">
              
                                  <div class="md-form mb-2">
                                      <i class="fas fa-envelope prefix grey-text"></i>
                                      <label data-error="wrong" data-success="right" for="form34">Image</label>
                                      <input type="file" name="image[]" value="{{$galerie->image}}" id="form34" class="form-control validate" accept="image/*" multiple>    
                                  </div>
                                  
                                  <div class="md-form mb-2">
                                      <i class="fas fa-envelope prefix grey-text"></i>
                                      <label data-error="wrong" data-success="right" for="form34">Description</label>
                                      <input type="text" name="description" value="{{$galerie->description}}" id="form34" class="form-control validate">    
                                  </div>
                              </div>
                                  <div class="modal-footer d-flex justify-content-center">
                                      <button type="submit" class="btn btn-secondary"> MODIFIER <i class="fas fa-paper-plane-o ml-1"></i></button>
                                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal"> ANNULER <i class="fas fa-paper-plane-o ml-1"></i></button>
                                  </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="deletegalerie{{$galerie->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <h4 class="modal-title w-100 font-weight-bold">Suppression</h4>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                                  <p> Confirmer la suppression de cette galerie ?</p>
                            
                              <div class="modal-footer d-flex justify-content-center">
                                  <a href="/admin/galeries/delete/{{$galerie->id}}"><button class="btn btn-secondary"> OUI <i class="fas fa-paper-plane-o ml-1"></i></button></a>
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal"> NON <i class="fas fa-paper-plane-o ml-1"></i></button>
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
    </div>
  </main>

{{-- <div class="fixed-plugin">
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
</div> --}}

@endsection