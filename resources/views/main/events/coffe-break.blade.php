@extends('_layout')

@section('content')
    <section id="about" class="about" style="height: 50vh; position: relative; padding-top: 250px;">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <div class="section-title">
                        <p style="font-size: 50px;">{{__('Coffer-Break')}}</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="drink" class="drink section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="drink-flters">
                        <li data-filter=".filter-drink">{{ __('DRY') }}</li>
                        <li data-filter=".filter-menu2">{{ __('BUFET MENU') }}</li>
                    </ul>
                </div>
            </div>

            <div class="row drink-container" data-aos="fade-up" data-aos-delay="200">
                {{--DRINKS--}}
                <div class="section-title drink-item filter-drink">
                    <h2>80 PLN {{ __("per person") }}</h2>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('LUNCH SET')  }} I</h3> <br>
                            {{ __('Cream of tomatoes with basil pesto and parmesan cheese') }}
                            <br>
                            {{ __('Chicken breast rolls with spinach and olives in Italian sauce') }}
                            <br>
                            {{ __('Roasted potatoes with rosemary and thyme') }}
                            <br>
                            {{ __('Bouquet of salads: beets with onions, carrots with apple') }}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('LUNCH SET') }} II</h3> <br>
                            {{ __('Neapolitan soup with croutons') }}
                            <br>
                            {{ __('Pork neck sous vide') }}
                            <br>
                            {{ __('Mashed potatoes') }}
                            <br>
                            {{ __('Coleslaw, beets') }}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('LUNCH SET') }} III</h3> <br>
                            {{ __('Cream of roasted cauliflower with the addition of salsa verde') }}
                            <br>
                            {{ __('Blackened sauteed fish with dill and butter sauce') }}
                            <br>
                            {{ __('Gnocchi') }}
                            <br>
                            {{ __('Cooked vegetables') }}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-drink">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('DESSERT') }}</h3>
                            {{ __('(one to choose) - 18 PLN per person') }}
                            <br>
                            <br>
                            {{ __('Fluffy cheesecake with raspberry jam') }}
                            <br>
                            {{ __('Warm apple pie with ice cream') }}
                            <br>
                            {{ __('Chocolate fondant') }}
                        </div>
                    </div>
                </div>

                {{--     MENU II      --}}
                <div class="col-lg-4 drink-item filter-menu2">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('LUNCH SET') }} I
                                <br>
                                90 PLN / {{ __("per person") }}.
                            </h3> <br>
                            {{ __('Cream of white vegetables') }}
                            <br>
                            {{ __('Herb-crusted neck in its own sauce') }}
                            <br>
                            {{ __('Roasted cod') }}
                            <br>
                            {{ __('Potato quarters baked in herbs') }}
                            <br>
                            {{ __('Rice with curry') }}
                            <br>
                            {{ __('Carrots with apple') }}
                            <br>
                            {{ __('Beets') }}
                            <br>
                            {{ __('Coleslaw') }}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 drink-item filter-menu2">
                    <div class="row">
                        <div class="text-center">
                            <h3 class="gold-text">{{ __('LUNCH SET') }} II
                                <br>
                                110 PLN / {{ __("per person") }}.
                            </h3> <br>
                            {{ __('Roasted cauliflower cream with truffle oil') }}
                            <br>
                            {{ __('Traditional cucumber soup') }}
                            <br>
                            {{ __('Baked chicken leg') }}
                            <br>
                            {{ __('Coated pork chop') }}
                            <br>
                            {{ __('Grilled salmon with lemon-butter sauce') }}
                            <br>
                            {{ __('Potato gratin') }}
                            <br>
                            {{ __('Vegetable pudding') }}
                            <br>
                            {{ __('Roasted yams with curry') }}
                            <br>
                            {{ __('Glazed seasonal vegetables') }}
                            <br>
                            {{ __('Carrots with apple') }}
                        </div>
                    </div>
                </div>
                {{--     MENU II END  --}}
            </div>

        </div>
    </section>
@endsection