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
          <h6 class="font-weight-bolder mb-0">Editer le Role</h6>
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
             </div>
            </div>
          </div>
     


      <div class="row my-4">
        <div class="col-lg-12 col-md-12 mb-md-0 mb-2">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h4>Editer le role</h4> 
                </div>   
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <form method="post" action="/admin/roles/edit/{{ $roles->id }}" enctype="multipart/form-data">
                  @csrf
                      <div class="modal-body mx-3">   
                        <div class="md-form mb-2">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="form34">Role</label>
                            <input type="text" name="name" value="{{ $roles->name }}" id="form34" class="form-control validate" required>    
                        </div>   
                      </div>
                          <div class="modal-footer d-flex justify-content-center">
                              <button type="submit" class="btn btn-secondary"> EDITER <i class="fas fa-paper-plane-o ml-1"></i></button>
                            
                          </div>
              </form>


              <div class="row my-4">
                <div class="col-lg-12 col-md-12 mb-md-0 mb-2">
                  <div class="card">
                    <div class="card-header pb-0">
                      <div class="row">
                        <div class="col-lg-6 col-7">
                          <h4>Assigner une permission au role</h4> 
                        </div>   
                      </div>
                    </div>
                              @if ($roles->permissions)
                                        @foreach ($roles->permissions as $role_permission)
                                  <form method="POST" action="/admin/roles/{{ $roles->id }}/permissions/{{ $role_permission->id }}" enctype="multipart/form-data" style="display: flex;justiy-content: space-between;flex-direction: column;" >
                                    @csrf
                                    <div class="foot d-flex justify-content-center">
                                      <div class="modal-footer d-flex justify-content-center">
                                        @method('DELETE')
                                        <button type="submit" data-bs-toggle="modal" data-bs-target="#deletepermission{{$role_permission->id}}">{{ $role_permission->name }}</button>
                                      </div>
                                    </div>
                                  </form>	
                                  
                                  @endforeach
                              @endif
                    <form method="POST" action="/admin/roles/{{ $roles->id }}/permissions" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body px-0 pb-2">   
                                  <div class="col-lg-12 p-t-20">
                                    <div class="md-form mb-2">
                                        <label data-error="wrong" data-success="right" for="form34">Permission</label>
                                        <select class="form-control validate" name="permission" required>
                                          @foreach ($permissions as $permission)
                                          <option value="{{ $permission->name }}"> {{ $permission->name }} </option>
                                          @endforeach	
                                        </select>
                                    </div>
                                    </div>
                            </div>
                        <div class="col-lg-12 p-t-20 text-center">
                          <button type="submit" class="btn btn-secondary">Assigner<i class="fas fa-paper-plane-o ml-1"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            
            </div>   
          </div>
        </div>            
      </div>
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