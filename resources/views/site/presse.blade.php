@extends('layouts.template2')
@section('title')
Presse
@endsection
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">La presse parle de nous</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="/index">Accueil</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Presse</li>
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
            <h2 class="mb-5 text-primary">La Presse Parle de Nous</h2>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4 position-relative">
                        <img class="img-fluid" src="{{asset('assets2/img/1.jpg')}}" alt="">
                    </div>
                    <h4 class="mb-2">AFUMA, ACROBATES DU CIEL...</h4>
                    <a href="https://www.helloasso.com/associations/reseau-afrique-37/collectes/acrobates-du-ciel-et-des-mots" target="_blank" rel="noopener noreferrer">
                    <h6 class="mb-3 text-primary">RESEAU AFRIQUE 37</h6>
                    </a>
                    <a class="btn-slide mt-2" href="https://www.helloasso.com/associations/reseau-afrique-37/collectes/acrobates-du-ciel-et-des-mots" target="blanck"><i class="fa fa-arrow-right"></i><span>Lire L'article</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s"
                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('assets2/img/00.jpg')}}" alt="">
                    </div>
                    <h4 class="mb-2">Les échasseurs togolais sont les plus perchés...</h4>
                    <a href="https://www.dhnet.be/regions/namur/2023/05/19/namur-en-mai-les-echasseurs-togolais-sont-les-plus-perches-video-NGZYG4YSGZG5JNPKW5H6WD4AOY" target="_blank" rel="noopener noreferrer">
                    <h6 class="mb-3 text-primary">DH net sport</h6>
                    </a>
                    <a class="btn-slide mt-2" href="https://www.dhnet.be/regions/namur/2023/05/19/namur-en-mai-les-echasseurs-togolais-sont-les-plus-perches-video-NGZYG4YSGZG5JNPKW5H6WD4AOY" target="blanck"><i class="fa fa-arrow-right"></i><span>Lire L'article</span></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.7s"
                style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="{{asset('assets2/img/echassiers-ecole.jpg')}}" alt="echassiersdu-togo-à-ecole">
                    </div>
                    <h4 class="mb-2">Les échassiers du Togo à l'école...</h4>
                    <a href="https://www.lanouvellerepublique.fr/indre-et-loire/commune/saint-branchs/les-echassiers-du-togo-a-l-ecole" target="_blank" rel="noopener noreferrer">
                    <h6 class="mb-3 text-primary">La Nouvelle République</h6>
                    </a>
                    <a class="btn-slide mt-2" href="https://www.lanouvellerepublique.fr/indre-et-loire/commune/saint-branchs/les-echassiers-du-togo-a-l-ecole" target="blanck"><i class="fa fa-arrow-right"></i><span>Lire L'article</span></a>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s"
                style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4 position-relative">
                        <img class="img-fluid" src="{{asset('assets2/img/les_echassiers_du_togo_4.jpg')}}" alt="les_echassiers_du_togo">
                    </div>
                    <h4 class="mb-2 ">Afuma les echassiers du Togo - La Déferlante...</h4>
                    <a href="https://www.wik-nantes.fr/latranchesurmer/scene/afuma-les-echassiers-du-togo-la-deferlante" target="_blank" rel="noopener noreferrer">
                    <h6 class="mb-3 text-primary">Mairie de la Tranche sur Mer</h6>
                    </a>
                    <a class="btn-slide mt-2" href="https://www.wik-nantes.fr/latranchesurmer/scene/afuma-les-echassiers-du-togo-la-deferlante" target="blanck"><i class="fa fa-arrow-right"></i><span>Lire L'article</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog end -->

@endsection