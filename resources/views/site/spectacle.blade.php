@extends('layouts.template2')
@section('title')
Spectacle
@endsection
@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Nos Spectacles</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/">Accueil</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Spectacles</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

 <!-- Blog -->

 <div class="container-xxl py-5" id="blog">
    <div class="container py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="text-primary text-uppercase">Spectacles</h6>
            <h1 class="mb-5">Découvrez Nos Spectacles Annuels</h1>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
               <a href="">
                <div class="service-item p-4">

                    <swiper-container class="mySwiper" navigation="false" space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false"
                    loop="true">
                    <swiper-slide>
                        <div class="overflow-hidden mb-4 position-relative">
                            <img class="img-fluid" src="{{asset('assets2/img/sepectacle-1.jpg')}}" alt="">
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="overflow-hidden mb-4 position-relative">
                            <img class="img-fluid" src="{{asset('assets2/img/sepectacle-3.jpg')}}" alt="">
                        </div>
                    </swiper-slide>
                  </swiper-container>

                    <h4 class="mb-3">Irou Ayé</h4>
                </div>
               </a>
            </div>

            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <a href="">
                 <div class="service-item p-4">

                     <swiper-container class="mySwiper" navigation="false" space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false"
                     loop="true">
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/sepectacle-4.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/sepectacle-6.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                   </swiper-container>

                     <h4 class="mb-3">ETSUMON (la solidarité)</h4>
                 </div>
                </a>
             </div>

             <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <a href="">
                 <div class="service-item p-4">

                     <swiper-container class="mySwiper" navigation="false" space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false"
                     loop="true">
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/home-1.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/home-2.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                   </swiper-container>

                     <h4 class="mb-3">Edukikan (A cœur vaillant)</h4>
                 </div>
                </a>
             </div>

             <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <a href="">
                 <div class="service-item p-4">

                     <swiper-container class="mySwiper" navigation="false" space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false"
                     loop="true">
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/sepectacle-4.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/sepectacle-3.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                   </swiper-container>

                     <h4 class="mb-3">Tiwani (Le Bon , la Brute et le Coquin)</h4>
                 </div>
                </a>
             </div>

             <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <a href="">
                 <div class="service-item p-4">

                     <swiper-container class="mySwiper" navigation="false" space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false"
                     loop="true">
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/sepectacle-6.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/sepectacle-1.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                   </swiper-container>

                     <h4 class="mb-3">Oliti Aranwo(L'étoile du destin)</h4>
                 </div>
                </a>
             </div>

             <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <a href="">
                 <div class="service-item p-4">

                     <swiper-container class="mySwiper" navigation="false" space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false"
                     loop="true">
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/sepectacle-4.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/sepectacle-3.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                   </swiper-container>

                     <h4 class="mb-3">La Légende des échasses</h4>
                 </div>
                </a>
             </div>

             <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <a href="spectacle-detail7.ph">
                 <div class="service-item p-4">

                     <swiper-container class="mySwiper" navigation="false" space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false"
                     loop="true">
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/home-1.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                     <swiper-slide>
                         <div class="overflow-hidden mb-4 position-relative">
                             <img class="img-fluid" src="{{asset('assets2/img/home-2.jpg')}}" alt="">
                         </div>
                     </swiper-slide>
                   </swiper-container>

                     <h4 class="mb-3">Parades et déambulation</h4>
                 </div>
                </a>
             </div>
        </div>
    </div>
</div>

<!-- Blog end -->
@endsection