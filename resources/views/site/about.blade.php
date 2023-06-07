@extends('layouts.template2')
@section('title')
A Propos
@endsection
@section('content')

   <!-- Page Header Start -->
   <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Notre Histoire</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="index.php">Accueil</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">A Propos</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-xxl py-5" id="about">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">

                    <img class="position-absolute w-100 h-100 pt-5 pe-5 zoom-img" src="{{asset('assets2/img/home-2.jpg')}}" alt=""
                        style="object-fit: cover;">

                    <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2 zoom-img" src="{{asset('assets2/img/about-5.jpg')}}"
                        alt="" style="width: 200px; height: 200px;">

                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="d-inline-block bg-secondary rounded-pill fw-bold text-primary py-1 px-3 mb-3">Notre
                        Histoire</div>
                    <h1 class="display-6 mb-5">Qui Sommes Nous?</h1>
                    <div class="bg-light border-bottom border-5 border-dark rounded p-4 mb-4">
                        <p class="text-dark mb-2" style="text-align: justify;">Afuma est le nom d'une fougère qui
                            pousse sur les arbres et qui reste accrochée au bois avec lequel on fait les échasses,
                            sans jamais tomber à terre. Elle symbolise l'échassier, l'homme qui ne tombe pas, celui
                            qui reste en l'aire. </p>
                    </div>
                    <p class="mb-5 p-4" style="text-align: justify;">Formé au Togo selon les méthodes et techniques
                        traditionnelles, Afuma est un groupe d'échassiers qui a su adapter son savoir-faire aux
                        différents types de prestations en usage dans les spectacles contemporains du monde actuel.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<section>
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-6" style="text-align: justify;"> 
                <p>
                    Ces artistes, originaires de la région des Plateaux, le berceau de la tradition des échasses, montent
                    depuis leur plus tendre enfance. Appartenant à des familles d'échassiers, ils ont été formés par les
                    maîtres de la famille Ayena, jusqu'au moment où ils ont été sélectionnés par Simon Laté Lawson, dit
                    Amlima, artiste de dimension internationale, pour compléter leur formation au sein de la troupe « Amlima
                    ». Commence alors pour eux l'aventure de la scène, tandis qu'ils approfondissent l'ensemble des
                    techniques du spectacle africain : danses traditionnelles, percussions et organisations de fêtes
                    traditionnelles.
                </p>
                <p>
                    Leur formation accomplie, ils créent, avec d'autres artistes de la troupe d'Amlima, la compagnie
                    Tchébé-Tchébé, sous la direction du percussionniste Anani Foegan, avec laquelle ils participent aux
                    festivals de Marrakech et d'Amiens. Repérés par les professionnels internationaux, ils décident de
                    revenir à leur spécialité d'origine et créent la troupe « Afuma », centrée sur la pratique et la
                    technique des échasses.
                   </p>
            </div>

            <div class="col-sm-6">
                <img class="img-fluid w-100" src="{{asset('assets2/img/portfolio-3.jpg')}}" alt="" style="border-radius: 10px;">
            </div>

        </div>
        <div class="body-container mt-5" style="text-align: justify;">


               <p>
                La pratique des échasses togolaises est une spécialité de la région d'Atakpamé, ville principale du
                peuple Ifè ; les Ifès ont fui le Nigéria vers la fin du XVIIème siècle, pour trouver la paix. Après
                avoir habité l'actuel Bénin, ils ont rejoint la partie sud du Togo actuel, en particulier la région des
                Plateaux. Le choix de la ville d'Atakpamé, située dans une zone montagneuse (entre 600 et 800m) à 160 km
                au Nord de Lomé et entourée de 7 collines, s'est fait pour cette particularité géographique qui
                permettait une meilleure protection contre les assaillants Dahoméens.
               </p>

                <p>
                C'est dans cette région aussi que pousse un bois particulier, à la fois souple et solide, qui permet de
                confectionner les échasses traditionnelles qui peuvent aller jusqu'à cinq mètres de hauteur.

                Les échassiers, dits aussi « grands hommes », ou encore « jambes de bois » doivent, pour respecter
                l'usage, savoir exécuter des figures précises, dont la symbolique accompagne les cérémonies rituelles
                attachées à cette pratique.
                </p>
            <h3 class="fw-bold text-dark">
                ENRICHISSEMENT DE LA TRADITION
            </h3>
            <p style="text-indent: vh;">
                Enrichis des diverses influences de leurs pratiques successives, de leurs séjours à l'étranger, aussi,
                les artistes « Afuma » sont fiers de présenter une troupe capable à la fois de faire découvrir les
                traditions séculaires des échassiers et de proposer des prestations totalement originales, tant dans le
                domaine du cirque que dans des créations liant leur art à la danse contemporaine, au spectacle de rue,
                ou au théâtre

                Utilisant une échelle, tenue transversalement par deux échassiers, l'acrobate Orara effectue des figures
                d'autant plus spectaculaires qu'elles se déroulent, selon le lieu d'accueil, à quatre ou cinq mètres du
                sol, dans un équilibre qui dépend autant de son talent personnel que de la puissance des deux porteurs,
                qui eux- mêmes doivent tenir leur équilibre sur les échasses.

                Un cerceau, glissé dans l'échelle, permet d'autres figures, plus inspirées du cirque occidental.

                Proposant des spectacles pouvant aller de cinq à quarante-cinq minutes, modulables selon les besoins des
                commanditaires, ils peuvent fonctionner en autonomie, ou bien s'associer à d'autres groupes. Très
                adaptables, ils peuvent enrichir de manière notable un spectacle au sol.
            </p>
        </div>
    <div>
</section>

<div id="event" class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="{{asset('assets2/img/home-2.jpg')}}"
    style="height: 500px;">
    <div class="container">
        <div class="video_area">
            <div class="video_area_inner text-center">
                <span>Notre histoire</span>
                <h3>Nous vous racontons notre histoire </h3>
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/iwqjOE6hq5I" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                        allowscriptaccess="always" allow="autoplay">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Video section end -->

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Notre Equipe</div>
            <h1 class="display-6 mb-5">Découvrez nos soldats !</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets2/img/team/team-1.jpg')}}" alt=""
                            style="width: 180px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>AYENA Adébayo</h5>
                        <p class="text-primary">Orara</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets2/img/team/team-2.jpg')}}" alt=""
                            style="width: 180px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>AROUKA Kossivi</h5>
                        <p class="text-primary">Blaizo</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets2/img/team/team-3.jpg ')}}" alt=""
                            style="width: 180px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>AROUKA Kodjo</h5>
                        <p class="text-primary">Lucra</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets2/img/team/team-4.jpg ')}}" alt=""
                            style="width: 180px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>TCHALLA Kossi</h5>
                        <p class="text-primary">YOU "Griot"</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-3">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets2/img/team/team-5.jpg ')}}" alt=""
                            style="width: 180px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>KINGLO T. Honoré</h5>
                        <p class="text-primary">Honokssi</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets2/img/team/team-6.jpg ')}}" alt=""
                            style="width: 180px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>APEDO M. Kossi</h5>
                        <p class="text-primary">Makinzo</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets2/img/team/team-7.jpg ')}}" alt=""
                            style="width: 180px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>AYENA K. Kossi</h5>
                        <p class="text-primary">Kass</p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets2/img/team/team-8.jpg')}}" alt=""
                            style="width: 180px; height: 150px; object-fit: cover;">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>ALOUFA Kokou</h5>
                        <p class="text-primary">Yakoi</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- End Our Team Section -->

@endsection