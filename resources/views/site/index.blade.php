@extends('layouts.template2')
@section('title')
Accueil
@endsection
@section('content')

     <!-- Carousel Start -->
     <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($headers as $index => $head)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <img class="w-100" src="{{asset($head->header)}}" alt="Image" style="width: 100px;height:100vh;object-fit:cover;">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 pt-5">
                                        <h1 class="display-4 text-white mb-3 animated slideInDown">{{$head->titre}}.</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="carousel-item">
                    <img class="w-100" src="{{asset('assets2/img/home-6.jpg')}}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Afuma, l'homme qui reste en l'air.</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
          
        </div>
    </div>
    <!-- Carousel End -->

<!-- About Start -->
<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                    
                    <img class="position-absolute w-100 h-100 pt-5 pe-5 zoom-img" src="{{asset('assets2/img/home-2.jpg')}}" alt="" style="object-fit: cover;">
                    
                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2 zoom-img" src="{{asset('assets2/img/about-5.jpg')}}" alt="" style="width: 200px; height: 200px;">

                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block bg-secondary rounded-pill fw-bold text-primary py-1 px-3 mb-3">Notre Histoire</div>
                    <h1 class="display-6 mb-5">Qui Sommes Nous?</h1>
                    <div class="bg-light border-bottom border-5 border-dark rounded p-4 mb-4">
                        <p class="text-dark mb-2" style="text-align: justify;">Afuma est le nom d'une fougère qui pousse sur les arbres et qui reste accrochée au bois avec lequel  on fait les échasses, sans jamais tomber à terre. Elle symbolise l'échassier, l'homme qui ne tombe pas, celui qui reste en l'air. </p>
                    </div>
                    <p class="mb-5 p-4" style="text-align: justify;">Formé au Togo selon les méthodes et techniques traditionnelles, Afuma est un groupe d'échassiers qui a su adapter son savoir-faire aux différents types de prestations en usage dans les spectacles contemporains du monde actuel.</p>
                    <a class="btn btn-primary py-2 px-3 me-3" href="about.php">
                        Lire Plus
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                            <i class="fa fa-play"></i>
                        </div>
                    </a>
                    <a class="btn btn-outline-primary py-2 px-3" href="/afuma/contact">
                       Contact
                        <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

    <!-- Event Start -->
    <div id="event" class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="{{asset('assets2/img/home-2.jpg')}}">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary donate-text py-1 px-3 mb-3">Notre Agenda</div>
                    <h1 class="display-6 text-white mb-5">Le programme de nos tournées annuelles</h1>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">

                        <div class="gdlr-core-pbf-element">
                            <div class="gdlr-core-event-item gdlr-core-item-pdb">
                                <div class="gdlr-core-event-item-holder clearfix">

                                    <div class="gdlr-core-column-30">
                                        <div
                                            class="gdlr-core-event-item-list gdlr-core-item-pdlr  gdlr-core-style-widget  gdlr-core-with-border clearfix">
                                            <div class="gdlr-core-event-widget clearfix">
                                            
                                                <span
                                                    class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-start-date-month"
                                                    style="border-color: #ff3e41 ;">
                                                    <span class="gdlr-core-date" style="color: #000 ;">20</span>
                                                    <span class="gdlr-core-date" style="color: #000 ;">23</span>
                                                </span>
                                                <div class="gdlr-core-event-item-content-wrap">
                                                    <h3 class="gdlr-core-event-item-title mb-5">
                                                        <p class="fw-bold text-primary text-uppercase">Tournée Afuma 2023</p>
                                                    </h3>
                                                    <div class="gdlr-core-event-item-info-wrap">
                                                        <p class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-time mb-3">
                                                            <span class="gdlr-core-head text-primary">
                                                                <i class="bi bi-record-circle"></i>
                                                            </span>
                                                            <span class="gdlr-core-tail"><span class="date " style="color: #000;">06 Mai: </span>ARRIGORIAGA</span> <span class="text-dark"> (ESPAGNE)</span>
                                                        </p>

                                                        <p class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-time mb-3">
                                                            <span class="gdlr-core-head text-primary">
                                                                <i class="bi bi-record-circle"></i>
                                                            </span>
                                                            <span class="gdlr-core-tail"><span class="date " style="color: #000;">13 & 14 Mai: </span>LES HERBIERS</span> <span class="text-dark"> (FRANCE)</span>
                                                        </p>

                                                        <p class="gdlr-core-event-item-info gdlr-core-skin-caption gdlr-core-type-time mb-3">
                                                            <span class="gdlr-core-head text-primary">
                                                                <i class="bi bi-record-circle"></i>
                                                            </span>
                                                            <span class="gdlr-core-tail"><span class="date " style="color: #000;">18, 19 & 20 Mai: </span>NAMUR</span> <span class="text-dark"> (BELGIQUE)</span>
                                                        </p>

                                                        <div class="gallery-btn d-flex justify-content-end">
                                                            <a class="btn btn-outline-primary py-2 px-3" href="event.php" style="width: 150px;">
                                                                Voir Plus
                                                                 <div class="d-inline-flex text-primary ms-2">
                                                                     <i class="fa fa-arrow-right"></i>
                                                                 </div>
                                                             </a>
                                                          </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->


<!--  Gallery -->
<section id="portfolio" class="portfolio section-bg" >
    <div class="container">

      <div class="section-title mb-5 text-center">
        <h2 class="text-primary">Notre Gallerie</h2>
        <p class="text-center" style="text-align: justify; font-size: 20px;">Découvrez quelques photos prises pendant nos tournées!</p>
      </div>

      <div class="row portfolio-container">
        @foreach ($galeries as $galerie)
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
                <img src="{{$galerie->image}}" class="img-fluid " height="100" alt="">
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
            <img src="{{asset('assets2/img/5.jpg')}}" class="img-fluid" alt="">

            <div class="portfolio-links">
              <a href="{{asset('assets2/img/5.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
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
        </div> --}}

      <div class="gallery-btn d-flex justify-content-end">
        <a class="btn btn-outline-primary py-2 px-3" href="/afuma/galerie" style="width: 150px;">
            Voir Plus
             <div class="d-inline-flex text-primary ms-2">
                 <i class="fa fa-arrow-right"></i>
             </div>
         </a>
      </div>

      </div>

    </div>
  </section>
<!-- End Our Gallery Section -->

<!-- Blog -->

<div class="container-xxl py-5" id="blog">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
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
                            <span class="author me-2"><i class="fa fa-user text-primary"></i> Afuma </span>
                            <span class="date"><i class="fas fa-calendar text-primary"></i> {{ formatDate2($blog->date)}}</span>
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

<div class="divider container">
    <hr>
</div>
        <!-- Presse -->

<div class="container-xxl py-5" id="blog">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <!-- <h6 class="text-primary text-uppercase">Blog</h6> -->
            <h2 class="mb-5 text-primary">La Presse Parle de Nous</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4 position-relative">
                        <img class="img-fluid" src="{{asset('assets2/img/1.jpg')}}" alt="">
                    </div>
                    <h5 class="mb-3">AFUMA, ACROBATES DU CIEL</h5>
                    <a class="btn-slide mt-2" href="https://www.helloasso.com/associations/reseau-afrique-37/collectes/acrobates-du-ciel-et-des-mots" target="blanck"><i class="fa fa-arrow-right"></i><span>Lire L'article</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('assets2/img/00.jpg')}}" alt="">
                    </div>
                    <h4 class="mb-3">Les échasseurs togolais sont les plus perchés</h4>
                    <a class="btn-slide mt-2" href="https://www.dhnet.be/regions/namur/2023/05/19/namur-en-mai-les-echasseurs-togolais-sont-les-plus-perches-video-NGZYG4YSGZG5JNPKW5H6WD4AOY" target="blanck"><i class="fa fa-arrow-right"></i><span>Lire L'article</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s"
                style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('assets2/img/echassiers-ecole.jpg')}}" alt="echassiers-ecole">
                    </div>
                    <h4 class="mb-3">Les échassiers du Togo à l'école</h4>
                    <a class="btn-slide mt-2" href="https://www.lanouvellerepublique.fr/indre-et-loire/commune/saint-branchs/les-echassiers-du-togo-a-l-ecole" target="blanck"><i class="fa fa-arrow-right"></i><span>Lire L'article</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Presse end -->


<div class="divider container">
<hr>
</div>
<!-- Contact form -->

<div class="container-xxl py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="fw-bold text-primary text-uppercase mb-3">Nous Contacter</h6>
                <h1 class="mb-5">Appelez-nous pour toute question !</h1>
                <div class="d-flex align-items-center">
                    <i class="fa fa-phone fa-2x flex-shrink-0 bg-primary p-3 text-white"></i>
                    <div class="ps-4">
                        <h6>Appelez-nous pour toute question !</h6>
                        <h4 class="text-primary m-0" style="font-size: 16px;">Europe: +33 620 193 565</h4>
                        <h4 class="text-primary m-0" style="font-size: 16px;">Togo: +228 918 180 17</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="bg-light text-center p-5 wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                <form action="{{route('sendMail')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" name="name" placeholder="Votre Nom" required style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" class="form-control border-0" name="email" placeholder="Votre Email" required style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" name="telephone" placeholder="Votre Téléphone" required style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" class="form-control border-0" name="objet" placeholder="Votre Objet" required style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-0" name="message" placeholder="Votre Message" required></textarea>
                            </div>
                          
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact form end -->

@endsection