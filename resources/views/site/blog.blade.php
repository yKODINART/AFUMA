@extends('layouts.template2')
@section('title')
Blogs
@endsection
@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Nos Actualités</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/">Accueil</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Blog -->

<div class="container-xxl py-5" id="blog">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="text-primary text-uppercase">Blog</h6>
            <h1 class="mb-5">Découvrez Nos Actualités</h1>
        </div>
        <div class="row g-4">
            @foreach ($blogs as $blog)
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s"
                    style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="service-item p-4">
                        <div class="overflow-hidden mb-4 position-relative">
                            <img class="img-fluid" src="{{asset($blog->image)}}" alt="">
                        </div>
                        <p class="blog-meta">
                            <span class="author me-2"><i class="fa fa-user text-primary"></i> Afuma</span>
                            <span class="date"><i class="fas fa-calendar text-primary"></i> {{ textDate($blog->date)}}</span>
                        </p>
                        <h5 class="mb-3">{{$blog->titre}}</h5>
                        <p>{{$blog->sous_titre}}</p>
                        <a class="btn-slide mt-2" href="blog-detail.php"><i class="fa fa-arrow-right"></i><span>Lire Plus</span></a>
                    </div>
               </div>
            @endforeach
            {{-- <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4 position-relative">
                        <img class="img-fluid" src="{{asset('assets2/img/home-1.jpg')}}" alt="">
                    </div>
                    <p class="blog-meta">
                        <span class="author me-2"><i class="fa fa-user text-primary"></i> Afuma</span>
                        <span class="date"><i class="fas fa-calendar text-primary"></i> 27 Décembre 2019</span>
                    </p>
                    <h5 class="mb-3">Interventions dans les écoles</h5>
                    <p>La tradition séculaire des échasses traditionnelles est un des fleurons de la culture Ifé...</p>
                    <a class="btn-slide mt-2" href="blog-detail.php"><i class="fa fa-arrow-right"></i><span>Lire Plus</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('assets2/img/home-2.jpg')}}" alt="">
                    </div>
                    <p class="blog-meta">
                        <span class="author me-2"><i class="fa fa-user text-primary"></i> Afuma</span>
                        <span class="date"><i class="fas fa-calendar text-primary"></i> 27 Décembre 2019</span>
                    </p>
                    <h4 class="mb-3">Fabrication des échasses</h4>
                    <p>Ces artistes, appartiennent à des familles d'échassiers,...</p>
                    <a class="btn-slide mt-2" href="blog-detail2.php"><i class="fa fa-arrow-right"></i><span>Lire Plus</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s"
                style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('assets2/img/home-3.jpg')}}" alt="">
                    </div>
                    <p class="blog-meta">
                        <span class="author me-2"><i class="fa fa-user text-primary"></i> Afuma</span>
                        <span class="date"><i class="fas fa-calendar text-primary"></i> 27 Décembre 2019</span>
                    </p>
                    <h4 class="mb-3">Notre Histoire</h4>
                    <p>Afuma est le nom d'une fougère qui pousse sur les arbres,...</p>
                    <a class="btn-slide mt-2" href="blog-detail3.php"><i class="fa fa-arrow-right"></i><span>Lire
                            Plus</span></a>
                </div>
            </div> --}}
        </div>
    </div>
</div>

<!-- Blog end -->

@endsection