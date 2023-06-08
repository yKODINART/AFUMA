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
                    @foreach ($events as $event)
                        <li class="nav-item">
                            <a class="nav-link active" href="#nov20" data-bs-toggle="pill">
                                {{$event->mois}}
                                <span>{{$event->date}} {{$event->mois}}</span>
                            </a>
                        </li>
                    @endforeach
                 
                  {{-- <li class="nav-item">
                    <a class="nav-link" href="#nov21" data-bs-toggle="pill">
                        JUIN
                        <span>03 AU 26 JUIN</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#nov22" data-bs-toggle="pill">
                        JUILLET
                        <span>07 AU 30 JUILLET</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#nov23" data-bs-toggle="pill">
                        AOUT
                        <span>02 AU 24 AOUT</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#nov24" data-bs-toggle="pill">
                        SEPTEMBRE
                        <span>15 AU 17 SEPT</span>
                    </a>
                  </li> --}}
                </ul>
            </div>
            <div class="schedule-contents bg-schedule">
                <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active schedule-item" id="nov20">
                      <!-- Headings -->
                      <ul class="m-0 p-0">
                          <li class="headings">
                              <div class="test">Date</div>
                              <div class="test">Ville</div>
                              <div class="test">Pays</div>
                          </li>
                          <!-- Schedule Details -->
                          <li class="schedule-details">
                              <div class="block">
                                  <!-- DATE -->
                                  <div class="time">
                                      <span class="time">06 MAI</span>
                                  </div>
                                  <!-- VILLE -->
                                  <div class="speaker">
                                    <span class="name">{{$event->lieu}}</span>
                                  </div>
                                  <!-- PAYS -->
                                  <div class="subject">{{$event->pays}}</div>
                              </div>
                          </li>
                            <!-- Schedule Details -->
                            <li class="schedule-details">
                                <div class="block">
                                    <!-- DATE -->
                                    <div class="time">

                                        <span class="time">13 & 14 MAI</span>
                                    </div>
                                    <!-- VILLE -->
                                    <div class="speaker">
                                      <span class="name">LES HERBIERS</span>
                                    </div>
                                    <!-- PAYS -->
                                    <div class="subject">FRANCE</div>
                                </div>
                            </li>
                                <!-- Schedule Details -->
                            <li class="schedule-details">
                                <div class="block">
                                    <!-- DATE -->
                                    <div class="time">

                                        <span class="time">18, 19 & 20 MAI</span>
                                    </div>
                                    <!-- VILLE -->
                                    <div class="speaker">
                                      <span class="name">NAMUR</span>
                                    </div>
                                    <!-- PAYS -->
                                    <div class="subject">BELGIQUE</div>
                                </div>
                            </li>
                            <!-- Schedule Details -->
                        <li class="schedule-details">
                            <div class="block">
                                <!-- DATE -->
                                <div class="time">
                                    <span class="time">26 MAI</span>
                                </div>
                                <!-- VILLE -->
                                <div class="speaker">
                                  <span class="name">ASCONA</span>
                                </div>
                                <!-- PAYS -->
                                <div class="subject">SUISSE</div>
                            </div>
                        </li>
                      </ul>
                  </div>

                  <!-- Tournée JUIN -->
                  <div class="tab-pane fade schedule-item" id="nov21">
                      <!-- Headings -->
                      <ul class="m-0 p-0">
                        <li class="headings">
                            <div class="test">Date</div>
                            <div class="test">Ville</div>
                            <div class="test">Pays</div>
                        </li>
                            <!-- Schedule Details -->
                            <li class="schedule-details">
                                <div class="block">
                                    <!-- DATE -->
                                    <div class="time">

                                        <span class="time">03 & 04 JUIN</span>
                                    </div>
                                    <!-- VILLE -->
                                    <div class="speaker">
                                      <span class="name">CALDES</span>
                                    </div>
                                    <!-- PAYS -->
                                    <div class="subject">ITALIE</div>
                                </div>
                            </li>
                                <!-- Schedule Details -->
                            <li class="schedule-details">
                                <div class="block">
                                    <!-- DATE -->
                                    <div class="time">

                                        <span class="time">09, 10 & 11 JUIN</span>
                                    </div>
                                    <!-- VILLE -->
                                    <div class="speaker">
                                      <span class="name">MERANO</span>
                                    </div>
                                    <!-- PAYS -->
                                    <div class="subject">ITALIE</div>
                                </div>
                            </li>
                                <!-- Schedule Details -->
                            <li class="schedule-details">
                                <div class="block">
                                    <!-- DATE -->
                                    <div class="time">

                                        <span class="time">16 AU 26 JUIN</span>
                                    </div>
                                    <!-- VILLE -->
                                    <div class="speaker">
                                      <span class="name">SAO PAULO</span>
                                    </div>
                                    <!-- PAYS -->
                                    <div class="subject">BRESIL</div>
                                </div>
                            </li>
                      </ul>
                  </div>

                     <!-- Tournée JUILLET -->
                  <div class="tab-pane fade schedule-item" id="nov22">
                    <!-- Headings -->
                    <ul class="m-0 p-0">
                      <li class="headings">
                          <div class="time">Date</div>
                          <div class="speaker">Ville</div>
                          <div class="subject">Pays</div>
                      </li>
                          <!-- Schedule Details -->
                          <li class="schedule-details">
                              <div class="block">
                                  <!-- DATE -->
                                  <div class="time">

                                      <span class="time">07 AU 09 JUILLET</span>
                                  </div>
                                  <!-- VILLE -->
                                  <div class="speaker">
                                    <span class="name">DEVENTER</span>
                                  </div>
                                  <!-- PAYS -->
                                  <div class="subject">PAYS BAS</div>
                              </div>
                          </li>
                              <!-- Schedule Details -->
                          <li class="schedule-details">
                              <div class="block">
                                  <!-- DATE -->
                                  <div class="time">

                                      <span class="time">26, 27 & 28 JUILLET</span>
                                  </div>
                                  <!-- VILLE -->
                                  <div class="speaker">
                                    <span class="name">GERACE</span>
                                  </div>
                                  <!-- PAYS -->
                                  <div class="subject">ITALIE</div>
                              </div>
                          </li>
                              <!-- Schedule Details -->
                          <li class="schedule-details">
                              <div class="block">
                                  <!-- DATE -->
                                  <div class="time">

                                      <span class="time">30 JUILLET</span>
                                  </div>
                                  <!-- VILLE -->
                                  <div class="speaker">
                                    <span class="name">FONTANELLATO</span>
                                  </div>
                                  <!-- PAYS -->
                                  <div class="subject">ITALIE</div>
                              </div>
                          </li>
                    </ul>
                </div>

                  <!-- Tournée AOUT -->
                  <div class="tab-pane fade schedule-item" id="nov23">
                      <!-- Headings -->
                      <ul class="m-0 p-0">
                          <li class="headings">
                              <div class="time">DATE</div>
                              <div class="speaker">VILLE</div>
                              <div class="subject">PAYS</div>
                          </li>
                          <!-- Schedule Details -->
                          <li class="schedule-details">
                              <div class="block">
                                  <!-- time -->
                                  <div class="time">
                                      <span class="time">02 AOUT</span>
                                  </div>
                                  <!-- Speaker -->
                                  <div class="speaker">
                                    <span class="name">AUTUN</span>
                                  </div>
                                  <!-- Subject -->
                                  <div class="subject">FRANCE</div>
                              </div>
                          </li>
                          <!-- Schedule Details -->
                          <li class="schedule-details">
                            <div class="block">
                                <!-- time -->
                                <div class="time">
                                    <span class="time">05 AOUT</span>
                                </div>
                                <!-- Speaker -->
                                <div class="speaker">
                                  <span class="name">DRACY LES COUCHES</span>
                                </div>
                                <!-- Subject -->
                                <div class="subject">FRANCE</div>
                            </div>
                        </li>
                          <!-- Schedule Details -->
                          <li class="schedule-details">
                            <div class="block">
                                <!-- time -->
                                <div class="time">
                                    <span class="time">07 AOUT</span>
                                </div>
                                <!-- Speaker -->
                                <div class="speaker">
                                  <span class="name">MONTSAUCHE LES SETTONS</span>
                                </div>
                                <!-- Subject -->
                                <div class="subject">FRANCE</div>
                            </div>
                        </li>
                                      <!-- Schedule Details -->
                          <li class="schedule-details">
                            <div class="block">
                                <!-- time -->
                                <div class="time">
                                    <span class="time">09 & 10 AOUT</span>
                                </div>
                                <!-- Speaker -->
                                <div class="speaker">
                                  <span class="name">ANGERS</span>
                                </div>
                                <!-- Subject -->
                                <div class="subject">FRANCE</div>
                            </div>
                        </li>
                          <!-- Schedule Details -->
                          <li class="schedule-details">
                            <div class="block">
                                <!-- time -->
                                <div class="time">
                                    <span class="time">12 & 13 AOUT</span>
                                </div>
                                <!-- Speaker -->
                                <div class="speaker">
                                  <span class="name">FRANCAVILLE</span>
                                </div>
                                <!-- Subject -->
                                <div class="subject">ITALIE</div>
                            </div>
                        </li>
                          <!-- Schedule Details -->
                          <li class="schedule-details">
                            <div class="block">
                                <!-- time -->
                                <div class="time">
                                    <span class="time">17 & 18 AOUT</span>
                                </div>
                                <!-- Speaker -->
                                <div class="speaker">
                                  <span class="name">CASTEL DI GIUDICI</span>
                                </div>
                                <!-- Subject -->
                                <div class="subject">ITALIE</div>
                            </div>
                        </li>
                          <!-- Schedule Details -->
                          <li class="schedule-details">
                            <div class="block">
                                <!-- time -->
                                <div class="time">
                                    <span class="time">23 & 24 AOUT</span>
                                </div>
                                <!-- Speaker -->
                                <div class="speaker">
                                  <span class="name">BILBAO</span>
                                </div>
                                <!-- Subject -->
                                <div class="subject">ESPAGNE</div>
                            </div>
                        </li>
                      </ul>
                  </div>

                  <!-- Tournée SEPTEMBRE -->
                  <div class="tab-pane fade schedule-item" id="nov24">
                    <!-- Headings -->
                    <ul class="m-0 p-0">
                        <li class="headings">
                            <div class="time">DATE</div>
                            <div class="speaker">VILLE</div>
                            <div class="subject">PAYS</div>
                        </li>
                        <!-- Schedule Details -->
                        <li class="schedule-details">
                            <div class="block">
                                <!-- time -->
                                <div class="time">
                                    <span class="time">15 SEPTEMBRE</span>
                                </div>
                                <!-- Speaker -->
                                <div class="speaker">
                                  <span class="name">LES HERBIERS</span>
                                </div>
                                <!-- Subject -->
                                <div class="subject">FRANCE</div>
                            </div>
                        </li>
                        <!-- Schedule Details -->
                        <li class="schedule-details">
                            <div class="block">
                                <!-- time -->
                                <div class="time">
                                    <span class="time">16 SEPTEMBRE</span>
                                </div>
                                <!-- Speaker -->
                                <div class="speaker">
                                  <span class="name">LES HERBIERS</span>
                                </div>
                                <!-- Subject -->
                                <div class="subject">FRANCE</div>
                            </div>
                        </li>
                        <!-- Schedule Details -->
                        <li class="schedule-details">
                            <div class="block">
                                <!-- time -->
                                <div class="time">
                                    <span class="time">17 SEPTEMBRE</span>
                                </div>
                                <!-- Speaker -->
                                <div class="speaker">
                                  <span class="name">LES HERBIERS</span>
                                </div>
                                <!-- Subject -->
                                <div class="subject">FRANCE</div>
                            </div>
                        </li>
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

            <div class="custom-accordion" id="accordion_1">
                <div class="accordion-item">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Tournée 2022 ETSUMON (La Solidarité)</button>
                    </h2>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion_1">
                        <div class="accordion-body">
                           <p><span><i class="text-primary fa-solid fa-square-check"></i></span>
                            <span>03 juin les Sables d'olonnes (France)</span>
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                17 juin Scandiano (Italie)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                23 juin  Veregra (Italie)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                24 juin San Giovanni in Marignano (Italie)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                25 juin Roussillon en Morvan (France)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                26 juin LUZY (France)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                03 juillet Fontanellato (Italie)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                05 au 11 juillet Cracovie (Pologne)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                9 au 15 août Budapest (Hongrie)
                            </p>

                        </div>
                    </div>
                </div> <!-- .accordion-item -->

                <div class="accordion-item">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Tournée TOGO 2021</button>
                    </h2>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion_1">
                        <div class="accordion-body">
                            <p><span><i class="text-primary fa-solid fa-square-check"></i></span>
                             <span>19/12/21  Lomé (Maison des jeunes)</span>
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 20/12/21  Assahoun (Foyer des jeunes)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 21/12/21  Aouzou kopé (Orphelinat Dieu est grand)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 22/12/21 Agou (CLAC)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 23/12/21 Kpalimé (Orphelinat SPES)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 24/12/21  Amlamé (Centre d'accueil Amitié)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 26/12/21 Atakpamé (CLAC)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 27/12/21 Datcha (Espace petit mission)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 28/12/21 Notsè (CLAC)
                             </p>

                         </div>
                    </div>
                </div> <!-- .accordion-item -->
                <div class="accordion-item">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Tournée 2018</button>
                    </h2>

                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                        <div class="accordion-body">
                            <p><span><i class="text-primary fa-solid fa-square-check"></i></span>
                             <span>08/12/2018 : Zénith de Toulouse</span>
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 08/12/2018 : Zénith de Toulouse
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 12/12/2018 : Séance Musikhall de Rennes
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 14/12/2018 :Séance Musikhall de Rennes
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 15/12/2018 : Séance Musikhall de Rennes
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 16/12/2018 : Séance Musikhall de Rennes
                             </p>
                         </div>
                    </div>

                </div> <!-- .accordion-item -->


                <div class="accordion-item">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Parcours 2017</button>
                    </h2>

                    <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                        <div class="accordion-body">
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                03 Février :Lycée Français J. Prévert à Accra (GHANA)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 07 au 25 Février : Festival Rdv chez nous à Ouagadougou, Bobo-Dioulasso et Bamako
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 21 au 24 juin : Festival LES INVITES à Lyon (France)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 15 juillet : Festival APSOAR à Annonay (France)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 29 juillet : La Déferlante en France
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 31 juillet au 05 Aout : Festival Chaux de fonds (suisse)
                             </p>
                             <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                07 au 08 Aout : APSOAR à Annonay (France)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                09 au 11 Aout : Thonon Les Bains (France)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                13 au 15 Aout : Sziget (Hongrie)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                12 Novembre 2017 au fevrier 2018: CIRQUE PHENIX en France et Suisse
                            </p>
                         </div>
                    </div>

                </div> <!-- .accordion-item -->

                <div class="accordion-item">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Parcours 2016</button>
                    </h2>

                    <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                        <div class="accordion-body">
                            <p><span><i class="text-primary fa-solid fa-square-check"></i></span>
                                21 janvier : maternelle du Lycée Français de Lomé (Togo)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 05 au 21 février : 7ème édition du festival « Rendez-vous chez Nous » à Ouagadougou et Bobo Dioulasso (Burkina Faso)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 05 au 12 Mars : 9eme édition MASA (Marché des Arts du Spectacle Africain) à Abidjan (COTE D'IVOIRE)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 26 au 28 Mars : 3eme édition Festival International de Pâques pour Rêves d'Enfants (FIPRE) à Abidjan (Côte d'Ivoire)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 25-29 et 30 Mars : Promotion SOSSA dans les marchés d'Abidjan (COTE D'IVOIR)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 1er au 15 Septembre : L'émission « L'Afrique a un incroyable talent » en Côte d'Ivoire à Abidjan
                             </p>
                             <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                16 au 28 Septembre : Défilé de la « Biennale de la Danse » Lyon et festival « Quelques P'arts » en Ardèche (France)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                04 au 20 Novembre : COP 22 a Marrakech (MAROC)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                22 au 28 Décembre : Fête de Noël FIL'O PARC à Lomé (Togo)
                            </p>
                         </div>
                    </div>

                </div> <!-- .accordion-item -->

                <div class="accordion-item">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Parcours 2015</button>
                    </h2>

                    <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                        <div class="accordion-body">
                            <p><span><i class="text-primary fa-solid fa-square-check"></i></span>
                                10 AU 18 FÉVRIER : 6ème édition du Festival « Rendez-vous chez nous » à Ouagadougou (BURKINA FASO)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 11 Mars : début des animations publicitaires dans les marchés du Togo avec les produits ''SOSSA'' 
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 20 Mars : Grand Rex de Lomé (Togo)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 2 AU 6 AVRIL : 2ème édition du Festival international de Pâques « Rêve d'enfant » à Abidjan (COTE D'IVOIR)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 15 MAI :Lomé (Togo) Spectacle pour le 10ème anniversaire de « Orabank » à l'hôtel Sarakawa
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 30 MAI :Lomé (Togo) soirée « Cabaret Barré » à l'Agora Senghor.
                             </p>
                             <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                1er AU 15 JUIN :Marrakech (Maroc) 5ème édition du Festival du Rire de Marrakech
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                4 Juillet : Lomé (Togo) lancement officiel du restaurant « La Petite Faim » à l'institut Goethe
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                06 Aout au 26 Septembre : (Togo) animations dans les marchés avec les produits SOSSA (UNIFOOD)
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                02 au 05 Décembre : Porto Novo (Bénin) 6ème édition du festival « Teni Tedji »
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                06 au 14 Décembre : N'Djamena (Tchad) Festival « Souar Souar 2015 »
                            </p>
                         </div>
                    </div>

                </div> <!-- .accordion-item -->

                <div class="accordion-item">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Parcours 2014</button>
                    </h2>

                    <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                        <div class="accordion-body">
                            <p><span><i class="text-primary fa-solid fa-square-check"></i></span>
                                13 Février : Lomé (Togo) soirée ORABANK à l'hôtel Sarakawa.
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 24 au 28 Février: Niamey (Niger) 2ème édition du festival « Rue Danse Niger»
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 28 AU 31 MAI : Lomé (Togo) 3ème édition de la « Semaine des Bâtisseurs » à EAMAU
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 17 au 25 Juin : Amiens (France) 37ème édition du festival « La Rue est à Amiens »
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 06 Novembre : Lomé (Togo) sortie officielle Afuma sur les créations « Oliti Aranwo » et ''Tiwani'' à l'Institut Goethe 
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 12 Novembre : animations à la soirée du lancement officiel de la grande chaine panafricaine A+ au Togo, à l'hôtel Sarakawa (Lomé)
                             </p>
                             <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                13 Décembre : la Fête de Noël des enfants à FILOPARC (Lomé) Togo
                            </p>
                         </div>
                    </div>

                </div> <!-- .accordion-item -->

                <div class="accordion-item">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Parcours 2013</button>
                    </h2>

                    <div id="collapseEight" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                        <div class="accordion-body">
                            <p><span><i class="text-primary fa-solid fa-square-check"></i></span>
                                05 mai au 09 juin : Marrakech (Maroc) Festival « Marrakech fait son cirque » 
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 28 mai : à Casablanca Maroc, parades pour les 60 ans de la Société Générale
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 29, 30, 31, Mai, 1er Juin : à Rabat (Maroc) Festival Mawazine « les Rythmes du Monde »
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 Les 5, 6, 8, 9 Juin : parades au festival « Marrakech fait son cirque » spectacle « Les Portes du désert » à Oasiria, et au 7ème Edition du Festival « RABAT AFRICA » à Rabat (Maroc)
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 Du 18 septembre AU 08 octobre : Côte d'Azur (France) « Azalaï ; parade extraordinaire» 
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 Du 21 au 22 septembre : 17ème édition du festival des arts de la rue Roulez Carros !
                             </p>
                             <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                Du 24 au 26 Septembre : « Festival de Chatillon »
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                29 Septembre : la 5em édition du « festival international des arts de la rue et des arts du cirque salon public »
                                
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                1er octobre : festival « Parcours croisé » Brignoles.
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                le 5 Octobre : à l'Estaque, Marseille
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                le 6 Octobre : sous l'ombrière du vieux port, Marseille
                            </p>
                            <p>
                                <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                24 Décembre : Lomé (Togo) ''Noël pour les enfants''
                            </p>
                         </div>
                    </div>

                </div> <!-- .accordion-item -->

                <div class="accordion-item">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">Parcours 2012</button>
                    </h2>

                    <div id="collapseNine" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion_1">
                        <div class="accordion-body">
                            <p><span><i class="text-primary fa-solid fa-square-check"></i></span>
                                Création de l' Association Culturelle et Artistique « AFUMA »
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 Du 17 AU 22 Octobre : Niamey (Niger) Festival « Rue Danse Niger»
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 17 Novembre : Aflaou (Ghana), Festival Godigbé 
                             </p>
                             <p>
                                 <span><i class="text-primary fa-solid fa-square-check"></i></span>
                                 Du 04 au 21 Décembre : « Les Portes du Désert » au cirque Jules Verne d'Amiens. 
                             </p>
                         </div>
                    </div>

                </div> <!-- .accordion-item -->

            </div>
        </div>
    </div>
</div>
</div>

<!-- Recent event end -->

@endsection