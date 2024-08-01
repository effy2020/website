@extends('frontend.main_master')
@section('main')

@section('title')
Contact |  Aksel Transfert 
@endsection

 <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb__wrap">
                <div class="container custom-container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-10">
                            <div class="breadcrumb__wrap__content">
                                <h2 class="title">Contactez nous</h2>
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <!--a voir -->
                <div class="breadcrumb__wrap__icon">
                    <ul>
                        <li><img src="assets/img/icons/breadcrumb_icon01.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon02.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon03.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon04.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon05.png" alt=""></li>
                        <li><img src="assets/img/icons/breadcrumb_icon06.png" alt=""></li>
                    </ul>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-map -->
            <div id="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.2354750653953!2d2.36231017545876!3d48.7773946064044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e673ff2396e2fb%3A0x823c7d7e3d14fc06!2s6%20All.%20du%20Jura%2C%2094550%20Chevilly-Larue!5e0!3m2!1sfr!2sfr!4v1720694493899!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>"
                    allowfullscreen loading="lazy"></https:>
            </div>
            <!-- contact-map-end -->

            <!-- contact-area -->
            <div class="contact-area">
                <div class="container">
    <form method="post" action="{{ route('store.message') }}" class="contact__form">
    	@csrf

        <div class="row">
            <div class="col-md-6">
                <input  name="name" type="text" placeholder="Entrez votre nom*">
            </div>
            <div class="col-md-6">
                <input name="email" type="email" placeholder="Entrez votre adresse email*">
            </div>
            <div class="col-md-6">
                <input  name="subject" type="text" placeholder="Entrez votre sujet*">
            </div>
            <div class="col-md-6">
                <input  name="phone" type="text" placeholder="Entrez Votre mobile*">
            </div>
        </div>
        <textarea name="message" id="message" placeholder="Entrez votre message*"></textarea>
        <button type="submit" class="btn">Envoyer</button>
    </form>
                </div>
            </div>
            <!-- contact-area-end -->

            <!-- contact-info-area -->
            <section class="contact-info-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/contact_icon01.png') }}" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">Adresse</h4>
                                    <span>6 Allée Du Jura <br> 94550 Chevilly-Larue</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/contact_icon02.png') }}" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">Telephone mobile</h4>
                                    <span>+ 33761760225</span>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="contact__info">
                                <div class="contact__info__icon">
                                    <img src="{{ asset('frontend/assets/img/icons/contact_icon03.png') }}" alt="">
                                </div>
                                <div class="contact__info__content">
                                    <h4 class="title">Adresse email</h4>
                                    <span>Support@akseltrasfert.com</span>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-info-area-end -->

    

            <!-- contact-area-end -->

        </main>









@endsection