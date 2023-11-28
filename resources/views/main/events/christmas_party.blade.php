@extends('_layout')

@section('content')
    <section id="about" class="about" style="height: 90vh; position: relative; padding-top: 320px;">
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

            <div class="section-title">
                <h2>{{ __('Drinks & Alcohol') }}</h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="drink-flters">
                        <li data-filter=".filter-drink">{{ __('Drinks') }}</li>
                    </ul>
                </div>
            </div>

            <div class="row drink-container" data-aos="fade-up" data-aos-delay="200">

                {{--DRINKS--}}

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                            <div class="text-center">
                                <h3>ZESTAW I</h3> <br>
                                Krem z pomidorów z pesto bazyliowym
                                i parmezanem
                                <br>
                                Roladki z piersi z kurczaka ze szpinakiem
                                i oliwkami w sosie włoskim
                                <br>
                                Ziemniaki pieczone z rozmarynem
                                i tymiankiem
                                <br>
                                Bukiet surówek: buraczki z cebulką,
                                marchewka z jabłkiem
                            </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                            <div class="text-center">
                                <h3>ZESTAW I</h3> <br>
                                Krem z pomidorów z pesto bazyliowym
                                i parmezanem
                                <br>
                                Roladki z piersi z kurczaka ze szpinakiem
                                i oliwkami w sosie włoskim
                                <br>
                                Ziemniaki pieczone z rozmarynem
                                i tymiankiem
                                <br>
                                Bukiet surówek: buraczki z cebulką,
                                marchewka z jabłkiem
                            </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                            <div class="text-center">
                                <h3>ZESTAW I</h3> <br>
                                Krem z pomidorów z pesto bazyliowym
                                i parmezanem
                                <br>
                                Roladki z piersi z kurczaka ze szpinakiem
                                i oliwkami w sosie włoskim
                                <br>
                                Ziemniaki pieczone z rozmarynem
                                i tymiankiem
                                <br>
                                Bukiet surówek: buraczki z cebulką,
                                marchewka z jabłkiem
                            </div>
                    </div>
                </div>

                {{--END SPARKLING WINE--}}
            </div>

        </div>
    </section>
@endsection