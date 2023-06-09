@extends('layouts.template2')
@section('title')
Agenda
@endsection
@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Notre Agenda</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/">Accueil</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Agenda</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Schedule   -->

<section class="section schedule">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="section-title">
                <h3>Calendrier des <span class="alternate">Tournées Afuma</span></h3>
                <h3 class="text-primary mt-5">TOURNEES AFUMA 2023</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
           
            <div class="schedule-tab">
                <ul class="nav nav-pills text-center">
                    @foreach ($tournes as $tourne)
                        <li class="nav-item">
                            <a class="nav-link " href="#tab-{{$tourne->id}}" data-bs-toggle="pill">
                                {{$tourne->mois}}
                                <span>{{$tourne->debut}} AU {{$tourne->fin}}  {{$tourne->mois}} </span>
                            </a>
                        </li>
                    @endforeach  
                </ul>
            </div>
            <div class="schedule-contents bg-schedule">
                <div class="tab-content" id="pills-tabContent">   
                  <div class="tab-pane fade show active schedule-item" >
                      <!-- Headings -->
                      <ul class="m-0 p-0">
                          <li class="headings">
                              <div class="test">Date</div>
                              <div class="test">Ville</div>
                              <div class="test">Pays</div>
                          </li>
                          <!-- Schedule Details -->
                          @foreach ($tournes as $tourne) 
                          <div class="tab-pane fade  schedule-item"  id="tab-{{$tourne->id}}">
                          @foreach ($events as $event)
                                @if ($event->tournee_id == $tourne->id)
                                        <li class="schedule-details">
                                            <div class="block">
                                                <!-- DATE -->
                                                <div class="time">
                                                    <span class="time">{{$event->date}} {{$event->mois_event}}</span>
                                                </div>
                                                <!-- VILLE -->
                                                <div class="speaker">
                                                <span class="name">{{$event->lieu}}</span>
                                                </div>
                                                <!-- PAYS -->
                                                <div class="subject">{{$event->pays}}</div>
                                            </div>
                                        </li>
                                @endif
                          @endforeach  
                        </div>  
                        @endforeach      
                      </ul>
                  </div> 
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Recent event -->

<div class="section mt-5">
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" direction="horizontal"
                   loop="true" space-between="30" autoplay-delay="2500" autoplay-disable-on-interaction="false">
                    
                    <swiper-slide>
                        <img src="{{asset('assets2/img/blog-1.jpg')}}" alt="Image" class="img-fluid" style="object-fit: cover;">
                    </swiper-slide>

                    <swiper-slide>
                        <img src="{{asset('assets2/img/blog-1.jpg')}}" alt="Image" class="img-fluid" style="object-fit: cover;">
                    </swiper-slide>

                    <swiper-slide>
                        <img src="{{asset('assets2/img/blog-1.jpg')}}" alt="Image" class="img-fluid" style="object-fit: cover;">
                    </swiper-slide>

                    <swiper-slide>
                        <img src="{{asset('assets2/img/blog-1.jpg')}}" alt="Image" class="img-fluid" style="object-fit: cover;">
                    </swiper-slide>

            </swiper-container>
           
        </div>
        <div class="col-lg-5 mt-4 mt-lg-0"  data-aos="fade-up" data-aos-delay="100">

            <h2 class="heading mb-5">Tournées Récentes</h2>
            @foreach ($groupedEvents as $tourneeId => $tourneeEvents)
                <div class="custom-accordion" id="accordion_1">
                    <div class="accordion-item">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$tourneeId}}" aria-expanded="true" aria-controls="collapseOne">Tournée {{$tourneeEvents[0]->annee_tournee}} {{$tourneeEvents[0]->nom}}</button>
                        </h2>

                        <div id="collapseOne{{$tourneeId}}" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
                            <div class="accordion-body">
                                @foreach ($tourneeEvents as $event)
                                <p><span><i class="text-primary fa-solid fa-square-check"></i></span>
                                    <span>{{$event->date}} {{$event->mois_event}} {{$event->lieu}} ({{$event->pays}})</span>
                                </p>
                                @endforeach
                            </div>
                        </div>
                    </div> <!-- .accordion-item -->

                </div>
            @endforeach
        </div>
    </div>
</div>
</div>

<!-- Recent event end -->



<script>
    $(document).ready(function() {
        $('.nav-link').on('click', function(e) {
            e.preventDefault();
            $('.nav-link').removeClass('active');
            $(this).addClass('active');
            var target = $(this).attr('href');
            $('.tab-pane').removeClass('show active');
            $(target).addClass('show active');
        });
    });
</script>


@endsection