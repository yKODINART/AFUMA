@extends('layouts.template2')
@section('title')
Contacts
@endsection
@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Nous contacter</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/">Accueil</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Nous contacter</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <!-- <h1 class="big big-2">Contact</h1> -->
                    <h4 class="mb-4">NOUS CONTACTER</h4>
                    <p>Appelez-nous ou écrivez-nous pour plus d'information</p>
                </div>
            </div>

            <div class="row d-flex contact-info mb-5 ">
                <div class="col-md-6 col-lg-3 d-flex ftco-animate wow fadeInUp" data-wow-delay="0.1s">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                        </div>
                        <p class="text-dark">Adresse:16 Route de la Croisette,71990 Saint Prix en Morvan.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate wow fadeInUp" data-wow-delay="0.3s">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="">
                                <i class="fa fa-phone"></i>
                            </span>
                        </div>
                        <p><a href="tel://+33620193565">Europe: +33620193565</a></p>
                        <p><a href="tel://91818017 22323498">Togo: (+228) 91818017 | 22323498</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate wow fadeInUp" data-wow-delay="0.5s">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="">
                                <i class="fa-regular fa-envelope"></i>
                            </span>
                        </div>
                        <p><a href="mailto:cyclochevo@gmail.com">Europe: contact.eu@afuma.org | cyclochevo@gmail.com</a></p>
                        <p><a href="mailto: afumamedji@gmail.com">Togo: afumamedji@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex ftco-animate wow fadeInUp" data-wow-delay="0.7s">
                    <div class="align-self-stretch box p-4 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="">
                                <i class="fa-regular fa-clock"></i>
                            </span>
                        </div>
                        <p class="text-dark">
                            Heure d'ouverture
                        </p>
                        <p class="text-dark">
                            Tous les jours: 09:00-18:00
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>


<div class="container-xxl py-5">
    <div class="container">
    <ul class="nav nav-pills mb-5" id="pills-tab" role="tablist">
        <li class="nav-item " role="presentation">
            <button class="nav-link active  bg-dark text-white" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Contact Europe</button>
        </li>
        <li class="nav-item " role="presentation">
            <button class="nav-link bg-dark text-white ms-5" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Contact Togo</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h6 class="fw-bold text-primary text-uppercase mb-3">Nous Ecrire depuis l'Europe</h6>
                    <h3 class="mb-4">Pro ou particulier, Envie d'une collaboration ou d'une info? Envoyez nous un
                        message</h3>
                        <form action="{{route('sendMailEurope')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Votre Nom" required>
                                    <label for="name">Votre Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                                    <label for="email">Votre Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="objet" id="subject" placeholder="Votre Objet" required>
                                    <label for="subject">Votre Objet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Laissez votre message ici" id="message" required
                                        style="height: 200px"></textarea>
                                    <label for="message">Votre Message</label>
                                </div>
                            </div>
                            <div class="col-12" style=" display: flex; justify-content: center;">
                                <button class="btn btn-primary w-25 py-2 px-3" type="submit" name="send">
                                    Envoyer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43560.9810847967!2d3.9707032193464586!3d46.970308530137125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f226fa5174f5d1%3A0xdc29a959043cd3c6!2s71990%20Saint-Prix%2C%20France!5e0!3m2!1sfr!2stg!4v1684164646380!5m2!1sfr!2stg"
                            width="1000" height="515" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

        </div>

        <!-- Contact Togo -->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

        <div class="row g-5">
                <div class="col-lg-6 " data-wow-delay="0.1s">
                    <h6 class="fw-bold text-primary text-uppercase mb-3">Nous Ecrire depuis le Togo</h6>
                    <h3 class="mb-4">Pro ou particulier, Envie d'une collaboration ou d'une info? Envoyez nous un
                        message</h3>
                        <form action="{{route('sendMailTogo')}}" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Votre Nom" required>
                                    <label for="name">Votre Nom</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                                    <label for="email">Votre Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="objet" id="subject" placeholder="Votre Objet" required>
                                    <label for="subject">Votre Objet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="message" placeholder="Laissez votre message ici" id="message"
                                        style="height: 200px" required></textarea>
                                    <label for="message">Votre Message</label>
                                </div>
                            </div>
                            <div class="col-12" style=" display: flex; justify-content: center;">
                                <button class="btn btn-primary w-25 py-2 px-3" type="submit">
                                    Envoyer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31716.22862563619!2d0.8956001682141859!3d6.454504951144544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1026b57fb216ed05%3A0xd105dc5bc74777e8!2sAssahoun!5e0!3m2!1sfr!2stg!4v1684499710414!5m2!1sfr!2stg" width="1000" height="515" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</div>




@endsection