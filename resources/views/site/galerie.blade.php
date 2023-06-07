@extends('layouts.template2')
@section('title')
Galerie
@endsection
@section('content')

  <!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Notre Gallerie</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/">Accueil</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Gallerie</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


        <!--  Gallery -->
<section id="portfolio" class="portfolio section-bg" >
    <div class="container">

      <div class="section-title mb-5 text-center">
        <h2 class="text-primary">Notre Gallerie</h2>
        <p>Découvrez quelques photos prises pendant nos tournées!</p>
      </div>

      <div class="row portfolio-container">

        @foreach ($galeries as $galerie)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="{{$galerie->image}}" class="img-fluid " height="100"  alt="">
                <div class="portfolio-links">
                  <a href="{{$galerie->image}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                </div>
              </div>
            </div>
        @endforeach

        {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('assets2/img/22.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{asset('assets2/img/22.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('assets2/img/77.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{asset('assets2/img/77.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{asset('assets2/img/55.jpg')}}" class="img-fluid" alt="">

            <div class="portfolio-links">
              <a href="{{asset('assets2/img/55.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('assets2/img/00.jpg')}}" class="img-fluid" alt="">

            <div class="portfolio-links">
              <a href="{{asset('assets2/img/00.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{asset('assets2/img/1.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{asset('assets2/img/1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{asset('assets2/img/6.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{asset('assets2/img/6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{asset('assets2/img/9.jpg')}}" class="img-fluid" alt="">

            <div class="portfolio-links">
              <a href="{{asset('assets2/img/9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{asset('assets2/img/3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{asset('assets2/img/3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div> --}}

      </div>
    </div>
  </section>
<!-- End Our Gallery Section -->

@endsection