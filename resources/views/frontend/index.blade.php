@extends('frontend.main_master')
@section('main')

@section('title')
Home | Aksel Transfert 
@endsection

<!-- banner-area -->
@include('frontend.home_all.home_slide')
<!-- banner-area-end -->

<!-- services-area -->
<!-- services-area -->
<!-- services-area -->
<section class="services-area">
    <div class="container custom-container">
        <div class="row justify-content-center section-title-margin">
            <div class="col-xl-12 text-center">
                <span class="sub-title">Nos Services</span>
                <h2 class="title">Des Solutions de Livraison Adaptées à Vos Besoins</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-12">
                <div class="services__content text-center">
                    <p class="service-description">
                        <strong>Vous êtes une grande surface à la recherche de solutions de livraison fiables et efficaces ?</strong>
                        <br><br>
                        Chez Aksel Transfert, nous offrons des services de livraison sur mesure spécialement conçus pour répondre aux besoins logistiques des grandes surfaces. Notre expertise et notre flotte moderne nous permettent de garantir une livraison sécurisée et ponctuelle de vos marchandises, assurant ainsi une chaîne d'approvisionnement fluide et efficace.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services-area-end -->



<!-- services-area-end -->

<!-- services-area-end -->

<!-- pourquoi-nous-choisir-area -->
<section class="choisir-area">
    <div class="container custom-container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <h2 class="title">Pourquoi Nous Choisir ?</h2>
                <div class="choisir-content">
                    <h3 class="subtitle">Meilleur service</h3>
                    <p>Notre mission est d’attirer et de fidéliser les clients en fournissant les meilleures solutions de livraison de leur catégorie et en favorisant une culture rentable et disciplinée de sécurité, de service et de confiance.</p>
                    
                    <h3 class="subtitle">Réputation</h3>
                    <p>Nous avons établi une forte présence dans l’industrie de la livraison. Nos services primés se forgent une réputation de qualité et d’excellence que peu de gens peuvent rivaliser.</p>
                    
                    <h3 class="subtitle">Sûreté et sécurité</h3>
                    <p>La sécurité de nos employés, de nos clients et du public automobile restera toujours notre priorité dans toutes les politiques, procédures et programmes qui régissent notre entreprise.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- pourquoi-nous-choisir-area-end -->

<!-- contact-area -->
<section class="homeContact homeContact__style__two contact-area-margin">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section__title">
                        <span class="sub-title">07 - Dites bonjour</span>
                        <h2 class="title">Des questions ? N'hésitez pas <br> à nous contacter</h2>
                    </div>
                    <div class="homeContact__content">
                        <p>Vous avez besoin d’assistance ? Notre équipe est disponible pour répondre à toutes vos questions.</p>
                        <h2 class="mail"><a href="mailto:Info@akseltransfert.com">Info@akseltransfert.com</a></h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="homeContact__form">
                        <form action="#">
                            <input type="text" placeholder="Entrez votre nom*">
                            <input type="email" placeholder="Entrez votre e-mail*">
                            <input type="number" placeholder="Entrez votre numéro*">
                            <textarea name="message" placeholder="Entrez votre message*"></textarea>
                            <button type="submit">Envoyer le message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->

@endsection
