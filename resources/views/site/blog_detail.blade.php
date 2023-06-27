@extends('layouts.template2')
@section('title')
Blogs Details
@endsection
@section('content')

 <!-- Blog detail -->

 <div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Blog Detail Start -->
            <div class="pb-3">
                <div class="position-relative">
                    <img class="img-fluid " width="100" src="{{asset($blogs->image)}}" alt="" style="width:100%;height:570px;object-fit:cover;">
                    <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-1 "
                        style="width: 100px; height: 80px; bottom: -30px; right: 30px;">
                        {{-- <h4 class="font-weight-bold mb-n1">01</h4> --}}
                        <small class="text-white text-uppercase"> {{ formatDate2($blogs->date)}}</small>
                        {{-- <small class="text-white text-uppercase">2023</small> --}}
                    </div>
                </div>
                <div class="bg-secondary mb-3" style="padding: 30px;">
                    <div class="d-flex mb-3 align-items-center">
                        <div class="d-flex align-items-center">
                            <span class="author me-2"><i class="fa fa-user text-primary"></i> Afuma</span>
                        </div>
                    </div>
                    <h4 class="font-weight-bold ">{{$blogs->titre}}</h4>
                    <h6 class="mb-3">{{$blogs->sous_titre}}</h6>
                    <p style="text-align: justify;">
                        {{$blogs->description}}
                    </p>

                    {{-- <h4 class="mb-3">PARTONS ENSEMBLE</h4>
                    <img class="img-fluid w-50 float-left mr-4 mb-3" src="img/ecole2.jpg"
                        style="width: 500px; height: 450px; object-fit: cover;">
                    <p style="text-align: justify;">
                        Ayant participé ces dernières années à des parades dans le sud et le nord de la France et au
                        Maroc, ayant également participé à des grandes festivals de musique tels que Les
                        Eurockéennes de Belfort, Les Vieilles Charrues en Bretagne, Couleurs Café à Bruxelles, Paléo
                        festival en Suisse, ils décident, en revenant au pays, de créer une parade remettant au goût
                        du jour les traditions togolaises. Ils choisissent le lieu qu'ils connaissent le mieux pour
                        commencer, c'est-à-dire la ville des Sept collines, le berceau des échassiers : ATAKPAME.
                        Là-bas, ils rencontrent différents groupes d'échasses, de danses et de percussions
                        traditionnelles et invitent d'autres compagnies internationales.

                        <p class="text-dark">
                            <strong>
                                C'est ainsi que naît le projet: EWA KALÔ (« partons ensemble... »)
                            </strong>
                        </p>
                    </p> --}}
                </div>
            </div>
            <!-- Blog Detail End -->
            <!-- Comment Form Start -->
            <div class="bg-secondary mb-3" style="padding: 30px;">
                <h3 class="mb-4">Laisser un commentaire</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control border-0" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control border-0" id="email">
                    </div>
                    <div class="form-group">
                        <label for="website">Sujet</label>
                        <input type="url" class="form-control border-0" id="website">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" cols="30" rows="5" class="form-control border-0"></textarea>
                    </div>
                    <div class="form-group mb-0 mt-3">
                        <input type="submit" value="Envoyé"
                            class="btn btn-primary font-weight-semi-bold py-2 px-3 w-100">
                    </div>
                </form>
            </div>
            <!-- Comment Form End -->
        </div>

        <!-- Sidebar Start -->
        <div class="col-lg-4 mt-5 mt-lg-0">

            <!-- Recent Post Start -->
            <div class="mb-5">
                <h3 class="mb-4">Articles récents</h3>
                @foreach ($blog_recents as $recent)
                    <div class="d-flex mb-3">
                        <img class="img-fluid" src="{{$recent->image}}"
                            style="width: 80px; height: 80px; object-fit: cover;" alt="">
                        <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3"
                            style="height: 80px;">
                           {{$recent->titre}}
                        </a>
                    </div>
                @endforeach
                {{-- <div class="d-flex mb-3">
                    <img class="img-fluid" src="img/about-5.jpg"
                        style="width: 80px; height: 80px; object-fit: cover;" alt="">
                    <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3"
                        style="height: 80px;">
                        Fabrication des échasses
                    </a>
                </div>
                <div class="d-flex mb-3">
                    <img class="img-fluid" src="img/about-4.jpg"
                        style="width: 80px; height: 80px; object-fit: cover;" alt="">
                    <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3"
                        style="height: 80px;">
                        Intervention dans les écoles
                    </a>
                </div>
                <div class="d-flex mb-3">
                    <img class="img-fluid" src="img/about-5.jpg"
                        style="width: 80px; height: 80px; object-fit: cover;" alt="">
                    <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3"
                        style="height: 80px;">
                        Fabrication des échasses
                    </a>
                </div>
                <div class="d-flex mb-3">
                    <img class="img-fluid" src="img/about-4.jpg"
                        style="width: 80px; height: 80px; object-fit: cover;" alt="">
                    <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3"
                        style="height: 80px;">
                        Intervention dans les écoles
                    </a>
                </div>
                <div class="d-flex mb-3">
                    <img class="img-fluid" src="img/about-5.jpg"
                        style="width: 80px; height: 80px; object-fit: cover;" alt="">
                    <a href="" class="d-flex align-items-center bg-secondary text-dark text-decoration-none px-3"
                        style="height: 80px;">
                        Fabrication des échasses
                    </a>
                </div> --}}
            </div>
            <!-- Recent Post End -->
        </div>
        <!-- Sidebar End -->
    </div>
</div>
<!-- Blog detail end -->

@endsection