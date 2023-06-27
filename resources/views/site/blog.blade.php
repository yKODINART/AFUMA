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
                            <span class="date"><i class="fas fa-calendar text-primary"></i> {{formatDate2($blog->date)}}</span>
                        </p>
                        <h5 class="mb-3">{{$blog->titre}}</h5>
                        <p>{{$blog->sous_titre}}</p>
                        <a class="btn-slide mt-2" href="/afuma/blog_detail/{{$blog->id}}"><i class="fa fa-arrow-right"></i><span>Lire Plus</span></a>
                    </div>
               </div>
            @endforeach
      
        </div>
    </div>
</div>

<!-- Blog end -->

@endsection