@extends('frontend.main_master')
@section('main')

@section('title')
About | Aksel Livraison
@endsection

<main>

    <!-- breadcrumb-area -->
    <!-- <section class="breadcrumb__wrap">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="breadcrumb__wrap__content">
                        <h4 class="title"></h4>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- breadcrumb-area-end -->

    <!-- About Us Section -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="about-title mb-4">À PROPOS DE NOTRE ENTREPRISE</h2>
                    <p class="mb-4">
                    La société AKSEL TRANSFERT a été créée en 2022 et s'est rapidement spécialisée dans la livraison dédiée aux grandes surfaces. Notre engagement envers l'excellence opérationnelle et la satisfaction du client est le moteur de notre croissance continue.
                    </p>
                    <p class="mb-4">
                    Chez AKSEL TRANSFERT, nous comprenons l'importance cruciale d'une logistique efficace pour le succès des grandes surfaces. C'est pourquoi nous nous efforçons de fournir des solutions de livraison personnalisées, adaptées aux besoins uniques de chaque client. Que ce soit pour des livraisons locales, régionales ou nationales, notre flotte moderne et notre équipe dévouée sont prêtes à relever tous les défis.
                    </p>
                    <p class="mb-4">
                    Sous la direction éclairée de notre gérant, M. Rabah Mameri, AKSEL TRANSFERT est synonyme de fiabilité, d'efficacité et d'intégrité dans le secteur de la livraison. Notre engagement envers l'innovation constante et la formation continue de notre personnel garantit que nous restons à la pointe de l'industrie.
                    </p>
                    <p class="mb-4">
                    Nous sommes fiers de notre équipe professionnelle et dévouée qui travaille sans relâche pour assurer la réussite de chaque mission qui nous est confiée. Chez AKSEL TRANSFERT, nous considérons nos clients comme des partenaires, et chaque livraison comme une promesse de qualité et de service exceptionnel.
                    </p>
                    
                    <!-- Nouvelle Section -->
                    <section class="py-5">
    <h3 class="mt-4 mb-4 text-center">Découvrez nos services</h3>
    <div class="d-flex justify-content-between mx-auto" style="max-width: 800px;">
        <div class="text-center mb-4" style="flex: 1; margin: 0 15px;">
            <img src="https://via.placeholder.com/150" alt="Service 1" class="img-fluid rounded-circle mb-2" style="width: 100px; height: 100px;">
            <h5>Livraison de Marchandises</h5>
            <p>Livraison sécurisée et rapide de vos marchandises entre différents points de vente.</p>
        </div>
        <div class="text-center mb-4" style="flex: 1; margin: 0 15px;">
            <img src="https://via.placeholder.com/150" alt="Service 2" class="img-fluid rounded-circle mb-2" style="width: 100px; height: 100px;">
            <h5>Logistique Dédiée</h5>
            <p>Solutions logistiques sur mesure pour les grandes surfaces.</p>
        </div>
    </div>
</section>



                    <!-- Nouvelle Section des Valeurs -->
                    <section class="py-5 bg-light">
                        <h3 class="mt-4 mb-6 text-center">Nos Valeurs</h3>
                        <div class="row">
                            <div class="col-md-4 text-center mb-4">
                                <img src="{{ asset('frontend/assets/img/icons/services_icon03.png') }}" alt="Valeur 1" class="img-fluid mb-2" style="width: 80px; height: 80px;">
                                <p><strong>Passion</strong> - Nous aimons ce que nous faisons et abordons chaque mission avec enthousiasme.</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <img src="{{ asset('frontend/assets/img/icons/services_icon02.png') }}" alt="Valeur 2" class="img-fluid mb-2" style="width: 80px; height: 80px;">
                                <p><strong>Motivation</strong> - Nous sommes motivés à contribuer au succès de chaque mission.</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <img src="{{ asset('frontend/assets/img/icons/services_icon01.png') }}" alt="Valeur 3" class="img-fluid mb-2" style="width: 80px; height: 80px;">
                                <p><strong>Professionnalisme</strong> - Nous faisons preuve de sérieux et de professionnalisme.</p>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

     
</main>

@endsection
