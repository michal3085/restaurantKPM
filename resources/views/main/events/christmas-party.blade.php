@extends('_layout')

@section('content')
    <section id="about" class="about" style="height: 90vh; position: relative; padding-top: 250px;">
        <div class="container mb-2" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="about-img">
                        <img src="{{ asset('assets/img/events/events1.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>{{ __('Christmas Party') }}</h3>
                    <ul>
                        <li><i class="bi bi-check-circle"></i>{{ __('Our menu is based on the highest quality products') }}</li>
                        <li><i class="bi bi-check-circle"></i>{{ __('Unique interior, unparalleled design and attention to comfort') }}</li>
                        <li><i class="bi bi-check-circle"></i>{{ __('Our cooks are united by passion and experience') }}</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>


    <section id="drink" class="drink section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="drink-flters">
                        <li data-filter=".filter-drink">{{ __('Menu I') }}</li>
                        <li data-filter=".filter-menu2">{{ __('Menu II') }}</li>
                        <li data-filter=".filter-menu3">{{ __('Menu III') }}</li>
                    </ul>
                </div>
            </div>

            <div class="row drink-container" data-aos="fade-up" data-aos-delay="200">
                {{--DRINKS--}}
                <div class="section-title drink-item filter-drink">
                    <h2>110 PLN {{ __("per person") }}</h2>
                </div>
                <div class="section-title drink-item filter-menu2">
                    <h2>140 PLN {{ __("per person") }}</h2>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                            <div class="text-center">
                                <h3 class="gold-text">{{ __('SOUP') }}</h3> <br>
                                {{ __('Parsley and pear cream with a hint of coconut milk coconut milk') }}
                                <br>
                            </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                            <div class="text-center">
                                <h3 class="gold-text">{{ __('MAIN DISH') }}</h3> <br>
                                {{ __('Cod from the oven') }}
                                <br>
                                {{ __('Potatoes in herbs') }}
                                <br>
                                {{ __('Red cabbage stewed in wine') }}
                            </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                            <div class="text-center">
                                <h3 class="gold-text">{{ __('COLD PLATE') }}</h3> <br>
                                {{ __('Herring in cream') }}
                                <br>
                                {{ __('Vegetable salad') }}
                                <br>
                                {{ __('White fish jelly with vegetables') }}
                                <br>
                                {{ __('Stuffed eggs') }}
                            </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('DESSERT') }}</h3> <br>
                            {{ __('Homemade cheesecake') }}
                            <br>
                            {{ __('Poppyseed') }}
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('DRINKS (UNLIMITED)') }}</h3> <br>
                            {{ __('Coffee and tea') }}
                            <br>
                            {{ __('Still water with lemon') }}
                            <br>
                            Sok jabłkowy i pomarańczowy
                        </div>
                    </div>
                </div>

                {{--END SPARKLING WINE--}}

                {{--     MENU II      --}}
                <div class="col-lg-4 drink-item filter-menu2">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('SOUP') }}</h3> <br>
                            Barszcz z pasztecikiem
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-menu2">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('MAIN DISH') }}</h3> <br>
                            Dorsz z tempurze
                            <br>
                            Puree z groszku i kremu fresh
                            <br>
                            Pieczone warzywa
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-menu2">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('COLD PLATE') }}</h3> <br>
                            Mix pierogów w sosie grzybowym
                            <br>
                            Terrina z ryby
                            <br>
                            Sos tatarski
                            <br>
                            Śledź korzenny
                            <br>
                            Faszerowana rolada z włoskiego chleba tramezini
                            <br>
                            Sałatka śledziowa
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-menu2">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('DESSERT') }}</h3> <br>
                            Sernik z pomarańczową skórką
                            <br>
                            Makowiec z bakaliami
                            <br>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-menu2">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('DRINKS (UNLIMITED)') }}</h3> <br>
                            Woda niegazowana z cytryną
                            <br>
                            Sok jabłkowy i pomarańczowy
                        </div>
                    </div>
                </div>
                {{--     MENU II END  --}}
            </div>

        </div>
    </section>
@endsection